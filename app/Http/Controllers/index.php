<?php

namespace App\Http\Controllers;

use App\Models\latestgames;
use App\Models\news;

use App\Models\up;
use Illuminate\Http\Request;

class index extends Controller
{
    public function Dashboard()
    {
        //first Variable initialize
        $upcoming_events = new up;
        $upcoming_events = up::orderBy('id', 'desc')->take(4)->get();
        // second Variable initialize
        $latest_games = new latestgames;
        $latest_games = latestgames::orderBy('id', 'desc')->take(4)->get();
        //third variable initialize
        $latest_news = new news;
        $latest_news  = news::orderBy('id', 'desc')->take(3)->get();
        return view("index")
            ->with('latest_games', $latest_games)
            ->with('upcoming_events', $upcoming_events)
            ->with('latest_news', $latest_news);
    }

     public function Tickets()
    {
        return view('Tickets');
    }

      public function contact()
    {
        return view('contact');
    }

      public function index()
    {
        return view('index');
    }

}
