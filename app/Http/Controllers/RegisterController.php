<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RegisterModel;
use DB;

class RegisterController extends Controller
{
    //
    public function index()
    {
    	 $users = DB::table('register_form')->get();

        return view('register.index', ['users' => $users]);
    }

   	public function create()
   	{
   		return view('register.form');
   	}


   	//
   	public function store(Request $request)
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

   		return redirect()->route('index')
                        ->with('success','Product created successfully.');
   	}
}
