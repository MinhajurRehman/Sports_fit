<?php

namespace App\Http\Controllers;

use App\Models\member;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function Dashboard()
    {
        $members = member::all();
        return view("Admins.Dashboard")
            ->with(['members' => $members]);
    }
}
