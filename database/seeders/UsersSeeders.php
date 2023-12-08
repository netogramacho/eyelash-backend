<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;

class UsersSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Barbara Macarena',
            "email" => "barbara@gmail.com",
            "password" => bcrypt('123456')
        ]);

        User::create([
            'name' => 'Maxini Santos',
            "email" => "maxini@gmail.com",
            "password" => bcrypt('123456')
        ]);
    }
}
