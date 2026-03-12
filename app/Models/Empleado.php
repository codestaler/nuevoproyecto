<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    use HasFactory;

    protected $table = 'empleados';
    protected $primaryKey = 'numero_legajo_pk';
    public $incrementing = false; // Ya que tú asignas el número de legajo
    protected $keyType = 'string'; // Úsalo si el legajo tiene letras, si es solo número puedes omitirlo

    protected $fillable = [
        'numero_legajo_pk', 'tipo_documento', 'no_documento', 'nombres', 
        'apellidos', 'email', 'telef_movil', 'fecha_alta', 'rol_fk', 'sede_fk'
    ];

    // RELACIÓN CON ROL
    public function rol()
    {
        // 'rol_fk' es la columna en empleados, 'id_rol_pk' es la PK en la tabla roles
        return $this->belongsTo(Rol::class, 'rol_fk', 'id_rol_pk');
    }

    // RELACIÓN CON SEDE
    public function sede()
    {
        // 'sede_fk' es la columna en empleados, 'codigo_unico_pk' es la PK en la tabla sedes
        return $this->belongsTo(Sede::class, 'sede_fk', 'codigo_unico_pk');
    }
}