<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// Models

use App\Models\Type;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $types = ['HTML', 'CSS', 'Javascript', 'Vue.js', 'PHP', 'Laravel', 'MySQL'];

        foreach ($types as $type) {
        Type::create(['name' => $type]);
    }
    }
}
