<?php

namespace App\Http\Controllers;

use App\Http\Controllers\controller;
use App\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = Customer::all();
        return view('customers.index', compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('customers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'cust_name'=>'required',
            'cust_username'=>'required',
            'password'=>'required',
            'cust_address'=>'required',
            'cust_phoneNo'=>'required',
            'cust_email'=>'required',
        ]);

        $customers = Customer::create([
            'cust_name'=>$request->cust_name,
            'cust_username'=>$request->cust_username,
            'password'=>$request->password,
            'cust_address'=>$request->cust_address,
            'cust_phoneNo'=>$request->cust_phoneNo,
            'cust_email'=>$request->cust_email,
        ]);

        return redirect()->route('customers.index')->with('Success!');  //chech path ni
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        
        $customers = Customer::find($id);
        return view('customers.show', compact('customers'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
        $customers = Customer::find($id);
        return view('customers.edit', compact('customers'));
        

         
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'cust_name'=>'required',
            'cust_username'=>'required',
            'cust_address'=>'required',
            'cust-phoneNo'=>'required',
            'cust-email'=>'required',
        ]);

        $customers = Customer::find($id);
        $customers->cust_name = $request->cust_name;
        $customers->cust_username = $request->cust_username;
        $customers->cust_address = $request->cust_address;
        $customers->cust_phoneNo = $request->cust_phoneNo;
        $customers->cust_email = $request->cust_email;
        $customers->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy($customers_id)
    {
        //
        $customers=Customer::find($customers_id);
        $customers->delete();

        return redirect()->route('customers.index')->with('Success deleted');
    }
}
