<?php

namespace Database\Seeders;

use App\Models\Sublocation;
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
        $this->call([
            LocationSeeder::class,
            SublocationSeeder::class,
            RoomSeeder::class,
            HomeTypeSeeder::class,
            RenovationSeeder::class,
            ApartmentSeeder::class,
        ]);
    }
}
