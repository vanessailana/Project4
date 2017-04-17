<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Times extends Model
{
    protected $fillable = [
        'Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday',
    ];


    protected $table = 'times';

}
