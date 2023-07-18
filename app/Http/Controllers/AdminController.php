<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\bill;
use App\Models\contact;
use App\Models\member;
use App\Models\ticket;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Session;

class AdminController extends Controller
{
    public function fetch()
    {
        return view("Admins.AdminLogin");
    }
    public function Reg()
    {
        return view('Admins.AdminReg');
    }
    public function Registration(Request $request)
    {
        $request->validate([

            'name' => 'required',
            'username' => 'required',
            'password' => 'required|min:5|max:8'
        ]);


        $admin = new Admin;
        $admin->name = $request['name'];
        $admin->username = $request['username'];
        $admin->password = Hash::make($request['password']);
        $res = $admin->save();
        if ($res) {
            return redirect('/Admins/Login');
        } else {
            return back()->with('fail', 'something went wrong');
        }
    }
    public function loginadmin(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required|min:5|max:8'
        ]);
        $admin = Admin::where('username', '=', $request->username)->first();
        if ($admin) {
            if (Hash::check($request['password'], $admin->password)) {
                $request->session()->put('LoginId', $admin->id);
                return redirect('Admins/Dashboard');
            } else {
                return back()->with('fail', 'match does not match');
            }
        } else {
            return back()->with('fail', 'You are not registered');
        }
    }

    //one route use only for this function
    public function Dashboard()
    {

        $data = array();
        if (Session::has('LoginId')) {
            $data = Admin::where('id', '=', Session::get('LoginId'))->first();
        }

        //member details fetch
        $members = member::all();
        //tickets details fetch
        $ticket_details = new ticket;
        $ticket_details = ticket::all();
        //contact complain fetch details
        $contact_details = new contact;
        $contact_details = contact::all();
        //define all data using with function
        return view("Admins.Dashboard", compact('data'))
            ->with('members', $members)
            ->with('ticket_details', $ticket_details)
            ->with('contact_details', $contact_details);
    }
    public function Logout()
    {
        if (Session::has('LoginId')) {
            Session::pull('LoginId');
            return redirect('/Admins/Login');
        }
    }
// billing database fetch 
    public function review()
    {
        $billing = new bill;
        $billing = bill::all();
        return view("Admins.Store.Show-bills")
            ->with(['billing' => $billing]);
    }
}
