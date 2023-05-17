<?php

namespace App\Http\Controllers;

use App\Models\member;

use Illuminate\Http\Request;

class member_controller extends Controller
{

    public function create()
    {
        $members = new member;   // variable define
        $url = url('/membership-form');
        $title = "Register membership Details";
        $data = compact('url', 'title', 'members');
        return view('create')->with($data);
    }

    public function store(Request $request)
    {
        $members = new member;
        $members->name = $request['name'];
        $members->address = $request['address'];
        $members->contact = $request['contact'];
        $members->payment_method = $request['payment_method'];
        $members->save();

        return redirect('folder/read');
    }
    public function readproject()
    {
        // Fetch table contents, then
        // pass to the web page
        $members = member::all();
        // In the with statement below, the array name
        // 'students' is being passed to the web page (view),
        // where we shall use it in the foreach loop there.
        return view("Admins.folder.read")
            ->with(['members' => $members]);
    }

    public function delete($id)
    {
        $members = member::find($id);
        if (!is_null($members)) {
            $members->delete();
        }
        return redirect('folder/read');
    }

    public function edit($id)
    {
        $members = member::find($id);
        if (is_null($members)) {
            //not found
            return redirect('folder/create');
        } else {
            //found
            $title = "Update membership-form";
            $url = url('/member/update') . "/" . $id;
            $data = compact('members', 'url', 'title');
            return view('create')->with($data);
        }
    }

    public function update($id, Request $request)
    {
        $members = member::find($id);
        $members->name = $request['name'];
        $members->address = $request['address'];
        $members->contact = $request['contact'];
        $members->payment_method = $request['payment_method'];
        $members->save();

        return redirect('folder/read');
    }
}
