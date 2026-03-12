<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CiudadFactory extends Factory
{
    public function definition(): array
    {
        return [
            'nombre' => $this->faker->city(),
            'codigo_postal' => $this->faker->numerify('######'), // Genera 6 números
            'pais' => 'Colombia'
        ];
    }
}