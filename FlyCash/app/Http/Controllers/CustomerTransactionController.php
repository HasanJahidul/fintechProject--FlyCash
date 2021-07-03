<?php

namespace App\Http\Controllers;
use Validator;
use App\Http\Requests\TransactionRequest;
use App\Models\Customerstransaction;

class CustomerTransactionController extends Controller
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
    }public function addmoneyDone(TransactionRequest $req)
    {
        if($req-> ammount >100)
        {
            $req->session()->flash('msg', 'hi');
                return redirect('/customer-addmoney');

        }else{
            $req->session()->flash('msg', 'bye');
                return redirect('/customer-addmoney');
        }
        
    }
    public function sendmoney()
    {
        return view('pages.customer.transaction.sendmoney');
    }
    public function sendmoneyDone(TransactionRequest $req)
    {
        if($req-> ammount >10)
        {
            $req->session()->flash('msg', 'hi');
                return redirect('/customer-addmoney');

        }else{
            $req->session()->flash('msg', 'bye');
                return redirect('/customer-addmoney');
        }
        
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
    } public function rechargedone(TransactionRequest $req)
    {
        if($req-> ammount >10)
        {
            $req->session()->flash('msg', 'hi');
                return redirect('/customer-addmoney');

        }else{
            $req->session()->flash('msg', 'bye');
                return redirect('/customer-addmoney');
        }
    }
    public function transfermoney()
    {
        return view('pages.customer.transaction.transfermoney');
    }

}
