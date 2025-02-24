<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Students;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

       // User::factory()->create([
       //     'name' => 'Test User',
       //     'email' => 'test@example.com',
       User::factory(10)->create();
        User::factory(1000)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        // Student DB
        Students::create([
            'name' => 'Christian',
            'age' => 20,
        ]);
        Students::create([
            'name' => 'Zee',
            'age' => 22,
        ]);
    }
}
