<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call(UsersTableSeeder::class);
         $this->call(FoodTableSeeder::class);
         $this->call(ResturantTableSeeder::class);
         $this->call(ReviewsTableSeeder::class);
         $this->call(TimesTableSeeder::class);
    }
}
