<?php

namespace App\Http\Controllers;

use App\Models\news;
use Illuminate\Http\Request;

class latest_new extends Controller
{
    public function create()
    {
        $latest_news = new news;   // variable define
        $url = url('/news/get');
        $title = "latest news Form";
        $data = compact('url', 'title', 'latest_news');
        return view('Admins.latest_news.latest_get')->with($data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'img4' => 'required',
            'ltitle' => 'required',
            'ldate' => 'required',
            'month' => 'required',
            'Bio' => 'required',
        ]);
        $img4 = $request->file('img4')->GetClientOriginalName();
        $path = $request->file('img4')->storeAs('/img4', $img4);
        //move uploaded file
        $request->img4->move(public_path('img4'), $img4);
        $latest_news  = new news;
        $latest_news->img4 = $path;
        $latest_news->ltitle = $request['ltitle'];
        $latest_news->ldate = $request['ldate'];
        $latest_news->month = $request['month'];
        $latest_news->Bio = $request['Bio'];
        $latest_news->save();

        return redirect('news/show');
    }
    public function readproject()
    {
        // Fetch table contents, then
        // pass to the web page
        $latest_news  = news::all();
        // In the with statement below, the array name
        // 'students' is being passed to the web page (view),
        // where we shall use it in the foreach loop there.
        return view("Admins.latest_news.latest_fetch")
            ->with(['latest_news' => $latest_news]);
    }

    public function delete($id)
    {
        $latest_news  = news::find($id);
        if (!is_null($latest_news)) {
            $latest_news->delete();
        }
        return redirect('news/show');
    }

    public function edit($id)
    {
        $latest_news  = news::find($id);
        if (is_null($latest_news)) {
            //not found
            return redirect('news/get');
        } else {
            //found
            $title = "Update Latest News Details";
            $url = url('/news/update') . "/" . $id;
            $data = compact('latest_news', 'url', 'title');
            return view('Admins.latest_news.latest_get')->with($data);
        }
    }

    public function update($id, Request $request)
    {
        $img4 = $request->file('img4')->GetClientOriginalName();
        $path = $request->file('img4')->storeAs('/img4', $img4);
        //move uploaded file
        $request->img4->move(public_path('img4'), $img4);
        $latest_news  = new news;
        $latest_news->img = $path;
        $latest_news->ltitle = $request['ltitle'];
        $latest_news->ldate = $request['ldate'];
        $latest_news->month = $request['month'];
        $latest_news->Bio = $request['Bio'];
        $latest_news->save();

        return redirect('news/show');
    }
}
