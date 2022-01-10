<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $table = 'services';

    protected $fillable = [
        'service_type', 'service_status','seller_id'
    ];

    public function seller(){
        return $this->belongsTo(Seller::class, 'seller_id' );
    }
    
}
