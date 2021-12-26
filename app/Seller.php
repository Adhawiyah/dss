<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
    protected $table = 'sellers';

    protected $fillable = [
       'seller_name', 'seller_username','password','seller_email','location','seller_phoneNo', 'serialNo'
       //x add foreign key lagi (admin_id)
    ];

    
}
