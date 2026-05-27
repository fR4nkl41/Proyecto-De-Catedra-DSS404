<?php

namespace App\Http\Controllers;

use App\Models\Horario;
use Illuminate\Http\Request;

class HorarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $horarios = Horario::all();

        return view('horarios.index', compact('horarios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('horarios.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $horario = new Horario();

        $horario->actividad = $request->input('actividad');
        $horario->dia = $request->input('dia');
        $horario->hora_inicio = $request->input('hora_inicio');
        $horario->hora_fin = $request->input('hora_fin');
        $horario->id_entrenador = $request->input('id_entrenador');

        $horario->save();

        return redirect()->route('horarios.index');
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
       $horario = Horario::findOrFail($id);

        return view('horarios.edit', compact('horario'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $horario = Horario::findOrFail($id);

        $horario->actividad = $request->input('actividad');
        $horario->dia = $request->input('dia');
        $horario->hora_inicio = $request->input('hora_inicio');
        $horario->hora_fin = $request->input('hora_fin');
        $horario->id_entrenador = $request->input('id_entrenador');

        $horario->save();

        return redirect()->route('horarios.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $horario = Horario::findOrFail($id);

        $horario->delete();

        return redirect()->route('horarios.index');
    }
}
