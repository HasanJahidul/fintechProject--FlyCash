<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Officer;
use Validator;
use App\Http\Requests\EditProfileRequest;
use Illuminate\Support\Facades\DB; //Import query builser 

class CustomerController extends Controller
{
    public function show()
    {
        $users= Officer::all(); //change Officer to (Customer)->tablename

        //$users = Officer::orderBy('id','DESC')->get(); //change Officer to (Agent)->tablename

        return view('pages.officer.customer.show')->with('users', $users);
    }
    // ============================ End Insert ====================================

    public function edit($id){

        $users= Officer::find($id);

        return view('pages.officer.customer.edit')->with('user', $users);
    }
// ============================ End Edit ====================================

    public function update(Request $req, Officer $id)
    {
        $users = Officer::find($id);
        
        $users->name = $req->name;
        // if($users->password != $req->password){
        //     $users->password = $req->password;
        // }
        $users->phone = $req->phone;
        $users->nid = $req->nid;
        $users->dob = $req->dob;
        $users->type = $req->type;

        $users->save();
        
        // $results->save();
        // return response()->json($results);

        return redirect()->route('customer_show');
    }

    // ============================ End Update ====================================

    public function delete($id){
  
        $users = Officer::find($id); //change model name
        
        return view('pages.officer.customer.delete')->with('user', $users);
    }
// ============================ End Delete ====================================

    public function destroy($id){

        $users = Officer::find($id);
        $users->delete();

         return redirect()->route('customer_delete');
    }
// ============================ End Destroy ====================================

    public function editCustomer(){

        return view('profile.edit');


    }
    public function editCustomerdone(){

        return view('profile.edit');


    }
    public function changeCustomerPassword(){

        return view('pages.customer.profile.passwordChange');
    }
    public function editCustomerProfile(){

        return view('pages.customer.profile.edit');
    }
    public function changeCustomerPasswordDone(EditProfileRequest $req){

        if ($req->session()->get('password')==$req-> old_password)
        {
            if ($req->password== $req->password_confirmation)
            {
                dd($req);
                $email=$req->session()->get('email');
                $customer = Customer::where('email',$email)
                ->first();
                $customer->password = $req->password;
                $customer->save();
                return back()->with('msg','Password Changed') ;

            }else{
                return back()->with('msg','New password and confirm password does not match') ;
            }

        }else{
            return back()->with('msg','Current Password does not match') ;
                    
        }

    }
}
