<?php
namespace Database\Seeders;
use App\Models\Receta;
use App\Models\Empleado;
use Illuminate\Database\Seeder;

class RecetaSeeder extends Seeder {
    public function run(): void {
        Receta::factory(10)->create([
            'numero_legajo_profesional_fk' => Empleado::inRandomOrder()->first()->numero_legajo_pk ?? 1001
        ]);
    }
}