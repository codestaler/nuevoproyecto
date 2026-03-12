<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Sede extends Model
{
    use HasFactory;
    protected $table = 'sedes';
    protected $primaryKey = 'codigo_unico_pk';
    
    protected $fillable = ['nombre', 'ciudad_fk'];

    public function ciudad() {
    return $this->belongsTo(Ciudad::class, 'ciudad_fk', 'codigo_pk'); 
    // Asegúrate de que el tercer parámetro sea la PK de tu tabla ciudades
}
}