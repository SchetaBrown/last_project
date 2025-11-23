<?php

namespace Database\Seeders;

use App\Models\Status;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $array = ['accepted', 'verified', 'rejected', 'in_processing', 'in_usage', 'in_repair', 'free'];
        foreach ($array as $item) {
            Status::create([
                'title' => $item
            ]);
        }
    }
}
