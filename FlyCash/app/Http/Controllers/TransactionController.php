<?php

namespace App\Http\Controllers;

class TransactionController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function addmoney()
    {
        return view('pages.customer.transaction.addmoney');
    }
    public function sendmoney()
    {
        return view('pages.customer.transaction.sendmoney');
    }
    public function cashout()
    {
        return view('pages.customer.transaction.cashout');
    }
    public function paybill()
    {
        return view('pages.customer.transaction.paybill');
    }
    public function recharge()
    {
        return view('pages.customer.transaction.recharge');
    }
    public function transfermoney()
    {
        return view('pages.customer.transaction.transfermoney');
    }

}
