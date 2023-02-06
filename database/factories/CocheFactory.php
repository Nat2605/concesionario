<?php

namespace Database\Factories;

use App\Models\Marca;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Coche>
 */
class CocheFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "marca_id" => Marca::factory(),
            "modelo" => $this->faker->word,
            "velocidad_max" => $this->faker->numberBetween(120, 250),
            "carburante" => $this->faker->word,
            "descripcion" => $this->faker->word

        ];
    }
}
