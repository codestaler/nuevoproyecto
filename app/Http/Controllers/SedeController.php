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
}