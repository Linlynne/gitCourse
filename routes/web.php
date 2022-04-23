<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
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
   // return view('welcome');

   $data =[
       'title'=>'hi, I hope I can learn it fast.',
       'content'=>'Tis is laravel course is really too old'

   ];

   Mail::send('emails.test',$data,function($message){
       $message->to('lynnelin2019@gmail.com','lynne')->subject('hello, how are you?.');

   });
});


