<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Instrument;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Reservation>
 */
class ReservationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'instrument_id' => Instrument::factory(),
            'reservation_date' => $this->faker->dateTimeBetween(),
            'user_name' => $this->faker->word(),
            'phone_number' => $this->faker->phoneNumber(),
            'comment' => $this->faker->realText()
        ];
    }
}
