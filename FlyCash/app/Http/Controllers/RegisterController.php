<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Http\Requests\LoginUserRequest;
use App\Models\Loginuser;
use App\Models\User;


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
        if ($req-> password == $req-> confirm_password)
        {
            $status = Loginuser::where('email',$req->email)
            ->first();
        if($status)
        {
            $req->session()->flash('msg', 'User already Exist!');
            return redirect('/register');
        }else{

            $loginuser = new Loginuser;
            $User = new User;

        $user->name = $req->name;
        $user->email = $req->email;
        $user->password = $req->password;
        $user->phone = $req->phone;
        $user->nid = $req->nid;
        $user->dob = $req->dob;
        $user->type = $req->type;
        //$user->user_type = "active";
        $user->save();

        $loginuser->email = $req->email;
        $loginuser->password = $req->password;
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
