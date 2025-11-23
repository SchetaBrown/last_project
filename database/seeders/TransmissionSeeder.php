<?php

namespace Database\Seeders;

use App\Models\Transmission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TransmissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $array = ['automatic', 'mechanical', 'variator', 'robotic'];
        foreach ($array as $item) {
            Transmission::create([
                'title' => $item
            ]);
        }
    }
}
