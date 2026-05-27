<?php

namespace App\Http\Controllers;

use App\Models\Inscripcion;
use Illuminate\Http\Request;

class InscripcionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $inscripciones = Inscripcion::all();

        return view('inscripciones.index', compact('inscripciones'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('inscripciones.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Inscripcion::create([
            'id_usuario' => $request->id_usuario,
            'id_plan' => $request->id_plan,
            'fecha_inicio' => $request->fecha_inicio,
            'estado' => $request->estado
        ]);

        return redirect()->route('inscripciones.index');
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
        $inscripcion = Inscripcion::findOrFail($id);

        return view('inscripciones.edit', compact('inscripcion'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $inscripcion = Inscripcion::findOrFail($id);

        $inscripcion->update([
            'id_usuario' => $request->id_usuario,
            'id_plan' => $request->id_plan,
            'fecha_inicio' => $request->fecha_inicio,
            'estado' => $request->estado
        ]);

        return redirect()->route('inscripciones.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $inscripcion = Inscripcion::findOrFail($id);

        $inscripcion->delete();

        return redirect()->route('inscripciones.index');
    
    }
}
