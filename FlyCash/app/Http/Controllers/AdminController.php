<?php

namespace App\Http\Controllers;
use App\Models\campaign;
use App\Models\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
class AdminController extends Controller
{
    /**
     * Display a listing of the users
     *
     * @param  \App\Models\User  $model
     * @return \Illuminate\View\View
     */
    public function addagent()
    {
        return view('pages.admin.agent.addagent');
    }
    public function editagent()
    {
        return view('pages.admin.agent.editagent');
    }
    public function agenttransaction()
    {
        return view('pages.admin.agent.agenttransaction');
    }
    public function chatagent()
    {
        return view('pages.admin.agent.chatagent');
    }
    public function blockagent()
    {
        return view('pages.admin.agent.blockagent');
    }
    public function addagentmoney()
    {
        return view('pages.admin.agent.addagentmoney');
    }
    public function addcampaign()
    {
        return view('pages.admin.campaign.addcampaign');
    }
    public function storecampaign (Request $request )
    {

        
    	$validatedData = $request->validate([
            'title' => 'required|max:200',
            'sdate' => 'required|date|date_format:Y-m-d|after:yesterday',
            'edate' => 'required|date|date_format:Y-m-d|after:xxxx',
            'image' => 'required | mimes:jpeg,jpg,png,PNG | max:1000',
        ]);

       $campaign= new Campaign;
       $campaign->title = $request-> input('title');
       $campaign->sdate = $request-> input('sdate');
       $campaign->edate = $request-> input('edate');
       $campaign->title = $request-> input('title');
       if ($request->hasfile('image'))
       {
           $file = $request->file ('image');
           $extention = $file->getClientOriginalExtension();
           $filename = time().'.'.$extention;
           $file->move('black/img/campaigns/',$filename);
           $campaign->image = $filename;


       }
       $campaign->save();
        // return view('pages.admin.campaign.addcampaign');

        return back()->with('msg','successfull') ;

    }
    
    public function ongoingcampaign()
    {
        $campaigns = Campaign ::all();
        return view('pages.admin.campaign.ongoingcampaign')->with('campaigns',$campaigns);

    }
    
    public function removecampaign()
    {
        $campaigns = Campaign ::all();
        return view('pages.admin.campaign.removecampaign')->with('campaigns',$campaigns);
    }
    public function destroy($id)
    {
        $campaign = Campaign::find($id);
         $destination = 'black/img/campaigns/'.$campaign->image;
         if(File::exists($destination))
        {
            File::delete($destination);
         }
        $campaign->delete();
        return back()->with('msg','successfull') ;

    }

    public function addofficer()
    {
        return view('pages.admin.officer.addofficer');
    }
    public function editofficer()
    {
        return view('pages.admin.officer.editofficer');
    }
    public function chatofficer()
    {
        return view('pages.admin.officer.chatofficer');
    }
    public function adduser()
    {
        return view('pages.admin.user.adduser');
    }
    public function insertuser (RegisterRequest $req)
    {
        if ($req-> password == $req-> password_confirmation)
            {
                $checkUser = Loginuser::where('email',$req->email)
                ->first();
                $checkNid = Loginuser::where('nid',$req->nid)
                ->first();
                $checkPhone = Loginuser::where('phone',$req->phone)
                ->first();
                //dd($req);
                if($checkUser)
                {
                    $req->session()->flash('msg', 'User already Exist!');
                    return redirect('/register');
                }elseif($checkNid){
                    $req->session()->flash('msg', 'An Account Already registered with this nid !');
                    return redirect('/register');
                }elseif($checkPhone)
                {   
                    $req->session()->flash('msg', 'An Account Already registered with this Phone Number !');
                    return redirect('/register');

                }
                else{

                    $loginuser = new Loginuser;
                    $loginuser->email = $req->email;
                    $loginuser->password = $req->password;
                    $loginuser->type = $req->type;
                    $loginuser->phone = $req->phone;
                    $loginuser->nid = $req->nid;
                    $loginuser->save();


                        if ($req->type =="customer"){

                            $customer = new Customer;
                            $customer->name = $req->name;
                            $customer->email = $req->email;
                            $customer->password = $req->password;
                            $customer->transaction_status = 1;
                            $customer->phone = $req->phone;
                            $customer->nid = $req->nid;
                            $customer->dob = $req->dob;
                            $customer->type = $req->type;
                            //$user->user_type = "active";
                            $customer->balance = 20;
                            $customer->save();
                
                            
                            return redirect('/login');

                        }else{
                            $req->session()->flash('msg', 'Invalid User Type');
                            return redirect('/register');
    
                        }
                    }
                    
                    }

    }


    public function edituser()
    {
        return view('pages.admin.user.edituser');
    }
    public function transaction()
    {
        return view('pages.admin.user.transaction');
    }
    public function discount()
    {
        return view('pages.admin.user.discount');
    }
    public function blockuser()
    {
        return view('pages.admin.user.blockuser');
    }
    public function edit(Admin $profile)
    {
        $admins= Admin::find($profile);

        return view('pages.profile.edit')->with('admin', $admins);
    }
    

    
    public function update(Request $req, Admin $profile)
    {
        $admins = Admin::find($profile);
        
     

        $admins->name = $req->name;
        $admins->email = $req->email;
        $admins->phone = $req->phone;
        $admins->nid = $req->nid;
        $admins->dob = $req->dob;
        $admins->type = $req->type;
        $admins->save();

        return back()->with('update','Profile updated successfully');
    }
}
