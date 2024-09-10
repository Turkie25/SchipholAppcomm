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
    public function run()
    {
        // User::factory(10)->create();

        User::factory()->create([
            [
                'name' => 'Furkan',
                'email' => 'furkan@gmail.com',
                'password' => '12345',
            ],
            [
                'name' => 'Samed',
                'email' => 'samed@gmail.com',
                'password' => '12345',
            ],
        ]);
    }
}
