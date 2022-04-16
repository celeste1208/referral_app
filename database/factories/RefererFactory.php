<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class RefererFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'email' => $this->faker->email(),
            'promotion_code' => (string)Str::uuid(),
            'lp_access_count' => $this->faker->randomNumber(),
            'conversion_count' => $this->faker->randomNumber(),
        ];
    }
}
