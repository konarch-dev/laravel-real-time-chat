<?php

use Illuminate\Support\Facades\Route;
use App\Events\Message;

use Illuminate\http\Request;
use Illuminate\http\Response;
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
    return view('index');
});



Route::post('/send-message', function (Request $request) {
   $username=request()->username;
   $message=request()->message;
  // alert($username);
   event(new Message($username,$message));
  //      $request->input('username'),
    //$request->input('message')


    return["sucess"=>true];
});

