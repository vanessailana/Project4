<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
     protected $fillable = [
        'rest_name', 'item','description','price',
    ];

    protected $table = 'food';
}
