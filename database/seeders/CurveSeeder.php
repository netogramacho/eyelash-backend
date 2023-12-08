<?php

namespace Database\Seeders;

use App\Models\Curve;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CurveSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Curve::create([
            "curve" => "C",
            "user_id" => 1,
        ]);

        Curve::create([
            "curve" => "CC",
            "user_id" => 1,
        ]);

        Curve::create([
            "curve" => "D",
            "user_id" => 2,
        ]);

        Curve::create([
            "curve" => "DD",
            "user_id" => 2,
        ]);

        Curve::create([
            "curve" => "L",
            "user_id" => 1,
        ]);

        Curve::create([
            "curve" => "LC",
            "user_id" => 1,
        ]);

        Curve::create([
            "curve" => "LU",
            "user_id" => 1,
        ]);

        Curve::create([
            "curve" => "N",
            "user_id" => 2,
        ]);
    }
}
