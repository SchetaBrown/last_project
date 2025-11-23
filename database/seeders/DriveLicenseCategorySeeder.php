<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DriveLicenseCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $array = ['A', 'B', 'C', 'D', 'M'];
        foreach ($array as $item) {
            Category::create([
                'title' => $item
            ]);
        }
    }
}
