<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    
    protected $fillable = [
        'rest_name','useremail','ratingvalue','tagline','body'
    ];


    protected $table = 'review';
}
