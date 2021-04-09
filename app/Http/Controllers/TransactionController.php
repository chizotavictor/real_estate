<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Package;
use App\Deposit;
use App\Transaction;
use App\DepositProof;
use App\TradeIncome;
use App\Withdrawal;
use App\Referral;

use App\Mail\DepositRequestMail;
use App\Mail\DepositConfirm;
use App\Mail\InterestAlert;

class TransactionController extends Controller
{
    public function deposit(Request $request)
    {
        $this->validate($request, [
            'amount' => 'required',
            'plan_id' => 'required'
        ]);

        $plan = Package::find($request->plan_id);
        if(is_null($plan)) {
            $request->session()->flash('danger', 'Invalid Package Selected!');
            return redirect()->back();
        }

        $amount = (float) $request->amount;
        $lbound = (float) $plan->start; $ubound = (float) $plan->end;

        $user_id = auth()->user()->id;
        $start_date = time() . '';
        $end_date = strtotime("+".$plan->duration." day", $start_date);
        $due_amount = $amount + ( $amount * $plan->rate );

        if($lbound >= $amount || $amount <= $ubound) {
            $deposit = Deposit::create([
                'amount' => $amount,
                'package_id' => $plan->id,
                'user_id' =>  $user_id,
                'start_date' => $start_date,
                'due_date' => $end_date,
                'due_amount' => $due_amount,
                'method' => $request->method
            ]);
            Transaction::create([
                'user_id' => $user_id,
                'deposit_id' =>  $deposit->id,
                'type' => 'Deposit'
            ]);
            
            try {
                $email = auth()->user()->email;
                \Mail::to($email)->send(new DepositRequestMail($username, $message));
            } catch(\Exception $e) {
                \Log::alert("Deposit Request mail not sent!");
            }

            $request->session()->flash('success', 'Deposit initiated! Please make your payment.');
            return redirect()->route('payment', ['id' => $deposit->id]);
        } else {
            $request->session()->flash('danger', 'Please your investment amount must fall within the selected Plan range!');
            return redirect()->back();
        }
    }

    public function payment($id, Request $request)
    {
        
        $user_id = $request->user_id ??  auth()->user()->id;
        $deposit = Deposit::where(['user_id' => $user_id, 'id' => $id])
            ->with(['plan', 'proofs'])
            ->get()
            ->first();
        if(is_null($deposit))
            {
                return redirect()->back();
            }
        if($deposit->status == "Completed") {
            $request->session()->flash('success', 'Payment already completed');
            return redirect()->route('home');
        }
        return view('payment')->with(['deposit' => $deposit]);
    }

    

    public function deposits(Request $request)
    {
        return view('deposits');
    }

    public function proof(Request $request)
    {
        $this->validate($request, [
            'deposit_id' => 'required',
            'transaction_code' => 'required'
        ]);

        $transaction = Transaction::where(['deposit_id' => $request->deposit_id, 'type' => 'Deposit'])
            ->get()
            ->first();
        if(is_null($transaction)) {
            $request->session()->flash('danger', "Invalid deposit record selected!");
            return redirect()->back();
        }
        
        
        try {
      
            $deposit = new DepositProof;
            $deposit->user_id = auth()->user()->id;
            $deposit->deposit_id = $request->deposit_id;
            $deposit->transaction_code = $request->transaction_code;
            $deposit->save();
            
            $request->session()->flash('success', "Deposit proof added successfully!");

        } catch(\Exception $e) {
            $request->session()->flash('success', "Deposit proof did not submit. Please contact support!");
        }

        
        return redirect()->back();
    }
    
    public function depositsHistory(Request $request)
    {
        $deposits = Deposit::where(['user_id' => auth()->user()->id])
            ->with(['plan', 'proofs'])
            ->paginate(15);
        return view('deposit-history')->with(['deposits' => $deposits]);
    }

    public function adminDeposits(Request $request)
    {
        if(auth()->user()->is_admin) {
            $deposits = Deposit::with(['user', 'plan', 'proofs', 'trx'])
                ->orderBy('id', 'DESC')->paginate(15);
            // return $deposits;
            return view('admin-deposits')->with(['deposits' => $deposits]);
        } else {
            abort(404);
        }
    }
    
    public function adminConfirmDeposits(Request $request) {
        if(auth()->user()->is_admin) {
            $deposit = Deposit::where(['id' => $request->id])
                ->update(['status' => $request->status]);
            if($deposit) {
                $d = Deposit::find($request->id);
                $user_id = $d->user_id;
              
                $referral = Referral::where(['user_id' => $user_id, 'has_injected' => 0])
                    ->get()
                    ->first();  
                    if(!is_null($referral)) {
                        $referrer_id = $referral->referrer_id;
                        $last_approved_deposit = Deposit::where(['user_id' => $referral->referral_id, 'status' => 'Approved'])
                            ->get()
                            ->first(); 
                        if(!is_null($last_approved_deposit)) {
                            $amount = $d->amount;
                            $bonus = $amount * 0.10;
                            $org_bonus = $bonus + $last_approved_deposit->due_amount;
                            Deposit::find($last_approved_deposit->id)
                                ->update(['due_amount' => $org_bonus]);
                            Referral::find($referral->id)
                                ->update(['has_injected' => 1]);
                        }
                    }
               
                 // Send Deposit Confirmation Email
                $dep_user = \App\User::find($user_id);
                $dep_name = strtoupper($dep_user->name);
                \Mail::to($dep_user->email)->send(new DepositConfirm($dep_name, $d->amount));
                
                // check for approved deposit 
                $request->session()->flash('success', 'Deposit status: '. $request->status);
            }
            
            return redirect()->back();
        } else {
            abort(404);
        }
    }
    
    public function interest(Request $request) {
        // wget -q -O - https://motasko.com/cron-interest >/dev/null 2>&1
        
        $deposit = Deposit::where([ 'status' => 'Active'])
                ->with(['plan'])
                ->get();
                
        $result = [];
        
        foreach($deposit as $dep) {
            $c_interest =  $dep->plan->daily_rate * $dep->amount;
            // $cap = ($d->plan->rate * $d->amount) * $d->plan->duration;
            
            
            $due_time = $dep->due_date;
            
            $now = time();
            
            if($due_time > $now) {
                array_push($result, (object) [
                    'user_id' => $dep->user_id,
                    'amount' => $c_interest,
                    'deposit_id' => $dep->id
                ]);
                
                TradeIncome::create([
                    'user_id' => $dep->user_id,
                    'amount' => $c_interest,
                    'deposit_id' => $dep->id
                ]);
                
                try {
                    $u = \App\User::find($dep->user_id);
                    $plan =  "$" . $dep->amount . " deposit of plan: " . $dep->plan->name . "";
                    \Mail::to($u->email)->send(new InterestAlert(strtoupper($u->name), $c_interest, $plan));
                } catch (\Exception $e) {
                    $r = [];
                }
            } 
        
            
        }
                
        // foreach($deposit as $dep) {
        //     $interest = $dep->due_amount / $dep->plan->duration;
            
        //     $intrs = floor($interest);
            
        //     $due_time = $dep->due_date;
            
        //     $now = time();
            
        //     if($due_time > $now) {
        //         array_push($result, (object) [
        //             'user_id' => $dep->user_id,
        //             'amount' => $intrs,
        //             'deposit_id' => $dep->id
        //         ]);
                
        //         TradeIncome::create([
        //             'user_id' => $dep->user_id,
        //             'amount' => $intrs,
        //             'deposit_id' => $dep->id
        //         ]);
                
        //         try {
        //             $u = \App\User::find($dep->user_id);
        //             \Mail::to($u->email)->send(new InterestAlert(strtoupper($u->name), $intrs));
        //         } catch (\Exception $e) {
        //             $r = [];
        //         }
        //     } 
            
        // }
        
        return $result;
    }

    public function all(Request $request)
    {
        $trxs = Transaction::where(['user_id' => auth()->user()->id])
            ->with(['deposit', 'deposit.plan', 'deposit.proofs'])
            ->paginate(15);
        return view('transaction')->with(['trxs' => $trxs]);
    }

    public function income(Request $request)
    {
        $trxs = TradeIncome::where(['user_id' => auth()->user()->id])
            ->with(['deposit', 'deposit.plan'])
            ->paginate(15);
        return view('income')->with(['trxs' => $trxs]);
    } 
    
    
    public function withdrawalRequests(Request $request)
    {
        $deposits = [];
        $deps = Deposit::where('user_id', auth()->user()->id)
            // ->where('due_date', '<', time())
            ->where('status', 'Active')
            ->get();
        foreach($deps as $d) {
            if(time() > $d->due_date)
                array_push($deposits, $d);
        }
        $ws = Withdrawal::where(['user_id' => auth()->user()->id])
            ->orderBy('id', 'DESC')
            ->get();
            // return $ws;
        return view('withdrawal-request')->with(['deposits' => $deposits, 'ws' => $ws]);
    }
    
    public function withdrawalRequest(Request $request)
    {
        $this->validate($request, [
            'deposit_id' => 'required|integer']);
        $deposit = Deposit::find($request->deposit_id);
        
        $user = \App\User::find(auth()->user()->id);
        
        $wallet = $user->btc_wallet;
        if (!isset($wallet)) {
            $request->session()->flash('error', "Please set your bitcoin address before requesting for withdrawal!");
                return redirect()->back();
        }
        
        $existPending = Withdrawal::where(['user_id' => auth()->user()->id, 'status' => 'Pending'])
            ->get();
        if(sizeof($existPending) > 0)   
            {
                $request->session()->flash('error', "You already have a pending withdrawal request!");
                return redirect()->back();
            }
        
        if(is_null($deposit)) {
            $request->session()->flash('error', "Invalid deposit record selected!");
            return redirect()->back();
        } else {
            Withdrawal::create([
                    'user_id' => auth()->user()->id,
                    'amount' => $deposit->due_amount,
                    'status' => 'Pending'
                ]);
            $request->session()->flash('success', "Your withdrawal request initiated successfully!");
            return redirect()->back();
        }
    }
    
    public function adminWithdrawalRequest(Request $request)
    {
        if(auth()->user()->is_admin) {
            $ws = Withdrawal::with(['user'])
                ->orderBy('id', 'DESC')
                ->get();
                

            return view('admin-withdrawal-request')->with(['ws' => $ws]);
        } else {
            abort(404);
        }
    }
    
    public function adminManageWithdrawal(Request $request)
    {
        if(auth()->user()->is_admin) {
            $id = $request->id;
            $status = $request->status;
            Withdrawal::where(['id' => $id])
                ->update(['status' => $status]);
                
            if($request->status == "Pending") {
                $rec = Withdrawal::find($id);
                $user_id = $rec->user_id;
                Deposit::where(['user_id' => $user_id, 'due_amount' => $rec->amount])
                    ->update(['status' => 'Active']);
                Withdrawal::find($id)->update(['status' => 'Pending']);
            } else {
                $rec = Withdrawal::find($id);
                $user_id = $rec->user_id;
                Deposit::where(['user_id' => $user_id, 'due_amount' => $rec->amount])
                    ->update(['status' => 'Completed']);
                Withdrawal::find($id)->update(['status' => 'Approved']);
                
                try {
                    $user = \App\User::find($user_id);
                    $amount = number_format($rec->amount, 2, '.', ',');
                    
                    $bitcoinInfo = $this->getCryptoCurrencyInformation();
        
                    if(!$bitcoinInfo) {
                        $bitcoinInfo = 47000.80;
                    } 
            
                    $xrate = $bitcoinInfo;
        
                    $amount_btc = $rec->amount / $xrate;
                    $amount_btc = number_format($amount_btc, 6, '.', ', ');
                    \Mail::to($user->email)->send( new \App\Mail\WithdrawalMessage(strtoupper($user->name), $amount, $amount_btc) );
                } catch(\Exception $e) {
                    \Log::error("Withdrawal mail not sent...");
                }
            }
            
                
            
            // if($request->status == "Approved") {
            //     $rec = Withdrawal::find($id);
            //     $user_id = $rec->user_id;
            //     Deposit::where(['user_id' => $user_id, 'status' => ])
            //         ->update(['status' => 'Completed']);
            // }
            
           
            
            $request->session()->flash('success', "Selected withdrawal request set to $status .");
            return redirect()->back();
            
        } else {
            abort(404);
        }
    }
    
    private function getCryptoCurrencyInformation(){

        $cURLConnection = curl_init();

        curl_setopt($cURLConnection, CURLOPT_URL, "https://api.coingate.com/v2/rates/merchant/BTC/USD");
        curl_setopt($cURLConnection, CURLOPT_RETURNTRANSFER, true);
        
        $rates = curl_exec($cURLConnection);
        curl_close($cURLConnection);
        

        return $rates;
            
    }
}
