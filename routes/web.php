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

//Logout on Routes would break so I hardcoded it
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Auth::routes();

Route::get('/home', 'HomeController@index');

//Route::get('/admin-homepage', 'PageController@getAdminHomepage');//->middleware('admin');
Route::group(['middleware' => 'admin', 'prefix' => 'admin'], function () {
    Route::get('/', 'PageController@getAdminHomepage');
    Route::get('/pending-checkout', 'CheckoutController@index');
});

Route::get('/pending', 'PageController@getPendingMessage');

Route::get('/checkout-form', 'PageController@getCheckoutForm');
