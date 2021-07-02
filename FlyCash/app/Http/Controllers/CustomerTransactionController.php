<?php

namespace App\Http\Controllers;
use Validator;
use App\Http\Requests\TransactionRequest;
use App\Models\Customerstransaction;
use App\Models\Customer;
use App\Models\Agent;

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
    }public function addmoneydone(TransactionRequest $req)
    {
        if($req-> amount >100)
        {
            if ($req->session()->get('password')==$req-> password){

                $email=$req->session()->get('email');
                $balance=$req->session()->get('balance');
                $customer = Customer::where('email',$email)
                ->first();
                $newbalance=$balance+$req-> amount;
                $balance=$newbalance;
            

                $req->session()->put('balance', $balance);

                $customer->balance = $balance;
                $customer->save();
                $transaction=new Customerstransaction();
                $transaction->phone=$req->phone;
                $transaction->email=$email;
                $transaction->transaction_type="Add Money";
                $transaction->amount=$req->amount;
                $transaction->balance = $balance;
                $transaction->date = now();
                $transaction->save();



                return back()->with('msg','Addmoney Successfull') ;

            }else{
                $req->session()->flash('msg', 'Incorrect Password');
                return redirect('/customer-addmoney');
            }
            

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
        if($req-> amount >100)
        {
            if ($req->session()->get('password')==$req-> password){

                $email=$req->session()->get('email');
                $balance=$req->session()->get('balance');
                $customer = Customer::where('email',$email)
                ->first();
                $newbalance=$balance-$req-> amount;
                $balance=$newbalance;
            

                $req->session()->put('balance', $balance);

                $customer->balance = $balance;
                $customer->save();
                $transaction=new Customerstransaction();
                $transaction->phone=$req->phone;
                $transaction->email=$email;
                $transaction->transaction_type="Send Money Money";
                $transaction->amount=$req->amount;
                $transaction->balance = $balance;
                $transaction->date = now();
                $transaction->save();



                return back()->with('msg','Addmoney Successfull') ;

            }else{
                $req->session()->flash('msg', 'Incorrect Password');
                return redirect('/customer-addmoney');
            }
            

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
    } 
    public function rechargedone(TransactionRequest $req)
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
