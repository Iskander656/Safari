<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@safari.com',
            'password' => Hash::make('Qwerty6677'),
            'role' => 'admin',
        ]);
        User::create([
            'name' => 'Jhon User',
            'email' => 'user@safari.com',
            'password' => Hash::make('Qwerty8899'),
            'role' => 'user',
        ]);
        User::create([
            'name' => 'Guest',
            'email' => 'guest@safari.com',
            'password' => Hash::make('Qwerty1122'),
            'role' => 'guest',
        ]);
    }
}
