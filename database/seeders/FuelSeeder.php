<?php

namespace Database\Seeders;

use App\Models\Fuel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FuelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $array = ['petrol', 'diesel', 'hybrid', 'gas', 'electric'];
        foreach ($array as $item) {
            Fuel::create([
                'title' => $item
            ]);
        }
    }
}
