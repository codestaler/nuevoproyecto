<?php
namespace Database\Seeders;
use App\Models\Sede;
use App\Models\Ciudad;
use Illuminate\Database\Seeder;

class SedeSeeder extends Seeder {
    public function run(): void {
        // Creamos 5 sedes vinculadas a ciudades aleatorias existentes
        Sede::factory(5)->create([
            'ciudad_fk' => Ciudad::inRandomOrder()->first()->id ?? Ciudad::factory()
        ]);
    }
}