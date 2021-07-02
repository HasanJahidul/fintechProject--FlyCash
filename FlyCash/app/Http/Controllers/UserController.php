<?php

namespace App\Http\Controllers;

use App\Models\Officer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; //Import query builser 

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $users = Officer::all();
        $users = DB::table('officers')->get(); //Query Builder

        return view('pages.officer.information.index')->with('userlist', $users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        //$officers = new Officer;
        
        // if($req->hasFile('image')){
        //     $file = $req->file('image');

        //     echo "File Name : ".$file->getClientOriginalName()."<br>";
        //     echo "File Extension : ".$file->getClientOriginalExtension()."<br>";
        //     echo "File Mime Type : ".$file->getMimeType()."<br>";
        //     echo "File Size : ".$file->getSize()."<br>";

   // ============================ End Insert ====================================
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Officer  $user
     * @return \Illuminate\Http\Response
     */
    public function show(Officer $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Officer  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(Officer $user)
    {
        $users= Officer::find($user);

        return view('pages.officer.profile.edit')->with('user', $users);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Officer  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req, Officer $user)
    {
        $users = Officer::find($user);
        
        // $file = $req->file('image');
        // $imageName=time().".".$file->extension();
        // $file->move(public_path('upload'),$imageName);

        $users->name = $req->name;
        // if($users->password != $req->password){
        //     $users->password = $req->password;
        // }
        $users->email = $req->email;
        $users->phone = $req->phone;
        $users->nid = $req->nid;
        $users->dob = $req->dob;
        $users->type = $req->type;
        // $users->image = $imageName;
        $users->save();

        return back()->whit('update','Profile updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Officer  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(Officer $user)
    {
        //
    }
}
