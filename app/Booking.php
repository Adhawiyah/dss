<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    //
    protected $table = 'bookings';

    protected $fillable = [
        'booking_status', 'date', 'location','seller_id','cust_id','service_id'
        
    ];

    public function seller(){
        return $this->belongsTo(Seller::class, 'seller_id' );
    }

    public function customer(){
        return $this->belongsTo(Customer::class, 'cust_id' );
    }

    public function service(){
        return $this->belongsTo(Service::class, 'service_id' );
    }

}
