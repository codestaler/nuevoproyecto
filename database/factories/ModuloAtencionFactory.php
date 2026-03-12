<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ModuloAtencion>
 */
class ModuloAtencionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
public function definition(): array {
    return [
        'nombre' => 'Modulo ' . $this->faker->unique()->lexify('?'),
        'ubicacion' => 'Piso ' . $this->faker->numberBetween(1, 5),
        'estado' => true,
        'sede_fk' => \App\Models\Sede::factory(),
    ];
}
}
