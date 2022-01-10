<?php

namespace App;

use Illuminate\Foundation\Auth\User as Model;
// use Illuminate\Database\Eloquent\Model; //23hb

class Seller extends Model
{
    protected $table = 'sellers';

    protected $fillable = [
       'seller_name', 'seller_username','password','seller_email','location','seller_phoneNo', 'serialNo','admin_id'
       
    ];

    
}
