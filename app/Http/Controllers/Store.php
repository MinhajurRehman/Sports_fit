<?php

namespace App\Http\Controllers;

use App\Models\stores;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Session;
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

    public function Registration(Request $request)
    {
        $request->validate([

            'name' => 'required',
            'email' => 'email|required',
            'pass' => 'required|min:5|max:8',
            're_pass' => 'required|min:5|max:8',
            'agreeterm' => 'required'
        ]);


        $store_details = new stores;
        $store_details->name = $request['name'];
        $store_details->email = $request['email'];
        $store_details->pass = Hash::make($request['pass']);
        $store_details->re_pass = Hash::make($request['re_pass']);
        $store_details->agreeterm = $request['agreeterm'];
        $res = $store_details->save();
        if ($res) {
            return redirect('/login');
        } else {
            return back()->with('fail', 'something went wrong');
        }
    }
    public function loginstore(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'pass' => 'required|min:5|max:8'
        ]);
        $store_details = stores::where('name', '=', $request->name)->first();
        if ($store_details) {
            if (Hash::check($request['pass'], $store_details->pass)) {
                $request->session()->put('LoginId', $store_details->id);
                return redirect('/');
            } else {
                return back()->with('fail', 'match does not match');
            }
        } else {
            return back()->with('fail', 'You are not registered');
        }
    }
}
