<?php

namespace Database\Seeders;

use App\Models\Model;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Model::insert([
            ['name' => 'Camry', 'maker_id' => 1],
            ['name' => 'Corolla', 'maker_id' => 1],
            ['name' => 'Escape', 'maker_id' => 2],
        ]);
    }
}
