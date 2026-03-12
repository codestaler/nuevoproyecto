<?php
namespace Database\Seeders;
use App\Models\ModuloAtencion;
use App\Models\Sede;
use Illuminate\Database\Seeder;

class ModuloAtencionSeeder extends Seeder {
    public function run(): void {
        // Crea 2 módulos por cada sede existente
        Sede::all()->each(function ($sede) {
            ModuloAtencion::factory(2)->create([
                'sede_fk' => $sede->codigo_unico_pk
            ]);
        });
    }
}