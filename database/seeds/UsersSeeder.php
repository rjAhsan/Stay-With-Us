<?php

use Illuminate\Database\Seeder;
use App\User;
class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=>'Ahsan',
            'last_name'=>'Ali',
            'phone'=>'009213131313',
            'address'=>'House 11 Block 13-A lahore',
            'email'=>'admin@admin.com',
            'password'=>bcrypt('password'),
            'role_id'=>3

        ]);


        User::create([
            'name'=>'ali',
            'last_name'=>'Raza',
            'phone'=>'009213131313',
            'address'=>'House 11 Block 13-A karachi',
            'email'=>'ali@guest.com',
            'password'=>bcrypt('password'),
            'role_id'=>2
            

        ]);
        
        User::create([
            'name'=>'arshad',
            'last_name'=>'Ali',
            'phone'=>'009213131313',
            'address'=>'House 11 Block 13-A Islamabad',
            'email'=>'arshad@host.com',
            'password'=>bcrypt('password'),
            'role_id'=>1

        ]);
    }
}
