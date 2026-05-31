@extends('layouts.app')

@section('title', 'Staff de Entrenadores - IronPulse Gym')

@section('content')
<div class="w-full max-w-6xl mx-auto px-4 animate-fade-in">

    <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 mb-8">
        <div>
            <h1 class="text-3xl font-black tracking-tight text-white uppercase font-sport">
                STAFF DE <span class="text-red-600 text-shadow-red">ENTRENADORES</span>
            </h1>
            <p class="text-xs text-gray-400 uppercase tracking-wider mt-1">Administración del equipo técnico, instructores y especialidades</p>
        </div>

        <a href="{{ route('entrenadores.create') }}" class="bg-red-600 hover:bg-red-700 active:scale-[0.98] text-white text-xs font-bold uppercase tracking-widest px-5 py-3.5 rounded-xl transition-all shadow-[0_4px_20px_rgba(220,38,38,0.3)] hover:shadow-[0_4px_25px_rgba(220,38,38,0.5)] font-sport">
            ⚡ NUEVO ENTRENADOR
        </a>
    </div>

    @if(session('success'))
        <div class="mb-6 bg-emerald-950/40 border border-emerald-800/60 text-emerald-400 p-4 rounded-xl text-sm flex items-center shadow-[0_0_15px_rgba(16,185,129,0.1)]">
            <span class="mr-2 text-emerald-500">✓</span> {{ session('success') }}
        </div>
    @endif

    <div class="bg-[#0f0f12]/90 border border-gray-900 rounded-2xl overflow-hidden shadow-[0_20px_50px_rgba(0,0,0,0.6)] backdrop-blur-md mb-6">
        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-[#141418] border-b border-gray-900 text-gray-400 text-xs font-bold uppercase tracking-widest">
                        <th class="p-5 text-center w-20">ID</th>
                        <th class="p-5">Nombre del Instructor</th>
                        <th class="p-5">Especialidad Técnica</th>
                        <th class="p-5 text-center">Acciones</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-900/60 text-sm">

                    @foreach($entrenadores as $entrenador)
                    <tr class="hover:bg-[#141418]/50 transition-colors">
                        <td class="p-5 text-center font-bold text-gray-600 font-sport">
                            #{{ $entrenador->id_entrenador }}
                        </td>

                        <td class="p-5 font-black text-white uppercase tracking-tight">
                            <div class="flex items-center space-x-3">
                                <div class="w-8 h-8 rounded-full bg-red-600/10 border border-red-600/20 flex items-center justify-center text-red-500 font-sport text-xs font-bold">
                                    {{ strtoupper(substr($entrenador->nombre, 0, 1)) }}
                                </div>
                                <span>{{ $entrenador->nombre }}</span>
                            </div>
                        </td>

                        <td class="p-5 text-gray-300 font-medium">
                            <span class="text-red-500/80 mr-1.5">❚</span> {{ $entrenador->especialidad }}
                        </td>

                        <td class="p-5">
                            <div class="flex justify-center items-center space-x-3">
                                <a href="{{ route('entrenadores.edit', $entrenador->id_entrenador) }}"
                                   class="text-xs bg-gray-800 hover:bg-gray-700 text-gray-200 font-bold px-3 py-2 rounded-lg transition-all uppercase tracking-wider">
                                    Editar
                                </a>

                                <form action="{{ route('entrenadores.destroy', $entrenador->id_entrenador) }}" method="POST" onsubmit="return confirm('¿Seguro que deseas eliminar a este entrenador?');" style="display:inline;">
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

    <div class="flex justify-start pt-2">
        <a href="{{ route('dashboard') }}" class="border border-gray-800 bg-gray-900/30 hover:bg-gray-800 text-gray-400 hover:text-white text-xs font-bold uppercase tracking-widest px-4 py-3 rounded-xl transition-all duration-200">
            ← Volver al Dashboard
        </a>
    </div>

</div>
@endsection
