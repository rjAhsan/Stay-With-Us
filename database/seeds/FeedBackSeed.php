<?php

use Illuminate\Database\Seeder;
use App\FeedBack;
class FeedBackSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        FeedBack::create([
            'description'=>'This place is nice ',
            'user_id'=>1

        ]);

        FeedBack::create([
            'description'=>'This place is awsome',
            'user_id'=>1

        ]);
    }
}
