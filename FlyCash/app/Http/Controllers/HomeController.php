<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function register()
    {
        return view('auth.register');
    }
    public function index()
    {
        return view('dashboard');
    }

}
