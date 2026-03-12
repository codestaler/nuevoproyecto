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
    Schema::create('receta_medicamento', function (Blueprint $table) {
        $table->id();
        
        $table->foreignId('id_receta_fk')->constrained('recetas', 'id_receita_pk');
        
        $table->foreignId('id_medicamento_fk')->constrained('medicamentos', 'id_medicamento_pk');
        
        $table->string('cantidad');
        $table->text('indicaciones');
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('receta_medicamento');
    }
};
