<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class FoodTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
           $faker=Faker::create();
            DB::table('food')->insert([
            'rest_name' => $faker->company,
            'item'=>'Donut',
            'description'=>$faker->text,
            'price' => '$'.rand(1,100),
           
        ]);
    }
}

