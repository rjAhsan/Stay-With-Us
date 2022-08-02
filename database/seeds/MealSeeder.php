<?php

use Illuminate\Database\Seeder;
use App\Meal;
class MealSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Meal::create([
            'catageroy'=>'One',
            'breakfast'=>'2 Eggs  2 Parahata  1 Tea',
            'lunch'=>'2 Chicken 2 NAAN  1 Tea',
            'dinner'=>'2 Beef 2 NAAN  1 coofe',
            'price'=>'200',
            'user_id'=>3



        ]);


        Meal::create([
            'catageroy'=>'Two',
            'breakfast'=>'2 Eggs  2 Parahata  1 Tea',
            'lunch'=>'2 Chicken 2 NAAN  1 Tea',
            'dinner'=>'2 Beef 2 NAAN  1 coofe',
            'price'=>'200',
            'user_id'=>3



        ]);

        Meal::create([
            'catageroy'=>'Three',
            'breakfast'=>'2 Eggs  2 Parahata  1 Tea',
            'lunch'=>'2 Chicken 2 NAAN  1 Tea',
            'dinner'=>'2 Beef 2 NAAN  1 coofe',
            'price'=>'200',
            'user_id'=>3



        ]);
    }
}
