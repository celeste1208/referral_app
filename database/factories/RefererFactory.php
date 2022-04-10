<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

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
            'lp_access_count' => 0,
            'conversion_count' => 0,
        ];
    }
}
