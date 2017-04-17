<?php

use Illuminate\Database\Seeder;

class TimesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('times')->insert([
            'Monday' => '10am-2pm',
            'Tuesday'=> '10am-11pm',
            'Wednesday'=> '10am-11pm',
            'Thursday'=> '10am-11pm',
            'Friday'=> '10am-11pm',
            'Saturday'=> '10am-11pm',
            'Sunday'=> '10am-11pm',
        ]);//
    }
}
