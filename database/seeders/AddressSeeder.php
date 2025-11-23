<?php

namespace Database\Seeders;

use App\Models\Address;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $array = [
            [
                "street"=> "пушкина",
                "home"=> "колотушкина",
                "latitude"=> 52.285,
                "longitude"=> 104.288,
            ],
            [
                "street"=> "пушкина1",
                "home"=> "колотушкина1",
                "latitude"=> 52.291,
                "longitude"=> 104.289,
            ],
            [
                "street"=> "пушкина2",
                "home"=> "колотушкина2",
                "latitude"=> 52.276,
                "longitude"=> 104.304,
            ],
        ];

        foreach ($array as $item) {
            Address::create($item);
        }
    }
}
