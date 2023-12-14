<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\User;

class UsersSeeders extends Seeder
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

        User::create([
            "id" => $this->uuid1,
            'name' => 'Barbara Macarena',
            "email" => "barbara@gmail.com",
            "password" => bcrypt('123456')
        ]);

        User::create([
            "id" => $this->uuid2,
            'name' => 'Maxini Santos',
            "email" => "maxini@gmail.com",
            "password" => bcrypt('123456')
        ]);
    }
}
