<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
// use App\Models\RegisterModel;
// use DB;
use App\Models\Product;

class RegisterController extends Controller
{
    public function index()
    {
    	 $users = DB::table('register_form')->latest()->get();

        return view('frontend.register.index', ['users' => $users]);
    }

   	public function createRegister()
   	{
   		return view('frontend.registers.form');
   	}


   	//
   	public function storeRegister(Request $request)
   	{
   		request()->validate([
   			'name' 		=> 'required',
   			'en_name' 	=> 'required',
   			'gender'	=> 'required',
   			'national'	=> 'required',
   			'id_number'	=> 'required|max:9|min:9',
   			'dob'		=> 'required'
   		]);
   		RegisterModel::create($request->all());
   		return redirect()->route('home')
                        ->with('success','Product created successfully.');
   	}

    
    

}
