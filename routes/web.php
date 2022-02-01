<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\BookingController;
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
 Route::resource('search','SearchController');

 //Booking
//  Route::put('/bookings/{booking}',[BookingController::class, 'edit' ])->name('bookings.edit');
//  Route::put('/bookings/{booking}',[BookingController::class, 'update' ])->name('bookings.update');

//Admin 
Route::get('admin/index', 'AdminController@index')->name('home');
//Route::get('admin/home',[App\Http\Controllers\HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');
//Route::get('customer/home',[App\Http\Controllers\HomeController::class, 'customerHome'])->name('customer.customer-home')->middleware('is_customer');

//Admin
Route::get('admin/login', [AdminAuthController::class, 'adminLogin' ]); 
Route::post('admin/checkReq', [AdminAuthController::class, 'adminCheckReq' ])->name('auth.adminCheckReq');
Route::get('admin/profile', [AdminAuthController::class, 'adminProfile' ])->name('admins.adminProfile');
// Route::get('admin/', [AdminAuthController::class, 'listSeller' ])->name('admins.profile');

//Customer
Route::get('customer/login', [CustomerAuthController::class, 'custLogin' ]); 
Route::get('customer/register', [CustomerAuthController::class, 'custRegister' ]);
Route::post('customer/create', [CustomerAuthController::class, 'custCreate' ])->name('auth.custCreate');
Route::post('customer/checkReq', [CustomerAuthController::class, 'custCheckReq' ])->name('auth.custCheckReq');
Route::get('customer/profile', [CustomerAuthController::class, 'custProfile' ]); 
Route::get('/customer/{id}',[CustomerAuthController::class, 'profile' ])->name('customers.profile');

//Seller
Route::get('seller/login', [SellerAuthController::class, 'login' ]); 
Route::get('seller/register', [SellerAuthController::class, 'register' ]);
Route::post('seller/create', [SellerAuthController::class, 'create' ])->name('auth.create');
Route::post('seller/checkReq', [SellerAuthController::class, 'checkReq' ])->name('auth.checkReq');
Route::get('seller/profile', [SellerAuthController::class, 'profile' ]); 
Route::get('/seller/{id}',[SellerAuthController::class, 'profile' ])->name('sellers.profile');

//verify booking
 Route::get('/verify', [SellerAuthController::class, 'verify' ])->name('sellers.verify'); 
Route::get('/approved/{id}', [SellerAuthController::class, 'approved' ]); 
Route::get('/rejected/{id}', [SellerAuthController::class, 'rejected' ]); 

//Verify seller profile
  Route::get('admin/verify', [AdminAuthController::class, 'verify' ])->name('admins.verify'); 
  Route::get('/approved/{id}', [AdminAuthController::class, 'approved' ]); 
  Route::get('/rejected/{id}', [AdminAuthController::class, 'rejected' ]); 