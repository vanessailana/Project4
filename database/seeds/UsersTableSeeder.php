<?php

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
            'is_admin' => '0',
            'email' => str_random(10).'@gmail.com',
            'password' => '123456789',
        ]);
    }
}
