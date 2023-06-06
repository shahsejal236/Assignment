<?php

use Illuminate\Routing\Controllers\Middleware;
use App\Http\Controllers\adminController;
use App\Http\Controllers\userController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\employeeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//===========================================Admin Side ==============================================//



 //===login & logout===//
 Route::get('/adminlogin',[adminController::class,'login']); //login
 Route::post('/adminlogin',[adminController::class,'adminlogincheck']);  
 Route::get('/adminlogout',[adminController::class,'adminlogout']);//logout


    
 Route::get('/manage_user',[userController::class,'manage_user']);   



 

Route::get('/index', function () {
    return view('backend.index');
});
Route::get('/header', function () {
    return view('backend.layout.header');
});
Route::get('/manage_employee', function () {
    return view('backend.manage_employee');
});




//============================================= frontend Routes ===================================================//

Route::get('/userindex', function () {
    return view('frontend.index');
});

Route::get('/userheader', function () {
    return view('frontend.layout.header');
});
Route::get('/contact', function () {
    return view('frontend.contact');
});
Route::get('/about', function () {
    return view('frontend.about');
});
Route::get('/registration', function () {
    return view('frontend.registration');
});
Route::get('/login', function () {
    return view('frontend.login');
});

