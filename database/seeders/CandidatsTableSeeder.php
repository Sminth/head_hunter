<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CandidatsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('candidats')->delete();
        
        \DB::table('candidats')->insert(array (
            0 => 
            array (
                'id' => 3,
                'noms' => 'sminth',
                'date_naissance' => '2006-12-23',
                'lieu_naissance' => 'plateau',
                'genre' => 'Homme',
                'sm' => 'Marié',
                'profession' => NULL,
                'contact' => '0141003942',
                'email' => 'virtus225one@gmail.com',
                'password' => 'B2Zp%X',
                'created_at' => '2024-03-21 20:13:01',
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 4,
                'noms' => 'lolipop koffi',
                'date_naissance' => '2006-12-23',
                'lieu_naissance' => 'plateau',
                'genre' => 'Homme',
                'sm' => 'Marié',
                'profession' => NULL,
                'contact' => '0141003942',
                'email' => 'virtus225one@gmail.com',
                'password' => 'B2Zp%d',
                'created_at' => '2024-03-21 20:13:01',
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}