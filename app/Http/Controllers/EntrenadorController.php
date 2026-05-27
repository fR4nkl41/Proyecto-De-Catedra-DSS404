<?php

namespace App\Http\Controllers;

use App\Models\Entrenador;
use Illuminate\Http\Request;

class EntrenadorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $entrenadores = Entrenador::all();

        return view('entrenadores.index',
            compact('entrenadores'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('entrenadores.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'especialidad' => 'required'
        ]);

        $entrenador = new Entrenador();

        $entrenador->nombre = $request->nombre;
        $entrenador->especialidad = $request->especialidad;

        $entrenador->save();

        return redirect()->route('entrenadores.index')
                         ->with('success', 'Entrenador agregado');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $entrenador = Entrenador::findOrFail($id);

        return view('entrenadores.edit',
            compact('entrenador'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nombre' => 'required',
            'especialidad' => 'required'
        ]);

        $entrenador = Entrenador::findOrFail($id);

        $entrenador->nombre = $request->nombre;
        $entrenador->especialidad = $request->especialidad;

        $entrenador->save();

        return redirect()->route('entrenadores.index')
                         ->with('success', 'Entrenador actualizado');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $entrenador = Entrenador::findOrFail($id);

        $entrenador->delete();

        return redirect()->route('entrenadores.index')
                         ->with('success', 'Entrenador eliminado');
    }
}
