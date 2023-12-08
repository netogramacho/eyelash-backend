<?php

namespace Database\Seeders;

use App\Models\Weight;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WeightSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Weight::create([
            "weight" => 0.03,
            "user_id" => 1,
        ]);

        Weight::create([
            "weight" => 0.05,
            "user_id" => 1,
        ]);

        Weight::create([
            "weight" => 0.07,
            "user_id" => 1,
        ]);

        Weight::create([
            "weight" => 0.10,
            "user_id" => 2,
        ]);

        Weight::create([
            "weight" => 0.15,
            "user_id" => 2,
        ]);

        Weight::create([
            "weight" => 0.20,
            "user_id" => 2,
        ]);

        Weight::create([
            "weight" => 0.25,
            "user_id" => 2,
        ]);
    }
}
