<?php
namespace Database\Seeders;
use App\Models\Pais;
use Illuminate\Database\Seeder;

class PaisSeeder extends Seeder {
    public function run(): void {

        Pais::firstOrCreate(['nombre' => 'Colombia']);
        Pais::firstOrCreate(['nombre' => 'México']);

        Pais::factory(3)->create();
    }
}