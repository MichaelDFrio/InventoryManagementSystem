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
Route::get('/index', function(){
	return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
//Only Appear if User is an admin
Route::get('/admin-homepage', 'PageController@getAdminHomepage');
//Only if the user is pending
Route::get('/pending', 'PageController@getPendingMessage');
