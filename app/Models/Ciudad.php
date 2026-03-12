<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ciudad extends Model
{
    use HasFactory;

    protected $table = 'ciudades';
    protected $primaryKey = 'codigo_pk'; // O el nombre que tengas en tu migración

    protected $fillable = ['nombre', 'codigo_postal', 'pais'];
}