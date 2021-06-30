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
		Route::get('adduser', ['as' => 'pages.admin.user.adduser', 'uses' => 'App\Http\Controllers\UserController@adduser']);
		Route::get('edituser', ['as' => 'pages.admin.user.edituser', 'uses' => 'App\Http\Controllers\UserController@edituser']);
		Route::get('transaction', ['as' => 'pages.admin.user.transaction', 'uses' => 'App\Http\Controllers\UserController@transaction']);
		Route::get('discount', ['as' => 'pages.admin.user.discount', 'uses' => 'App\Http\Controllers\UserController@discount']);
		Route::get('blockuser', ['as' => 'pages.admin.user.blockuser', 'uses' => 'App\Http\Controllers\UserController@blockuser']);

		Route::get('addagent', ['as' => 'pages.admin.agent.addagent', 'uses' => 'App\Http\Controllers\AgentController@addagent']);
		Route::get('editagent', ['as' => 'pages.admin.agent.editagent', 'uses' => 'App\Http\Controllers\AgentController@editagent']);
		Route::get('agenttransaction', ['as' => 'pages.admin.agent.agenttransaction', 'uses' => 'App\Http\Controllers\AgentController@agenttransaction']);
		Route::get('addagentmoney', ['as' => 'pages.admin.agent.addagentmoney', 'uses' => 'App\Http\Controllers\AgentController@addagentmoney']);
		Route::get('blockagent', ['as' => 'pages.admin.agent.blockagent', 'uses' => 'App\Http\Controllers\AgentController@blockagent']);
		Route::get('chatagent', ['as' => 'pages.admin.agent.chatagent', 'uses' => 'App\Http\Controllers\AgentController@chatagent']);


		Route::get('addofficer', ['as' => 'pages.admin.officer.addofficer', 'uses' => 'App\Http\Controllers\OfficerController@addofficer']);
		Route::get('editofficer', ['as' => 'pages.admin.officer.editofficer', 'uses' => 'App\Http\Controllers\OfficerController@editofficer']);
		Route::get('chatofficer', ['as' => 'pages.admin.officer.chatofficer', 'uses' => 'App\Http\Controllers\OfficerController@chatofficer']);

		Route::get('addcampaign', ['as' => 'pages.admin.campaign.addcampaign', 'uses' => 'App\Http\Controllers\CampaignController@addcampaign']);
		Route::get('ongoingcampaign', ['as' => 'pages.admin.campaign.ongoingcampaign', 'uses' => 'App\Http\Controllers\CampaignController@ongoingcampaign']);
		Route::get('removecampaign', ['as' => 'pages.admin.campaign.removecampaign', 'uses' => 'App\Http\Controllers\CampaignController@removecampaign']);


		Route::get('sendmoney', ['as' => 'pages.sendmoney', 'uses' => 'App\Http\Controllers\transactionController@sendmoney']);
		Route::get('icons', ['as' => 'pages.icons', 'uses' => 'App\Http\Controllers\PageController@icons']);
		Route::get('maps', ['as' => 'pages.maps', 'uses' => 'App\Http\Controllers\PageController@maps']);
		Route::get('notifications', ['as' => 'pages.notifications', 'uses' => 'App\Http\Controllers\PageController@notifications']);
		Route::get('rtl', ['as' => 'pages.rtl', 'uses' => 'App\Http\Controllers\PageController@rtl']);
		Route::get('tables', ['as' => 'pages.tables', 'uses' => 'App\Http\Controllers\PageController@tables']);
		Route::get('typography', ['as' => 'pages.typography', 'uses' => 'App\Http\Controllers\PageController@typography']);
		Route::get('upgrade', ['as' => 'pages.upgrade', 'uses' => 'App\Http\Controllers\PageController@upgrade']);
});

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
});

