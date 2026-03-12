<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
  public function run(): void
{
    // 1. Tablas Maestras
    \App\Models\Pais::create(['nombre' => 'Colombia']);
    \App\Models\Ciudad::create([
        'nombre' => 'Medellín',
        'codigo_postal' => '050001',
        'pais' => 'Colombia'
    ]);
    \App\Models\Rol::create(['nombre' => 'Médico', 'tipo_rol' => 'Salud']);
    \App\Models\EstadoCita::create(['nombre' => 'Programada']);
    
    // 2. Sede y Módulo 
    \App\Models\Sede::create([
        'nombre' => 'Clínica Central',
        'ciudad_fk' => 1
    ]);

    \App\Models\ModuloAtencion::create([
        'nombre' => 'Módulo A',
        'ubicacion' => 'Piso 1',
        'estado' => true,
        'sede_fk' => 1
    ]);

    // 3. Empleado
    \App\Models\Empleado::create([
        'numero_legajo_pk' => 1001,
        'tipo_documento' => 'CC',
        'no_documento' => '10203040',
        'nombres' => 'Dr. House',
        'apellidos' => 'Gregory',
        'email' => 'house@salud.com',
        'telef_movil' => '3001234567',
        'fecha_alta' => now(),
        'rol_fk' => 1,
        'sede_fk' => 1
    ]);

    \App\Models\Paciente::factory(20)->create();
    
    \App\Models\Cita::factory(10)->create();

    \App\Models\Medicamento::create([
        'nombre' => 'Paracetamol',
        'presentacion' => 'Tableta',
        'concentracion' => '500mg'
    ]);
}
}
