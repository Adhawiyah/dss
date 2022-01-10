<?php

namespace App\Http\Controllers;

use App\Http\Controllers\controller;
use App\Seller;
use Illuminate\Http\Request;

class SellerController extends Controller
{
    // CRUD seller
    public function index()
    {
        $sellers = Seller::all();
        return view('sellers.index', compact('sellers'));
    }

    public function create()
    {
       return view('sellers.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'seller_name'=>'required',
            'seller_username'=>'required',
            'password'=>'required',
            'serialNo'=>'required',
            'seller_email'=>'required',
            'location'=>'required',
            'seller_phoneNo'=>'required',
        ]);

        $services = Service::create([
            'seller_name'=>$request->seller_name,
            'seller_username'=>$request->seller_username,
            'password'=>$request->password,
            'serialNo'=>$request->serialNo,
            'seller_email'=>$request->seller_email,
            'location'=>$request->location,
            'seller_phoneNo'=>$request->seller_phoneNo,
        ]);

        return redirect()->route('sellers.index')->with('Success!');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $sellers = Seller::find($id);
        return view('sellers.edit', compact('sellers'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'seller_name'=>'required',
            'seller_username'=>'required',
            'password'=>'required',
            'serialNo'=>'required',
            'seller_email'=>'required',
            'location'=>'required',
            'seller_phoneNo'=>'required',

        ]);

        $sellers = Seller::find($id);
        $sellers->seller_name = $request->seller_name;
        $sellers->seller_username = $request->seller_username;
        $sellers->password = $request->password;
        $sellers->serialNo = $request->serialNo;
        $sellers->seller_email = $request->seller_email;
        $sellers->location = $request->location;
        $sellers->seller_phoneNo= $request->seller_phoneNo;
        $sellers->save();
    }

    public function destroy($sellers_id)
    {
        $sellers=Seller::find($sellers_id);
        $sellers->delete();

        return redirect()->route('sellers.index')->with('Success deleted');
    }
}
