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
Schema::create('recetas', function (Blueprint $table) {
    $table->id('id_receita_pk');
    $table->foreignId('codigo_turno_fk')->constrained('citas', 'codigo_unico_pk');
    $table->foreignId('numero_legajo_profesional_fk')->constrained('empleados', 'numero_legajo_pk');
    $table->dateTime('fecha_hora_emision');
    $table->text('observaciones')->nullable();
    $table->timestamps();
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recetas');
    }
};
