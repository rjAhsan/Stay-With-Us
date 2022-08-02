<?php

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
        // $this->call(UsersTableSeeder::class);
        $this->call(RolesSeed::class);
        $this->call(UsersSeeder::class);
        $this->call(FeedBackSeed::class);
        $this->call(MealSeeder::class);
        $this->call(VehicleSeeder::class);
        $this->call(LocationSeeder::class);
    }
}
