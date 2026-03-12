<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Paciente>
 */
class PacienteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
{
    return [
        'tipo_documento' => fake()->randomElement(['CC', 'TI', 'Pasaporte']),
        'no_documento' => fake()->unique()->numerify('##########'),
        'nombres' => fake()->firstName(),
        'apellidos' => fake()->lastName(),
        'fecha_nac' => fake()->date(),
        'email' => fake()->unique()->safeEmail(),
        'telef_movil' => fake()->phoneNumber(),
        'ciudad_fk' => 1, 
        'pais_fk' => 1,  
    ];
}
}
