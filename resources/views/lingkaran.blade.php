@extends('layout.app')

@section('content')
<div class="max-w-4xl mx-auto space-y-6">
    <!-- Breadcrumb / Back Link -->
    <div class="flex items-center gap-2 text-sm text-slate-500 animate-page-enter">
        <a href="{{ route('halaman_utama') }}" class="hover:text-violet-600 transition-colors flex items-center gap-1 group">
            <svg class="w-4 h-4 transform group-hover:-translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
            </svg>
            <span>Beranda</span>
        </a>
        <span>/</span>
        <span class="text-slate-900 font-medium">Lingkaran</span>
    </div>

    <!-- Main Grid with Form and Animated Geometric Visual -->
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 items-start">
        <!-- Form Calculator Card (7 Cols) -->
        <div class="lg:col-span-7 bg-white rounded-3xl border border-slate-200/80 shadow-xs overflow-hidden animate-page-enter">
            <!-- Card Header -->
            <div class="bg-gradient-to-r from-violet-600 to-purple-700 p-6 sm:p-7 text-white">
                <div class="flex items-center gap-4">
                    <div class="w-12 h-12 rounded-2xl bg-white/15 backdrop-blur-md border border-white/20 flex items-center justify-center text-white shrink-0 shadow-inner">
                        <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="9"/>
                        </svg>
                    </div>
                    <div>
                        <h1 class="text-xl sm:text-2xl font-bold tracking-tight">Hitung Luas Lingkaran</h1>
                        <p class="text-violet-100 text-xs sm:text-sm mt-0.5">
                            Silahkan masukkan jari-jari lingkaran untuk menghitung luasnya.
                        </p>
                    </div>
                </div>

                <!-- Formula Chip -->
                <div class="mt-5 pt-3 border-t border-white/15 flex items-center justify-between text-xs text-violet-100">
                    <span>Rumus:</span>
                    <span class="px-3 py-1 rounded-lg bg-white/15 backdrop-blur-xs font-mono font-bold text-white tracking-wide shadow-xs">
                        Luas = π × r²
                    </span>
                </div>
            </div>

            <!-- Card Body / Form -->
            <div class="p-6 sm:p-7 space-y-6">
                <form action="{{ route('hitung_lingkaran') }}" method="POST" novalidate class="space-y-5">
                    @csrf

                    <div>
                        <label for="jari_jari" class="block text-sm font-semibold text-slate-700 mb-1.5">
                            Masukkan Jari-jari Lingkaran (r):
                        </label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-slate-400">
                                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <circle cx="12" cy="12" r="8" stroke-dasharray="3 3"/>
                                    <line x1="12" y1="12" x2="20" y2="12" stroke-width="2"/>
                                </svg>
                            </div>
                            <input
                                type="text"
                                id="jari_jari"
                                name="jari_jari"
                                value="{{ old('jari_jari') }}"
                                placeholder="Contoh: 7"
                                class="w-full pl-10 pr-4 py-3 rounded-xl border {{ $errors->has('jari_jari') ? 'border-rose-400 ring-2 ring-rose-100 focus:border-rose-500 focus:ring-rose-200' : 'border-slate-300 focus:border-violet-500 focus:ring-4 focus:ring-violet-500/10' }} bg-slate-50/50 hover:bg-white focus:bg-white text-slate-900 text-base transition-all duration-200 outline-none"
                            >
                        </div>

                        @error('jari_jari')
                            <div class="mt-2 flex items-center gap-1.5 text-xs text-rose-600 font-medium animate-result-pop">
                                <svg class="w-4 h-4 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <span>{{ $message }}</span>
                            </div>
                        @enderror
                    </div>

                    <button
                        type="submit"
                        class="w-full sm:w-auto px-7 py-3 bg-violet-600 hover:bg-violet-700 active:scale-[0.98] text-white font-semibold rounded-xl shadow-md shadow-violet-600/20 hover:shadow-lg hover:shadow-violet-600/30 transition-all duration-200 flex items-center justify-center gap-2 cursor-pointer"
                    >
                        <svg class="w-5 h-5 fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
                        </svg>
                        <span>Hitung Luas</span>
                    </button>
                </form>

                <!-- Result Section -->
                @if(session('luas'))
                    <div class="mt-6 pt-6 border-t border-slate-100 animate-result-pop">
                        <div class="p-5 rounded-2xl bg-gradient-to-br from-purple-50 to-indigo-50 border border-purple-200/80">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 rounded-xl bg-purple-600 text-white flex items-center justify-center shrink-0 shadow-xs">
                                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" />
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-xs font-semibold text-purple-800 uppercase tracking-wider">Hasil Perhitungan</p>
                                    <p class="text-sm text-slate-600 mt-0.5">
                                        Hasil Hitung Luas Lingkarannya Adalah:
                                    </p>
                                </div>
                            </div>

                            <div class="mt-3 pl-13 flex items-baseline gap-2">
                                <span class="text-3xl sm:text-4xl font-extrabold text-purple-700 tracking-tight">
                                    {{ session('luas') }}
                                </span>
                                <span class="text-sm font-medium text-purple-600">satuan luas</span>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>

        <!-- Animated Geometry Visual Card (5 Cols) -->
        <div class="lg:col-span-5 bg-white rounded-3xl border border-slate-200/80 p-6 sm:p-7 shadow-xs space-y-4 animate-page-enter delay-2">
            <div class="flex items-center justify-between border-b border-slate-100 pb-3">
                <h2 class="text-sm font-bold text-slate-800">Visual Geometri</h2>
                <span class="text-[11px] font-semibold text-violet-600 bg-violet-50 px-2 py-0.5 rounded-md">Lingkaran (Circle)</span>
            </div>

            <div class="h-56 bg-slate-50 rounded-2xl flex items-center justify-center border border-slate-100 relative overflow-hidden group">
                <!-- Interactive Circle SVG -->
                <div class="w-36 h-36 border-4 border-violet-600 bg-violet-500/10 rounded-full flex items-center justify-center relative transition-transform duration-500 group-hover:scale-105 group-hover:rotate-6 group-hover:bg-violet-500/15 shadow-inner">
                    <!-- Radius Line -->
                    <div class="absolute w-18 h-0.5 bg-violet-600 right-0 top-1/2 -translate-y-1/2"></div>
                    <div class="w-2.5 h-2.5 bg-violet-600 rounded-full z-10"></div>
                    <span class="absolute top-1/2 right-4 -translate-y-4 text-[11px] font-mono text-violet-700 font-bold">r</span>
                    <span class="text-xs font-mono font-bold text-violet-800 mt-6">L = π × r²</span>
                </div>
            </div>

            <div class="text-xs text-slate-500 leading-relaxed bg-slate-50 p-3.5 rounded-xl border border-slate-100">
                <strong class="text-slate-800 block mb-1">Karakteristik Lingkaran:</strong>
                <ul class="list-disc list-inside space-y-0.5">
                    <li>Konstanta $\pi \approx 3.14159$ atau $\frac{22}{7}$.</li>
                    <li>Jari-jari ($r$) adalah setengah dari diameter ($d$).</li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
