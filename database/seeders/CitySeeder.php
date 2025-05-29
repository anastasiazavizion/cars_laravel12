<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        City::insert([
            ['name' => 'Los Angelos', 'state_id'=>1],
            ['name' => 'San Francisco', 'state_id'=>1],
            ['name' => 'New York', 'state_id'=>2],
            ['name' => 'Bufallo', 'state_id'=>2]
        ]);
    }
}
