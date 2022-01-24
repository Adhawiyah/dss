<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Seller;
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

    function adminProfile(){

        $seller=Seller::all();
        return view('admins.profile',compact('seller'));
    }

    public function destroy(Admin $admin)  
    {
        
        $admin->delete();
        
        return redirect('admin.profile')->with('Success', 'Service deleted!');
    }


}
