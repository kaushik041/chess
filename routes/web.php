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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/register', 'HomeController@register');

Route::get('/user_registration', 'HomeController@user_registration');
Route::get('/user_home', 'HomeController@user_home');
Route::get('/tournament_list', 'HomeController@tournament_list');
Route::get('/user_tournament_join', 'HomeController@user_tournament_join');
Route::get('/user_payment', 'HomeController@user_payment');


Route::get('/admin_dashboard', 'HomeController@admin_dashboard');
Route::get('/add_tournament', 'HomeController@add_tournament');
Route::get('/admin_tournament_list', 'HomeController@admin_tournament_list');
Route::get('/user_list', 'HomeController@user_list');
Route::get('/transaction_list', 'HomeController@transaction_list');
