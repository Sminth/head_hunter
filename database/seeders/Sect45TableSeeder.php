<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class Sect45TableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('sect45')->delete();
        
        \DB::table('sect45')->insert(array (
            0 => 
            array (
                'id' => 3,
                'libelle' => 'Comptabilité',
                'image' => NULL,
                'created_at' => '2024-03-20 23:26:49',
                'updated_at' => '2024-03-20 23:39:36',
            ),
            1 => 
            array (
                'id' => 4,
                'libelle' => 'Education',
                'image' => NULL,
                'created_at' => '2024-03-20 23:39:51',
                'updated_at' => '2024-03-20 23:39:51',
            ),
            2 => 
            array (
                'id' => 5,
                'libelle' => 'Santé',
                'image' => NULL,
                'created_at' => '2024-03-20 23:40:29',
                'updated_at' => '2024-03-20 23:40:29',
            ),
            3 => 
            array (
                'id' => 6,
                'libelle' => 'Juridique',
                'image' => NULL,
                'created_at' => '2024-03-20 23:41:01',
                'updated_at' => '2024-03-20 23:41:01',
            ),
            4 => 
            array (
                'id' => 7,
                'libelle' => 'Informatique',
                'image' => NULL,
                'created_at' => '2024-03-20 23:41:24',
                'updated_at' => '2024-03-20 23:41:24',
            ),
            5 => 
            array (
                'id' => 8,
                'libelle' => 'Domotique',
                'image' => NULL,
                'created_at' => '2024-03-20 23:41:36',
                'updated_at' => '2024-03-20 23:41:36',
            ),
            6 => 
            array (
                'id' => 9,
                'libelle' => 'Marketing',
                'image' => NULL,
                'created_at' => '2024-03-20 23:41:48',
                'updated_at' => '2024-03-20 23:41:48',
            ),
            7 => 
            array (
                'id' => 10,
                'libelle' => 'Robotique',
                'image' => NULL,
                'created_at' => '2024-03-20 23:42:13',
                'updated_at' => '2024-03-20 23:42:13',
            ),
        ));
        
        
    }
}