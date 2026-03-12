<?php
namespace Database\Seeders;
use App\Models\Medicamento;
use Illuminate\Database\Seeder;

class MedicamentoSeeder extends Seeder {
    public function run(): void {
        // Medicamentos esenciales manuales
        Medicamento::firstOrCreate(['nombre' => 'Paracetamol', 'presentacion' => 'Tableta', 'concentracion' => '500mg']);
        Medicamento::firstOrCreate(['nombre' => 'Ibuprofeno', 'presentacion' => 'Cápsula', 'concentracion' => '400mg']);
        
        // 20 más aleatorios
        Medicamento::factory(20)->create();
    }
}