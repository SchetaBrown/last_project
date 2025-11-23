<?php

namespace Database\Seeders;

use App\Models\CarCase;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CarCaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $array = ['седан', 'хэтчбек', 'универсал', 'пикап'];

        foreach($array as $item) {
            CarCase::create([
                'title' => $item
            ]);
        }
    }
}
