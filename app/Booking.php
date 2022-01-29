<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    //
    protected $table = 'bookings';

    protected $fillable = [
        'cust_id','cust_username','cust_phoneNo','cust_address','service_type','service_location','booking_status', 'date',
        
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
