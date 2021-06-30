<?php

//namespace App\Http\Controllers\Auth;

// use App\Http\Controllers\Controller;
// use App\Providers\RouteServiceProvider;
// use Illuminate\Foundation\Auth\AuthenticatesUsers;
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Http\Requests\LoginUserRequest;
use App\Models\Loginuser;
use App\Models\Customer;
class LoginController extends Controller
{
    // /*
    // |--------------------------------------------------------------------------
    // | Login Controller
    // |--------------------------------------------------------------------------
    // |
    // | This controller handles authenticating users for the application and
    // | redirecting them to your home screen. The controller uses a trait
    // | to conveniently provide its functionality to your applications.
    // |
    // */

    // //use AuthenticatesUsers;

    // /**
    //  * Where to redirect users after login.
    //  *
    //  * @var string
    //  */
    // protected $redirectTo = RouteServiceProvider::HOME;

    // /**
    //  * Create a new controller instance.
    //  *
    //  * @return void
    //  */
    // public function __construct()
    // {
    //     $this->middleware('guest')->except('logout');
    // }

    public function login(){
        return view('auth.login');
    }
    public function verify(LoginUserRequest $req){

        
        $status = Loginuser::where('email',$req->email)
            ->where('password',$req->password)
            ->first();
        if($status)
        {
            $user = Customer::where('email',$req->email)
            ->first();

            $name=$req->session()->put('name', $user->name);
            $password=$req->session()->put('password', $user->password);
            $balance=$req->session()->put('balance', $user->balance);
            $email=$req->session()->put('email', $user->email);
            $phone=$req->session()->put('phone', $user->phone);
            $type=$req->session()->put('type', $user->type);
            return redirect("/home");
        }else{
            
            $req->session()->flash('msg', 'Invalid username or password!');
            return redirect('/login');
            //return view('login.index');
        }
     }
}
