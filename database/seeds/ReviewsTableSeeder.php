<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Faker\Factory as Faker;

class ReviewsTableSeeder extends Seeder
{
   

    public function run()
    {

        $faker=Faker::create();

       DB::table('review')->insert([
            'rest_name'=> $faker->name,
            'rest_city' =>$faker->city,
            'useremail'=> $faker->email,
            'username'=>  $faker->username,
            'ratingvalue' => rand(1,5),
            'tagline'=> $faker->word,
            'body'=> $faker->paragraph,
        ]);
    }
}