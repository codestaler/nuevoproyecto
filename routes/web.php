<?php

use App\Http\Controllers\PacienteController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaisController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\CiudadController;
use App\Http\Controllers\SedeController;

Route::resource('pacientes', PacienteController::class);
Route::resource('paises', PaisController::class);
Route::resource('empleados', EmpleadoController::class);
// Cambia tu línea actual de Route::resource por esta:
Route::resource('ciudades', CiudadController::class)->parameters([
    'ciudades' => 'ciudad' // 'ciudad' es el nombre que usará la URL
]);
Route::resource('sedes', SedeController::class)->parameters([
    'sedes' => 'sede'
]);