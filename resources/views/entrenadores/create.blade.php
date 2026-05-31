@extends('layouts.app')

@section('title', 'Nuevo Entrenador - IronPulse Gym')

@section('content')
<div class="w-full max-w-2xl mx-auto px-4 animate-fade-in">

    <!-- Tarjeta del Formulario Oscura Premium -->
    <div class="bg-[#0f0f12]/95 border border-gray-900 rounded-2xl p-8 shadow-[0_25px_60px_rgba(0,0,0,0.8)] backdrop-blur-md">

        <!-- Encabezado del Formulario -->
        <div class="mb-8">
            <h2 class="text-2xl font-black tracking-tight text-white uppercase font-sport">
                NUEVO <span class="text-red-600 text-shadow-red">ENTRENADOR</span>
            </h2>
            <p class="text-xs text-gray-500 uppercase tracking-wider mt-1">Registra un nuevo instructor para el staff del gimnasio</p>
        </div>

        <!-- Alertas de Errores por si falla la validación -->
        @if($errors->any())
            <div class="mb-6 bg-red-950/40 border border-red-800/60 text-red-400 p-4 rounded-xl text-sm space-y-1 shadow-[0_0_15px_rgba(220,38,38,0.1)]">
                @foreach($errors->all() as $error)
                    <p class="flex items-center"><span class="mr-2 text-red-500">•</span> {{ $error }}</p>
                @endforeach
            </div>
        @endif

        <!-- Formulario apuntando al método store de entrenadores -->
        <form method="POST" action="{{ route('entrenadores.store') }}" class="space-y-6">
            @csrf

            <div class="grid grid-cols-1 gap-6">

                <!-- Campo: Nombre Completo -->
                <div>
                    <label class="block text-xs font-bold uppercase tracking-widest text-gray-400 mb-2">Nombre</label>
                    <input type="text" name="nombre" value="{{ old('nombre') }}" required
                        class="w-full bg-[#141418] text-white border border-gray-800 focus:border-red-600 focus:ring-1 focus:ring-red-600 focus:outline-none rounded-xl px-4 py-3.5 text-sm transition-all duration-200 placeholder-gray-700"
                        placeholder="Escriba el nombre completo del instructor...">
                </div>

                <!-- Campo: Especialidad (Desplegable exacto a tu diseño) -->
                <div>
                    <label class="block text-xs font-bold uppercase tracking-widest text-gray-400 mb-2">Especialidad</label>
                    <div class="relative">
                        <select name="especialidad" required
                            class="w-full bg-[#141418] text-white border border-gray-800 focus:border-red-600 focus:ring-1 focus:ring-red-600 focus:outline-none rounded-xl px-4 py-3.5 text-sm transition-all duration-200 appearance-none cursor-pointer">
                            <option value="" disabled selected>Seleccione especialidad</option>
                            <option value="Hipertrofia y Levantamiento de Potencia" {{ old('especialidad') == 'Hipertrofia y Levantamiento de Potencia' ? 'selected' : '' }}>Hipertrofia y Levantamiento de Potencia</option>
                            <option value="Cardio HIIT y Spinning" {{ old('especialidad') == 'Cardio HIIT y Spinning' ? 'selected' : '' }}>Cardio HIIT y Spinning</option>
                            <option value="CrossFit y Acondicionamiento Físico" {{ old('especialidad') == 'CrossFit y Acondicionamiento Físico' ? 'selected' : '' }}>CrossFit y Acondicionamiento Físico</option>
                        </select>
                        <!-- Flecha minimalista SVG -->
                        <div class="absolute inset-y-0 right-4 flex items-center pointer-events-none text-gray-500">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Botones de Acción inferiores (Guardar y Volver estilizados) -->
            <div class="flex items-center justify-end space-x-4 pt-6 border-t border-gray-900/60">
                <a href="{{ route('entrenadores.index') }}" class="text-xs font-bold uppercase tracking-widest text-gray-500 hover:text-white transition-colors">
                    Volver
                </a>
                <button type="submit"
                    class="bg-red-600 hover:bg-red-700 active:scale-[0.98] text-white text-xs font-bold uppercase tracking-widest px-6 py-4 rounded-xl transition-all shadow-[0_4px_25px_rgba(220,38,38,0.25)] font-sport">
                    Guardar
                </button>
            </div>

        </form>

    </div>
</div>
@endsection
