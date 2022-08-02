<?php

use Illuminate\Database\Seeder;
use App\Vehicle;
class VehicleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Vehicle::create([
            'Name'=>'Crola',
            'Model'=>'2019',
            'Type'=>'AC',
            'img_url'=>'none.jpeg',
            'terms'=>'Hello Terms And Condations',
            'fair'=>1500,
            'user_id'=>3

        ]);
    }
}
