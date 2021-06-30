<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Hash;

class AgentController extends Controller
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
}
