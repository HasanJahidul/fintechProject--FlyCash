<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
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
    public function adduser()
    {
        return view('pages.admin.user.adduser');
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
}
