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

     
    
    //========================================Add Money=========================================
    
    public function addmoney()
    {
        return view('pages.customer.transaction.addmoney');
    }public function addmoneyDone(TransactionRequest $req)
    {
<<<<<<< HEAD
        if($req-> ammount >100)
        {
            $req->session()->flash('msg', 'hi');
                return redirect('/customer-addmoney');
=======
        if($req-> amount >97)
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
                
                return back()->with('err','Incorrect Password') ;
            }
            
>>>>>>> bd3f34329c35277c057c0a8768bc29c87d9f965e

        }else{
            return back()->with('err','Add money Unsuccessfull') ;
        }
        
    }

    
    //========================================Send Money=========================================
    
    public function sendmoney()
    {
        return view('pages.customer.transaction.sendmoney');
    }
    public function sendmoneyDone(TransactionRequest $req)
    {
        if($req-> ammount >10)
        {
<<<<<<< HEAD
            $req->session()->flash('msg', 'hi');
                return redirect('/customer-addmoney');
=======
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
                $transaction->transaction_type="Send Money";
                $transaction->amount=$req->amount;
                $transaction->balance = $balance;
                $transaction->date = now();
                $transaction->save();



                return back()->with('msg','Send Money Successfull') ;

            }else{
                return back()->with('err','Incorrect Password') ;
            }
            
>>>>>>> bd3f34329c35277c057c0a8768bc29c87d9f965e

        }else{
            return back()->with('err','Send Money Unsuccessfull') ;
        
    }
}

    //========================================Cashout=========================================

    public function cashout()
    {
        return view('pages.customer.transaction.cashout');
    }
   
    public function cashoutdone(TransactionRequest $req)
    {
        if($req-> amount >100)
        {
            $status = Agent::where('phone',$req->phone)
            ->first();
            //dd($status);
            

                if ($req->session()->get('password')==$req-> password){
                    if($status){

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
                    $transaction->transaction_type="Cash out";
                    $transaction->amount=$req->amount;
                    $transaction->balance = $balance;
                    $transaction->date = now();
                    $transaction->save();
    
    
    
                    return back()->with('msg','Cashout Successfull') ;

                }else{
                    return back()->with('err','Incorrect Agent Number') ;
    
                }
    
                }else{
                    return back()->with('err','Incorrect Password') ;
                }

            
        }else{
            return back()->with('err','Minimum Cashout amount 100 Taka') ;
        }
    }


    //========================================Pay BILl=========================================


    public function paybill()
    {
        return view('pages.customer.transaction.paybill');
    }
    public function paybilldone(TransactionRequest $req)
    {
        if($req-> amount >1)
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
                    $transaction->transaction_type="Payment";
                    $transaction->amount=$req->amount;
                    $transaction->balance = $balance;
                    $transaction->date = now();
                    $transaction->save();
    
    
    
                    return back()->with('msg','Payment Successfull') ;

               
    
                }else{
                    return back()->with('err','Incorrect Password') ;
                }

            
        }else{
            return back()->with('err','Minimum Payment amount 1 Taka') ;
        }

    }

    //========================================recharge=========================================
    public function recharge()
    {
        return view('pages.customer.transaction.recharge');
    } public function rechargedone(TransactionRequest $req)
    {
        if($req-> amount >9)
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
                    $transaction->transaction_type="Mobile Recharge";
                    $transaction->amount=$req->amount;
                    $transaction->balance = $balance;
                    $transaction->date = now();
                    $transaction->save();
    
    
    
                    return back()->with('msg','Mobile Recharge Successfull') ;

                
    
                }else{
                    return back()->with('err','Incorrect Password') ;
                }

            
        }else{
            return back()->with('err','Minimum Payment amount 10 Taka') ;
        }
    }
    //========================================TransferMoney=========================================
    public function transfermoney()
    {
        return view('pages.customer.transaction.transfermoney');
    }
    public function transfermoneydone(TransactionRequest $req)
    {
        if($req-> amount >1000)
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
                    $transaction->transaction_type="Money Transfer";
                    $transaction->amount=$req->amount;
                    $transaction->balance = $balance;
                    $transaction->date = now();
                    $transaction->save();
    
    
    
                    return back()->with('msg','Money Transfer Successfull') ;

                
    
                }else{
                    return back()->with('err','Incorrect Password') ;
                }

            
        }else{
            return back()->with('err','Minimum Money Transfer amount 1000 Taka') ;
        }
    }
    public function donate()
    {
        return view('pages.customer.transaction.donate');
    }
    public function donatedone(TransactionRequest $req)
    {
        if($req-> amount >1)
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
                    $transaction->phone=$req->billtype;
                    $transaction->email=$email;
                    $transaction->transaction_type="Donate";
                    $transaction->amount=$req->amount;
                    $transaction->balance = $balance;
                    $transaction->date = now();
                    $transaction->save();
    
    
    
                    return back()->with('msg','Donation Successfull') ;

               
    
                }else{
                    return back()->with('err','Incorrect Password') ;
                }

            
        }else{
            return back()->with('err','Minimum Donation amount 1 Taka') ;
        }

    }


}
