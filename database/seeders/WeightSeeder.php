<?php

namespace Database\Seeders;

use App\Models\Weight;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WeightSeeder extends Seeder
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
        Weight::create([
            "weight" => 0.03,
            "user_id" => $this->uuid1,
        ]);

        Weight::create([
            "weight" => 0.05,
            "user_id" => $this->uuid1,
        ]);

        Weight::create([
            "weight" => 0.07,
            "user_id" => $this->uuid1,
        ]);

        Weight::create([
            "weight" => 0.10,
            "user_id" => $this->uuid2,
        ]);

        Weight::create([
            "weight" => 0.15,
            "user_id" => $this->uuid2,
        ]);

        Weight::create([
            "weight" => 0.20,
            "user_id" => $this->uuid2,
        ]);

        Weight::create([
            "weight" => 0.25,
            "user_id" => $this->uuid2,
        ]);
    }
}
