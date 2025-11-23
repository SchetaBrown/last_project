<?php

namespace Database\Seeders;

use App\Models\Gear;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GearSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $array = ['full', 'back', 'forward'];
        foreach ($array as $item) {
            Gear::create([
                'title' => $item
            ]);
        }
    }
}
