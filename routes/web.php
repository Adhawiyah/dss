<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\CustomerAuthController;
use App\Http\Controllers\SellerAuthController;

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//ALL ROUTES 
 Route::resource('customers','CustomerController');
Route::resource('sellers','SellerController');
 Route::resource('services','ServiceController');
 Route::resource('bookings','BookingController');
 Route::resource('admins','AdminAuthController');
 Route::resource('customers','CustomerAuthController');


//Admin (view list sellers,delelete seller)
//Route::get('admin/home',[App\Http\Controllers\HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');
//Route::get('customer/home',[App\Http\Controllers\HomeController::class, 'customerHome'])->name('customer.customer-home')->middleware('is_customer');
Route::get('admin/index', 'AdminController@index')->name('home');

Route::get('admin/login', [AdminAuthController::class, 'adminLogin' ]); 
Route::post('admin/checkReq', [AdminAuthController::class, 'adminCheckReq' ])->name('auth.adminCheckReq');
Route::get('admin/profile', [AdminAuthController::class, 'adminProfile' ]); 
//Route::post('admin/profile', [ListSellerController::class, 'index' ])->name('admin.profile');  //23

Route::get('customer/login', [CustomerAuthController::class, 'custLogin' ]); 
Route::get('customer/register', [CustomerAuthController::class, 'custRegister' ]);
Route::post('customer/create', [CustomerAuthController::class, 'custCreate' ])->name('auth.custCreate');
Route::post('customer/checkReq', [CustomerAuthController::class, 'custCheckReq' ])->name('auth.custCheckReq');
Route::get('customer/profile', [CustomerAuthController::class, 'custProfile' ]); 
Route::get('/customer/{id}',[CustomerAuthController::class, 'profile' ])->name('customers.profile');


Route::get('seller/login', [SellerAuthController::class, 'login' ]); 
Route::get('seller/register', [SellerAuthController::class, 'register' ]);
Route::post('seller/create', [SellerAuthController::class, 'create' ])->name('auth.create');
Route::post('seller/checkReq', [SellerAuthController::class, 'checkReq' ])->name('auth.checkReq');
Route::get('seller/profile', [SellerAuthController::class, 'profile' ]); 
Route::get('/seller/{id}',[SellerAuthController::class, 'profile' ])->name('sellers.profile');


// Route::get('/seller/{id}',[SellerAuthController::class, 'profile' ])->name('sellers.profile'); //23