<?php

namespace App\Http\Controllers;

use App\Models\bill;
use App\Models\product;
use App\Models\stores;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Session;

class Store extends Controller
{
    public function login()
    {
        return view('Store.SignIn');
    }
    public function Register()
    {
        return view('Store.signUp');
    }



    public function interface()
    {
        $products = product::orderBy('id', 'desc')->take(6)->get();
        return view('Store.Interface')
        ->with(['products' => $products]);
    }



    public function information()
    {
        $products = product::all();
        return view('Store.Information')
        ->with(['products' => $products]);
    }

    // Registration save data function
    public function Registration(Request $request)
    {
        $request->validate([

            'name' => 'required',
            'email' => 'email|required',
            'pass' => 'required|min:5|max:8',
            're_pass' => 'required|min:5|max:8',
            'agreeterm' => 'required'
        ]);


        $store_details = new stores;
        $store_details->name = $request['name'];
        $store_details->email = $request['email'];
        $store_details->pass = Hash::make($request['pass']);
        $store_details->re_pass = Hash::make($request['re_pass']);
        $store_details->agreeterm = $request['agreeterm'];
        $res = $store_details->save();
        if ($res) {
            return redirect('/login');
        } else {
            return back()->with('fail', 'something went wrong');
        }
    }
    // Login Function
    public function loginstore(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'pass' => 'required|min:5|max:8'
        ]);
        $store_details = stores::where('name', '=', $request->name)->first();
        if ($store_details) {
            if (Hash::check($request['pass'], $store_details->pass)) {
                $request->session()->put('Basic', $store_details->id);
                return redirect('/int');
            } else {
                return back()->with('fail', 'match does not match');
            }
        } else {
            return back()->with('fail', 'You are not registered');
        }
    }

    // products store function
    public function index()
    {
        $products = new product;   // variable define
        $url = url('/product/get');
        $title = "Products Entries";
        $data = compact('url', 'title', 'products');
        return view('Admins.Store.Products')->with($data);
    }

    public function save(Request $request)
    {
        $product = $request->file('product')->GetClientOriginalName();
        $path = $request->file('product')->storeAs('/product', $product);
        //move uploaded file
        $request->product->move(public_path('product'), $product);
        $products = new product;
        $products->product = $path;
        $products->productname = $request['productname'];
        $products->productprice = $request['productprice'];
        $products->Description = $request['Description'];
        $products->save();

        return redirect('product/show');
    }

    public function read()
    {

        $products = product::all();
        return view("Admins.Store.Show-product")
            ->with(['products' => $products]);
    }

    public function delete($id)
    {
        $products = product::find($id);
        if (!is_null($products)) {
            $products->delete();
        }
        return redirect('product/show');
    }

    public function edit($id)
    {
        $products = product::find($id);
        if (is_null($products)) {
            //not found
            return redirect('product/get');
        } else {
            //found
            $title = "Update Products Entries";
            $url = url('/product/update') . "/" . $id;
            $data = compact('products', 'url', 'title');
            return view('Admins.Upcoming.enter')->with($data);
        }
    }

    public function update($id, Request $request)
    {
        $product = $request->file('product')->GetClientOriginalName();
        //move uploaded file
        $request->img->move(public_path('product'), $product);
        $products = new product;
        $products->product = $request['product'];
        $products->productname = $request['productname'];
        $products->productprice = $request['productprice'];
        $products->save();

        return redirect('product/show');

    }

    public function Buy($id)
    {
        $products  = product::find($id);
        if (is_null($products)) {
            //not found
            return redirect('/int');
        } else {
            //found
            $url = url('/info') . "/" . $id;
            $data = compact('products', 'url');
            return view('Store.Information')->with($data);
        }
    }

   public function storage(Request $request){
    $billing = new bill;
    $billing->name = $request['name'];
    $billing->email = $request['email'];
    $billing->contact = $request['contact'];
    $billing->Pname = $request['Pname'];
    $billing->Pprice = $request['Pprice'];
    $billing->payment_method = $request['payment_method'];
    $billing->save();

    return redirect('/stripe');
   }
//  authentication login
      public function Logo()
    {
        if (Session::has('Basic')) {
            Session::pull('Basic');
            return redirect('/login');
        }
    }


}
