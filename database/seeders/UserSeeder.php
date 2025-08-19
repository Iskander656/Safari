<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // Admin
        User::create([
            'name' => 'Admin User',
            'email' => 'admin@safari.test',
            'password' => Hash::make('password'),
            'role' => 'admin',
        ]);

        // Normal User
        User::create([
            'name' => 'Normal User',
            'email' => 'user@safari.test',
            'password' => Hash::make('password'),
            'role' => 'user',
        ]);

        // Guest (just in case)
        User::create([
            'name' => 'Guest User',
            'email' => 'guest@safari.test',
            'password' => Hash::make('password'),
            'role' => 'guest',
        ]);
    }
}
