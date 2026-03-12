<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Medicamento>
 */
class MedicamentoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
public function definition(): array {
    return [
        'nombre' => $this->faker->word(),
        'presentacion' => $this->faker->randomElement(['Tableta', 'Jarabe', 'Ampolla']),
        'concentracion' => '500mg',
    ];
}
}
