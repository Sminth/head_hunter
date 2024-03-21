<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class Entre574TableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('entre574')->delete();
        
        \DB::table('entre574')->insert(array (
            0 => 
            array (
                'id' => 1,
                'libelle' => 'Orange',
                'adresse' => 'Abidan, Cocody',
                'image' => 'orange-c7HD.png',
                'created_at' => '2024-03-21 00:06:04',
                'updated_at' => '2024-03-21 00:06:04',
            ),
            1 => 
            array (
                'id' => 2,
                'libelle' => 'Moov Africa',
                'adresse' => 'Abidan, Plateau',
                'image' => 'moov-XdLH.png',
                'created_at' => '2024-03-21 00:06:48',
                'updated_at' => '2024-03-21 00:06:48',
            ),
            2 => 
            array (
                'id' => 3,
                'libelle' => 'CEPICI',
                'adresse' => 'Abidjan, Treichville',
                'image' => 'cepici-tsf2.png',
                'created_at' => '2024-03-21 00:07:29',
                'updated_at' => '2024-03-21 00:07:29',
            ),
            3 => 
            array (
                'id' => 4,
                'libelle' => 'BCEAO',
                'adresse' => 'Abidjan, Côte d\'Ivoire',
                'image' => 'bceao-Xphc.jpg',
                'created_at' => '2024-03-21 00:08:28',
                'updated_at' => '2024-03-21 00:08:28',
            ),
            4 => 
            array (
                'id' => 5,
                'libelle' => 'Akilyum',
                'adresse' => 'Abidjan, Cocody Attoban',
                'image' => 'aimm-ShH4.jpg',
                'created_at' => '2024-03-21 17:40:05',
                'updated_at' => '2024-03-21 17:40:44',
            ),
        ));
        
        
    }
}