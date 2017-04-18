<?php

use Illuminate\Database\Seeder;

class FoodTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('food')->insert([
            'rest_name' => 'Chipotle',
            'item'=>'Donut',
            'description'=>'yummy',
            'price' => '$100.00',
           
        ]);
    }
}

