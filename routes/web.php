<?php

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
Route::group(['middleware' => 'prevent-back-history', 'auth'],function(){
    Auth::routes();
    Route::get('/registrasi', 'HomeController@index');
    Route::get('/', function () {
        return view('auth/login');
    });
});

Route::post('/reg', 'HomeController@regis');
Route::post('/out', 'HomeController@out');

Route::get('/', function () {
    return view('auth/login');
});

Route::get('/checkout', 'HomeController@checkOut');

Route::get('/pdf', 'HomeController@pdf');

Route::get('/invoice', function(){
    return view('invoice');
});

Route::get('/invedit', function(){
  return view('pdf');
});
