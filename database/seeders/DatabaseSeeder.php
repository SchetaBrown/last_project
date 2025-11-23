<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            RoleSeeder::class,
            UserSeeder::class,
            StatusSeeder::class,
            ProviderSeeder::class,
            AddressSeeder::class,
            CarBrandSeeder::class,
            CarCaseSeeder::class,
            CarModelSeeder::class,
            FuelSeeder::class,
            WheelSeeder::class,
            GearSeeder::class,
            TransmissionSeeder::class,
            CarGenerationSeeder::class,
            DriveLicenseCategorySeeder::class
        ]);
    }
}
