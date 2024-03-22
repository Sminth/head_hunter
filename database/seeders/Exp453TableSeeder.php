<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class Exp453TableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('exp453')->delete();
        
        \DB::table('exp453')->insert(array (
            0 => 
            array (
                'id' => 1,
                'libelle' => 'hgjsfhg',
                'duree' => '4545',
                'entreprise' => 'orange',
                'contrat' => 'CDD',
                'idcandidat' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}