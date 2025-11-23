<?php

namespace Database\Seeders;

use App\Models\CarGeneration;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CarGenerationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $array = [
            [
                'title' => 'x100',
                'power' => '280',
                'year' => '1994',
                'seat_quantity' => 5,
                'cost_per_day' => 3000,
                'status_id' => 7,
                'car_model_id' => 1,
                'gear_id' => 2,
                'fuel_id' => 1,
                'wheel_id' => 1,
                'transmission_id' => 1,
                'car_case_id' => 1,
            ],
        ];
        foreach ($array as $item) {
            CarGeneration::create($item);
        }
    }
}
