<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    //so i have an is admin column in the database
    // if an admin has a value of one it is a Admin,
    // //if it has a value of 0, its a reviewer.
    // so when we run a seeder. i did 'is_admin'-> random(0,1)
    // this will randomly generate either a regular user or an admin
    public function run()
    {
      $faker=Faker::create();

       DB::table('users')->insert([
            'name' => $faker->name,
            'username'=>$faker->username,
            'is_admin'=>rand(0,1),
            'email' => $faker->email,
            'password' => bcrypt('secret'),
        ]);
    }
}
