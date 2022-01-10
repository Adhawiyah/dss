<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Search extends Model
{
    protected $table = 'searchs';

    protected $fillable = [
       'seller_id','cust_id','service_id'
       
    ];

    public function customer(){
        return $this->belongsTo(Customer::class, 'cust_id' );
    }
    
    public function seller(){
        return $this->belongsTo(Seller::class, 'seller_id' );
    }

    public function service(){
        return $this->belongsTo(Service::class, 'service_id' );
    }

}
