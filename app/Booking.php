<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    //
    protected $table = 'bookings';

    protected $fillable = [
        'booking_status', 'date', 'location'
        //x add foreign key lagi (cust_id, service_id)
    ];

}
