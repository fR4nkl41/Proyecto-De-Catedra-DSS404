@extends('layouts.app')

@section('title', 'Editar Entrenador - IronPulse Gym')

@section('content')
<div class="w-full max-w-2xl mx-auto px-4 animate-fade-in">

    <!-- Tarjeta del Formulario Oscura Premium -->
    <div class="bg-[#0f0f12]/95 border border-gray-900 rounded-2xl p-8 shadow-[0_25px_60px_rgba(0,0,0,0.8)] backdrop-blur-md">

        <!-- Encabezado del Formulario -->
        <div class="mb-8">
            <h2 class="text-2xl font-black tracking-tight text-white uppercase font-sport">
                MODIFICAR <span class="text-red-600 text-shadow-red">ENTRENADOR</span>
            </h2>
            <p class="text-xs text-gray-500 uppercase tracking-wider mt-1">Actualiza las credenciales del miembro del staff</p>
        </div>

        <!-- Alertas de Errores por si falla la validación en Laravel -->
        @if($errors->any())
            <div class="mb-6 bg-red-950/40 border border-red-800/60 text-red-400 p-4 rounded-xl text-sm space-y-1">
                @foreach($errors->all() as $error)
                    <p class="flex items-center"><span class="mr-2 text-red-500">•</span> {{ $error }}</p>
                @endforeach
            </div>
        @endif

        @php
            // Captura segura de la variable para evitar errores de compilación de Blade
            $item = $entrenador ?? $instructor ?? $entrenadores ?? null;
            $id = $item ? ($item->id ?? $item->id_entrenador ?? null) : null;
        @endphp

        @if($item && $id)
            <!-- Formulario principal con parámetros protegidos -->
            <form method="POST" action="{{ route('entrenadores.update', $id) }}" class="space-y-6">
                @csrf
                @method('PUT')

                <div class="grid grid-cols-1 gap-6">

                    <!-- Campo: Nombre Completo -->
                    <div>
                        <label class="block text-xs font-bold uppercase tracking-widest text-gray-400 mb-2">Nombre del Instructor</label>
                        <input type="text" name="nombre" value="{{ old('nombre', $item->nombre ?? '') }}" required
                            class="w-full bg-[#141418] text-white border border-gray-800 focus:border-red-600 focus:ring-1 focus:ring-red-600 focus:outline-none rounded-xl px-4 py-3.5 text-sm transition-all duration-200">
                    </div>

                    <!-- Campo: Especialidad Técnica -->
                    <div>
                        <label class="block text-xs font-bold uppercase tracking-widest text-gray-400 mb-2">Especialidad / Competencias</label>
                        <input type="text" name="especialidad" value="{{ old('especialidad', $item->especialidad ?? '') }}" required
                            class="w-full bg-[#141418] text-white border border-gray-800 focus:border-red-600 focus:ring-1 focus:ring-red-600 focus:outline-none rounded-xl px-4 py-3.5 text-sm transition-all duration-200">
                    </div>

                </div>

                <!-- Botones de Acción inferiores -->
                <div class="flex items-center justify-end space-x-4 pt-6 border-t border-gray-900/60">
                    <a href="{{ route('entrenadores.index') }}" class="text-xs font-bold uppercase tracking-widest text-gray-500 hover:text-white transition-colors">
                        Cancelar
                    </a>
                    <button type="submit"
                        class="bg-red-600 hover:bg-red-700 active:scale-[0.98] text-white text-xs font-bold uppercase tracking-widest px-6 py-4 rounded-xl transition-all shadow-[0_4px_25px_rgba(220,38,38,0.25)] font-sport">
                        ACTUALIZAR DETALLES
                    </button>
                </div>

            </form>
        @else
            <!-- Estado alternativo de contingencia si no se reciben datos desde la ruta -->
            <div class="text-center py-8 border border-dashed border-gray-800 rounded-xl">
                <p class="text-sm text-gray-500 mb-4">No se pudieron recuperar los parámetros del entrenador seleccionado.</p>
                <a href="{{ route('entrenadores.index') }}" class="inline-block bg-gray-800 text-white text-xs font-bold uppercase tracking-widest px-4 py-2 rounded-xl transition-colors">
                    Regresar al listado
                </a>
            </div>
        @endif

    </div>
</div>
@endsection
