<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Faker\Provider\en_US\Company;

class TimesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker=Faker::create();

       DB::table('operating_times')->insert([
            'restname'=> $faker->company,
            'Monday' => '9am-10pm',
            'Tuesday' => '9am-10pm',
            'Wednesday' => '11am-12pm',
            'Thursday' => '12am-12pm',
            'Friday' => '11am-12pm',
            'Saturday' => '11am-12pm',
             'Sunday' => '11am-12pm',

        ]);
    }
}