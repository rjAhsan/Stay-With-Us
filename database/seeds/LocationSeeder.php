<?php

use Illuminate\Database\Seeder;
use App\Location;
class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Location::create([
            'title'=>'Luxry Rooms',
            'type'=>'apartment',
            'capasity'=>'4',
            'beds'=>'Triple',
            'city'=>'Lahore',
            'description'=>'loream ipsum',
            'address'=>'Lahore Lahore',
            'pin'=>'12.111111,13.11111',
            'rate'=>'2000',
            'policy'=>'loream ipsum policey dummy',
            'img_url'=>'demo.jpeg',
            'meal_id'=>null,
            'vehicle_id'=>null,
            'user_id'=>3,

        ]);
    }
}
