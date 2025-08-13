<?php

namespace Database\Seeders;

use App\Models\Room;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $objs = [
            '1',
            '2',
            '3',
            '4',
            '5+',
        ];

        foreach($objs as $obj){
            Room::create([
                'name' => $obj,
            ]);
        }
    }
}
