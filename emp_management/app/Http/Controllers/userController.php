<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\welcomemail;
use App\Models\user;

use Mail;
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
         $data=user::paginate();  	
         return view('backend.manage_user',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data=new user;
        $name=$data->name=$request->name;
        $email= $data->email=$request->email;
        $pass= $data->pass=$request->pass;
        $data->pass=Hash::make($request->pass);
        $data->mobile=$request->mobile;
        $data->file="abc";
         
        // image upload
        $file=$request->file('file');		
        $filename=time().'_img.'.$request->file('file')->getClientOriginalExtension();
        $file->move('upload/image/',$filename);  // use move for move image in public/images
        $data->file=$filename; // name store in db 
         $data->save();
         Alert::success('Congrats', 'You\'ve Successfully Register!!!');
         
        $emaildata=array("name"=>$name,"email"=>$email,"pass"=>$pass);
        Mail::to('gitapatel01061966@gmail.com')->send(new welcomemail($emaildata));
         return redirect('userlogin');
     
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
    }
}
