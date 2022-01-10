<?php

namespace App;

use Illuminate\Foundation\Auth\User as Model;
// use Illuminate\Database\Eloquent\Model;
// use Illuminate\Foundation\Auth\Customer as Authenticatable;

class Customer extends Model
{
    protected $table = 'customers';

    protected $fillable = [
        'cust_name', 
        'cust_username', 
        'password',
         'cust_email', 
         'cust_address', 
         'cust_phoneNo',
        'is_customer' //utk login customer
    ];
}

