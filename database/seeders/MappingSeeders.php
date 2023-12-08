<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Mapping;
class MappingSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Mapping::create([
            "mapping" => "Boneca",
            "user_id" => 1,
        ]);

        Mapping::create([
            "mapping" => "Gatinho",
            "user_id" => 1,
        ]);

        Mapping::create([
            "mapping" => "Esquilo",
            "user_id" => 2,
        ]);

        Mapping::create([
            "mapping" => "Gato",
            "user_id" => 1,
        ]);

        Mapping::create([
            "mapping" => "Kim Kardashian",
            "user_id" => 2,
        ]);
    }
}
