<?php

namespace App\Http\Controllers;

class AgentTransactionController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
        // Route::get('cashin', ['as' => 'pages.transaction.cashin', 'uses' => 'App\Http\Controllers\transactionController@cashin']);
		// Route::get('cashout', ['as' => 'pages.transaction.cashin', 'uses' => 'App\Http\Controllers\transactionController@cashout']);
		// Route::get('requestmoney', ['as' => 'pages.transaction.cashin', 'uses' => 'App\Http\Controllers\transactionController@requestmoney']);
		// Route::get('paybill', ['as' => 'pages.transaction.cashin', 'uses' => 'App\Http\Controllers\transactionController@paybill']);
		// Route::get('bkash', ['as' => 'pages.transaction.cashin', 'uses' => 'App\Http\Controllers\transactionController@bkash']);
		// Route::get('nagad', ['as' => 'pages.transaction.cashin', 'uses' => 'App\Http\Controllers\transactionController@nagad']);
		// Route::get('rocket', ['as' => 'pages.transaction.cashin', 'uses' => 'App\Http\Controllers\transactionController@rocket']);
		// Route::get('upay', ['as' => 'pages.transaction.cashin', 'uses' => 'App\Http\Controllers\transactionController@upay']);
		// Route::get('surecash', ['as' => 'pages.transaction.cashin', 'uses' => 'App\Http\Controllers\transactionController@surecash']);
		// Route::get('bankcard', ['as' => 'pages.transaction.cashin', 'uses' => 'App\Http\Controllers\transactionController@bankcard']);
    
    public function cashin()
    {
        return view('pages.agent.transaction.cashin');
    }
    public function cashout()
    {
        return view('pages.agent.transaction.cashout');
    }
    public function requestmoney()
    {
        return view('pages.agent.transaction.requestmoney');
    }
    public function paybill()
    {
        return view('pages.agent.transaction.paybill');
    }
    public function bkash()
    {
        return view('pages.agent.transaction.bkash');
    }
    public function nagad()
    {
        return view('pages.agent.transaction.nagad');
    }
    public function rocket()
    {
        return view('pages.agent.transaction.rocket');
    }
    public function upay()
    {
        return view('pages.agent.transaction.upay');
    }
    public function surecash()
    {
        return view('pages.agent.transaction.surecash');
    }
    public function bankcard()
    {
        return view('pages.agent.transaction.bankcard');
    }
    public function recharge()
    {
        return view('pages.agent.transaction.recharge');
    }
    public function addmoney()
     {
         return view('pages.agent.addmoney');
     }

    // /**
    //  * Display maps page
    //  *
    //  * @return \Illuminate\View\View
    //  */
    // public function maps()
    // {
    //     return view('pages.maps');
    // }

    /**
     * Display transactionlist page
     *
     * @return \Illuminate\View\View
     */
    public function transactionlist()
    {
        return view('pages.agent.transactionlist');
    }

    /**
     * Display notifications page
     *
     * @return \Illuminate\View\View
     */
    public function notifications()
    {
        return view('pages.notifications');
    }

    // /**
    //  * Display rtl page
    //  *
    //  * @return \Illuminate\View\View
    //  */
    // public function rtl()
    // {
    //     return view('pages.rtl');
    // }

    // /**
    //  * Display typography page
    //  *
    //  * @return \Illuminate\View\View
    //  */
    // public function typography()
    // {
    //     return view('pages.typography');
    // }

    /**
     * Display upgrade page
     *
     * @return \Illuminate\View\View
     */
    public function upgrade()
    {
        return view('pages.upgrade');
    }

    /**
     * Display Feedback page
     *
     * @return \Illuminate\View\View
     */

    public function feedback()
    {
        return view('pages.agent.feedback');
    }

    /**
     * Display adduser page
     *
     * @return \Illuminate\View\View
     */

    public function adduser()
    {
        return view('pages.agent.adduser');
    }


    /**
     * Display profile view page
     *
     * @return \Illuminate\View\View
     */
    public function view()
    {
        return view('pages.agent.view');
    }


    /**
     * Display chat page
     *
     * @return \Illuminate\View\View
     */
    public function chat()
    {
        return view('pages.agent.chat');
    }
    
    
}
