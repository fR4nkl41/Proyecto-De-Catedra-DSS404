@extends('layouts.app')

@section('title', 'Nueva Inscripción - IronPulse Gym')

@section('content')
<div class="w-full max-w-2xl mx-auto px-4 animate-fade-in">

    <!-- Tarjeta del Formulario Oscura Premium -->
    <div class="bg-[#0f0f12]/95 border border-gray-900 rounded-2xl p-8 shadow-[0_25px_60px_rgba(0,0,0,0.8)] backdrop-blur-md">

        <!-- Encabezado del Formulario -->
        <div class="mb-8">
            <h2 class="text-2xl font-black tracking-tight text-white uppercase font-sport">
                NUEVA <span class="text-red-600 text-shadow-red">INSCRIPCIÓN</span>
            </h2>
            <p class="text-xs text-gray-500 uppercase tracking-wider mt-1">Asigna un plan de entrenamiento a un usuario del sistema</p>
        </div>

        <!-- Alertas de Errores por si falla la validación -->
        @if($errors->any())
            <div class="mb-6 bg-red-950/40 border border-red-800/60 text-red-400 p-4 rounded-xl text-sm space-y-1 shadow-[0_0_15px_rgba(220,38,38,0.1)]">
                @foreach($errors->all() as $error)
                    <p class="flex items-center"><span class="mr-2 text-red-500">•</span> {{ $error }}</p>
                @endforeach
            </div>
        @endif

        <!-- Formulario apuntando al método store de inscripciones -->
        <form method="POST" action="{{ route('inscripciones.store') }}" class="space-y-6">
            @csrf

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">

                <!-- Campo: ID Usuario -->
                <div class="sm:col-span-2">
                    <label class="block text-xs font-bold uppercase tracking-widest text-gray-400 mb-2">ID Usuario</label>
                    <input type="number" name="id_usuario" value="{{ old('id_usuario') }}" required
                        class="w-full bg-[#141418] text-white border border-gray-800 focus:border-red-600 focus:ring-1 focus:ring-red-600 focus:outline-none rounded-xl px-4 py-3.5 text-sm transition-all duration-200 font-sport placeholder-gray-700"
                        placeholder="Ej. 3, 4, 5...">
                </div>

                <!-- Campo: ID Plan -->
                <div class="sm:col-span-2">
                    <label class="block text-xs font-bold uppercase tracking-widest text-gray-400 mb-2">ID Plan</label>
                    <input type="number" name="id_plan" value="{{ old('id_plan') }}" required
                        class="w-full bg-[#141418] text-white border border-gray-800 focus:border-red-600 focus:ring-1 focus:ring-red-600 focus:outline-none rounded-xl px-4 py-3.5 text-sm transition-all duration-200 font-sport placeholder-gray-700"
                        placeholder="Ej. 1, 2, 3...">
                </div>

                <!-- Campo: Fecha Inicio -->
                <div class="sm:col-span-2">
                    <label class="block text-xs font-bold uppercase tracking-widest text-gray-400 mb-2">Fecha de Inicio</label>
                    <input type="date" name="fecha_inicio" value="{{ old('fecha_inicio', date('Y-m-d')) }}" required
                        class="w-full bg-[#141418] text-white border border-gray-800 focus:border-red-600 focus:ring-1 focus:ring-red-600 focus:outline-none rounded-xl px-4 py-3.5 text-sm transition-all duration-200 font-sport [color-scheme:dark]">
                </div>

                <!-- Campo: Estado -->
                <div class="sm:col-span-2">
                    <label class="block text-xs font-bold uppercase tracking-widest text-gray-400 mb-2">Estado de la Inscripción</label>
                    <div class="relative">
                        <select name="estado" required
                            class="w-full bg-[#141418] text-white border border-gray-800 focus:border-red-600 focus:ring-1 focus:ring-red-600 focus:outline-none rounded-xl px-4 py-3.5 text-sm transition-all duration-200 appearance-none cursor-pointer">
                            <option value="Activa" {{ old('estado') == 'Activa' ? 'selected' : '' }}>Activa</option>
                            <option value="Pendiente" {{ old('estado') == 'Pendiente' ? 'selected' : '' }}>Pendiente</option>
                            <option value="Inactiva" {{ old('estado') == 'Inactiva' ? 'selected' : '' }}>Inactiva</option>
                        </select>
                        <div class="absolute inset-y-0 right-4 flex items-center pointer-events-none text-gray-500">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Botones de Acción inferiores -->
            <div class="flex items-center justify-end space-x-4 pt-6 border-t border-gray-900/60">
                <a href="{{ route('inscripciones.index') }}" class="text-xs font-bold uppercase tracking-widest text-gray-500 hover:text-white transition-colors">
                    Cancelar
                </a>
                <button type="submit"
                    class="bg-red-600 hover:bg-red-700 active:scale-[0.98] text-white text-xs font-bold uppercase tracking-widest px-6 py-4 rounded-xl transition-all shadow-[0_4px_25px_rgba(220,38,38,0.25)] font-sport">
                    GUARDAR INSCRIPCIÓN
                </button>
            </div>

        </form>

    </div>
</div>
@endsection
