<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// Models

use App\Models\Technology;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Technology::truncate();

        for($i = 0; $i < 10; $i++) {
            Technology::create([
                'name' => fake()->word()
            ]);
        }
    }
}
