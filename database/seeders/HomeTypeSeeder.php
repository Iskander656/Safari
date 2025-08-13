<?php

namespace Database\Seeders;

use App\Models\HomeType;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class HomeTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $objs = [
            'Квартира',
            'Элитка',
            'Полуэлитка',
            'Плановый Дом / Коттедж',
            'Дача',
        ];

        foreach($objs as $obj){
            HomeType::create([
                'name' => $obj,
            ]);
        }
    }
}
