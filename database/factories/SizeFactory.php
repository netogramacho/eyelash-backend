<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Size>
 */
class SizeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     private $sequence = 6;

    public function definition(): array
    {
        return [
            'user_id' =>$this->sequence%2,
            'size' => $this->sequence++,
        ];
    }
}
