<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function index()
    {
        return view('admin.index');
    }

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function username()
    {
        return 'admin_username';
    }

    public function login(Request $request){

        $input = $request->all();
        $this->validate($request,[

            'username'=>'required|string',
            'password'=>'required'
        ]);
        if(auth()->attempt(array('admin_username'=>$input['admin_username'],'password'=>$input['password']))){

            if(auth()->user()->is_admin==1)
            {
                return redirect()->route('admin.adminLogin');
            }
            else{
                return redirect()->route('home');
            }

        }else{
            return redirect()->route('login')->with('error','Input proper username or password');
        }
    }
}
