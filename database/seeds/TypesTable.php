<?php

use Illuminate\Database\Seeder;

class TypesTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Type::insert([
                
            'name' => 'admins',
            'Description' => 'not a user',
        
            
            
        ]);
        App\Type::insert([
                
            'name' => 'FIsherman',
            'Description' => 'First User',
        
            
            
        ]);
        
        App\Type::insert([
                
            'name' => 'Hunter',
            'Description' => 'Second user',
        
            
            
        ]);
        App\Type::insert([
                
            'name' => 'Farmer',
            'Description' => 'third user',
        
            
            
        ]);
    }
}
