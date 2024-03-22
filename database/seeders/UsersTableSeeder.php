<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'admin@headhunter.com',
                'email' => 'head225',
                'email_verified_at' => NULL,
                'password' => '$2y$12$eoECuCHPLuZ2I07c7xE9/.SbpjKhJAqxG5Dpm62WPwJp3OCkeVLta',
                'remember_token' => NULL,
                'created_at' => '2024-03-20 20:34:00',
                'updated_at' => '2024-03-20 20:34:00',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Admin',
                'email' => 'admin@headhunter.com',
                'email_verified_at' => NULL,
                'password' => '$2y$12$NnCxRY0VUaD5rW8a/cLpm.pgsLUcRo7eVpfr7.qyQ7Wh5cIAwseK2',
                'remember_token' => NULL,
                'created_at' => '2024-03-20 20:34:32',
                'updated_at' => '2024-03-20 20:34:32',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'lolipop Gbofloto',
                'email' => 'virtus225one@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$12$Oh5DhtPA/jAP63RP9Lz4aeDLsrlRjUCk/gHayyrFD8eTnqdI9JzIe',
                'remember_token' => NULL,
                'created_at' => '2024-03-22 02:12:09',
                'updated_at' => '2024-03-22 02:12:09',
            ),
        ));
        
        
    }
}