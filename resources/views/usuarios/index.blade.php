@extends('layouts.app')

@section('title', 'Control de Usuarios - IronPulse Gym')

@section('content')
<div class="w-full max-w-6xl mx-auto px-4 animate-fade-in">

    <!-- Encabezado de la Sección -->
    <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 mb-8">
        <div>
            <h1 class="text-3xl font-black tracking-tight text-white uppercase font-sport">
                CONTROL DE <span class="text-red-600 text-shadow-red">USUARIOS</span>
            </h1>
            <p class="text-xs text-gray-400 uppercase tracking-wider mt-1">Administración de credenciales, cuentas y roles del gimnasio</p>
        </div>
    </div>

    <!-- Contenedor de la Tabla Estilo Oscuro Premium -->
    <div class="bg-[#0f0f12]/90 border border-gray-900 rounded-2xl overflow-hidden shadow-[0_20px_50px_rgba(0,0,0,0.6)] backdrop-blur-md mb-6">
        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-[#141418] border-b border-gray-900 text-gray-400 text-xs font-bold uppercase tracking-widest">
                        <th class="p-5 text-center w-20">ID</th>
                        <th class="p-5">Nombre Completo</th>
                        <th class="p-5">Correo Electrónico</th>
                        <th class="p-5 text-center">Rol / Permisos</th>
                        <th class="p-5 text-center">Acciones</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-900/60 text-sm">

                    @foreach($usuarios as $usuario)
                    <tr class="hover:bg-[#141418]/50 transition-colors">
                        <!-- ID -->
                        <td class="p-5 text-center font-bold text-gray-600 font-sport">
                            #{{ $usuario->id ?? $usuario->id_usuario }}
                        </td>

                        <!-- Nombre -->
                        <td class="p-5 font-black text-white uppercase tracking-tight">
                            {{ $usuario->nombre }}
                        </td>

                        <!-- Correo Electrónico -->
                        <td class="p-5 text-gray-400 font-medium">
                            {{ $usuario->correo }}
                        </td>

                        <!-- Rol con Badge Estilizado Inteligente -->
                        <td class="p-5 text-center">
                            @if(trim(strtolower($usuario->rol)) == 'administrador')
                                <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-bold uppercase tracking-wider bg-red-950/50 border border-red-800/60 text-red-400 shadow-[0_0_12px_rgba(220,38,38,0.15)] font-sport">
                                    🛡️ {{ $usuario->rol }}
                                </span>
                            @else
                                <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-bold uppercase tracking-wider bg-zinc-900 border border-zinc-800 text-zinc-400">
                                    👤 {{ $usuario->rol }}
                                </span>
                            @endif
                        </td>

                        <!-- Botones de Acción Estilizados -->
                        <td class="p-5">
                            <div class="flex justify-center items-center space-x-3">
                                <!-- Editar -->
                                <a href="{{ route('usuarios.edit', $usuario->id ?? $usuario->id_usuario) }}"
                                   class="text-xs bg-gray-800 hover:bg-gray-700 text-gray-200 font-bold px-3 py-2 rounded-lg transition-all uppercase tracking-wider">
                                    Editar
                                </a>

                                <!-- Eliminar seguro -->
                                <form action="{{ route('usuarios.destroy', $usuario->id ?? $usuario->id_usuario) }}" method="POST" onsubmit="return confirm('¿Seguro que deseas eliminar a este usuario del sistema?');">
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

    <!-- Botón inferior para Volver al Dashboard Estilizado -->
    <div class="flex justify-start pt-2">
        <a href="{{ route('dashboard') }}" class="border border-gray-800 bg-gray-900/30 hover:bg-gray-800 text-gray-400 hover:text-white text-xs font-bold uppercase tracking-widest px-4 py-3 rounded-xl transition-all duration-200">
            ← Volver al Dashboard
        </a>
    </div>

</div>
@endsection
