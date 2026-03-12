<?php

namespace Database\Factories;

use App\Models\Cita;
use App\Models\Paciente;
use App\Models\Empleado;
use App\Models\ModuloAtencion;
use App\Models\EstadoCita;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cita>
 */
class CitaFactory extends Factory
{
    protected $model = Cita::class;

    public function definition(): array
    {
        return [
            'fecha_hora_prog' => $this->faker->dateTimeBetween('now', '+1 month'),
            'motivo' => $this->faker->sentence(),
            
            // Buscamos un paciente existente o creamos uno si la tabla está vacía
            'id_paciente_fk' => Paciente::inRandomOrder()->first()?->id_paciente_pk ?? Paciente::factory(),
            
            // Quien registra la cita (puede ser administrativo)
            'numero_legajo_reg_fk' => Empleado::inRandomOrder()->first()?->numero_legajo_pk ?? Empleado::factory(),
            
            // El médico responsable
            'numero_legajo_fk' => Empleado::inRandomOrder()->first()?->numero_legajo_pk ?? Empleado::factory(),
            
            // Módulo de atención y Estado de la cita
            'codigo_modulo_fk' => ModuloAtencion::inRandomOrder()->first()?->codigo_pk ?? ModuloAtencion::factory(),
            'id_estado_cita_fk' => EstadoCita::inRandomOrder()->first()?->id_estado_cita_pk ?? EstadoCita::factory(),
        ];
    }
}