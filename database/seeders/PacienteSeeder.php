<?php
namespace Database\Seeders;
use App\Models\Paciente;
use Illuminate\Database\Seeder;

class PacienteSeeder extends Seeder {
    public function run(): void {
        // Creamos 50 pacientes de prueba
        Paciente::factory(50)->create();
    }
}