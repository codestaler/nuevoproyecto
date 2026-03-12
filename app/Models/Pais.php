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

    // Relación con ciudades
    // En app/Models/Pais.php

// En app/Models/Pais.php

public function ciudades()
{
    // 'pais' es el nombre de la columna en la tabla ciudades
    // 'codigo_unico_pk' es la PK en la tabla paises
    return $this->hasMany(Ciudad::class, 'pais', 'codigo_unico_pk');
}
// En app/Models/Pais.php

public function pacientes()
{
    // 'pais_fk' es el nombre de la columna en la tabla pacientes
    // 'codigo_unico_pk' es la PK en la tabla paises
    return $this->hasMany(Paciente::class, 'pais_fk', 'codigo_unico_pk');
}
}