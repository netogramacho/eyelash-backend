<?php

namespace Database\Seeders;

use App\Models\Volume;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VolumeSeeder extends Seeder
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
        Volume::create([
            "volume" => "Brasileiro",
            "user_id" => $this->uuid1,
        ]);

        Volume::create([
            "volume" => "Clássico",
            "user_id" => $this->uuid1,
        ]);

        Volume::create([
            "volume" => "Egípcio",
            "user_id" => $this->uuid1,
        ]);

        Volume::create([
            "volume" => "Híbrido",
            "user_id" => $this->uuid2,
        ]);

        Volume::create([
            "volume" => "Russo",
            "user_id" => $this->uuid2,
        ]);
    }
}
