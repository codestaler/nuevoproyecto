<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RecetaMedicamento extends Model
{
    use HasFactory;

    protected $table = 'receta_medicamento';
    // Esta tabla usa el ID por defecto que pusiste en la migración ($table->id())
    
    protected $fillable = ['id_receta_fk', 'id_medicamento_fk', 'cantidad', 'indicaciones'];
}