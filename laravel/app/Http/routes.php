<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/dashboard', 'HomeController@index');
Route::get('/post', function(){
   return view('post'); 
});
Route::get('/home', function(){
   return view('post'); 
});
Route::get('/writer', function(){
   return view('writer'); 
});
Route::get('/contact', function(){
    return view('contact');
});