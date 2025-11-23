<?php

namespace Database\Seeders;

use App\Models\Wheel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WheelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $array = ['right', 'left'];
        foreach ($array as $item) {
            Wheel::create([
                'title' => $item
            ]);
        }
    }
}
