<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory; // <--- Importante
use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
    use HasFactory; // <--- ¡Esto es lo que falta!

    protected $table = 'citas';
    protected $primaryKey = 'codigo_unico_pk';

    protected $fillable = [
        'fecha_hora_prog',
        'fecha_hora_llegada',
        'motivo',
        'id_paciente_fk',
        'numero_legajo_reg_fk',
        'numero_legajo_fk',
        'codigo_modulo_fk',
        'id_estado_cita_fk'
    ];
}