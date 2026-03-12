<?php

namespace App\Http\Controllers;

use App\Models\Sede;
use App\Models\Ciudad;
use Illuminate\Http\Request;

class SedeController extends Controller
{
    public function index() {
        $sedes = Sede::all();
        return view('sedes.index', compact('sedes'));
    }

    public function create() {
        $ciudades = Ciudad::all(); // Obtenemos ciudades para el select
        return view('sedes.create', compact('ciudades'));
    }

    public function store(Request $request) {
        Sede::create($request->all());
        return redirect()->route('sedes.index')->with('success', 'Sede creada');
    }

    public function edit($id) {
        $sede = Sede::findOrFail($id);
        $ciudades = Ciudad::all();
        return view('sedes.edit', compact('sede', 'ciudades'));
    }

    public function update(Request $request, $id) {
        $sede = Sede::findOrFail($id);
        $sede->update($request->all());
        return redirect()->route('sedes.index')->with('success', 'Sede actualizada');
    }
    // En app/Http/Controllers/SedeController.php

public function destroy($id) 
{
    // Buscamos la sede por su ID
    $sede = Sede::findOrFail($id);

    // 1. Verificar si la sede tiene empleados asociados antes de borrar
    // Asumiendo que definiste la relación 'empleados' en el modelo Sede
    if ($sede->empleados()->exists()) {
        return redirect()->route('sedes.index')
            ->with('error', 'No puedes eliminar esta sede porque tiene empleados asignados.');
    }

    // 2. Si no tiene empleados, la eliminamos
    $sede->delete();

    return redirect()->route('sedes.index')
        ->with('success', 'Sede eliminada correctamente.');
}
}