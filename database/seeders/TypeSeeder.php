<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Type;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $typeNames = [
            "Full-Stack",
            "Front-End",
            "Back-End",
            "Database"
        ];
    foreach ($typeNames as $name) {
        $newType = new Type();
        $newType->name = $name;
        $newType->save();
    }
    }
}