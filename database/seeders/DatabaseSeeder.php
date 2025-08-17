<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Sublocation;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\RoomSeeder;
use Database\Seeders\HomeTypeSeeder;
use Database\Seeders\LocationSeeder;
use Database\Seeders\ApartmentSeeder;
use Database\Seeders\RenovationSeeder;
use Database\Seeders\SublocationSeeder;

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
