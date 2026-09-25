@extends('layout.app')

@section('content')
<div class="space-y-12">
    <!-- Hero Section -->
    <div class="relative overflow-hidden rounded-3xl bg-gradient-to-br from-indigo-900 via-indigo-800 to-slate-900 text-white p-8 sm:p-12 lg:p-14 shadow-xl shadow-indigo-950/20 animate-page-enter">
        <!-- Background subtle glow -->
        <div class="absolute -top-24 -right-24 w-96 h-96 bg-indigo-500/20 rounded-full blur-3xl pointer-events-none"></div>
        <div class="absolute -bottom-24 -left-24 w-96 h-96 bg-cyan-500/15 rounded-full blur-3xl pointer-events-none"></div>

        <div class="relative z-10 max-w-3xl space-y-6">
            <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-white/10 backdrop-blur-md border border-white/15 text-xs font-medium text-indigo-200">
                <span class="w-2 h-2 rounded-full bg-emerald-400"></span>
                Kalkulator Geometri Interaktif
            </div>

            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold tracking-tight leading-tight">
                Selamat Datang di <span class="bg-gradient-to-r from-indigo-200 via-cyan-200 to-white bg-clip-text text-transparent">Kalkulmatika</span>
            </h1>

            <p class="text-lg sm:text-xl font-medium text-indigo-100/95">
                Hitung luas bangun datar jadi lebih mudah dan cepat
            </p>

            <p class="text-slate-300 text-sm sm:text-base leading-relaxed">
                Kalkulmatika membantu kamu menghitung luas berbagai bangun datar seperti
                persegi, persegi panjang, segitiga, lingkaran, dan masih banyak lagi.
                Cukup pilih bangun datar yang kamu inginkan, lalu masukkan angkanya.
            </p>

            <p class="text-indigo-200 text-sm font-medium">
                Yuk, pilih menu di bawah untuk mulai menghitung!
            </p>

            <div class="pt-2 flex flex-wrap items-center gap-3">
                <div class="flex items-center gap-2 text-xs sm:text-sm text-indigo-200/90 bg-white/5 backdrop-blur-md px-3.5 py-2 rounded-xl border border-white/10 transition-all hover:bg-white/10">
                    <svg class="w-4 h-4 text-emerald-400 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                    </svg>
                    <span>Validasi Input Otomatis</span>
                </div>
                <div class="flex items-center gap-2 text-xs sm:text-sm text-indigo-200/90 bg-white/5 backdrop-blur-md px-3.5 py-2 rounded-xl border border-white/10 transition-all hover:bg-white/10">
                    <svg class="w-4 h-4 text-cyan-400 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                    </svg>
                    <span>Kalkulasi Instan</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Shape Cards Grid Section -->
    <div class="space-y-6">
        <div class="flex flex-col sm:flex-row sm:items-end justify-between gap-2 border-b border-slate-200/80 pb-4">
            <div>
                <h2 class="text-2xl font-bold text-slate-900 tracking-tight">Pilih Bangun Datar</h2>
                <p class="text-sm text-slate-500 mt-0.5">Pilih menu untuk mulai menghitung luas bangun datar</p>
            </div>
            <span class="text-xs font-semibold text-indigo-600 bg-indigo-50 px-3 py-1 rounded-full border border-indigo-100 self-start sm:self-auto shadow-xs">
                4 Bangun Datar Tersedia
            </span>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            <!-- Persegi -->
            <a href="{{ route('halaman_persegi') }}" class="group relative bg-white rounded-3xl p-6 border border-slate-200/80 shadow-xs hover:shadow-xl hover:border-indigo-400 hover:-translate-y-1.5 transition-all duration-300 flex flex-col justify-between overflow-hidden animate-page-enter delay-1">
                <div class="space-y-4">
                    <div class="w-12 h-12 rounded-2xl bg-indigo-50 border border-indigo-100 flex items-center justify-center text-indigo-600 group-hover:bg-indigo-600 group-hover:text-white group-hover:scale-105 transition-all duration-300 shadow-xs">
                        <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                            <rect width="16" height="16" x="4" y="4" rx="1.5"/>
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-lg font-bold text-slate-900 group-hover:text-indigo-600 transition-colors">Persegi</h3>
                        <p class="text-xs text-slate-500 mt-1">Bangun datar dengan 4 sisi yang sama panjang</p>
                    </div>
                    <div class="inline-block px-2.5 py-1 rounded-lg bg-slate-100 text-slate-700 text-xs font-mono font-semibold group-hover:bg-indigo-50 group-hover:text-indigo-700 transition-colors">
                        L = s × s
                    </div>
                </div>
                <div class="mt-6 pt-4 border-t border-slate-100 flex items-center justify-between text-xs font-semibold text-indigo-600 group-hover:text-indigo-700">
                    <span>Mulai Hitung</span>
                    <svg class="w-4 h-4 transform group-hover:translate-x-1.5 transition-transform duration-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.2" d="M9 5l7 7-7 7"/>
                    </svg>
                </div>
            </a>

            <!-- Persegi Panjang -->
            <a href="{{ route('halaman_persegi_panjang') }}" class="group relative bg-white rounded-3xl p-6 border border-slate-200/80 shadow-xs hover:shadow-xl hover:border-cyan-400 hover:-translate-y-1.5 transition-all duration-300 flex flex-col justify-between overflow-hidden animate-page-enter delay-2">
                <div class="space-y-4">
                    <div class="w-12 h-12 rounded-2xl bg-cyan-50 border border-cyan-100 flex items-center justify-center text-cyan-600 group-hover:bg-cyan-600 group-hover:text-white group-hover:scale-105 transition-all duration-300 shadow-xs">
                        <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                            <rect width="20" height="12" x="2" y="6" rx="1.5"/>
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-lg font-bold text-slate-900 group-hover:text-cyan-600 transition-colors">Persegi Panjang</h3>
                        <p class="text-xs text-slate-500 mt-1">Bangun datar dengan 2 pasang sisi sejajar</p>
                    </div>
                    <div class="inline-block px-2.5 py-1 rounded-lg bg-slate-100 text-slate-700 text-xs font-mono font-semibold group-hover:bg-cyan-50 group-hover:text-cyan-700 transition-colors">
                        L = p × l
                    </div>
                </div>
                <div class="mt-6 pt-4 border-t border-slate-100 flex items-center justify-between text-xs font-semibold text-cyan-600 group-hover:text-cyan-700">
                    <span>Mulai Hitung</span>
                    <svg class="w-4 h-4 transform group-hover:translate-x-1.5 transition-transform duration-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.2" d="M9 5l7 7-7 7"/>
                    </svg>
                </div>
            </a>

            <!-- Segitiga -->
            <a href="{{ route('halaman_segitiga') }}" class="group relative bg-white rounded-3xl p-6 border border-slate-200/80 shadow-xs hover:shadow-xl hover:border-emerald-400 hover:-translate-y-1.5 transition-all duration-300 flex flex-col justify-between overflow-hidden animate-page-enter delay-3">
                <div class="space-y-4">
                    <div class="w-12 h-12 rounded-2xl bg-emerald-50 border border-emerald-100 flex items-center justify-center text-emerald-600 group-hover:bg-emerald-600 group-hover:text-white group-hover:scale-105 transition-all duration-300 shadow-xs">
                        <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 3L2 21h20L12 3z"/>
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-lg font-bold text-slate-900 group-hover:text-emerald-600 transition-colors">Segitiga</h3>
                        <p class="text-xs text-slate-500 mt-1">Bangun datar dibatasi 3 garis lurus</p>
                    </div>
                    <div class="inline-block px-2.5 py-1 rounded-lg bg-slate-100 text-slate-700 text-xs font-mono font-semibold group-hover:bg-emerald-50 group-hover:text-emerald-700 transition-colors">
                        L = (a × t) / 2
                    </div>
                </div>
                <div class="mt-6 pt-4 border-t border-slate-100 flex items-center justify-between text-xs font-semibold text-emerald-600 group-hover:text-emerald-700">
                    <span>Mulai Hitung</span>
                    <svg class="w-4 h-4 transform group-hover:translate-x-1.5 transition-transform duration-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.2" d="M9 5l7 7-7 7"/>
                    </svg>
                </div>
            </a>

            <!-- Lingkaran -->
            <a href="{{ route('halaman_lingkaran') }}" class="group relative bg-white rounded-3xl p-6 border border-slate-200/80 shadow-xs hover:shadow-xl hover:border-violet-400 hover:-translate-y-1.5 transition-all duration-300 flex flex-col justify-between overflow-hidden animate-page-enter delay-4">
                <div class="space-y-4">
                    <div class="w-12 h-12 rounded-2xl bg-violet-50 border border-violet-100 flex items-center justify-center text-violet-600 group-hover:bg-violet-600 group-hover:text-white group-hover:scale-105 transition-all duration-300 shadow-xs">
                        <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="9"/>
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-lg font-bold text-slate-900 group-hover:text-violet-600 transition-colors">Lingkaran</h3>
                        <p class="text-xs text-slate-500 mt-1">Himpunan titik berjarak sama ke pusat</p>
                    </div>
                    <div class="inline-block px-2.5 py-1 rounded-lg bg-slate-100 text-slate-700 text-xs font-mono font-semibold group-hover:bg-violet-50 group-hover:text-violet-700 transition-colors">
                        L = π × r²
                    </div>
                </div>
                <div class="mt-6 pt-4 border-t border-slate-100 flex items-center justify-between text-xs font-semibold text-violet-600 group-hover:text-violet-700">
                    <span>Mulai Hitung</span>
                    <svg class="w-4 h-4 transform group-hover:translate-x-1.5 transition-transform duration-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.2" d="M9 5l7 7-7 7"/>
                    </svg>
                </div>
            </a>
        </div>
    </div>

    <!-- Coming Soon Feature Callout -->
    <div class="rounded-3xl border border-dashed border-indigo-200/90 bg-indigo-50/60 p-6 sm:p-7 flex flex-col sm:flex-row items-center justify-between gap-4 text-center sm:text-left transition-all duration-300">
        <div class="flex items-center gap-4">
            <div class="w-12 h-12 rounded-2xl bg-indigo-100 text-indigo-700 flex items-center justify-center shrink-0 shadow-xs">
                <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </div>
            <div>
                <h4 class="text-sm font-bold text-indigo-950">Untuk fitur hitung keliling akan segera hadir!</h4>
                <p class="text-xs text-indigo-700/80 mt-0.5">Kami sedang menyiapkan fitur kalkulator keliling untuk seluruh bangun datar di atas. Stay tuned!</p>
            </div>
        </div>
    </div>
</div>
@endsection
