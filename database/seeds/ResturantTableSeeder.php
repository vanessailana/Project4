<?php

use Illuminate\Database\Seeder;

class ResturantTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
       DB::table('restaurants')->insert([
            'name' => 'Food'.str_random(10),
            'street_address'=>str_random(10),
            'city'=>'NeverLand',
            'state' => str_random(10),
            'zipcode'=> '90210',
            'website' => url(str_random(10)) .'.com',
        ]);
    }
}
