<?php

namespace App\Http\Controllers;

use App\Booking;
use App\Service;
use App\Customer;
use App\Seller;
use Illuminate\Http\Request;

// use DB;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $bookings = Booking::all();
        return view('bookings.index', compact('bookings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $service = Service::whereId($request->input('service'))->firstOrFail();
        $customer = auth()->guard('customer')->user();

        return view('bookings.create',compact('service','customer'));
       
        //  $seller = DB::table('sellers')->get();
        //  $service = DB::table('services')->get();
        //  $customer = DB::table('customers')->get();
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $booking = Booking::create([
            'service_id' => auth('service')->user()->id,
            'seller_id' => auth('seller')->user()->id,
            'cust_id' => auth('customer')->user()->id,
            
            'cust_username'=>$request->cust_username,
            'cust_phoneNo'=>$request->cust_phoneNo,
             'cust_address'=>$request->cust_address,
             'service_type' =>$request->service_type,
             'service_location' =>$request->service_location,
             'booking_status'=>$request->booking_status,  
            'date'=>$request->date,
            
            
         ]);

        return redirect()->route('bookings.index')->with('Success! booking has been created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // get the booking
        $bookings = Booking::find($id);

        // show the view and pass the shark to it
        //return View::make('bookings.show')->with('Show details');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //CHECK HERE (error)
        $bookings = Booking::find($id);
        return view('bookings.edit', compact('bookings'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate([
            'booking_status'=>'required',
            'date'=>'required',
            'location'=>'required',
        ]);

        $bookings = Booking::find($id);
        $bookings->booking_status = $request->booking_status;
        $bookings->date = $request->date;
        $bookings->location = $request->location;
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // BAIKI YANG NII
        $bookings=Booking::find($id);
        $bookings->delete();
        {
            return redirect()->route('bookings.index')->with('Success deleted');
        }
        
    }

}
