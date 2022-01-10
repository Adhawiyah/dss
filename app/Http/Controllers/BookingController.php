<?php

namespace App\Http\Controllers;

use App\Booking;
use Illuminate\Http\Request;
use DB;

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
    public function create()
    {
        // create booking
        $sel = DB::table('sellers')->get();
        $ser = DB::table('services')->get();
        $cus = DB::table('customers')->get();
        return view('bookings.create',compact('sel','ser','cus'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'booking_status'=>'required',
            'date'=>'required',
            'location'=>'required',
        ]);

        $bookings = Booking::create([
            'booking_status'=>$request->booking_status,
            'date'=>$request->date,
            'location'=>$request->location,
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
        return View::make('bookings.show')->with('Show details');
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
        $services->save();
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

        return redirect()->route('bookings.index')->with('Success deleted');
    }

}
