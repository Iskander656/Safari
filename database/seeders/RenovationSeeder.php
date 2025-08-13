<?php

namespace Database\Seeders;

use App\Models\Renovation;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RenovationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $objs = [
            'Косметический',
            'Гос. ремонт',
            'Евроремонт',
            'Дизайнерский',
            'Средний',
            'Тебуется ремонт',
        ];

        foreach($objs as $obj){
            Renovation::create([
                'name' => $obj,
            ]);
        }
    }
}
