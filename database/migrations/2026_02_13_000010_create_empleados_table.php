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
        Schema::create('empleados', function (Blueprint $table) {
    $table->id('numero_legajo_pk');
    $table->string('tipo_documento');
    $table->string('no_documento')->unique();
    $table->string('nombres');
    $table->string('apellidos');
    $table->string('email')->unique();
    $table->string('telef_movil');
    $table->date('fecha_alta');
    
    $table->foreignId('rol_fk')->constrained('roles', 'id_rol_pk');
    $table->foreignId('sede_fk')->constrained('sedes', 'codigo_unico_pk');
    
    $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('empleados');
    }
};
