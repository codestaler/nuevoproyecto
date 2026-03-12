<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    use HasFactory;

    // Nombre de la tabla en la base de datos
    protected $table = 'pacientes';

    // Llave primaria personalizada
    protected $primaryKey = 'id_paciente_pk';

    // Desactivar si tu tabla NO tiene las columnas created_at y updated_at
    // Si tu tabla SÍ las tiene, puedes borrar esta línea.
    public $timestamps = false;

    // Campos que permitimos que se llenen desde el formulario
    protected $fillable = [
        'tipo_documento', 
        'no_documento', 
        'nombres', 
        'apellidos', 
        'fecha_nac', 
        'email', 
        'telef_movil', 
        'ciudad_fk', 
        'pais_fk'
    ];

    /**
     * Definición de Relaciones (Opcional pero recomendado)
     * Esto permite acceder a $paciente->ciudad->nombre
     */
    public function ciudad()
    {
        return $this->belongsTo(Ciudad::class, 'ciudad_fk', 'codigo_pk');
    }

    public function pais()
    {
        return $this->belongsTo(Pais::class, 'pais_fk', 'codigo_unico_pk');
    }
}