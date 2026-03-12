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
      Schema::create('pacientes', function (Blueprint $table) {
       $table->id('id_paciente_pk');
       $table->string('tipo_documento');
       $table->string('no_documento')->unique();
       $table->string('nombres');
       $table->string('apellidos');
       $table->date('fecha_nac');
       $table->string('email');
       $table->string('telef_movil');

      $table->foreignId('ciudad_fk')->constrained('ciudades', 'codigo_pk');
       $table->foreignId('pais_fk')->constrained('paises', 'codigo_unico_pk');

    $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pacientes');
    }
};
