<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Size;
use Illuminate\Database\Seeder;

use App\Models\User;
use App\Models\Mapping;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $this->call([
            UsersSeeders::class,
            MappingSeeders::class,
            WeightSeeder::class,
            CurveSeeder::class,
            VolumeSeeder::class,
            SizeSeeder::class,
        ]);
    }
}
