<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Receta extends Model
{
    use HasFactory;

    protected $table = 'recetas';
    protected $primaryKey = 'id_receita_pk'; // Ojo: revisa si en tu migración escribiste 'id_receita_pk' o 'id_receta_pk'

    protected $fillable = [
        'codigo_turno_fk', 'numero_legajo_profesional_fk', 'fecha_hora_emision', 'observaciones'
    ];
}