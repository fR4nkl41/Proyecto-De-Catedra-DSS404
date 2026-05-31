<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'IronPulse Gym')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Orbitron:wght@700;900&family=Plus+Jakarta+Sans:wght@400;600;800&display=swap');
        .font-sport { font-family: 'Orbitron', sans-serif; }
        .font-sans-premium { font-family: 'Plus Jakarta Sans', sans-serif; }
        .text-shadow-red { text-shadow: 0 0 15px rgba(220, 38, 38, 0.6); }
    </style>
</head>
<body class="min-h-screen bg-[#08080a] text-gray-100 font-sans-premium relative overflow-x-hidden flex flex-col justify-between">

    <!-- Luces LED Rojas de Fondo -->
    <div class="absolute top-[-15%] left-[-10%] w-[600px] h-[600px] bg-red-600/10 rounded-full blur-[130px] pointer-events-none"></div>
    <div class="absolute bottom-[-15%] right-[-10%] w-[600px] h-[600px] bg-red-600/10 rounded-full blur-[130px] pointer-events-none"></div>

    <!-- Barra de Navegación superior -->
    <header class="w-full border-b border-gray-900/80 bg-[#0c0c0e]/80 backdrop-blur-md sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
            <a href="/" class="text-2xl font-black tracking-tighter uppercase italic font-sport">
                IRON<span class="text-red-600 text-shadow-red">PULSE</span>
            </a>
            <nav class="flex items-center space-x-6 text-xs font-bold uppercase tracking-widest">
                <a href="/dashboard" class="text-gray-400 hover:text-white transition-colors">Dashboard</a>
                <a href="/login" class="text-gray-400 hover:text-red-500 transition-colors">Ingresar</a>
            </nav>
        </div>
    </header>

    <!-- Contenido Dinámico -->
    <main class="flex-grow flex items-center justify-center py-12 px-4 relative z-10">
        @yield('content')
    </main>

    <footer class="w-full border-t border-gray-950 bg-[#050507] py-4 text-center text-xs tracking-widest text-gray-600 uppercase font-sport">
        &copy; {{ date('Y') }} IRONPULSE GYM.
    </footer>
</body>
</html>
