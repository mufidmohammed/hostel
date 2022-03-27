<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'room_id' => $this->faker->numberBetween(1, 12),
            'fees' => '1200.00',
            'start_date' => now(),
            'course_id' => $this->faker->numberBetween(1, 6),
            'first_name' => $this->faker->firstName(),
            'last_name' => $this->faker->lastName(),
            'gender' => 'male',
            'phone' => $this->faker->phoneNumber(),
            'email' => $this->faker->email(),
            'level' => '100',
            'age' => $this->faker->numberBetween(18, 25),
            'paid' => false,
            'checked_in' => false
        ];
    }
}
