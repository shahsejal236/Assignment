<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB; 
use Illuminate\Http\Request;

use Hash;
use Session;
use Alert;

class userController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function manage_user()
    {
        //
          	
        $data = DB::table('employee')->paginate(10);
         //$data= DB::table('employee')->get();   
         return view('backend.manage_user',['data'=>$data]); // user::all()  
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function signup()
    {
        //
        return view('frontend.signup');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

     public function store(Request $request) {
     
        DB::table('employee')->insert([
            'fname' => $request->fname,
            'lname' => $request->lname,
            'gender' => $request->gender,
            'phone_no' => $request->phone_no,
            'age' => $request->age,
            'address' => $request->address,
            'email' => $request->email,
            'password' => $request->password
        ]);
        
       
        Alert::success('Success', 'User Register Successfully');
        return redirect('/login');
    }
  


    public function userlogin()
    {

        return view('frontend.login');
    }

    public function login_check(Request $request)

    {
        
       $email=$request->email;
       $password=$request->password;

       $data = DB::table('employee')->get()->where('email','=',$email)->first();

       if($data){
            if(Hash::check($password,$data->password)){
                Alert::success('Congrats! Logged in successfully...');
                return redirect('/signup');
            }
            else{
                Alert::error('Ops! Login Failed','Wrong Password...');
                return redirect()->back();
            }
       }
       else{
            Alert::error('Ops! Login Failed','Wrong Username...');
            return redirect()->back();
       }
    }
   
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }
    public function user(user $user)
    {
  
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //

        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

      
        DB::table('employee')->where('id', $id)->delete();
        Alert::success('Data Deleted Successfully');
        return redirect('manage_user')->with('success','Delete Succeess');

        
		


    }
   
}
