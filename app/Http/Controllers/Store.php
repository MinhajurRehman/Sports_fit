<?php

namespace App\Http\Controllers;

use App\Models\stores;
use Illuminate\Http\Request;

class Store extends Controller
{
    public function login()
    {
        return view('Store.SignIn');
    }
    public function Register()
    {
        return view('Store.signUp');
    }
    public function interface()
    {
        return view('Store.Interface');
    }
    public function information()
    {
        return view('Store.Information');
    }
}
