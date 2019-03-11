<?php

use Illuminate\Database\Seeder;

class ActionTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Action::insert([
                
            'value' => '10',
            'user_id' => '4',
        
            
            
        ]);
        App\Action::insert([
                
            'value' => '10',
            'user_id' => '5',
        
            
            
        ]);
        App\Action::insert([
                
            'value' => '10',
            'user_id' => '6',
        
            
            
        ]);
        App\Action::insert([
                
            'value' => '10',
            'user_id' => '2',
        
            
            
        ]);
    }
}
