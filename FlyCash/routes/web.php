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

// Route::get('/customer-home', 'App\Http\Controllers\HomeController@customer')->name('customer_home')->middleware('checkSession');
Route::get('/agent-home', 'App\Http\Controllers\HomeController@agent')->name('agent_home')->middleware('checkSession');
Route::get('/login', ['uses'=> 'App\Http\Controllers\LoginController@login'])->name('login');
Route::post('/login', ['uses'=> 'App\Http\Controllers\LoginController@verify']);
Route::get('/register', ['uses'=> 'App\Http\Controllers\RegisterController@register'])->name('register.index');
Route::post('/register', ['uses'=> 'App\Http\Controllers\RegisterController@insert'])->name('register.insert');
Route::get('/forgotpassword', ['uses'=> 'App\Http\Controllers\ForgotPasswordController@login'])->name('password.request');

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Route::get('/addmoney', [App\Http\Controllers\CustomerCustomerTransactionController::class, 'addmoney'])->name('addmoney');




Route::get('/logout','App\Http\Controllers\LogoutController@logout');

Route::group(['middleware' => 'checkSession'], function () {

		Route::group(['middleware' => 'customer'], function () {
		Route::get('/customer-home', 'App\Http\Controllers\HomeController@customer')->name('customer_home');
		Route::get('/customer-addmoney', ['uses' => 'App\Http\Controllers\CustomerTransactionController@addmoney'])->name('customer_addmoney');
		Route::get('/customer-sendmoney', [ 'uses' => 'App\Http\Controllers\CustomerTransactionController@sendmoney'])->name('customer_sendmoney');
		Route::get('/customer-cashout', [ 'uses' => 'App\Http\Controllers\CustomerTransactionController@cashout'])->name('customer_cashout');
		Route::get('/customer-paybill', [ 'uses' => 'App\Http\Controllers\CustomerTransactionController@paybill'])->name('customer_paybill');
		Route::get('/customer-recharge', [ 'uses' => 'App\Http\Controllers\CustomerTransactionController@recharge'])->name('customer_recharge');
		Route::get('/customer-transfermoney', [ 'uses' => 'App\Http\Controllers\CustomerTransactionController@transfermoney'])->name('customer_transfermoney');
	
	
	});
		Route::group(['middleware' => 'agent'], function () {
		
		//Route::get('/agent-home', 'App\Http\Controllers\HomeController@agent')->name('agent_home');
		
		Route::get('/agent-cashin', [ 'uses' => 'App\Http\Controllers\AgentTransactionController@cashin'])->name('pages.agent.transaction.cashin');
		Route::get('cashout', ['as' => 'pages.agent.transaction.cashout', 'uses' => 'App\Http\Controllers\AgentTransactionController@cashout']);
		Route::get('requestmoney', ['as' => 'pages.agent.transaction.requestmoney', 'uses' => 'App\Http\Controllers\AgentTransactionController@requestmoney']);
		Route::get('paybill', ['as' => 'pages.agent.transaction.paybill', 'uses' => 'App\Http\Controllers\AgentTransactionController@paybill']);
		Route::get('bkash', ['as' => 'pages.agent.transaction.bkash', 'uses' => 'App\Http\Controllers\AgentTransactionController@bkash']);
		Route::get('nagad', ['as' => 'pages.agent.transaction.nagad', 'uses' => 'App\Http\Controllers\AgentTransactionController@nagad']);
		Route::get('rocket', ['as' => 'pages.agent.transaction.rocket', 'uses' => 'App\Http\Controllers\AgentTransactionController@rocket']);
		Route::get('upay', ['as' => 'pages.agent.transaction.upay', 'uses' => 'App\Http\Controllers\AgentTransactionController@upay']);
		Route::get('surecash', ['as' => 'pages.agent.transaction.surecash', 'uses' => 'App\Http\Controllers\AgentTransactionController@surecash']);
		Route::get('bankcard', ['as' => 'pages.agent.transaction.bankcard', 'uses' => 'App\Http\Controllers\AgentTransactionController@bankcard']);
		Route::get('recharge', ['as' => 'pages.agent.transaction.recharge', 'uses' => 'App\Http\Controllers\AgentTransactionController@recharge']);
		
		Route::get('addmoney', ['as' => 'pages.agent.addmoney', 'uses' => 'App\Http\Controllers\AgentTransactionController@addmoney']);
		Route::get('view', ['as' => 'pages.agent.view', 'uses' => 'App\Http\Controllers\AgentTransactionController@view']);
		Route::get('chat', ['as' => 'pages.agent.chat', 'uses' => 'App\Http\Controllers\AgentTransactionController@chat']);
		Route::get('adduser', ['as' => 'pages.agent.adduser', 'uses' => 'App\Http\Controllers\AgentTransactionController@adduser']);
		Route::get('/feedback', ['as' => 'pages.agent.feedback', 'uses' => 'App\Http\Controllers\AgentTransactionController@feedback']);
		Route::get('/agent-transactionlist', [ 'uses' => 'App\Http\Controllers\AgentTransactionController@transactionlist'])->name('agent_transactionlist');
		Route::get('upgrade', ['as' => 'pages.upgrade', 'uses' => 'App\Http\Controllers\AgentTransactionController@upgrade']);
	});


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



