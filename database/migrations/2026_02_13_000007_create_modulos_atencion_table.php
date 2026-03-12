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
        Schema::create('modulos_atencion', function (Blueprint $table) {
         $table->id('codigo_pk');
         $table->string('nombre');
         $table->string('ubicacion');
         $table->boolean('estado')->default(true);
         $table->foreignId('sede_fk')->constrained('sedes', 'codigo_unico_pk');
         $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('modulos_atencion');
    }
};
