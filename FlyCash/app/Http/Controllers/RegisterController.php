<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Http\Requests\LoginUserRequest;
use App\Models\Loginuser;
use App\Models\Customer;


class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    public function register()
    {
        return view('auth.register');
    }
    
        public function verify(RegistrationRequest $req){
            echo 'registration Complete';
        }
    public function insert(Request $req){
        if ($req-> password == $req-> password_confirmation)
        {
            $status = Loginuser::where('email',$req->email)
            ->first();
        if($status)
        {
            $req->session()->flash('msg', 'User already Exist!');
            return redirect('/register');
        }else{

            $loginuser = new Loginuser;
            $customer = new Customer;

        
        $customer->name = $req->name;
        $customer->email = $req->email;
        $customer->password = $req->password;
       
        $customer->phone = $req->phone;
        $customer->nid = $req->nid;
        $customer->dob = $req->dob;
        $customer->type = $req->type;
        $customer->openning_date= now();
        //$user->user_type = "active";
        $customer->save();

        $loginuser->email = $req->email;
        $loginuser->password = $req->password;
        $loginuser->type = $req->type;
        $loginuser->save();
        return redirect('/login');

        }
        
        }else{
            
            $req->session()->flash('msg', 'Password and Confirm Passowrd Does Not match!');
            return redirect('/register');
            //return view('login.index');
        }
        
    }
}
