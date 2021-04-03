<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Property;

class IndexController extends Controller
{
    public function rent(Request $request)
    {
        $user_id = auth()->user()->id;
        $properties = Property::where(['purpose' => 'RENT', 'status' => 'Approved'])
            ->paginate(15);
        
        $lst = Property::where(['user_id' => $user_id])->get();
        return view('rent')->with(['properties' => $properties, 'count' => sizeof($lst)]);
    }
}
