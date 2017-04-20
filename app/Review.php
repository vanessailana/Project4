<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    
    protected $fillable = [
        'rest_name','rest_city','username','useremail','ratingvalue','tagline','body'
    ];


    protected $table = 'review';
}
