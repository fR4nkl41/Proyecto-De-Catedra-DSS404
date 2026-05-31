@extends('layouts.app')

@section('title', 'Panel Administrativo - IronPulse Gym')

@section('content')
<div class="w-full max-w-6xl mx-auto px-4 animate-fade-in">

    <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-4 mb-12">
        <div>
            <h1 class="text-4xl font-black tracking-tighter uppercase italic font-sport text-white">
                PANEL <span class="text-red-600 text-shadow-red">ADMINISTRATIVO</span>
            </h1>
            <p class="text-xs text-gray-400 uppercase tracking-widest mt-1">
                Bienvenido de vuelta, <span class="text-red-500 font-bold font-sport">{{ Auth::user()->nombre ?? 'Oscar Armando' }}</span>
            </p>
        </div>

        <form method="POST" action="{{ route('logout') }}" class="w-full md:w-auto">
            @csrf
            <button type="submit" class="w-full md:w-auto border border-red-900/60 bg-red-950/20 hover:bg-red-600 text-red-500 hover:text-white text-xs font-bold uppercase tracking-widest px-5 py-3 rounded-xl transition-all duration-200 font-sport">
                ✖ Cerrar sesión
            </button>
        </form>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

        <div class="bg-[#0f0f12]/90 border border-gray-900/80 hover:border-blue-600/40 p-6 rounded-2xl transition-all duration-300 group shadow-xl relative overflow-hidden">
            <div class="absolute top-0 right-0 w-24 h-24 bg-blue-600/5 rounded-full blur-2xl group-hover:bg-blue-600/10 transition-all"></div>
            <div class="text-blue-500 mb-4 group-hover:scale-110 transition-transform duration-200">
                <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
            </div>
            <h3 class="text-lg font-black uppercase tracking-wider text-white font-sport">Planes</h3>
            <p class="text-xs text-gray-500 mt-1">Administrar planes del gimnasio.</p>
            <a href="/planes" class="inline-block text-xs text-blue-500 hover:text-blue-400 font-bold uppercase mt-6 tracking-wider">Configurar Módulo →</a>
        </div>

        <div class="bg-[#0f0f12]/90 border border-gray-900/80 hover:border-emerald-600/40 p-6 rounded-2xl transition-all duration-300 group shadow-xl relative overflow-hidden">
            <div class="absolute top-0 right-0 w-24 h-24 bg-emerald-600/5 rounded-full blur-2xl group-hover:bg-emerald-600/10 transition-all"></div>
            <div class="text-emerald-500 mb-4 group-hover:scale-110 transition-transform duration-200">
                <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
            </div>
            <h3 class="text-lg font-black uppercase tracking-wider text-white font-sport">Horarios</h3>
            <p class="text-xs text-gray-500 mt-1">Gestionar horarios y actividades.</p>
            <a href="/horarios" class="inline-block text-xs text-emerald-500 hover:text-emerald-400 font-bold uppercase mt-6 tracking-wider">Configurar Módulo →</a>
        </div>

        <div class="bg-[#0f0f12]/90 border border-gray-900/80 hover:border-amber-500/40 p-6 rounded-2xl transition-all duration-300 group shadow-xl relative overflow-hidden">
            <div class="absolute top-0 right-0 w-24 h-24 bg-amber-500/5 rounded-full blur-2xl group-hover:bg-amber-500/10 transition-all"></div>
            <div class="text-amber-500 mb-4 group-hover:scale-110 transition-transform duration-200">
                <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
            </div>
            <h3 class="text-lg font-black uppercase tracking-wider text-white font-sport">Inscripciones</h3>
            <p class="text-xs text-gray-500 mt-1">Controlar membresías activas.</p>
            <a href="/inscripciones" class="inline-block text-xs text-amber-500 hover:text-amber-400 font-bold uppercase mt-6 tracking-wider">Configurar Módulo →</a>
        </div>

        <div class="bg-[#0f0f12]/90 border border-gray-900/80 hover:border-indigo-600/40 p-6 rounded-2xl transition-all duration-300 group shadow-xl relative overflow-hidden">
            <div class="absolute top-0 right-0 w-24 h-24 bg-indigo-600/5 rounded-full blur-2xl group-hover:bg-indigo-600/10 transition-all"></div>
            <div class="text-indigo-500 mb-4 group-hover:scale-110 transition-transform duration-200">
                <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
            </div>
            <h3 class="text-lg font-black uppercase tracking-wider text-white font-sport">Usuarios</h3>
            <p class="text-xs text-gray-500 mt-1">Administrar usuarios y roles.</p>
            <a href="/usuarios" class="inline-block text-xs text-indigo-500 hover:text-indigo-400 font-bold uppercase mt-6 tracking-wider">Configurar Módulo →</a>
        </div>

        <div class="bg-[#0f0f12]/90 border border-gray-900/80 hover:border-cyan-500/40 p-6 rounded-2xl transition-all duration-300 group shadow-xl relative overflow-hidden">
            <div class="absolute top-0 right-0 w-24 h-24 bg-cyan-500/5 rounded-full blur-2xl group-hover:bg-cyan-500/10 transition-all"></div>
            <div class="text-cyan-500 mb-4 group-hover:scale-110 transition-transform duration-200">
                <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
            </div>
            <h3 class="text-lg font-black uppercase tracking-wider text-white font-sport">Entrenadores</h3>
            <p class="text-xs text-gray-500 mt-1">Administrar entrenadores del gimnasio.</p>
            <a href="/entrenadores" class="inline-block text-xs text-cyan-500 hover:text-cyan-400 font-bold uppercase mt-6 tracking-wider">Configurar Módulo →</a>
        </div>

    </div>
</div>
@endsection
