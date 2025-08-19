<?php

namespace Database\Seeders;

use App\Models\Room;
use App\Models\HomeType;
use App\Models\Location;
use App\Models\Apartment;
use App\Models\Renovation;
use App\Models\Sublocation;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ApartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $objs = [
            [
                'user_id' => User::inRandomOrder()->first()->id,
                'title' => '3 комнаты центр',
                'location_id' => Location::inRandomOrder()->first()->id,
                'sublocation_id' => Sublocation::inRandomOrder()->first()->id,
                'room_id' => Room::inRandomOrder()->first()->id,
                'renovation_id' => Renovation::inRandomOrder()->first()->id,
                'home_type_id' => HomeType::inRandomOrder()->first()->id,
                'price' => fake()->numberBetween(35000, 190000),
                'area' => 'Центр города',
                'floor' => fake()->numberBetween(1, 4),
                'total_floors' => fake()->numberBetween(1, 4),
                'elevator' => fake()->boolean(),
                'exchange' => fake()->boolean(),
                'parking' => fake()->boolean(),
                'description' => 'Уютная квартира в центре города',
                'phone' => fake()->phoneNumber(),
                'image' => 'img/3.webp',
            ],
        ];

        foreach ($objs as $obj) {
            Apartment::create([
                'user_id' => $obj['user_id'],
                'title' => $obj['title'],
                'location_id' => $obj['location_id'],
                'sublocation_id' => $obj['sublocation_id'],
                'room_id' => $obj['room_id'],
                'renovation_id' => $obj['renovation_id'],
                'home_type_id' => $obj['home_type_id'],
                'price' => $obj['price'],
                'area' => $obj['area'],
                'floor' => $obj['floor'],
                'total_floors' => $obj['total_floors'],
                'elevator' => $obj['elevator'],
                'exchange' => $obj['exchange'],
                'parking' => $obj['parking'],
                'description' => $obj['description'],
                'phone' => $obj['phone'],
                'image' => $obj['image'],
            ]);
        }
    }
}
