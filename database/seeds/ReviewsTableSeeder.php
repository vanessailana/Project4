<?php

use Illuminate\Database\Seeder;

class ReviewsTableSeeder extends Seeder
{
   

    public function run()
    {
       DB::table('review')->insert([
            'rest_name'=>'Chipotle',
            'rest_city' => 'NeverLand',
            'useremail'=> 'matt@gmail.com',
            'username'=> 'donut1234',
            'ratingvalue' => '2',
            'tagline'=> 'yum',
            'body'=> 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry st',
        ]);
    }
}