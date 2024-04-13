<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ArrivalMean>
 */
class ArrivalMeanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'arrivingBY' => $this->faker->randomElement(['Airline', 'Cruise', 'Ferry', 'Private Plane', 'Yacht/Private Boat']),
            'type' => $this->faker->numberBetween(1, 5),
        ];
    }
}
