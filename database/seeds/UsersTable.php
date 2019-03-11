<?php

use Illuminate\Database\Seeder;

class UsersTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::insert([
             
            'name' => 'ikeogu Emmanuel ',
            'email' => 'ikeogu322@gmail.com',
            'password' => bcrypt('password'),
            'role_id' => '1',
            'type_id' => '1',
            
            
        ]);
        App\User::insert([
             
            'name' => 'Daniel dan ',
            'email' => 'daniel@gmail.com',
            'password' => bcrypt('password'),
            'role_id' => '2',
            'type_id' => '1',
            
            
        ]);
        App\User::insert([
             
            'name' => 'Ugochi',
            'email' => 'ugo@gmail.com',
            'password' => bcrypt('12345678'),
            'role_id' => '3',
            'type_id' => '2',
            'ability'=> '1',
            
            
        ]);
        App\User::insert([
             
            'name' => 'dan ',
            'email' => 'dan@gmail.com',
            'password' => bcrypt('12345678'),
            'role_id' => '3',
            'type_id' => '4',
            'ability'=> '1',
            
            
        ]);
        App\User::insert([
             
            'name' => 'John ',
            'email' => 'john@gmail.com',
            'password' => bcrypt('12345678'),
            'role_id' => '3',
            'type_id' => '3',
            'ability'=> '0',
            
            
        ]);
        App\User::insert([
             
            'name' => 'Sharon',
            'email' => 'sha@gmail.com',
            'password' => bcrypt('password'),
            'role_id' => '3',
            'type_id' => '4',
            'ability'=> '1',
            
        ]);
    }
}
