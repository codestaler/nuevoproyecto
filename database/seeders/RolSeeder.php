<?php
namespace Database\Seeders;
use App\Models\Rol;
use Illuminate\Database\Seeder;

class RolSeeder extends Seeder {
    public function run(): void {
        Rol::firstOrCreate(['nombre' => 'Médico General', 'tipo_rol' => 'Salud']);
        Rol::firstOrCreate(['nombre' => 'Especialista', 'tipo_rol' => 'Salud']);
        Rol::firstOrCreate(['nombre' => 'Administrativo', 'tipo_rol' => 'Administración']);
    }
}