<?php

namespace App\Http\Controllers;

use App\Models\latestgames;
use Illuminate\Http\Request;

class latestgame extends Controller
{

    public function create()
    {
        $latest_games = new latestgames;   // variable define
        $url = url('/latestgames/get');
        $title = "Fill Scorecard";
        $data = compact('url', 'title', 'latest_games');
        return view('Admins.latestgames.get')->with($data);
    }

    public function store(Request $request)
    {
        $img1 = $request->file('img_1')->GetClientOriginalName();
        $path = $request->file('img_1')->storeAs('/img_1', $img1);
        $img2 = $request->file('img_2')->GetClientOriginalName();
        $path2 = $request->file('img_2')->storeAs('/img_2', $img2);
        //move uploaded file
        $request->img_1->move(public_path('img_1'), $img1);

        $request->img_2->move(public_path('img_2'), $img2);

        $latest_games = new latestgames;
        $latest_games->img_1 = $path;
        $latest_games->img_2 = $path2;
        $latest_games->team1title = $request['team1title'];
        $latest_games->team1score = $request['team1score'];
        $latest_games->matchtitle = $request['matchtitle'];
        $latest_games->matchdate = $request['matchdate'];
        $latest_games->team2title = $request['team2title'];
        $latest_games->team2score = $request['team2score'];
        $latest_games->save();

        return redirect('latestgames/show');
    }
    public function readproject()
    {
        // Fetch table contents, then
        // pass to the web page
        $latest_games = latestgames::all();
        // In the with statement below, the array name
        // 'students' is being passed to the web page (view),
        // where we shall use it in the foreach loop there.
        return view("Admins.latestgames.show")
            ->with(['latest_games' => $latest_games]);
    }

    public function delete($id)
    {
        $latest_games = latestgames::find($id);
        if (!is_null($latest_games)) {
            $latest_games->delete();
        }
        return redirect('latestgames/show');
    }

    public function edit($id)
    {
        $latest_games = latestgames::find($id);
        if (is_null($latest_games)) {
            //not found
            return redirect('latestgames/get');
        } else {
            //found
            $title = "Update Scorecard";
            $url = url('/latestgames/update') . "/" . $id;
            $data = compact('latest_games', 'url', 'title');
            return view('Admins.latestgames.get')->with($data);
        }
    }

    public function update($id, Request $request)
    {
        $img_1 = $request->file('img_1')->GetClientOriginalName();
        $img_2 = $request->file('img_2')->GetClientOriginalName();
        //move uploaded file
        $request->img_1->move(public_path('img_1'), $img_1);
        $request->img_2->move(public_path('img_2'), $img_2);
        $latest_games = new latestgames;
        $latest_games->img_1 = $request['img_1'];
        $latest_games->img_2 = $request['img_2'];
        $latest_games->team1title = $request['team1title'];
        $latest_games->team1score = $request['team1score'];
        $latest_games->matchtitle = $request['matchtitle'];
        $latest_games->matchdate = $request['matchdate'];
        $latest_games->team2title = $request['team2title'];
        $latest_games->team2score = $request['team2score'];
        $latest_games->save();

        return redirect('latestgames/show');
    }
}
