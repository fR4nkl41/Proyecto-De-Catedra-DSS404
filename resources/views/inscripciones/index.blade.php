@extends('layouts.app')

@section('title', 'Lista de Inscripciones - IronPulse Gym')

@section('content')
<div class="w-full max-w-6xl mx-auto px-4 animate-fade-in">

    <!-- Encabezado de la Sección -->
    <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 mb-8">
        <div>
            <h1 class="text-3xl font-black tracking-tight text-white uppercase font-sport">
                LISTA DE <span class="text-red-600 text-shadow-red">INSCRIPCIONES</span>
            </h1>
            <p class="text-xs text-gray-400 uppercase tracking-wider mt-1">Control de membresías, usuarios asignados y estados de cuenta</p>
        </div>

        <!-- Botón Premium para Crear Nueva Inscripción -->
        <a href="{{ route('inscripciones.create') }}" class="bg-red-600 hover:bg-red-700 active:scale-[0.98] text-white text-xs font-bold uppercase tracking-widest px-5 py-3.5 rounded-xl transition-all shadow-[0_4px_20px_rgba(220,38,38,0.3)] hover:shadow-[0_4px_25px_rgba(220,38,38,0.5)] font-sport">
            ⚡ NUEVA INSCRIPCIÓN
        </a>
    </div>

    <!-- Contenedor de la Tabla Estilo Oscuro Premium -->
    <div class="bg-[#0f0f12]/90 border border-gray-900 rounded-2xl overflow-hidden shadow-[0_20px_50px_rgba(0,0,0,0.6)] backdrop-blur-md">
        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-[#141418] border-b border-gray-900 text-gray-400 text-xs font-bold uppercase tracking-widest">
                        <th class="p-5 text-center w-20">ID</th>
                        <th class="p-5">Usuario</th>
                        <th class="p-5">Plan Asignado</th>
                        <th class="p-5 font-sport">Fecha Inicio</th>
                        <th class="p-5 text-center">Estado</th>
                        <th class="p-5 text-center">Acciones</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-900/60 text-sm">

                    @foreach($inscripciones as $inscripcion)
                    <tr class="hover:bg-[#141418]/50 transition-colors">
                        <!-- ID -->
                        <td class="p-5 text-center font-bold text-gray-600 font-sport">
                            #{{ $inscripcion->id ?? $inscripcion->id_inscripcion }}
                        </td>

                        <!-- Usuario (Muestra el nombre si hay relación, o el ID como se ve en tu captura) -->
                        <td class="p-5 font-bold text-white tracking-tight">
                            @if(isset($inscripcion->user->nombre))
                                {{ $inscripcion->user->nombre }}
                            @elseif(isset($inscripcion->usuario->nombre))
                                {{ $inscripcion->usuario->nombre }}
                            @else
                                <span class="bg-gray-900 text-gray-400 px-2.5 py-1 rounded-md text-xs font-sport">ID: {{ $inscripcion->usuario ?? $inscripcion->id_usuario }}</span>
                            @endif
                        </td>

                        <!-- Plan Asignado (Muestra el nombre del plan o el ID numérico) -->
                        <td class="p-5 font-black text-red-500 uppercase tracking-tight">
                            @if(isset($inscripcion->plan->nombre))
                                {{ $inscripcion->plan->nombre }}
                            @else
                                <span class="font-sport text-sm">Plan #{{ $inscripcion->plan ?? $inscripcion->id_plan }}</span>
                            @endif
                        </td>

                        <!-- Fecha Inicio -->
                        <td class="p-5 text-gray-400 font-sport">
                            {{ $inscripcion->fecha_inicio }}
                        </td>

                        <!-- Estado con Badge Estilizado Neón -->
                        <td class="p-5 text-center">
                            @if(strtolower($inscripcion->estado) == 'activa' || strtolower($inscripcion->estado) == 'activo')
                                <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-bold uppercase tracking-wider bg-emerald-950/50 border border-emerald-800/60 text-emerald-400 shadow-[0_0_12px_rgba(16,185,129,0.15)]">
                                    ● {{ $inscripcion->estado }}
                                </span>
                            @else
                                <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-bold uppercase tracking-wider bg-gray-900 border border-gray-800 text-gray-500">
                                    ○ {{ $inscripcion->estado }}
                                </span>
                            @endif
                        </td>

                        <!-- Botones de Acción Estilizados -->
                        <td class="p-5">
                            <div class="flex justify-center items-center space-x-3">
                                <!-- Editar -->
                                <a href="{{ route('inscripciones.edit', $inscripcion->id ?? $inscripcion->id_inscripcion) }}"
                                   class="text-xs bg-gray-800 hover:bg-gray-700 text-gray-200 font-bold px-3 py-2 rounded-lg transition-all uppercase tracking-wider">
                                    Editar
                                </a>

                                <!-- Eliminar de forma segura -->
                                <form action="{{ route('inscripciones.destroy', $inscripcion->id ?? $inscripcion->id_inscripcion) }}" method="POST" onsubmit="return confirm('¿Seguro que deseas eliminar esta inscripción?');">
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
