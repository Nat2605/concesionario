<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contacto>
 */
class ContactoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->company,
            'apellidos' => $this->faker->company,
            'email' => $this->faker->company,
            'asunto' => $this->faker->company,
            'mensaje' => $this->faker->company



        ];
    }
}
