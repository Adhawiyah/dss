<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;  //tmbh

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Seller;
use App\Booking;
class SellerAuthController extends Controller
{
    function login(){
        return view('auth.seller.login');
    }

    function register(){
        return view('auth.seller.register');
    }

    function create(Request $request){
        $request->validate([
            'seller_name'=>'required',
            'serialNo'=>'required',
            'location'=>'required',
            'seller_phoneNo'=>'required',
            'seller_username'=>'required',
            'seller_email'=>'required|email|unique:sellers',
            'password'=>'required|min:5|max:12',
        ]); 

        //If form validated then register seller

        $seller = new Seller;
        $seller->seller_name = $request->seller_name;
        $seller->serialNo = $request->serialNo;
        $seller->location = $request->location;
        $seller->seller_phoneNo = $request->seller_phoneNo;
        $seller->seller_username = $request->seller_username;
        $seller->seller_email =  $request->seller_email;
        $seller->password =  Hash::make($request->password);
        $query = $seller->save();

        if($query){
            return back()->with('success', 'You have been successfully registed');
        }else{
            return back()->with('fail', 'Something went wrong');
        }

    }

    function checkReq(Request $request){
        
        $request->validate([ 
            'seller_email'=>'required|email', 
            'password'=>'required|min:5|max:12',
        ]); 
        
        $data=['seller_email'=>$request->seller_email, 'password'=>$request->password];

        $seller = Seller::where('seller_email', $request->seller_email)->first();   
       // $seller = Seller::where('code',$form_code)->where('user_id',$seller->id)->first();

        if($seller)
        {
            if(Auth::guard('seller')->attempt($data,'')) 
            {
                $request->session()->regenerate();
                if(Hash::check($request->password, $seller->password))
                { 
                   // $request->session()->put('LoggedSeller', $seller->id);   //adha uncomment 23hb
                    return redirect('seller/profile');
                }
                else
                {
                    return back()->with('fail', 'Wrong password entered');
                }
            }
           
        }else{
            return back()->with('fail', 'No account found for this email');
        }
    }
       
    //  function profile(){
    //      return view('sellers.profile');
    //  }

    function profile()           
    {   
        
        $seller=auth('seller')->user();
       return view('sellers.profile',compact('seller'));
    }

    public function verify()  //verify booking from customers
    {
         $data=Booking::all(); //14hb

        return view('sellers.verify',compact('data'));
    }
   
    public function approved($id)
    {
        $data=Booking::find($id);

        $data->booking_status='Approved';

        $data->save();

        return redirect()->back();
    }

    public function rejected($id)
    {
        $data=Booking::find($id);
        
        $data->booking_status='Rejected *choose other time and date';

        $data->save();

        return redirect()->back();
    }
}
