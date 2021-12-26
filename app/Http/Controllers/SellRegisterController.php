<?php
//REFER RegisterController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SellRegisterController extends Controller
{

    use RegistersSellers;

    /**
     * Where to redirect users after registration.
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
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'seller_name' => ['required', 'string', 'max:255'],
            'seller_username' => ['required', 'max:25','unique:sellers'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'serialNo' => ['required', 'string', 'min:8', 'confirmed'], //admin kena validkan serialNo baru boleh masuk
            'seller_email' => ['required', 'string', 'email', 'max:255', 'unique:sellers'],
            'location' => ['required', 'string', 'max:255'], //check balik yg nie (dropdown location)
            'seller_phoneNo' => ['required', 'string', 'min:11', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Seller
     */
    protected function create(array $data)
    {
        return Seller::create([
            'seller_name' => $data['seller_name'],
            'seller_username' => $data['seller_username'],
            'password' => Hash::make($data['password']),
            'serialNo' => $data['serialNo'],
            'seller_email' =>$data['seller_email'],
            'location' =>$data['location'], //check balik yg nie (dropdown location)
            'seller_phoneNo' => $data['seller_phoneNo'],

        ]);
    }
}
