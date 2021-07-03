<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use Illuminate\Support\Facades\DB; //Import query builser 
//Ruhul Amin

class CustomerController extends Controller
{
    public function show()
    {
        $users= Customer::all(); //change Officer to (Customer)->tablename

        //$users = Officer::orderBy('id','DESC')->get(); //change Officer to (Agent)->tablename

        return view('pages.officer.customer.show')->with('users', $users);
    }
    // ============================ End Insert ====================================

    public function edit($id){

        $users= Customer::find($id);

        return view('pages.officer.customer.edit')->with('user', $users);
    }
// ============================ End Edit ====================================

    public function update(Request $req, Customer $id)
    {
        $users = Customer::find($id);
        
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
        // return response()->json($users);

        return redirect()->route('customer_show');
    }

    // ============================ End Update ====================================

    public function delete($id){
  
        $users = Customer::find($id); //change model name
        
        return view('pages.officer.customer.delete')->with('user', $users);
    }
// ============================ End Delete ====================================

    public function destroy($id){

        $users = Customer::find($id);
        $users->delete();

         return redirect()->route('customer_delete');
    }
// ============================ End Destroy ====================================
}
