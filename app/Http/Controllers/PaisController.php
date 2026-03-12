<?php
namespace App\Http\Controllers;

use App\Models\Pais;
use Illuminate\Http\Request;

class PaisController extends Controller
{
    public function index() 
    {
        $paises = Pais::all();
        return view('paises.index', compact('paises'));
    }
    // ... tu método index y create ya hechos ...

    // AGREGA ESTO
    public function edit($id)
    {
        // Si tu llave primaria no es "id", debes especificar el nombre de la columna
        $pais = Pais::where('codigo_unico_pk', $id)->firstOrFail();
        
        return view('paises.edit', compact('pais'));
    }
    // AGREGAR ESTO PARA EL FORMULARIO DE CREACIÓN
    public function create()
    {
        return view('paises.create');
    }

    // AGREGAR ESTO PARA GUARDAR EL NUEVO PAÍS
    public function store(Request $request)
    {
        $request->validate(['nombre' => 'required']);
        
        Pais::create($request->all());
        
        return redirect()->route('paises.index')->with('success', 'País registrado correctamente');
    }

    // Y ASEGÚRATE DE TENER EL UPDATE TAMBIÉN
    public function update(Request $request, $id)
    {
        $pais = Pais::where('codigo_unico_pk', $id)->firstOrFail();
        
        $request->validate(['nombre' => 'required']);
        
        $pais->update($request->all());
        
        return redirect()->route('paises.index')->with('success', 'País actualizado correctamente');
    }

public function destroy($id) 
{
    $pais = Pais::findOrFail($id);

    // 1. Verificamos si tiene ciudades relacionadas
    if ($pais->ciudades()->exists()) {
        return redirect()->route('paises.index')
            ->with('error', 'No puedes eliminar este país porque tiene ciudades asociadas.');
    }

    // 2. Verificamos si tiene pacientes relacionados
    // Primero debemos definir la relación 'pacientes' en el modelo Pais
    if ($pais->pacientes()->exists()) {
        return redirect()->route('paises.index')
            ->with('error', 'No puedes eliminar este país porque hay pacientes registrados en él.');
    }

    $pais->delete();
    return redirect()->route('paises.index')->with('success', 'País eliminado correctamente.');
}
}