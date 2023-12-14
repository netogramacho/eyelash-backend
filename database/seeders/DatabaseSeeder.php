<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Ramsey\Uuid\Uuid;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $uuid1 = Uuid::uuid4()->toString();
        $uuid2 = Uuid::uuid4()->toString();

        $userSeeder = new UsersSeeders($uuid1, $uuid2);
        $userSeeder->run();

        $mappingSeeder = new MappingSeeders($uuid1, $uuid2);
        $mappingSeeder->run();

        $weightSeeder = new WeightSeeder($uuid1, $uuid2);
        $weightSeeder->run();

        $curveSeeder = new CurveSeeder($uuid1, $uuid2);
        $curveSeeder->run();

        $volumeSeeder = new VolumeSeeder($uuid1, $uuid2);
        $volumeSeeder->run();

        $sizeSeeder = new SizeSeeder($uuid1, $uuid2);
        $sizeSeeder->run();
    }
}
