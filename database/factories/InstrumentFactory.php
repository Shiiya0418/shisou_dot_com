<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Shop;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Instrument>
 */
class InstrumentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'shop_id' => Shop::factory(),
            'instrument_name' => $this->faker->word(),
            'price' => $this->faker->numberBetween(9800, 2560000),
            'instrument_category' => $this->faker->word(),
            'instrument_type' => $this->faker->word(),
            'fret' => $this->faker->numberBetween(19, 24),
            'pickups' => $this->faker->word(),
            'comment' => $this->faker->realText(),
            'image_path' => $this->faker->filePath(),
        ];
    }
}
