<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Times extends Model
{
    protected $fillable = [
        'Monday','restname','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday',
    ];


    protected $table = 'operating_times';

}
