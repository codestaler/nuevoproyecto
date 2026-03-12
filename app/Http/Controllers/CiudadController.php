<?php

namespace App\Http\Controllers;

use App\Models\Ciudad;
use Illuminate\Http\Request;

class CiudadController extends Controller
{
    public function index() {
        $ciudades = Ciudad::all();
        return view('ciudades.index', compact('ciudades'));
    }

    public function create() {
        return view('ciudades.create');
    }

    public function store(Request $request) {
        $request->validate(['nombre' => 'required']);
        Ciudad::create($request->all());
        return redirect()->route('ciudades.index')->with('success', 'Ciudad creada');
    }

    public function edit($id) {
        $ciudad = Ciudad::findOrFail($id);
        return view('ciudades.edit', compact('ciudad'));
    }

    public function update(Request $request, $id) {
        $ciudad = Ciudad::findOrFail($id);
        $ciudad->update($request->all());
        return redirect()->route('ciudades.index')->with('success', 'Ciudad actualizada');
    }

    public function destroy($id) {
        Ciudad::findOrFail($id)->delete();
        return redirect()->route('ciudades.index')->with('success', 'Ciudad eliminada');
    }
}