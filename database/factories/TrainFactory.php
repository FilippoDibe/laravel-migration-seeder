<?php

namespace Database\Factories;
use App\Models\Train;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Train>
 */
class TrainFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'company' => $this->faker->company,
            'departure_station' => $this->faker->city,
            'arrival_station' => $this->faker->city,
            'departure_time' => $this->faker->dateTimeBetween('+0 days', '+1 days'),
            'arrival_time' => $this->faker->dateTimeBetween('+1 days', '+2 days'),
            'train_code' => $this->faker->bothify('##???'),
            'carriages_number' => $this->faker->numberBetween(5, 15),
            'on_time' => $this->faker->boolean,
            'cancelled' => $this->faker->boolean(30)
        ];
    }
}
