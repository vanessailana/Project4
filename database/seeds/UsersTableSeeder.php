<?php

use Illuminate\Database\Seeder;

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
      
       DB::table('users')->insert([
            'name' => 'matt',
            'username'=>str_random(10),
            'is_admin'=>rand(0,1),
            'email' => str_random(10).'@gmail.com',
            'password' => bcrypt('secret'),
        ]);
    }
}
