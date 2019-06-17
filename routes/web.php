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

// Route::get('/', function () {
//     return view('auth.login');
// });
Route::get('/', 'Auth\LoginController@index');
Route::get('/login', 'Auth\LoginController@index');


// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/contactus', 'ContactController@index');
Route::get('/aboutus', 'AboutController@index');
