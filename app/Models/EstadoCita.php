<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstadoCita extends Model
{
    use HasFactory;

    protected $table = 'estado_citas';
    protected $primaryKey = 'id_estado_cita_pk';

    protected $fillable = ['nombre'];
}