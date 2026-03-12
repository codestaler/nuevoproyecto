<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use App\Models\Rol;
use App\Models\Sede;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    // Listar todos los empleados con sus relaciones
    public function index() 
    {
        // Traemos empleados cargando de una vez su rol y su sede
        $empleados = Empleado::with(['rol', 'sede'])->get();
        return view('empleados.index', compact('empleados'));
    }

    public function create() 
    {
        $roles = Rol::all();
        $sedes = Sede::all();
        return view('empleados.create', compact('roles', 'sedes'));
    }

    public function store(Request $request) 
    {
        $request->validate([
            'numero_legajo_pk' => 'required|unique:empleados,numero_legajo_pk',
            'nombres'          => 'required',
            'apellidos'        => 'required',
            'email'            => 'required|email',
            'rol_fk'           => 'required',
            'sede_fk'          => 'required',
        ]);

        Empleado::create($request->all());
        return redirect()->route('empleados.index')->with('success', 'Empleado creado correctamente');
    }

    public function edit($id) 
    {
        $empleado = Empleado::findOrFail($id);
        $roles = Rol::all();
        $sedes = Sede::all();
        return view('empleados.edit', compact('empleado', 'roles', 'sedes'));
    }

    public function update(Request $request, $id) 
    {
        $empleado = Empleado::findOrFail($id);
        
        $request->validate([
            'nombres'   => 'required',
            'apellidos' => 'required',
            'email'     => 'required|email',
            'rol_fk'    => 'required',
            'sede_fk'   => 'required',
        ]);

        $empleado->update($request->all());
        return redirect()->route('empleados.index')->with('success', 'Empleado actualizado correctamente');
    }

    public function destroy($id) 
    {
        $empleado = Empleado::findOrFail($id);
        $empleado->delete();
        return redirect()->route('empleados.index')->with('success', 'Empleado eliminado');
    }
}