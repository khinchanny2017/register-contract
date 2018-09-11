<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\RegisterModel;
use DB;

class RegisterController extends Controller
{
    public function index()
    {
    	 $users = DB::table('register_form')->latest()->get();

        return view('frontend.register.index', ['users' => $users]);
    }

   	public function create()
   	{
   		return view('frontend.registers.form');
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
        dd($request->all()); exit();
   		return redirect()->route('index')
                        ->with('success','Product created successfully.');
   	}

    // function show
    public function show()
    {
      $users = DB::table('register_form')->get();

        return view('frontend.register.show', ['users' => $users]);
    }
}