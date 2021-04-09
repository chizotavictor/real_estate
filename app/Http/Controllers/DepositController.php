<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DepositController extends Controller
{
    public function sendVerificationRequest(Request $request)
    {
        $this->validate($request, [
            'method' => 'required|min:5',
            'amount' => 'required|integer',
            'hash'   => 'required|string|min:15'
        ]);
        $data = $request->only(['method', 'amount', 'hash']); $data['user_id'] = auth()->user()->id;
        try {
            Deposit::create($data);
            $request->session()->flash('success', "Deposit verification request sent successfully!");
        } catch (\Exception $th) {
            $request->session()->flash('danger', "Error occurred while sending deposit verification request!");
        }
        return redirect()->back();
    }

    public function updateVerificationState(Request $request)
    {
        $this->validate($request, [
            'user_id' => 'required|integer',
            'status'  => 'required|string'
        ]);
        $status = $request->status;
        Deposit::where(['user_id' => $request->user_id])
            ->update([
                'status' => $status
            ]);
        $request->session()->flash('success', "Deposit verification state set to $status!");
        return redirect()->back();
    }
}
