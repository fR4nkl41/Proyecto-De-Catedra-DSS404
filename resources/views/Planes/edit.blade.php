@extends('layouts.app')

@section('title', 'Editar Plan - IronPulse Gym')

@section('content')
<div class="w-full max-w-2xl mx-auto px-4 animate-fade-in">

    <!-- Tarjeta del Formulario Oscura Premium -->
    <div class="bg-[#0f0f12]/95 border border-gray-900 rounded-2xl p-8 shadow-[0_25px_60px_rgba(0,0,0,0.8)] backdrop-blur-md">

        <!-- Encabezado del Formulario -->
        <div class="mb-8">
            <h2 class="text-2xl font-black tracking-tight text-white uppercase font-sport">
                EDITAR <span class="text-red-600 text-shadow-red">PLAN</span>
            </h2>
            <p class="text-xs text-gray-500 uppercase tracking-wider mt-1">Modifica las opciones actuales de la membresía</p>
        </div>

        <!-- Alertas de Errores por si falla la validación -->
        @if($errors->any())
            <div class="mb-6 bg-red-950/40 border border-red-800/60 text-red-400 p-4 rounded-xl text-sm space-y-1 shadow-[0_0_15px_rgba(220,38,38,0.1)]">
                @foreach($errors->all() as $error)
                    <p class="flex items-center"><span class="mr-2 text-red-500">•</span> {{ $error }}</p>
                @endforeach
            </div>
        @endif

        <!-- Formulario apuntando a la ruta de actualización (update) -->
        <form method="POST" action="{{ route('planes.update', $plan->id ?? $plan->id_plan) }}" class="space-y-6">
            @csrf
            @method('PUT') <!-- Directiva obligatoria de Laravel para actualizar -->

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">

                <!-- Campo: Nombre del Plan -->
                <div class="sm:col-span-2">
                    <label class="block text-xs font-bold uppercase tracking-widest text-gray-400 mb-2">Nombre del Plan</label>
                    <input type="text" name="nombre" value="{{ old('nombre', $plan->nombre) }}" required
                        class="w-full bg-[#141418] text-white border border-gray-800 focus:border-red-600 focus:ring-1 focus:ring-red-600 focus:outline-none rounded-xl px-4 py-3.5 text-sm transition-all duration-200 placeholder-gray-700">
                </div>

                <!-- Campo: Precio -->
                <div class="sm:col-span-2">
                    <label class="block text-xs font-bold uppercase tracking-widest text-gray-400 mb-2">Precio ($)</label>
                    <div class="relative">
                        <span class="absolute left-4 top-3.5 text-gray-500 font-sport">$</span>
                        <input type="number" name="precio" step="0.01" value="{{ old('precio', $plan->precio) }}" required
                            class="w-full bg-[#141418] text-white border border-gray-800 focus:border-red-600 focus:ring-1 focus:ring-red-600 focus:outline-none rounded-xl pl-8 pr-4 py-3.5 text-sm transition-all duration-200 font-sport">
                    </div>
                </div>

                <!-- Campo: Descripción -->
                <div class="sm:col-span-2">
                    <label class="block text-xs font-bold uppercase tracking-widest text-gray-400 mb-2">Descripción de Beneficios</label>
                    <textarea name="descripcion" rows="4" required
                        class="w-full bg-[#141418] text-white border border-gray-800 focus:border-red-600 focus:ring-1 focus:ring-red-600 focus:outline-none rounded-xl px-4 py-3.5 text-sm transition-all duration-200 resize-none">{{ old('descripcion', $plan->descripcion) }}</textarea>
                </div>

            </div>

            <!-- Botones de Acción inferiores -->
            <div class="flex items-center justify-end space-x-4 pt-6 border-t border-gray-900/60">
                <a href="{{ route('planes.index') }}" class="text-xs font-bold uppercase tracking-widest text-gray-500 hover:text-white transition-colors">
                    Cancelar
                </a>
                <button type="submit"
                    class="bg-red-600 hover:bg-red-700 active:scale-[0.98] text-white text-xs font-bold uppercase tracking-widest px-6 py-4 rounded-xl transition-all shadow-[0_4px_25px_rgba(220,38,38,0.25)] font-sport">
                    ACTUALIZAR PLAN
                </button>
            </div>

        </form>

    </div>
</div>
@endsection
