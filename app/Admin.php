<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    //Admin Model
    protected $table = 'admins';

    protected $fillable = [
        'admin_username', 'password','seller_name','service_status'
    ];

    public function service(){
        return $this->belongsTo(Service::class, 'service_id' );
     }
    
     public function seller(){
        return $this->belongsTo(Seller::class, 'seller_id' );
     }
    
}
