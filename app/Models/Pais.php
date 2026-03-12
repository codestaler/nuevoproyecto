<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory; // <--- Importante

class Pais extends Model
{
    use HasFactory;
    protected $table = 'paises'; 
    protected $primaryKey = 'codigo_unico_pk'; 
    
    protected $fillable = ['nombre'];
}