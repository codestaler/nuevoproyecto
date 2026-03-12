<?php

namespace App\Http\Controllers;

use App\Models\Paciente;
use App\Models\Ciudad;
use App\Models\Pais;
use Illuminate\Http\Request;

class PacienteController extends Controller
{
    /**
     * Muestra la lista de pacientes.
     */
    public function index()
    {
        $pacientes = Paciente::all();
        return view('pacientes.index', compact('pacientes'));
    }

    /**
     * Muestra el formulario para crear un nuevo paciente.
     */
    public function create()
    {
        $ciudades = Ciudad::all();
        $paises = Pais::all();
        return view('pacientes.create', compact('ciudades', 'paises'));
    }

    /**
     * Guarda el paciente en la base de datos.
     */
public function store(Request $request)
{
    // 1. Validar (esto ya no fallará)
    $request->validate([
        'nombres' => 'required',
        'apellidos' => 'required',
        'no_documento' => 'required',
        'ciudad_fk' => 'required',
        'pais_fk' => 'required',
    ]);

    // 2. Guardar
    try {
        Paciente::create($request->all());
        return redirect()->route('pacientes.index')->with('success', 'Paciente guardado con éxito.');
    } catch (\Exception $e) {
        return back()->withErrors(['error' => 'No se pudo guardar: ' . $e->getMessage()]);
    }
}
    /**
     * Muestra el formulario para editar.
     */
    public function edit($id)
    {
        $paciente = Paciente::findOrFail($id);
        $ciudades = Ciudad::all();
        $paises = Pais::all();
        return view('pacientes.edit', compact('paciente', 'ciudades', 'paises'));
    }

    /**
     * Actualiza el paciente.
     */
    public function update(Request $request, $id)
    {
        $paciente = Paciente::findOrFail($id);
        $paciente->update($request->all());

        return redirect()->route('pacientes.index')->with('success', 'Paciente actualizado.');
    }

    /**
     * Elimina el paciente.
     */
    public function destroy($id)
    {
        $paciente = Paciente::findOrFail($id);
        $paciente->delete();

        return redirect()->route('pacientes.index')->with('success', 'Paciente eliminado.');
    }
}