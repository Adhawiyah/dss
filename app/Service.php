<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $table = 'services';

    protected $fillable = [
        'service_type', 'service_status','service_location','seller_id'
    ];

     public function seller(){
        return $this->belongsTo(Seller::class, 'seller_id' );
     }
    
}
