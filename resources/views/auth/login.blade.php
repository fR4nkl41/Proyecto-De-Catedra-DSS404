@extends('layouts.app')

@section('title', 'Iniciar Sesión - IronPulse Gym')

@section('content')
<div class="w-full max-w-md animate-fade-in">
    <!-- Card Premium Oscura con borde rojo sutil -->
    <div class="bg-[#0f0f12]/95 border border-gray-900/60 hover:border-red-600/30 transition-all duration-300 rounded-2xl p-8 shadow-[0_25px_60px_rgba(0,0,0,0.8)]">

        <div class="text-center mb-6">
            <h2 class="text-2xl font-black tracking-tight text-white uppercase font-sport">
                Iniciar <span class="text-red-600">Sesión</span>
            </h2>
            <p class="text-xs text-gray-500 uppercase tracking-wider mt-1">Ingresa a tu zona de entrenamiento</p>
        </div>

        <!-- Alertas de Errores de Laravel Estilizadas en Rojo Neón -->
        @if($errors->any())
            <div class="mb-5 bg-red-950/40 border border-red-800/60 text-red-400 p-4 rounded-xl text-sm space-y-1 shadow-[0_0_15px_rgba(220,38,38,0.1)]">
                @foreach($errors->all() as $error)
                    <p class="flex items-center">
                        <span class="mr-2 text-red-500">•</span> {{ $error }}
                    </p>
                @endforeach
            </div>
        @endif

        <!-- Formulario con tus rutas y campos exactos -->
        <form method="POST" action="{{ route('login') }}" class="space-y-5">
            @csrf

            <!-- Campo: Correo Electrónico -->
            <div>
                <label class="block text-xs font-bold uppercase tracking-widest text-gray-400 mb-2">Correo Electrónico</label>
                <input type="email" name="correo" value="{{ old('correo') }}" required
                    class="w-full bg-[#141418] text-white border border-gray-800/80 focus:border-red-600 focus:ring-1 focus:ring-red-600 focus:outline-none rounded-xl px-4 py-3.5 text-sm transition-all duration-200 placeholder-gray-700"
                    placeholder="ejemplo@correo.com">
            </div>

            <!-- Campo: Contraseña -->
            <div>
                <label class="block text-xs font-bold uppercase tracking-widest text-gray-400 mb-2">Contraseña</label>
                <input type="password" name="contrasena" required
                    class="w-full bg-[#141418] text-white border border-gray-800/80 focus:border-red-600 focus:ring-1 focus:ring-red-600 focus:outline-none rounded-xl px-4 py-3.5 text-sm transition-all duration-200 placeholder-gray-700"
                    placeholder="••••••••">
            </div>

            <!-- Botón de Envío Premium Red -->
            <button type="submit"
                class="w-full bg-red-600 hover:bg-red-700 active:scale-[0.99] text-white font-bold uppercase tracking-wider text-sm py-4 rounded-xl transition-all duration-200 shadow-[0_4px_25px_rgba(220,38,38,0.25)] hover:shadow-[0_4px_30px_rgba(220,38,38,0.45)] font-sport">
                Entrar al Olimpo
            </button>
        </form>

        <!-- Enlace de registro adaptado a tu ruta -->
        <div class="mt-6 text-center border-t border-gray-900/60 pt-4">
            <p class="text-xs text-gray-400">
                ¿No tienes cuenta?
                <a href="{{ route('registro') }}" class="text-red-500 hover:text-red-400 font-bold transition-colors ml-1 uppercase">
                    Regístrate
                </a>
            </p>
        </div>

    </div>
</div>
@endsection
