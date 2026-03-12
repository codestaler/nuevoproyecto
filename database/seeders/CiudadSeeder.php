<?php

namespace Database\Seeders;

use App\Models\Ciudad;
use Illuminate\Database\Seeder;

class CiudadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Esto usará el Factory que ya tienes para crear exactamente 24
        Ciudad::factory(24)->create();
    }
}