<?php

namespace App\Http\Controllers;

use App\Models\up;


use Illuminate\Http\Request;

class upcomming extends Controller
{
    public function create()
    {
        $upcoming_events = new up;   // variable define
        $url = url('/upcomingevents/get');
        $title = "Event Form";
        $data = compact('url', 'title', 'upcoming_events');
        return view('Admins.Upcoming.enter')->with($data);
    }

    public function store(Request $request)
    {
        $img = $request->file('img')->GetClientOriginalName();
        $path = $request->file('img')->storeAs('/img', $img);
        //move uploaded file
        $request->img->move(public_path('img'), $img);
        $upcoming_events = new up;
        $upcoming_events->img = $path;
        $upcoming_events->eventtitle = $request['eventtitle'];
        $upcoming_events->eventdate = $request['eventdate'];
        $upcoming_events->save();

        return redirect('upcomingevents/show');
    }
    public function readproject()
    {
        // Fetch table contents, then
        // pass to the web page
        $upcoming_events = up::all();
        // In the with statement below, the array name
        // 'students' is being passed to the web page (view),
        // where we shall use it in the foreach loop there.
        return view("Admins.Upcoming.up")
            ->with(['upcoming_events' => $upcoming_events]);
    }

    public function delete($id)
    {
        $upcoming_events = up::find($id);
        if (!is_null($upcoming_events)) {
            $upcoming_events->delete();
        }
        return redirect('upcomingevents/show');
    }

    public function edit($id)
    {
        $upcoming_events = up::find($id);
        if (is_null($upcoming_events)) {
            //not found
            return redirect('upcomingevents/get');
        } else {
            //found
            $title = "Update Event Details";
            $url = url('/upcomingevents/update') . "/" . $id;
            $data = compact('upcoming_events', 'url', 'title');
            return view('Admins.Upcoming.enter')->with($data);
        }
    }

    public function update($id, Request $request)
    {
        $img = $request->file('img')->GetClientOriginalName();
        //move uploaded file
        $request->img->move(public_path('img'), $img);
        $upcoming_events = new up;
        $upcoming_events->img = $request['img'];
        $upcoming_events->eventtitle = $request['eventtitle'];
        $upcoming_events->eventdate = $request['eventdate'];
        $upcoming_events->save();

        return redirect('upcomingevents/show');
    }



    public function Dashboard()
    {
        $upcoming_events = up::all();
        return view("Admins.Dashboard")
            ->with(['upcoming_events' => $upcoming_events]);
    }
}
