<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Mapping;
class MappingSeeders extends Seeder
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
        Mapping::create([
            "mapping" => "Boneca",
            "user_id" => $this->uuid1,
        ]);

        Mapping::create([
            "mapping" => "Gatinho",
            "user_id" => $this->uuid1,
        ]);

        Mapping::create([
            "mapping" => "Esquilo",
            "user_id" => $this->uuid2,
        ]);

        Mapping::create([
            "mapping" => "Gato",
            "user_id" => $this->uuid1,
        ]);

        Mapping::create([
            "mapping" => "Kim Kardashian",
            "user_id" => $this->uuid2,
        ]);
    }
}
