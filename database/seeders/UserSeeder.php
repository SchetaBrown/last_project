<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory(50)->create();

        User::create([
            'login' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('123123123'),
            'role_id' => 2,
        ]);

        User::create([
            'login' => 'manager',
            'email' => 'manager@gmail.com',
            'password' => Hash::make('123123123'),
            'role_id' => 3,
        ]);
    }
}
