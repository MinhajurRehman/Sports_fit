<?php

namespace App\Http\Controllers;

use App\Models\latestgames;

use App\Models\up;
use Illuminate\Http\Request;

class index extends Controller
{
    public function Dashboard()
    {
        //first Variable initialize
        $upcoming_events = new up;
        $upcoming_events = up::all();
        // second Variable initialize
        $latest_games = new latestgames;
        $latest_games = latestgames::all();
        return view("index")
            ->with('latest_games', $latest_games)->with('upcoming_events', $upcoming_events);
    }
}
