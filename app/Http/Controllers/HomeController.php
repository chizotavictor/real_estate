<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home')->with([
            'getTotalPostedProperty' => $this->getTotalPostedProperty(),
            'getTotalSoldProperty' => $this->getTotalSoldProperty()
        ]);
    }

    public function getTotalPostedProperty() 
    {
        $user_id = auth()->user()->id;
        $properties = \App\Property::where(['user_id' => $user_id])
            ->get();
        return sizeof($properties);
    }

    public function getTotalSoldProperty() 
    {
        $user_id = auth()->user()->id;
        $properties = \App\Property::where(['user_id' => $user_id, 'purpose' => 'SELL', 'status' => 'Sold'])
            ->get();
        return sizeof($properties);
    }

    public function logout()
    {
        \Auth::logout();
        return redirect()->route('login');
    }
}
