<?php

//my seeder generates randomly users who are and who are not admin. 
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Werid Person',
            'username' => 'ugly',
            'is_admin' => rand(0,1),
            'email' => str_random(10).'@gmail.com',
            'password' => '123456789',
        ]);
    }
}
