<?php

use App\Http\Controllers\MateriaController;
use Illuminate\Support\Facades\Route;

// Redirige la raíz al listado de materias
Route::get('/', function () {
    return redirect()->route('materia.index');
});

// Ruta tipo resource para CRUD completo (index, create, store, show, edit, update, destroy)
Route::resource('materia', MateriaController::class);