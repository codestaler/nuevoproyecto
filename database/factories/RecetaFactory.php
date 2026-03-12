<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Receta>
 */
class RecetaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
public function definition(): array
{
    return [
        'fecha_hora_emision' => now(),
        'observaciones' => $this->faker->sentence(),
        // Agregamos la relación obligatoria
        'codigo_turno_fk' => \App\Models\Cita::inRandomOrder()->first()?->id_cita_pk ?? \App\Models\Cita::factory(),
        // Asegúrate de que este nombre coincida con tu migración (la que te dio error)
        'numero_legajo_profesional_fk' => \App\Models\Empleado::inRandomOrder()->first()?->numero_legajo_pk ?? \App\Models\Empleado::factory(),
    ];
}
}
