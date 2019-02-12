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

Route::get('/', function () {
    return view('user_home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/register', 'HomeController@register');

Route::get('/user_registration', 'HomeController@user_registration');
Route::get('/user_home', 'HomeController@user_home');
Route::get('/tournament_list', 'HomeController@tournament_list');
Route::resource('register', 'UserRegisterController');
Route::get('/user_registrations', 'UserRegisterController@index');

