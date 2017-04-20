<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Faker\Provider\en_US\Company'

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
            'Monday'=> '24 Hours',
            'Tuesday'=> '9am -1pm',
            'Wednesday'=> '4am-6am',
            'Thursday'=> '5pm-10pm',
            'Friday'=>'7am-6pm',
            'Saturday'=>'10am-10pm',
            'Sunday'=>'10am-10pm',
            'restname'=>$faker->company,


           
        ]);
    }
}