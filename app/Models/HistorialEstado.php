<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistorialEstado extends Model
{
    use HasFactory;

    protected $table = 'historial_estados';
    protected $primaryKey = 'id_historial_pk';

    protected $fillable = [
        'id_cita_fk', 'id_estado_cita_fk', 'numero_legajo_fk', 'fecha_hora_cambio'
    ];
}