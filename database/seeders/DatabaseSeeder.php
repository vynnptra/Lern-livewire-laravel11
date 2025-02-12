<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(200)->create();

        User::factory()->create([
            'name' => 'Kevin Putra',
            'email' => 'kevin@example.com',
            'password' => bcrypt('12345678'),
        ]);
    }
}
