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

 Route::get('/customer-home', 'App\Http\Controllers\HomeController@customer')->name('customer_home')->middleware('checkSession');
 Route::get('/agent-home', 'App\Http\Controllers\HomeController@agent')->name('agent_home')->middleware('checkSession');
 Route::get('/admin-home', 'App\Http\Controllers\HomeController@admin')->name('admin_home')->middleware('checkSession');
 Route::get('/officer-home', 'App\Http\Controllers\HomeController@officer')->name('officer_home')->middleware('checkSession');
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
		Route::get('/customer-addmoney', ['uses' => 'App\Http\Controllers\CustomerTransactionController@addmoney'])->name('customer_addmoney');
		Route::post('/customer-addmoney', ['uses' => 'App\Http\Controllers\CustomerTransactionController@addmoneydone']);
		Route::get('/customer-sendmoney', [ 'uses' => 'App\Http\Controllers\CustomerTransactionController@sendmoney'])->name('customer_sendmoney');
		Route::get('/customer-cashout', [ 'uses' => 'App\Http\Controllers\CustomerTransactionController@cashout'])->name('customer_cashout');
		Route::get('/customer-paybill', [ 'uses' => 'App\Http\Controllers\CustomerTransactionController@paybill'])->name('customer_paybill');
		Route::get('/customer-recharge', [ 'uses' => 'App\Http\Controllers\CustomerTransactionController@recharge'])->name('customer_recharge');
		Route::post('/customer-recharge', [ 'uses' => 'App\Http\Controllers\CustomerTransactionController@rechargedone']);
		Route::get('/customer-transfermoney', [ 'uses' => 'App\Http\Controllers\CustomerTransactionController@transfermoney'])->name('customer_transfermoney');
	
	
	});
		Route::group(['middleware' => 'agent'], function () {
		
		
		
		Route::get('/agent-cashin', ['uses' => 'App\Http\Controllers\AgentTransactionController@cashin'])->name('agent_cashin');
		Route::get('/agent-cashout', ['uses' => 'App\Http\Controllers\AgentTransactionController@cashout'])->name('agent_cashout');
		Route::get('/agent-requestmoney', ['uses' => 'App\Http\Controllers\AgentTransactionController@requestmoney'])->name('agent_requestmoney');
		Route::get('/agent-paybill', ['uses' => 'App\Http\Controllers\AgentTransactionController@paybill'])->name('agent_paybill');
		Route::get('/agent-bkash', ['uses' => 'App\Http\Controllers\AgentTransactionController@bkash'])->name('agent_bkash');
		Route::get('/agent-nagad', ['uses' => 'App\Http\Controllers\AgentTransactionController@nagad'])->name('agent_nagad');
		Route::get('/agent-rocket', ['uses' => 'App\Http\Controllers\AgentTransactionController@rocket'])->name('agent_rocket');
		Route::get('/agent-upay', ['uses' => 'App\Http\Controllers\AgentTransactionController@upay'])->name('agent_upay');
		Route::get('/agent-surecash', ['uses' => 'App\Http\Controllers\AgentTransactionController@surecash'])->name('agent_surecash');
		Route::get('/agent-bankcard', ['uses' => 'App\Http\Controllers\AgentTransactionController@bankcard'])->name('agent_bankcard');
		Route::get('/agent-recharge', ['uses' => 'App\Http\Controllers\AgentTransactionController@recharge'])->name('agent_recharge');
		
		Route::get('/agent-addmoney', ['uses' => 'App\Http\Controllers\AgentTransactionController@addmoney'])->name('agent_addmoney');
		Route::get('/agent-view', ['uses' => 'App\Http\Controllers\AgentTransactionController@view'])->name('agent_view');
		Route::get('/agent-chat', ['uses' => 'App\Http\Controllers\AgentTransactionController@chat'])->name('agent_chat');
		Route::get('/agent-adduser', ['uses' => 'App\Http\Controllers\AgentTransactionController@adduser'])->name('agent_adduser');
		Route::get('/agent-feedback', ['uses' => 'App\Http\Controllers\AgentTransactionController@feedback'])->name('agent_feedback');
		Route::get('/agent-transactionlist', ['uses' => 'App\Http\Controllers\AgentTransactionController@transactionlist'])->name('agent_transactionlist');
		Route::get('/agent-upgrade', ['uses' => 'App\Http\Controllers\AgentTransactionController@upgrade'])->name('agent_upgrade');

		Route::get('maps', ['as' => 'pages.maps', 'uses' => 'App\Http\Controllers\PageController@maps']);
		Route::get('notifications', ['as' => 'pages.notifications', 'uses' => 'App\Http\Controllers\PageController@notifications']);
		Route::get('rtl', ['as' => 'pages.rtl', 'uses' => 'App\Http\Controllers\PageController@rtl']);
		Route::get('typography', ['as' => 'pages.typography', 'uses' => 'App\Http\Controllers\PageController@typography']);

	});
	

		Route::group(['middleware' => 'admin'], function () {

		Route::get('/admin-adduser', ['uses' => 'App\Http\Controllers\AdminController@adduser'])->name('admin_adduser');
		Route::get('/admin-edituser', ['uses' => 'App\Http\Controllers\AdminController@edituser'])->name('admin_edituser');
		Route::get('/admin-transaction', ['uses' => 'App\Http\Controllers\AdminController@transaction'])->name('admin_transaction');
		Route::get('/admin-discount', [ 'uses' => 'App\Http\Controllers\AdminController@discount'])->name('admin_discount');
		Route::get('/admin-blockuser', ['uses' => 'App\Http\Controllers\AdminController@blockuser'])->name('admin_blockuser');

		Route::get('/admin-addagent', ['uses' => 'App\Http\Controllers\AdminController@addagent'])->name('admin_addagent');
		Route::get('/admin-editagent', ['uses' => 'App\Http\Controllers\AdminController@editagent'])->name('admin_editagent');
		Route::get('/admin-agenttransaction', ['uses' => 'App\Http\Controllers\AdminController@agenttransaction'])->name('admin_agenttransaction');
		Route::get('/admin-addagentmoney', ['uses' => 'App\Http\Controllers\AdminController@addagentmoney'])->name('admin_addagentmoney');
		Route::get('/admin-blockagent', ['uses' => 'App\Http\Controllers\AdminController@blockagent'])->name('admin_blockagent');
		Route::get('/admin-chatagent', ['uses' => 'App\Http\Controllers\AdminController@chatagent'])->name('admin_chatagent');


		Route::get('/admin-addofficer', ['uses' => 'App\Http\Controllers\AdminController@addofficer'])->name('admin_addofficer');
		Route::get('/admin-editofficer', ['uses' => 'App\Http\Controllers\AdminController@editofficer'])->name('admin_editofficer');
		Route::get('/admin-chatofficer', ['uses' => 'App\Http\Controllers\AdminController@chatofficer'])->name('admin_chatofficer');

		Route::get('/admin-addcampaign', ['uses' => 'App\Http\Controllers\AdminController@addcampaign'])->name('admin_addcampaign');
		Route::get('/admin-ongoingcampaign', ['uses' => 'App\Http\Controllers\AdminController@ongoingcampaign'])->name('admin_ongoingcampaign');
		Route::get('/admin-removecampaign', ['uses' => 'App\Http\Controllers\AdminController@removecampaign'])->name('admin_removecampaign');
	
	
	});
	Route::group(['middleware' => 'officer'], function () {

		
		Route::get('/pages/officer/agent/index','AgentController@index')->name('agent_index');

		Route::get('/pages/officer/agent/edit/{id}', 'AgentController@edit')->name('agent_edit');
		Route::post('/pages/officer/agent/edit/{id}', 'AgentController@update');

		Route::get('/pages/officer/agent/delete/{id}', 'AgentController@delete');
		Route::post('/pages/officer/agent/delete/{id}', 'AgentController@destroy')->name('agent_delete');

//============================================End Agent Routing===================================================

		Route::get('/pages/officer/customer/show','CustomerController@show')->name('customer_show');

		Route::get('/pages/officer/customer/edit/{id}', 'CustomerController@edit')->name('customer_edit');
		Route::post('/pages/officer/customer/edit/{id}', 'CustomerController@update');

		Route::get('/pages/officer/customer/delete/{id}', 'CustomerController@delete');
		Route::post('/pages/officer/customer/delete/{id}', 'CustomerController@destroy')->name('customer_delete');
		
//**********************************************End Customer Routing************************************************
		
		// 	Route::get('transection', ['as' => 'transection.tran', 'uses' => 'TranController@tran']);
		// 	Route::get('icons', ['as' => 'pages.icons', 'uses' => 'PageController@icons']);
		// 	Route::get('notifications', ['as' => 'pages.notifications', 'uses' => 'PageController@notifications']);

		//Route::resource('user', 'InfoController');

		Route::get('/pages/officer/information','InfoController@index')->name('information_index');
		Route::get('/pages/officer/information/details/{id}','InfoController@details')->name('information_details');

		Route::get('/pages/officer/information/edit/{id}','InfoController@edit')->name('information_edit');
		Route::post('/pages/officer/information/edit/{id}','InfoController@update')->name('information_update');
		
		Route::get('/pages/officer/information/delete/{id}','InfoController@delete');
		Route::post('/pages/officer/information/delete/{id}','InfoController@destroy')->name('information_delete');

		// Invoice pdf generator using dompdf
		Route::get('/pages/officer/pdf/invoice/{id}','InfoController@pdf')->name('pdf.invoice');

//==============================================================================================================
//=============================================================================================================
		//Route::resource('/pages/officer/profile','OfficerController');

		Route::get('/pages/officer/profile/edit','OfficerController@edit')->name('profile_edit');		
		Route::post('/pages/officer/profile/edit','OfficerController@update')->name('profile_update');

		Route::get('/pages/officer/password/password_edit','OfficerController@PassEdit')->name('pass_edit');
		Route::post('/pages/officer/password/password_edit','OfficerController@PassUpdate')->name('pass_update');

		// Route::post('/pages/officer/profile','OfficerController@store')->name('image_insert');
		// Route::post('/pages/officer/profile','OfficerController@update');

//==============================================================================================================



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



