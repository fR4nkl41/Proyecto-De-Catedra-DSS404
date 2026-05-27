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
            $request->validate([
            'id_usuario' => 'required',
            'id_plan' => 'required',
            'fecha_inicio' => 'required'
        ]);
        
        $inscripcion = new Inscripcion();

        $inscripcion->id_usuario = $request->input('id_usuario');
        $inscripcion->id_plan = $request->input('id_plan');
        $inscripcion->fecha_inicio = $request->input('fecha_inicio');
        $inscripcion->estado = $request->input('estado');

        $inscripcion->save();

        return redirect()->route('inscripciones.index')
                 ->with('success', 'Inscripción agregada');
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
    public function update(Request $request, $id)
    {
       $request->validate([
        'id_usuario' => 'required',
        'id_plan' => 'required',
        'fecha_inicio' => 'required'
    ]);
        $inscripcion = Inscripcion::findOrFail($id);

        $inscripcion->id_usuario = $request->input('id_usuario');
        $inscripcion->id_plan = $request->input('id_plan');
        $inscripcion->fecha_inicio = $request->input('fecha_inicio');
        $inscripcion->estado = $request->input('estado');

        $inscripcion->save();

        return redirect()->route('inscripciones.index')
                 ->with('success', 'Inscripción actualizada');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $inscripcion = Inscripcion::findOrFail($id);

        $inscripcion->delete();

       return redirect()->route('inscripciones.index')
                 ->with('success', 'Inscripción eliminada');
    
    }
}
