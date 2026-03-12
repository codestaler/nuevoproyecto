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
       Schema::create('historial_estados', function (Blueprint $table) {
    $table->id('id_historial_pk');
    
    $table->foreignId('id_cita_fk')->constrained('citas', 'codigo_unico_pk');
    
    $table->foreignId('id_estado_cita_fk')->constrained('estado_citas', 'id_estado_cita_pk');
    
    $table->foreignId('numero_legajo_fk')->constrained('empleados', 'numero_legajo_pk');
    
    $table->dateTime('fecha_hora_cambio');
    $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('historial_estados');
    }
};
