<?php

namespace App\Http\Controllers;

use App\Models\member;

use Illuminate\Http\Request;

class member_controller extends Controller
{

    public function create()
    {
        $members = new member;   // variable define
        $url = url('/membership');
        $title = "Register membership Details";
        $data = compact('url', 'title', 'members');
        return view('crte')->with($data);
    }

    public function store(Request $request)
    {
        $members = new member;
        $members->plan = $request['plan'];
        $members->name = $request['name'];
        $members->address = $request['address'];
        $members->contact = $request['contact'];
        $members->payment_method = $request['payment_method'];
        $members->pay = $request['pay'];
        $members->save();

        return redirect('folder/read');
    }
    public function readproject()
    {

        $members = member::all();
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
            return redirect('/membership');
        } else {
            //found
            $title = "Update Club members Details";
            $url = url('/member/update') . "/" . $id;
            $data = compact('members', 'url', 'title');
            return view('Admins/folder/create')->with($data);
        }
    }

    public function update($id, Request $request)
    {
        $members = member::find($id);
        $members->plan = $request['plan'];
        $members->name = $request['name'];
        $members->address = $request['address'];
        $members->contact = $request['contact'];
        $members->payment_method = $request['payment_method'];
        $members->pay = $request['pay'];
        $members->save();

        return redirect('folder/read');
    }
}
