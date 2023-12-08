<?php

namespace Database\Seeders;

use App\Models\Volume;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VolumeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Volume::create([
            "volume" => "Brasileiro",
            "user_id" => 1,
        ]);

        Volume::create([
            "volume" => "Clássico",
            "user_id" => 1,
        ]);

        Volume::create([
            "volume" => "Egípcio",
            "user_id" => 1,
        ]);

        Volume::create([
            "volume" => "Híbrido",
            "user_id" => 2,
        ]);

        Volume::create([
            "volume" => "Russo",
            "user_id" => 2,
        ]);
    }
}
