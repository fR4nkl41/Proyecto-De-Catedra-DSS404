@extends('layouts.app')

@section('title', 'Editar Usuario - IronPulse Gym')

@section('content')
<div class="w-full max-w-2xl mx-auto px-4 animate-fade-in">

    <!-- Tarjeta del Formulario Oscura Premium -->
    <div class="bg-[#0f0f12]/95 border border-gray-900 rounded-2xl p-8 shadow-[0_25px_60px_rgba(0,0,0,0.8)] backdrop-blur-md">

        <!-- Encabezado del Formulario -->
        <div class="mb-8">
            <h2 class="text-2xl font-black tracking-tight text-white uppercase font-sport">
                EDITAR <span class="text-red-600 text-shadow-red">USUARIO</span>
            </h2>
            <p class="text-xs text-gray-500 uppercase tracking-wider mt-1">Modifica el perfil, credenciales o el rol de acceso de la cuenta</p>
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
        <form method="POST" action="{{ route('usuarios.update', $usuario->id ?? $usuario->id_usuario) }}" class="space-y-6">
            @csrf
            @method('PUT') <!-- Directiva obligatoria de Laravel para actualizar -->

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">

                <!-- Campo: Nombre Completo -->
                <div class="sm:col-span-2">
                    <label class="block text-xs font-bold uppercase tracking-widest text-gray-400 mb-2">Nombre Completo</label>
                    <input type="text" name="nombre" value="{{ old('nombre', $usuario->nombre) }}" required
                        class="w-full bg-[#141418] text-white border border-gray-800 focus:border-red-600 focus:ring-1 focus:ring-red-600 focus:outline-none rounded-xl px-4 py-3.5 text-sm transition-all duration-200">
                </div>

                <!-- Campo: Correo Electrónico -->
                <div class="sm:col-span-2">
                    <label class="block text-xs font-bold uppercase tracking-widest text-gray-400 mb-2">Correo Electrónico</label>
                    <input type="email" name="correo" value="{{ old('correo', $usuario->correo) }}" required
                        class="w-full bg-[#141418] text-white border border-gray-800 focus:border-red-600 focus:ring-1 focus:ring-red-600 focus:outline-none rounded-xl px-4 py-3.5 text-sm transition-all duration-200">
                </div>

                <!-- Campo: Rol / Permisos -->
                <div class="sm:col-span-2">
                    <label class="block text-xs font-bold uppercase tracking-widest text-gray-400 mb-2">Rol / Permisos del Sistema</label>
                    <div class="relative">
                        <select name="rol" required
                            class="w-full bg-[#141418] text-white border border-gray-800 focus:border-red-600 focus:ring-1 focus:ring-red-600 focus:outline-none rounded-xl px-4 py-3.5 text-sm transition-all duration-200 appearance-none cursor-pointer">
                            <option value="Administrador" {{ old('rol', $usuario->rol) == 'Administrador' ? 'selected' : '' }}>Administrador</option>
                            <option value="Cliente" {{ old('rol', $usuario->rol) == 'Cliente' ? 'selected' : '' }}>Cliente</option>
                            <option value="Entrenador" {{ old('rol', $usuario->rol) == 'Entrenador' ? 'selected' : '' }}>Entrenador</option>
                        </select>
                        <div class="absolute inset-y-0 right-4 flex items-center pointer-events-none text-gray-500">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </div>
                    </div>
                </div>

                <!-- Opcional Campo: Nueva Contraseña (Por si deseas dar soporte a cambiar clave desde aquí) -->
                <div class="sm:col-span-2">
                    <label class="block text-xs font-bold uppercase tracking-widest text-gray-400 mb-1">Nueva Contraseña</label>
                    <span class="block text-[10px] text-gray-600 uppercase tracking-wider mb-2">(Dejar en blanco si no deseas cambiarla)</span>
                    <input type="password" name="contrasena"
                        class="w-full bg-[#141418] text-white border border-gray-800 focus:border-red-600 focus:ring-1 focus:ring-red-600 focus:outline-none rounded-xl px-4 py-3.5 text-sm transition-all duration-200 placeholder-gray-800"
                        placeholder="••••••••">
                </div>

            </div>

            <!-- Botones de Acción inferiores -->
            <div class="flex items-center justify-end space-x-4 pt-6 border-t border-gray-900/60">
                <a href="{{ route('usuarios.index') }}" class="text-xs font-bold uppercase tracking-widest text-gray-500 hover:text-white transition-colors">
                    Cancelar
                </a>
                <button type="submit"
                    class="bg-red-600 hover:bg-red-700 active:scale-[0.98] text-white text-xs font-bold uppercase tracking-widest px-6 py-4 rounded-xl transition-all shadow-[0_4px_25px_rgba(220,38,38,0.25)] font-sport">
                    ACTUALIZAR USUARIO
                </button>
            </div>

        </form>

    </div>
</div>
@endsection
