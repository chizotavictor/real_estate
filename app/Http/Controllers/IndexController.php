<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Property;
use App\Mail\ExpressionInterest;

class IndexController extends Controller
{
    public function rent(Request $request)
    {       
        $properties = Property::where(['purpose' => 'RENT', 'status' => 'Approved'])
            ->paginate(15);    
        return view('rent')->with(['properties' => $properties, 'count' => sizeof($properties)]);
    }

    public function buy(Request $request)
    {       
        $properties = Property::where(['purpose' => 'SELL', 'status' => 'Approved'])
            ->paginate(15);    
        return view('buy')->with(['properties' => $properties, 'count' => sizeof($properties)]);
    }

    public function description($id, Request $request)
    {
        $property = Property::find($id);
        if(is_null($property)) {
            abort(404);
        }
        return view('property-description')->with(['property'=> $property]);
    }

    public function interest(Request $request)
    {
        $data = $request->all();

        if(\Auth::check()) {
            $data['user_id'] = auth()->user()->id;
        }

        try {
            \App\Interest::create($data);
            $admins = \App\User::where(['is_admin' => 1])
                ->get();

            foreach ($admins as $admin ) {
                \Mail::to($admin)->send(new ExpressionInterest($data));
            }     
            $request->session()->flash('success', "Your order expression form has been sent successfully!");
        } catch (\Throwable $th) {
            $request->session()->flash('danger', "Your order expression was not sent. Please contact our support agent.");
        }
        return redirect()->back();
    }
}
