<?php

use Illuminate\Database\Seeder;
use App\Vaca;
use App\Faker; 
class VacasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    
    public function run() {
        DB::table('vacas')->truncate();
        


        foreach (range(0, 100) as $i){
           
             Concurso::create([
                'id_produtor' => $i,
                'data_nascimento' => '2017-03-15'
                 ]);
                
        }

        
            
           
        
    }
}
