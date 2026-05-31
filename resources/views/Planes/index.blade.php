@extends('layouts.app')

@section('title', 'Lista de Planes - IronPulse Gym')

@section('content')
<div class="w-full max-w-6xl mx-auto px-4 animate-fade-in">

    <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 mb-8">
        <div>
            <h1 class="text-3xl font-black tracking-tight text-white uppercase font-sport">
                LISTA DE <span class="text-red-600 text-shadow-red">PLANES</span>
            </h1>
            <p class="text-xs text-gray-400 uppercase tracking-wider mt-1">Administración de membresías y tarifas</p>
        </div>

        <a href="{{ route('planes.create') }}" class="bg-red-600 hover:bg-red-700 active:scale-[0.98] text-white text-xs font-bold uppercase tracking-widest px-5 py-3.5 rounded-xl transition-all shadow-[0_4px_20px_rgba(220,38,38,0.3)] hover:shadow-[0_4px_25px_rgba(220,38,38,0.5)] font-sport">
            ⚡ NUEVO PLAN
        </a>
    </div>

    <div class="bg-[#0f0f12]/90 border border-gray-900 rounded-2xl overflow-hidden shadow-[0_20px_50px_rgba(0,0,0,0.6)] backdrop-blur-md">
        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-[#141418] border-b border-gray-900 text-gray-400 text-xs font-bold uppercase tracking-widest">
                        <th class="p-5 text-center w-20">ID</th>
                        <th class="p-5">Nombre del Plan</th>
                        <th class="p-5 max-w-xs">Descripción</th>
                        <th class="p-5">Precio</th>
                        <th class="p-5 text-center">Acciones</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-900/60 text-sm">

                    @foreach($planes as $plan)
                    <tr class="hover:bg-[#141418]/50 transition-colors">
                        <td class="p-5 text-center font-bold text-gray-600 font-sport">
                            #{{ $plan->id ?? $plan->id_plan }}
                        </td>

                        <td class="p-5 font-black text-white uppercase tracking-tight">
                            {{ $plan->nombre }}
                        </td>

                        <td class="p-5 text-gray-400 leading-relaxed max-w-xs">
                            {{ $plan->descripcion }}
                        </td>

                        <td class="p-5 font-bold text-red-500 font-sport text-base">
                            ${{ number_format($plan->precio, 2) }}
                        </td>

                        <td class="p-5">
                            <div class="flex justify-center items-center space-x-3">
                                <a href="{{ route('planes.edit', $plan->id ?? $plan->id_plan) }}"
                                   class="text-xs bg-gray-800 hover:bg-gray-700 text-gray-200 font-bold px-3 py-2 rounded-lg transition-all uppercase tracking-wider">
                                    Editar
                                </a>

                                <form action="{{ route('planes.destroy', $plan->id ?? $plan->id_plan) }}" method="POST" onsubmit="return confirm('¿Seguro que deseas eliminar este plan?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                            class="text-xs bg-red-600/10 hover:bg-red-600 border border-red-600/20 text-red-500 hover:text-white font-bold px-3 py-2 rounded-lg transition-all uppercase tracking-wider">
                                        Eliminar
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
