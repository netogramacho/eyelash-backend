<?php

namespace Database\Seeders;

use App\Models\Size;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SizeSeeder extends Seeder
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
        Size::create([
            "size" => 6,
            "user_id" => $this->uuid1,
        ]);

        Size::create([
            "size" => 7,
            "user_id" => $this->uuid1,
        ]);

        Size::create([
            "size" => 8,
            "user_id" => $this->uuid1,
        ]);

        Size::create([
            "size" => 9,
            "user_id" => $this->uuid2,
        ]);

        Size::create([
            "size" => 10,
            "user_id" => $this->uuid1,
        ]);

        Size::create([
            "size" => 11,
            "user_id" => $this->uuid1,
        ]);

        Size::create([
            "size" => 12,
            "user_id" => $this->uuid1,
        ]);

        Size::create([
            "size" => 13,
            "user_id" => $this->uuid1,
        ]);

        Size::create([
            "size" => 14,
            "user_id" => $this->uuid1,
        ]);

        Size::create([
            "size" => 15,
            "user_id" => $this->uuid1,
        ]);

        Size::create([
            "size" => 16,
            "user_id" => $this->uuid2,
        ]);

        Size::create([
            "size" => 17,
            "user_id" => $this->uuid2,
        ]);

        Size::create([
            "size" => 18,
            "user_id" => $this->uuid2,
        ]);

        Size::create([
            "size" => 19,
            "user_id" => $this->uuid2,
        ]);

        Size::create([
            "size" => 20,
            "user_id" => $this->uuid2,
        ]);
    }
}
