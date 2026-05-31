@extends('layouts.app')

@section('title', 'Lista de Horarios - IronPulse Gym')

@section('content')
<div class="w-full max-w-6xl mx-auto px-4 animate-fade-in">

    <!-- Encabezado de la Sección -->
    <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 mb-8">
        <div>
            <h1 class="text-3xl font-black tracking-tight text-white uppercase font-sport">
                LISTA DE <span class="text-red-600 text-shadow-red">HORARIOS</span>
            </h1>
            <p class="text-xs text-gray-400 uppercase tracking-wider mt-1">Cronograma de bloques, actividades y entrenamientos</p>
        </div>

        <!-- Botón Premium para Crear Nuevo Horario -->
        <a href="{{ route('horarios.create') }}" class="bg-red-600 hover:bg-red-700 active:scale-[0.98] text-white text-xs font-bold uppercase tracking-widest px-5 py-3.5 rounded-xl transition-all shadow-[0_4px_20px_rgba(220,38,38,0.3)] hover:shadow-[0_4px_25px_rgba(220,38,38,0.5)] font-sport">
            ⚡ NUEVO HORARIO
        </a>
    </div>

    <!-- Contenedor de la Tabla Estilo Oscuro Premium -->
    <div class="bg-[#0f0f12]/90 border border-gray-900 rounded-2xl overflow-hidden shadow-[0_20px_50px_rgba(0,0,0,0.6)] backdrop-blur-md">
        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-[#141418] border-b border-gray-900 text-gray-400 text-xs font-bold uppercase tracking-widest">
                        <th class="p-5 text-center w-20">ID</th>
                        <th class="p-5">Actividad</th>
                        <th class="p-5">Día</th>
                        <th class="p-5 font-sport">Hora Inicio</th>
                        <th class="p-5 font-sport">Hora Fin</th>
                        <th class="p-5 text-center">Entrenador</th>
                        <th class="p-5 text-center">Acciones</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-900/60 text-sm">

                    @foreach($horarios as $horario)
                    <tr class="hover:bg-[#141418]/50 transition-colors">
                        <!-- ID -->
                        <td class="p-5 text-center font-bold text-gray-600 font-sport">
                            #{{ $horario->id ?? $horario->id_horario }}
                        </td>

                        <!-- Actividad -->
                        <td class="p-5 font-black text-white uppercase tracking-tight">
                            {{ $horario->actividad }}
                        </td>

                        <!-- Día -->
                        <td class="p-5 text-gray-300 font-semibold">
                            {{ $horario->dia }}
                        </td>

                        <!-- Hora Inicio -->
                        <td class="p-5 text-gray-400 font-sport">
                            {{ $horario->hora_inicio }}
                        </td>

                        <!-- Hora Fin -->
                        <td class="p-5 text-gray-400 font-sport">
                            {{ $horario->hora_fin }}
                        </td>

                        <!-- Entrenador (Muestra el nombre si tienes la relación configurada, o el ID por defecto) -->
                        <td class="p-5 text-center font-bold text-red-500 font-sport">
                            {{ $horario->entrenador->nombre ?? $horario->entrenador }}
                        </td>

                        <!-- Botones de Acción Estilizados -->
                        <td class="p-5">
                            <div class="flex justify-center items-center space-x-3">
                                <!-- Editar -->
                                <a href="{{ route('horarios.edit', $horario->id ?? $horario->id_horario) }}"
                                   class="text-xs bg-gray-800 hover:bg-gray-700 text-gray-200 font-bold px-3 py-2 rounded-lg transition-all uppercase tracking-wider">
                                    Editar
                                </a>

                                <!-- Eliminar de forma segura -->
                                <form action="{{ route('horarios.destroy', $horario->id ?? $horario->id_horario) }}" method="POST" onsubmit="return confirm('¿Seguro que deseas eliminar este bloque de horario?');">
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
