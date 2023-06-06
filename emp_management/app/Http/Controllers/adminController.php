<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\admin;

use Hash;
use session;
use Alert;

class adminController extends Controller
{
    //

	

    public function login()
    {
        return view('backend.login');
    }

	public function adminlogincheck(Request $request)
    {
		$email=$request->email;
		$password=$request->password;
		
		$data=admin::where('email','=',$email)->first();
		if($data)
		{
			if(Hash::check($password,$data->password))
			{     //=====session start===//
				session()->put('email',$data->email);
				session()->put('id',$data->id);
				session()->put('name',$data->name);
				Alert::success('Congrats', 'You\'ve Successfully Logined');
				return redirect('/index');
			}
			else
			{
				Alert::error('Login Failed', 'Wrong Password');
				return redirect()->back();
			}
		}
		else
		{
				Alert::error('Login Failed', 'Wrong Username');
				return redirect()->back();
		}
    }

	public function adminlogout()
    {		
				//Session CLose
				session()->pull('email');
				session()->pull('id');
				session()->pull('name');
				Alert::success('Congrats', 'You\'ve Successfully Logout');
				return redirect('/adminlogin');			
    }
}
