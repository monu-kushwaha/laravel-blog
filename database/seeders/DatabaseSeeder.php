<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Note;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $this->call([
            StudentSeedes::class,
            // UserSeeder::class
        ]);

        // User::factory(10)->create();

        // User::factory()->create([
        //     'id' => 1,
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        //     'passowrd' => bcrypt('pass123'),
        // ]);

        // Note::factory(100)->create();
    }
}
