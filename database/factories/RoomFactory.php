<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Room>
 */
class RoomFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'room_number' => $this->faker->unique()->numberBetween(1, 20),
            'number_of_people' => 2,
            'max_capacity' => 4,
            'fee_per_person' => '100.00',
            'total_fees' => '1600.00',
            'status' => 'available'
        ];
    }
}
