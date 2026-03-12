<?php

namespace Database\Factories;

use App\Models\Rol;
use App\Models\Sede;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmpleadoFactory extends Factory
{
    public function definition(): array
    {
        return [
            'numero_legajo_pk' => $this->faker->unique()->numberBetween(1000, 9999),
            'tipo_documento' => $this->faker->randomElement(['CC', 'CE']),
            'no_documento' => $this->faker->unique()->numerify('##########'),
            'nombres' => $this->faker->firstName(),
            'apellidos' => $this->faker->lastName(),
            'email' => $this->faker->unique()->safeEmail(),
            'telef_movil' => $this->faker->numerify('3#########'),
            'fecha_alta' => now(),
            // Buscamos un rol y sede existentes, o creamos uno si no hay
            'rol_fk' => Rol::inRandomOrder()->first()?->id_rol_pk ?? Rol::factory(),
            'sede_fk' => Sede::inRandomOrder()->first()?->codigo_unico_pk ?? Sede::factory(),
        ];
    }
}