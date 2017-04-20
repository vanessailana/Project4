<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class ResturantTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $faker=Faker::create();
       DB::table('restaurants')->insert([
            'name' => $faker->company,
            'street_address'=>$faker->streetAddress,
            'city'=>$faker->city,
            'state' => $faker->state,
            'zipcode'=> '90210',
            'website' =>$faker->url,
        ]);
    }
}
