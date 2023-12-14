<?php

namespace Database\Seeders;

use App\Models\Curve;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CurveSeeder extends Seeder
{
    protected $uuid1;
    protected $uuid2;

    public function __construct($uuid1, $uuid2) {
        $this->uuid1 = $uuid1;
        $this->uuid2 = $uuid2;
    }
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Curve::create([
            "curve" => "C",
            "user_id" => $this->uuid1,
        ]);

        Curve::create([
            "curve" => "CC",
            "user_id" => $this->uuid1,
        ]);

        Curve::create([
            "curve" => "D",
            "user_id" => $this->uuid2,
        ]);

        Curve::create([
            "curve" => "DD",
            "user_id" => $this->uuid2,
        ]);

        Curve::create([
            "curve" => "L",
            "user_id" => $this->uuid1,
        ]);

        Curve::create([
            "curve" => "LC",
            "user_id" => $this->uuid1,
        ]);

        Curve::create([
            "curve" => "LU",
            "user_id" => $this->uuid2,
        ]);

        Curve::create([
            "curve" => "N",
            "user_id" => $this->uuid2,
        ]);
    }
}
