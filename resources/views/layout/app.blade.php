<!DOCTYPE html>
<html lang="id" class="h-full bg-slate-50 text-slate-900 antialiased">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Kalkulmatika - Hitung Luas Bangun Datar' }}</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-full flex flex-col bg-slate-50 selection:bg-indigo-500 selection:text-white font-sans relative overflow-x-hidden">
    <!-- Header / Navbar -->
    <header class="sticky top-0 z-50 bg-white/90 backdrop-blur-md border-b border-slate-200/80 shadow-xs transition-all duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <!-- Logo -->
                <a href="{{ route('halaman_utama') }}" class="flex items-center gap-3 group">
                    <div class="w-10 h-10 rounded-xl bg-gradient-to-tr from-indigo-600 to-indigo-500 flex items-center justify-center text-white shadow-md shadow-indigo-500/20 group-hover:scale-110 group-hover:rotate-6 group-hover:shadow-indigo-500/40 transition-all duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 transition-transform duration-300 group-hover:scale-110" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                            <rect width="16" height="20" x="4" y="2" rx="2"/>
                            <line x1="8" x2="16" y1="6" y2="6"/>
                            <line x1="16" x2="16" y1="14" y2="18"/>
                            <path d="M16 10h.01"/>
                            <path d="M12 10h.01"/>
                            <path d="M8 10h.01"/>
                            <path d="M12 14h.01"/>
                            <path d="M8 14h.01"/>
                            <path d="M12 18h.01"/>
                            <path d="M8 18h.01"/>
                        </svg>
                    </div>
                    <div>
                        <div class="flex items-center gap-1.5">
                            <span class="text-xl font-bold tracking-tight text-slate-900 group-hover:text-indigo-600 transition-colors">Kalkulmatika</span>
                            <span class="px-1.5 py-0.5 text-[10px] font-semibold bg-indigo-50 text-indigo-700 rounded-md border border-indigo-200/60">v1.0</span>
                        </div>
                        <p class="text-xs text-slate-500 hidden sm:block">Kalkulator Bangun Datar</p>
                    </div>
                </a>

                <!-- Desktop Navigation Links -->
                <nav class="hidden md:flex items-center gap-1">
                    <a href="{{ route('halaman_utama') }}"
                        class="px-3.5 py-2 rounded-xl text-sm font-medium transition-all duration-200 {{ request()->routeIs('halaman_utama') ? 'bg-indigo-50 text-indigo-700 font-semibold shadow-xs' : 'text-slate-600 hover:text-slate-900 hover:bg-slate-100 hover:scale-105' }}">
                        Beranda
                    </a>
                    <a href="{{ route('halaman_persegi') }}"
                        class="px-3.5 py-2 rounded-xl text-sm font-medium transition-all duration-200 flex items-center gap-1.5 {{ request()->routeIs('halaman_persegi') ? 'bg-indigo-50 text-indigo-700 font-semibold shadow-xs' : 'text-slate-600 hover:text-slate-900 hover:bg-slate-100 hover:scale-105' }}">
                        <span class="w-2.5 h-2.5 rounded-xs border border-current"></span>
                        Persegi
                    </a>
                    <a href="{{ route('halaman_persegi_panjang') }}"
                        class="px-3.5 py-2 rounded-xl text-sm font-medium transition-all duration-200 flex items-center gap-1.5 {{ request()->routeIs('halaman_persegi_panjang') ? 'bg-indigo-50 text-indigo-700 font-semibold shadow-xs' : 'text-slate-600 hover:text-slate-900 hover:bg-slate-100 hover:scale-105' }}">
                        <span class="w-3.5 h-2 rounded-xs border border-current"></span>
                        Persegi Panjang
                    </a>
                    <a href="{{ route('halaman_segitiga') }}"
                        class="px-3.5 py-2 rounded-xl text-sm font-medium transition-all duration-200 flex items-center gap-1.5 {{ request()->routeIs('halaman_segitiga') ? 'bg-indigo-50 text-indigo-700 font-semibold shadow-xs' : 'text-slate-600 hover:text-slate-900 hover:bg-slate-100 hover:scale-105' }}">
                        <svg class="w-3 h-3" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 3L2 21h20L12 3z"/></svg>
                        Segitiga
                    </a>
                    <a href="{{ route('halaman_lingkaran') }}"
                        class="px-3.5 py-2 rounded-xl text-sm font-medium transition-all duration-200 flex items-center gap-1.5 {{ request()->routeIs('halaman_lingkaran') ? 'bg-indigo-50 text-indigo-700 font-semibold shadow-xs' : 'text-slate-600 hover:text-slate-900 hover:bg-slate-100 hover:scale-105' }}">
                        <span class="w-2.5 h-2.5 rounded-full border border-current"></span>
                        Lingkaran
                    </a>
                </nav>

                <!-- Mobile Menu Button -->
                <div class="flex md:hidden">
                    <button id="mobile-menu-btn" type="button" class="p-2 rounded-xl text-slate-600 hover:text-slate-900 hover:bg-slate-100 active:scale-95 transition-all focus:outline-none focus:ring-2 focus:ring-indigo-500" aria-label="Buka Menu">
                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Navigation Menu -->
        <div id="mobile-menu" class="hidden md:hidden border-t border-slate-200 bg-white px-4 pt-2 pb-3 space-y-1 transition-all duration-200">
            <a href="{{ route('halaman_utama') }}"
                class="block px-3 py-2 rounded-lg text-base font-medium {{ request()->routeIs('halaman_utama') ? 'bg-indigo-50 text-indigo-700 font-semibold' : 'text-slate-700 hover:bg-slate-100' }}">
                Beranda
            </a>
            <a href="{{ route('halaman_persegi') }}"
                class="block px-3 py-2 rounded-lg text-base font-medium {{ request()->routeIs('halaman_persegi') ? 'bg-indigo-50 text-indigo-700 font-semibold' : 'text-slate-700 hover:bg-slate-100' }}">
                Persegi
            </a>
            <a href="{{ route('halaman_persegi_panjang') }}"
                class="block px-3 py-2 rounded-lg text-base font-medium {{ request()->routeIs('halaman_persegi_panjang') ? 'bg-indigo-50 text-indigo-700 font-semibold' : 'text-slate-700 hover:bg-slate-100' }}">
                Persegi Panjang
            </a>
            <a href="{{ route('halaman_segitiga') }}"
                class="block px-3 py-2 rounded-lg text-base font-medium {{ request()->routeIs('halaman_segitiga') ? 'bg-indigo-50 text-indigo-700 font-semibold' : 'text-slate-700 hover:bg-slate-100' }}">
                Segitiga
            </a>
            <a href="{{ route('halaman_lingkaran') }}"
                class="block px-3 py-2 rounded-lg text-base font-medium {{ request()->routeIs('halaman_lingkaran') ? 'bg-indigo-50 text-indigo-700 font-semibold' : 'text-slate-700 hover:bg-slate-100' }}">
                Lingkaran
            </a>
        </div>
    </header>

    <!-- Main Content Area -->
    <main class="flex-1 max-w-7xl w-full mx-auto px-4 sm:px-6 lg:px-8 py-8 sm:py-12 animate-page-enter">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-white border-t border-slate-200 mt-auto">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
            <div class="flex flex-col sm:flex-row items-center justify-between gap-4 text-center sm:text-left">
                <div class="flex items-center gap-2">
                    <div class="w-6 h-6 rounded-md bg-indigo-600 flex items-center justify-center text-white text-xs font-bold shadow-xs">K</div>
                    <span class="text-sm font-semibold text-slate-800">Kalkulmatika</span>
                    <span class="text-xs text-slate-400">• Hitung Luas Bangun Datar</span>
                </div>
                <p class="text-xs text-slate-500">
                    Dibuat oleh <span class="font-semibold text-indigo-600">Kyooyoukiee</span> &bull; &copy; {{ date('Y') }} Kalkulmatika
                </p>
            </div>
        </div>
    </footer>

    <!-- Mobile Menu Toggle Script -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const btn = document.getElementById('mobile-menu-btn');
            const menu = document.getElementById('mobile-menu');
            if (btn && menu) {
                btn.addEventListener('click', function () {
                    menu.classList.toggle('hidden');
                });
            }
        });
    </script>
</body>
</html>
