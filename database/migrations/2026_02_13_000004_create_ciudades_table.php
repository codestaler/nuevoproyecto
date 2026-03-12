<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('ciudades', function (Blueprint $table) {
            $table->id('codigo_pk'); 
            $table->string('nombre');
            $table->string('codigo_postal');
            $table->string('pais');
            $table->timestamps();
        }); // <--- Aquí faltaba cerrar el paréntesis y el punto y coma
    } // <--- Aquí faltaba cerrar la función up

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ciudades');
    }
};