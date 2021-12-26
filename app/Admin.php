<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    //Admin Model
    protected $table = 'admins';

    protected $fillable = [
        'admin_username', 'password'
    ];
}
