<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call(UsersTableSeeder::class);
        $this->call(Sect45TableSeeder::class);
        $this->call(Entre574TableSeeder::class);
        $this->call(Off78TableSeeder::class);
        $this->call(CandidatHasEmploisTableSeeder::class);
        $this->call(CandidatsTableSeeder::class);
        $this->call(Edu675TableSeeder::class);
        $this->call(Exp453TableSeeder::class);
    }
}
