<?php

namespace App\Http\Controllers;

use App\Models\Materia;
use Illuminate\Http\Request;

class MateriaController extends Controller
{
    // Mostrar la lista de materias
    public function index()
    {
        $materias = Materia::all();
        return view('materias.index', compact('materias'));
    }

    // Mostrar el formulario para crear una materia
    public function create()
    {
        return view('materias.create');
    }

    // Almacenar una nueva materia en la BD
    public function store(Request $request)
    {
        $request->validate([
            'nombre'   => 'required|string|max:255',
            'creditos' => 'required|integer',
            'profesor' => 'required|string|max:255',
        ]);

        Materia::create($request->all());

        return redirect()->route('materia.index')->with('success', 'Materia creada exitosamente.');
    }

    // Mostrar el detalle de una materia
    public function show(Materia $materia)
    {
        return view('materias.show', compact('materia'));
    }

    // Mostrar el formulario para editar una materia
    public function edit(Materia $materia)
    {
        return view('materias.edit', compact('materia'));
    }

    // Actualizar los datos de una materia en la BD
    public function update(Request $request, Materia $materia)
    {
        $request->validate([
            'nombre'   => 'required|string|max:255',
            'creditos' => 'required|integer',
            'profesor' => 'required|string|max:255',
        ]);

        $materia->update($request->all());

        return redirect()->route('materia.index')->with('success', 'Materia actualizada exitosamente.');
    }

    // Eliminar una materia
    public function destroy(Materia $materia)
    {
        $materia->delete();

        return redirect()->route('materia.index')->with('success', 'Materia eliminada exitosamente.');
    }
}