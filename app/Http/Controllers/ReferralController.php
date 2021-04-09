<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Referral;

class ReferralController extends Controller
{
    public function index(Request $request)
    {
        $referrals = Referral::where(['referral_id' => auth()->user()->id])
            ->with(['referral'])
            ->paginate(15);
         return view('referrals')->with(['refs' => $referrals]);
    }
}
