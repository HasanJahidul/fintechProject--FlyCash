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
use App\Models\Agent;
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
            
           $type= $status->type;

            if ($type == "customer")
            {
                $customer = Customer::where('email',$req->email)
                ->first();
                $req->session()->put('email', $status->email);
                //dd($customer);
                $req->session()->put('name', $customer->name);
                $req->session()->put('password', $customer->password);
                $req->session()->put('balance', $customer->balance);
                //$req->session()->put('email', $customer->email);
                $req->session()->put('type', $customer->type);
                $req->session()->put('phone', $customer->phone);
                $type=$req->session()->put('type', $customer->type);
                //dd(session()->all());
                return redirect("/customer-home");

            }
            elseif ($type == "agent")
            {
                $agent = Agent::where('email',$req->email)
                ->first();
                
                $req->session()->put('email', $agent->email);
                $req->session()->put('name', $agent->name);
                $req->session()->put('password', $agent->password);
                $req->session()->put('balance', $agent->balance);
                $req->session()->put('email', $agent->email);
                $req->session()->put('phone', $agent->phone); 
                $req->session()->put('nid', $agent->nid);
                $req->session()->put('dob', $agent->dob);
                $type=$req->session()->put('type', $agent->type);
                //dd(session()->all());
                return redirect("/agent-home");
            }else{
                print_r($type);
            }
            
        }else{
            
            $req->session()->flash('msg', 'Invalid username or password!');
            return redirect('/login');
            //return view('login.index');
        }

            

        
        
     }
}
/*public function Login(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'login_email' => 'required|email|max:50',
            'login_password' => [
                'required',
                'min:8', 
                'max:20', 
            ],
        ]);

        if ($validator->fails()) {
            return redirect()->back()->with([
                'error' => true,
                'message' => 'Required data missing.'
            ]);
        }else{
            $password=md5($request->input('login_password'));

            $user=DB::table('userinfos')
            ->where('email',$request->input('login_email'))
            ->where('status',1)
            ->first();
            
            if($user){

                if($user->password == $password){

                    $request->session()->put('user_id', $user->id);
                    $request->session()->put('username', $user->username);
                    $request->session()->put('full_name', $user->name);
                    $request->session()->put('user_type', $user->type);
                    $request->session()->put('user_email', $user->email);
                    $request->session()->put('user_image', $user->image);
                    $request->session()->put('admin_is_super_admin', $user->is_super_admin);

                    if($user->type == 1){
                        return redirect('/admin/dashboard');
                    }elseif($user->type == 2){
                        return redirect('/org/dashboard');
                    }elseif($user->type == 3){
                        return redirect('/sp/dashboard');
                    }elseif($user->type == 4){
                        return redirect('/');
                    }else{
                        return redirect()->back()->with([
                            'error' => true,
                            'message' => 'Something going wrong'
                        ]);
                    }
                }else{
                    return redirect()->back()->with([
                        'error' => true,
                        'message' => 'user email or password not matched'
                    ]);
                }

            }else{
                return redirect()->back()->with([
                    'error' => true,
                    'message' => 'user Not found!'
                ]);
            }
        }
    }*/