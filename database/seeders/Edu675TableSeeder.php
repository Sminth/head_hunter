<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class Edu675TableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('edu675')->delete();
        
        \DB::table('edu675')->insert(array (
            0 => 
            array (
                'id' => 1,
                'diplome' => 'baccalaureat',
                'annee' => '2023',
                'etablissement' => 'hjdsfghjgf',
                'idcandidat' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}