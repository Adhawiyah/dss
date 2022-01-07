<?php

use Illuminate\Support\Facades\Route;


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

/*
//Bookings (CRUD)
Route::get('/bookings', [App\Http\Controllers\BookingController::class, 'index'])->name('bookings.index');
Route::get('/bookings/create', [App\Http\Controllers\BookingController::class, 'create'])->name('bookings.create');
Route::post('/bookings/add', [App\Http\Controllers\BookingController::class, 'store'])->name('bookings.store');
Route::post('/bookings/{booking_id}', [App\Http\Controllers\BookingController::class, 'destroy'])->name('bookings.destroy');

//Services (CRUD)
Route::get('/services', [App\Http\Controllers\ServiceController::class, 'index'])->name('services.index');
Route::get('/services/create', [App\Http\Controllers\ServiceController::class, 'create'])->name('services.create');
Route::post('/services/add', [App\Http\Controllers\ServiceController::class, 'store'])->name('services.store');
Route::post('/services/{services_id}', [App\Http\Controllers\ServiceController::class, 'destroy'])->name('services.destroy');
*/


//Admin 
Route::get('admin/home',[App\Http\Controllers\HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');
Route::get('customer/home',[App\Http\Controllers\HomeController::class, 'customerHome'])->name('customer.customer-home')->middleware('is_customer');

