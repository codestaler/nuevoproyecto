<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModuloAtencion extends Model
{
    use HasFactory;

    // 1. Le decimos el nombre exacto que pusiste en la migración
    protected $table = 'modulos_atencion'; 

    // 2. Le decimos cuál es su llave primaria
    protected $primaryKey = 'codigo_pk'; 

    protected $fillable = [
        'nombre',
        'ubicacion',
        'estado',
        'sede_fk'
    ];
}