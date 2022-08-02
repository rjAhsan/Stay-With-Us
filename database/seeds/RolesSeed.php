<?php

use Illuminate\Database\Seeder;
use App\Role;
class RolesSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items=[
            ['id' => 1, 'name' => 'Host',],
            ['id' => 2, 'name' => 'Guest',],
            ['id' => 3, 'name' => 'Admin',],
        ];

        foreach($items as $item){
            Role::create($item);
        }
        
    }
}
