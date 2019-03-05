<?php

use Illuminate\Database\Seeder;

class RolesTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Role::insert([
                
            'name' => 'Super Admin ',
            'Description' => 'SuperAdmin',
        
            
            
        ]);
        
        App\Role::insert([
                
            'name' => 'Moderator ',
            'Description' => 'Not fully incharge',
        
            
            
        ]);
         
        App\Role::insert([
                
            'name' => 'Users ',
            'Description' => 'A User',
        
            
            
        ]);
    }
}
