<?php

namespace Database\Seeders;

use App\Models\Flight;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        // Create 10 random users
//        User::factory(10)->create();

        // Create specific users
        $users = [
            [
                'name' => 'Furkan',
                'email' => 'furkan@gmail.com',
                'password' => bcrypt('12345'), // Make sure to hash the password
            ],
            [
                'name' => 'Samed',
                'email' => 'samed@gmail.com',
                'password' => bcrypt('12345'), // Make sure to hash the password
            ],
        ];

        foreach ($users as $user) {
            User::factory()->create($user);
        }

        Flight::factory()->count(10)->create();
    }
}
