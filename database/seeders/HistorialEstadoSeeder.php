<?php

namespace Database\Seeders;

use App\Models\HistorialEstado;
use Illuminate\Database\Seeder;

class HistorialEstadoSeeder extends Seeder
{
    public function run(): void
    {
        // Crea 20 registros de historial para las citas existentes
        HistorialEstado::factory(20)->create();
    }
}