<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function register()
    {
        return view('auth.register');
    }
    public function customer()
    {
        return view('customerDashboard');
    }
    public function agent()
    {
        return view('agentDashboard');
    }

}
