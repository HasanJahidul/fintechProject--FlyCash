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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home')->middleware('auth');

Route::group(['middleware' => 'auth'], function () {
		Route::get('cashin', ['as' => 'pages.agent.transaction.cashin', 'uses' => 'App\Http\Controllers\transactionController@cashin']);
		Route::get('cashout', ['as' => 'pages.agent.transaction.cashout', 'uses' => 'App\Http\Controllers\transactionController@cashout']);
		Route::get('requestmoney', ['as' => 'pages.agent.transaction.requestmoney', 'uses' => 'App\Http\Controllers\transactionController@requestmoney']);
		Route::get('paybill', ['as' => 'pages.agent.transaction.paybill', 'uses' => 'App\Http\Controllers\transactionController@paybill']);
		Route::get('bkash', ['as' => 'pages.agent.transaction.bkash', 'uses' => 'App\Http\Controllers\transactionController@bkash']);
		Route::get('nagad', ['as' => 'pages.agent.transaction.nagad', 'uses' => 'App\Http\Controllers\transactionController@nagad']);
		Route::get('rocket', ['as' => 'pages.agent.transaction.rocket', 'uses' => 'App\Http\Controllers\transactionController@rocket']);
		Route::get('upay', ['as' => 'pages.agent.transaction.upay', 'uses' => 'App\Http\Controllers\transactionController@upay']);
		Route::get('surecash', ['as' => 'pages.agent.transaction.surecash', 'uses' => 'App\Http\Controllers\transactionController@surecash']);
		Route::get('bankcard', ['as' => 'pages.agent.transaction.bankcard', 'uses' => 'App\Http\Controllers\transactionController@bankcard']);
		Route::get('recharge', ['as' => 'pages.agent.transaction.recharge', 'uses' => 'App\Http\Controllers\transactionController@recharge']);
		
		Route::get('addmoney', ['as' => 'pages.agent.addmoney', 'uses' => 'App\Http\Controllers\PageController@addmoney']);
		Route::get('view', ['as' => 'pages.agent.view', 'uses' => 'App\Http\Controllers\PageController@view']);
		Route::get('chat', ['as' => 'pages.agent.chat', 'uses' => 'App\Http\Controllers\PageController@chat']);
		Route::get('adduser', ['as' => 'pages.agent.adduser', 'uses' => 'App\Http\Controllers\PageController@adduser']);
		Route::get('feedback', ['as' => 'pages.agent.feedback', 'uses' => 'App\Http\Controllers\PageController@feedback']);
		Route::get('transactionlist', ['as' => 'pages.agent.transactionlist', 'uses' => 'App\Http\Controllers\PageController@transactionlist']);
		Route::get('upgrade', ['as' => 'pages.upgrade', 'uses' => 'App\Http\Controllers\PageController@upgrade']);

		Route::get('maps', ['as' => 'pages.maps', 'uses' => 'App\Http\Controllers\PageController@maps']);
		Route::get('notifications', ['as' => 'pages.notifications', 'uses' => 'App\Http\Controllers\PageController@notifications']);
		Route::get('rtl', ['as' => 'pages.rtl', 'uses' => 'App\Http\Controllers\PageController@rtl']);
		Route::get('typography', ['as' => 'pages.typography', 'uses' => 'App\Http\Controllers\PageController@typography']);
		
});

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
});

