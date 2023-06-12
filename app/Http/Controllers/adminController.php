<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB; 
use Illuminate\Http\Request;


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
		$aname=$request->aname;
		$password=$request->password;
		//$data= DB::table('employee')->get();   

		
		$data = DB::table('admins')->get()->where('email','=',$email)->first();
		if($data)
		
			{     //=====session start===//
				
				session()->put('email',$data->email);
				session()->put('id',$data->id);
				session()->put('aname',$data->aname);
			
				Alert::success('Congrats', 'You\'ve Successfully Logined');
				return redirect('/index');
			}
			else
			{
				Alert::error('Login Failed', 'Wrong Password');
				return redirect()->back();
			}
		
		
    }

	public function adminlogout()
    {		
				//Session CLose
				session()->pull('email');
				session()->pull('id');
				//session()->pull('aname');
				Alert::success('Congrats', 'You\'ve Successfully Logout');
				return redirect('/adminlogin');			
    }


}
