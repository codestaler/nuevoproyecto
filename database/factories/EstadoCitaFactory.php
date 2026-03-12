<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EstadoCitaFactory extends Factory
{
    public function definition(): array
    {
        return [
            'nombre' => $this->faker->unique()->randomElement(['Programada', 'Cancelada', 'Atendida', 'Ausente', 'En espera']),
        ];
    }
}