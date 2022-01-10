<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Search extends Model                  // search service_type & service_location
{
    protected $table = 'searchs';

    protected $fillable = [
       'cust_id','service_id'
       
    ];

    public function customer(){
        return $this->belongsTo(Customer::class, 'cust_id' );
    }
    
    public function service(){
        return $this->belongsTo(Service::class, 'service_id' );
    }

}
