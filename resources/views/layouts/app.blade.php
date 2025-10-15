<!doctype html>
<html lang="pt">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>{{ config('app.name', 'RedTeamBat') }}</title>
    <meta name="description" content="RedTeamBat — Serviços de cibersegurança: Red Team, Pentesting, SOC, Auditorias e Formação." />
    <link rel="icon" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><text y='0.9em' font-size='80'>🦇</text></svg>">

    {{-- Tailwind via CDN --}}
    <script src="https://cdn.tailwindcss.com"></script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-white text-neutral-900 antialiased">

<!--Top Bar -->
<header class="fixed top-0 left-0 w-full z-50 bg-white/10 backdrop-blur-md text-white">
    <div class="mx-auto max-w-7xl px-6">
        <div class="flex items-center justify-between h-16">
            <!-- Logo -->
            <a href="{{ route('home') }}" class="flex items-center gap-2">
                <img src="{{ url('/logo.png') }}" alt="Logo redBatteam" class="h-10 w-auto">
                <span class="text-xl font-bold">RedBatTeam</span>
            </a>

            <!-- Menu desktop -->
            <nav class="hidden md:flex space-x-6 font-medium">
                <a href="{{ route('home') }}" class="hover:text-red-200 {{ request()->routeIs('home') ? 'underline decoration-white/60' : '' }}">Início</a>
                <a href="{{ route('services') }}" class="hover:text-red-200 {{ request()->routeIs('services') ? 'underline decoration-white/60' : '' }}">Serviços</a>
                <a href="{{ route('products') }}" class="hover:text-red-200">Produtos</a>
                <a href="{{ route('about') }}" class="hover:text-red-200">Sobre nós</a>
                <a href="{{ route('contacts') }}" class="hover:text-red-200">Contactos</a>
            </nav>

            <!-- Botão mobile -->
            <div class="md:hidden">
                <button id="menu-toggle" class="focus:outline-none">
                    ☰
                </button>
            </div>
        </div>
    </div>

    <!-- Menu mobile -->
    <div id="mobile-menu" class="hidden md:hidden bg-red-600 px-6 pb-4 space-y-2">
        <a href="{{ route('home') }}" class="block hover:text-red-200">Início</a>
        <a href="{{ route('services') }}" class="block hover:text-red-200">Serviços</a>
        <a href="{{ route('products') }}" class="block hover:text-red-200">Produtos</a>
        <a href="{{ route('about') }}" class="block hover:text-red-200">Sobre nós</a>
        <a href="{{ route('contacts') }}" class="block hover:text-red-200">Contactos</a>
    </div>

</header>

<!-- Espaço extra para não ficar escondido atrás da topbar -->
<main>
    @yield('content')
</main>

@include('partials.footer')


<script>
    // Toggle menu mobile
    document.addEventListener("DOMContentLoaded", () => {
        const btn = document.getElementById("menu-toggle");
        const menu = document.getElementById("mobile-menu");

        if (btn) {
            btn.addEventListener("click", () => {
                menu.classList.toggle("hidden");
            });
        }
    });
</script>
</body>
</html>
