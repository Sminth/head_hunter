<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CandidatHasEmploisTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('candidat_has_emplois')->delete();
        
        \DB::table('candidat_has_emplois')->insert(array (
            0 => 
            array (
                'id' => 1,
                'idcandidat' => 3,
                'idoffre' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}