<?php

namespace Database\Seeders;

use App\Models\EstadoCita;
use Illuminate\Database\Seeder;

class EstadoCitaSeeder extends Seeder
{
    public function run(): void
    {
        $estados = ['Programada', 'Cancelada', 'Atendida', 'Ausente', 'En espera'];
        
        foreach ($estados as $nombre) {
            EstadoCita::firstOrCreate(['nombre' => $nombre]);
        }
    }
}