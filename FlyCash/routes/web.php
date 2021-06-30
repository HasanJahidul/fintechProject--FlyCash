<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome') ;
})->name('welcome');



//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Route::get('/addmoney', [App\Http\Controllers\TransactionController::class, 'addmoney'])->name('addmoney');



Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home')->middleware('checkSession');
Route::get('/logout','App\Http\Controllers\LogoutController@logout');

Route::group(['middleware' => 'checkSession'], function () {
	
		Route::get('/addmoney', ['uses' => 'App\Http\Controllers\TransactionController@addmoney'])->name('customer_addmoney');
		Route::get('/sendmoney', [ 'uses' => 'App\Http\Controllers\TransactionController@sendmoney'])->name('customer_sendmoney');
		Route::get('/cashout', [ 'uses' => 'App\Http\Controllers\TransactionController@cashout'])->name('customer_cashout');
		Route::get('/paybill', [ 'uses' => 'App\Http\Controllers\TransactionController@paybill'])->name('customer_paybill');
		Route::get('/recharge', [ 'uses' => 'App\Http\Controllers\TransactionController@recharge'])->name('customer_recharge');
		Route::get('/transfer-money', [ 'uses' => 'App\Http\Controllers\TransactionController@transfermoney'])->name('customer_transfermoney');
	
	
	
		
		Route::get('icons', ['as' => 'pages.icons', 'uses' => 'App\Http\Controllers\PageController@icons']);
		Route::get('maps', ['as' => 'pages.maps', 'uses' => 'App\Http\Controllers\PageController@maps']);
		Route::get('notifications', ['as' => 'pages.notifications', 'uses' => 'App\Http\Controllers\PageController@notifications']);
		Route::get('rtl', ['as' => 'pages.rtl', 'uses' => 'App\Http\Controllers\PageController@rtl']);
		Route::get('transactionlist', ['as' => 'pages.transactionlist', 'uses' => 'App\Http\Controllers\PageController@transactionlist']);
		Route::get('typography', ['as' => 'pages.typography', 'uses' => 'App\Http\Controllers\PageController@typography']);
		Route::get('upgrade', ['as' => 'pages.upgrade', 'uses' => 'App\Http\Controllers\PageController@upgrade']);
		Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
});

Route::group(['middleware' => 'guest'], function () {
Route::get('/login', ['uses'=> 'App\Http\Controllers\LoginController@login'])->name('login');
Route::post('/login', ['uses'=> 'App\Http\Controllers\LoginController@verify']);
Route::get('/register', ['uses'=> 'App\Http\Controllers\RegisterController@register'])->name('register.index');
Route::post('/register', ['uses'=> 'App\Http\Controllers\RegisterController@insert'])->name('register.insert');
Route::get('/forgotpassword', ['uses'=> 'App\Http\Controllers\ForgotPasswordController@login'])->name('password.request');
});	


