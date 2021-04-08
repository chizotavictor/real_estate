<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Property;

class PropertyController extends Controller
{
    public function index(Request $request)
    {
        $user_id = auth()->user()->id;
        $properties = Property::where(['user_id' => $user_id])
            ->paginate(15);
        return view('properties')->with(['properties' => $properties]);
    }

    public function add(Request $request)
    {
        return view('add-property');
    }

    public function addSubmit(Request $request)
    {
        $this->validate($request, [
            "name" => 'required|min:5',
            "description" => 'required',
            "purpose" => 'required',
            "amount" => 'required|integer',
            "yearly_tax_rate" => 'numeric',
            "address" => 'required',
            "city" => 'required',
            "country" => 'required',
            "rooms" => 'required',
            "bedrooms" => 'required',
            "bathrooms" => 'required',
            "available_from" => 'required',
            "floors" => 'required',
            "year_built" => 'required',
            "image_1" => 'required'
        ]);
        
        $data = $request->all();

        if($request->hasFile('image_1')) {
            $data['image_1'] = $this->uploadFile($request, 'image_1');
        }

        if($request->hasFile('image_2')) {
            $data['image_2'] = $this->uploadFile($request, 'image_2');
        }

        if($request->hasFile('image_3')) {
            $data['image_3'] = $this->uploadFile($request, 'image_3');
        }

        if($request->hasFile('image_4')) {
            $data['image_4'] = $this->uploadFile($request, 'image_4');
        }

        if($request->hasFile('image_5')) {
            $data['image_5'] = $this->uploadFile($request, 'image_5');
        }

        // try {
            $data['user_id'] = auth()->user()->id;
            
            if(auth()->user()->is_admin == 1) {
                $data['status'] =  "Approved";
                $created = Property::create($data);
                $request->session()->flash('success', "Property added successfully.");
            } else {
                $request->session()->flash('success', "Property added successfully. Please your property is currently on pending - Our compliance team are currently supervising it.");
            }
          
            
        // } catch(\Exception $e) {
        //     $request->session()->flash('error', "Error occurred while adding property. Please contact support!");
        // }
        
        return redirect()->back();
    }

    public function uploadFile(Request $request, $request_key_name)
    {
        $fileName = time().'._'. rand(56464, 99999999) .'.'.$request[$request_key_name]->extension();  
        $request[$request_key_name]->move(public_path('uploads'), $fileName);
        return $fileName;
    }
}
