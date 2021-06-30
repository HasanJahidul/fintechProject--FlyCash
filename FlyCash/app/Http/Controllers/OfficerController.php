<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Hash;

class OfficerController extends Controller
{
    /**
     * Display a listing of the users
     *
     * @param  \App\Models\User  $model
     * @return \Illuminate\View\View
     */
    public function index(User $model)
    {
        return view('users.index', ['users' => $model->paginate(15)]);
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
    
    
}
