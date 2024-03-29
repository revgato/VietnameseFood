<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CitySeeder::class);
        $this->call(DishTypeSeeder::class);
        $this->call(DishSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(RestaurantSeeder::class);
        $this->call(RestaurantMenuSeeder::class);
        $this->call(CommentSeeder::class);
        $this->call(BookingSeeder::class);
    }
}
