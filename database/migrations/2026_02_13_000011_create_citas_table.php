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
       Schema::create('citas', function (Blueprint $table) {
        $table->id('codigo_unico_pk');
        $table->dateTime('fecha_hora_prog');
        $table->dateTime('fecha_hora_llegada')->nullable();
        $table->text('motivo');
    
        $table->foreignId('id_paciente_fk')->constrained('pacientes', 'id_paciente_pk');
        $table->foreignId('numero_legajo_reg_fk')->constrained('empleados', 'numero_legajo_pk'); // Quien registra
        $table->foreignId('numero_legajo_fk')->constrained('empleados', 'numero_legajo_pk'); // Médico asignado
        $table->foreignId('codigo_modulo_fk')->constrained('modulos_atencion', 'codigo_pk');
        $table->foreignId('id_estado_cita_fk')->constrained('estado_citas', 'id_estado_cita_pk');
        $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('citas');
    }
};
