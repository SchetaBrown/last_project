<?php

namespace Database\Seeders;

use App\Models\CarModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CarModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $array = [
            [
                'title' => 'mark 2',
                'car_brand_id' => 1,
            ],
            [
                'title' => 'chaser',
                'car_brand_id' => 1,
            ],
            [
                'title' => 'cresta',
                'car_brand_id' => 1,
            ],
        ];

        foreach ($array as $item) {
            CarModel::create($item);
        }
    }
}
