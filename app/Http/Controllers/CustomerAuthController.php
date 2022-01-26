<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;
use App\Customer;

class CustomerAuthController extends Controller
{
    function custLogin(){
        return view('auth.customer.login');
    }

    function custRegister(){
        return view('auth.customer.register');
    }

    function custCreate(Request $request){
        $request->validate([
            'cust_name'=>'required',
            'cust_address'=>'required',
            'cust_phoneNo'=>'required',
            'cust_username'=>'required',
            'cust_email'=>'required|email|unique:customers',
            'password'=>'required|min:5|max:12',
        ]); 

        //If form validated then register customer

        $customer = new Customer;
        $customer->cust_name = $request->cust_name;
        $customer->cust_address = $request->cust_address;
        $customer->cust_phoneNo = $request->cust_phoneNo;
        $customer->cust_username = $request->cust_username;
        $customer->cust_email =  $request->cust_email;
        $customer->password =  Hash::make($request->password);
        $query = $customer->save();

        if($query){
            return back()->with('success', 'You have been successfully registed');
        }else{
            return back()->with('fail', 'Something went wrong');
        }

    }

    function custCheckReq(Request $request)
    {
            
        $data=$request->validate([ 
            'cust_email'=>'required|email', 
            'password'=>'required|min:5|max:12',
        ]); 
            // dd($data);
            
        $customer = Customer::where('cust_email', $request->cust_email)->first();   
       // $customer = Customer::where('code',$form_code)->where('user_id',$seller->id)->first();

        if($customer)
        {
            if(Auth::guard('customer')->attempt($data,'')) 
            {
                $request->session()->regenerate();
                if(Hash::check($request->password, $customer->password))
                { 
                    // $request->session()->put('LoggedCustomer', $customer->id);
                    $request->session()->regenerate();
                    return redirect('customer/profile');
                }
                else
                {
                    return back()->with('fail', 'Wrong password entered');
                }
            }
            
        }
        else
        {
            return back()->with('fail', 'No account found for this email');
        }
    }

      function custProfile(){
        
         //dd(Auth::guard('customer'));
          $customer=auth('customer')->user();
          return view('customers.profile',compact('customer')); 
       
     }

    function profile($id)   
    { 
         $customer = Customer::find($id);
        return view('customers.profile',compact('customer'));   
    }

}
