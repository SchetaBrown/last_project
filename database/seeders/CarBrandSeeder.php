<?php

namespace Database\Seeders;

use App\Models\CarBrand;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CarBrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $array = ['toyota', 'mitsubishi', 'mazda', 'lexus', 'bmw', 'mercedez', 'audi'];

        foreach ($array as $item) {
            CarBrand::create([
                'title' => $item
            ]);
        }
    }
}
