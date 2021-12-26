<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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

