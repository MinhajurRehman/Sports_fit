<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\contact;
use App\Models\member;
use App\Models\ticket;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //one route use only for this function
    public function Dashboard()
    {
        //member details fetch
        $members = member::all();
        //tickets details fetch
        $ticket_details = new ticket;
        $ticket_details = ticket::all();
        //contact complain fetch details
        $contact_details = new contact;
        $contact_details = contact::all();
        //define all data using with function
        return view("Admins.Dashboard")
            ->with('members', $members)
            ->with('ticket_details', $ticket_details)
            ->with('contact_details', $contact_details);
    }

    public function fetch()
    {
        $admin = new Admin;
        //member details fetch
        $admin = Admin::all();
        return view("Admins.AdminLogin")->with('admin', $admin);
    }
}
