<?php

use Illuminate\Database\Seeder;

class ReviewTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('reviews')->insert([
            'rest_name' => 'Chipotle',
            'useremail' => 'matt@gmail.com',
            'ratingvalue' => '5',
            'tagline' => str_random(10),
            'body' => 'yum',
            
        ]);
    }
}