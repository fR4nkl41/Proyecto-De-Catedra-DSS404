<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use Illuminate\Http\Request;

class PlanController extends Controller
{
    public function index()
    {
        $planes = Plan::all();

        return view('planes.index', compact('planes'));
    }

    public function create()
    {
        return view('planes.create');
    }

    public function store(Request $request)
    {
        $plan = new Plan();

        $plan->nombre_plan = $request->input('nombre_plan');
        $plan->descripcion = $request->input('descripcion');
        $plan->precio = $request->input('precio');

        $plan->save();

        return redirect()->route('planes.index');
    }

    public function edit($id)
    {
        $plan = Plan::findOrFail($id);

        return view('planes.edit', compact('plan'));
    }

    public function update(Request $request, $id)
    {
        $plan = Plan::findOrFail($id);

        $plan->nombre_plan = $request->input('nombre_plan');
        $plan->descripcion = $request->input('descripcion');
        $plan->precio = $request->input('precio');

        $plan->save();

        return redirect()->route('planes.index');
    }

    public function destroy($id)
    {
        $plan = Plan::findOrFail($id);

        $plan->delete();

        return redirect()->route('planes.index');
    }
}