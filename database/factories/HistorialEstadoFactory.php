<?php

namespace Database\Factories;

use App\Models\Cita;
use App\Models\EstadoCita;
use App\Models\Empleado;
use Illuminate\Database\Eloquent\Factories\Factory;

class HistorialEstadoFactory extends Factory
{
    public function definition(): array
    {
        return [
            'id_cita_fk' => Cita::inRandomOrder()->first()?->id_cita_pk ?? Cita::factory(),
            'id_estado_cita_fk' => EstadoCita::inRandomOrder()->first()?->id_estado_cita_pk ?? EstadoCita::factory(),
            'numero_legajo_fk' => Empleado::inRandomOrder()->first()?->numero_legajo_pk ?? Empleado::factory(),
            'fecha_hora_cambio' => now(),
        ];
    }
}