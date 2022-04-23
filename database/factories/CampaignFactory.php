<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CampaignFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'lp_access_count' => $this->faker->randomNumber(),
            'conversion_count' => $this->faker->randomNumber(),
            'lp_url' => 'https://relic.co.jp/services/throttle/',
        ];
    }
}
