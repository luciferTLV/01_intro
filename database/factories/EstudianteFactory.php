<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Estudiante>
 */
class EstudianteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'codigo'=>fake()->unique()->numberBetween(150000, 220000),
            'dni'=>fake()->unique()->numberBetween(00000000,99999999),
            'nombres'=>fake()->name(),
            'apellidos'=>fake()->lastName(),
            'telefono'=>fake()->unique()->numberBetween(900000000, 999999999),
            'correo_personal'=>fake()->email(),
            'correo_institucional'=>fake()->email(),
        ];
    }
}
