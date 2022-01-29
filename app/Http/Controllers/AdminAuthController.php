<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Seller;
use App\Service;
use Illuminate\Support\Facades\Hash;
use App\Admin;

class AdminAuthController extends Controller
{
    function adminLogin(){
        return view('auth.admin.login');
    }
 
    function adminCheckReq(Request $request){
        
        $request->validate([ 
            'admin_username'=>'required', 
            'password'=>'required|min:5|max:12',
        ]); 
 

        $admin = Admin::where('admin_username', $request->admin_username)->first(); 
        // $admin = admin::where('code',$form_code)->where('user_id',$seller->id)->first();   

        if($admin){ 
                $request->session()->put('LoggedAdmin', $admin->id);
                return redirect('admin/profile');  
           
        }else{
            return back()->with('fail', 'No account found for this email');
        }
    }

    function adminProfile()
    {

        $service = Service::all();
        $seller=Seller::all();
        return view('admins.profile',compact('service','seller'));
    }

    public function destroy(Admin $admin)  
    {
        
        $admin->delete();
          return redirect('admin.profile')->with('Success', 'Seller deleted!');

    }


    //verify register seller (based on serialNo)
    public function verify()  
    {
        $seller=Seller::all();
        return view('admins.verify',compact('seller'));
    }

    public function approved($id)
    {
        $seller=Seller::find($id);

        $seller->seller_status='approved';

        $seller->save();

        return redirect()->back();
    }

    public function rejected($id)
    {
        $seller=Seller::find($id);

        $seller->seller_status='rejected';

        $seller->save();

        return redirect()->back();
    }

}
