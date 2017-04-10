<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resturant extends Model
{
    //
    //
     protected $fillable = [
        'name','Address','Hours of Operation', 'website','phone number'
    ];
}
