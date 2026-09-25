@extends('layout.app')

@section('content')
<div class="max-w-4xl mx-auto space-y-6">
    <!-- Breadcrumb / Back Link -->
    <div class="flex items-center gap-2 text-sm text-slate-500 animate-page-enter">
        <a href="{{ route('halaman_utama') }}" class="hover:text-emerald-600 transition-colors flex items-center gap-1 group">
            <svg class="w-4 h-4 transform group-hover:-translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
            </svg>
            <span>Beranda</span>
        </a>
        <span>/</span>
        <span class="text-slate-900 font-medium">Segitiga</span>
    </div>

    <!-- Main Grid with Form and Animated Geometric Visual -->
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 items-start">
        <!-- Form Calculator Card (7 Cols) -->
        <div class="lg:col-span-7 bg-white rounded-3xl border border-slate-200/80 shadow-xs overflow-hidden animate-page-enter">
            <!-- Card Header -->
            <div class="bg-gradient-to-r from-emerald-600 to-teal-700 p-6 sm:p-7 text-white">
                <div class="flex items-center gap-4">
                    <div class="w-12 h-12 rounded-2xl bg-white/15 backdrop-blur-md border border-white/20 flex items-center justify-center text-white shrink-0 shadow-inner">
                        <svg class="w-7 h-7" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 3L2 21h20L12 3z"/>
                        </svg>
                    </div>
                    <div>
                        <h1 class="text-xl sm:text-2xl font-bold tracking-tight">Hitung Luas Segitiga</h1>
                        <p class="text-emerald-100 text-xs sm:text-sm mt-0.5">
                            Silahkan masukkan alas dan tinggi untuk menghitung luasnya.
                        </p>
                    </div>
                </div>

                <!-- Formula Chip -->
                <div class="mt-5 pt-3 border-t border-white/15 flex items-center justify-between text-xs text-emerald-100">
                    <span>Rumus:</span>
                    <span class="px-3 py-1 rounded-lg bg-white/15 backdrop-blur-xs font-mono font-bold text-white tracking-wide shadow-xs">
                        Luas = (a × t) / 2
                    </span>
                </div>
            </div>

            <!-- Card Body / Form -->
            <div class="p-6 sm:p-7 space-y-6">
                <form action="{{ route('hitung_segitiga') }}" method="POST" novalidate class="space-y-5">
                    @csrf

                    <!-- Input Alas -->
                    <div>
                        <label for="alas" class="block text-sm font-semibold text-slate-700 mb-1.5">
                            Masukkan Alas Segitiga (a):
                        </label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-slate-400">
                                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4" />
                                </svg>
                            </div>
                            <input
                                type="text"
                                id="alas"
                                name="alas"
                                value="{{ old('alas') }}"
                                placeholder="Contoh: 6"
                                class="w-full pl-10 pr-4 py-3 rounded-xl border {{ $errors->has('alas') ? 'border-rose-400 ring-2 ring-rose-100 focus:border-rose-500 focus:ring-rose-200' : 'border-slate-300 focus:border-emerald-500 focus:ring-4 focus:ring-emerald-500/10' }} bg-slate-50/50 hover:bg-white focus:bg-white text-slate-900 text-base transition-all duration-200 outline-none"
                            >
                        </div>

                        @error('alas')
                            <div class="mt-2 flex items-center gap-1.5 text-xs text-rose-600 font-medium animate-result-pop">
                                <svg class="w-4 h-4 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <span>{{ $message }}</span>
                            </div>
                        @enderror
                    </div>

                    <!-- Input Tinggi -->
                    <div>
                        <label for="tinggi" class="block text-sm font-semibold text-slate-700 mb-1.5">
                            Masukkan Tinggi Segitiga (t):
                        </label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-slate-400">
                                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16V4m0 0L3 8m4-4l4 4m6 0v12m0 0l4-4m-4 4l-4-4" />
                                </svg>
                            </div>
                            <input
                                type="text"
                                id="tinggi"
                                name="tinggi"
                                value="{{ old('tinggi') }}"
                                placeholder="Contoh: 8"
                                class="w-full pl-10 pr-4 py-3 rounded-xl border {{ $errors->has('tinggi') ? 'border-rose-400 ring-2 ring-rose-100 focus:border-rose-500 focus:ring-rose-200' : 'border-slate-300 focus:border-emerald-500 focus:ring-4 focus:ring-emerald-500/10' }} bg-slate-50/50 hover:bg-white focus:bg-white text-slate-900 text-base transition-all duration-200 outline-none"
                            >
                        </div>

                        @error('tinggi')
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
                    class="w-full sm:w-auto px-7 py-3 bg-emerald-600 hover:bg-emerald-700 active:scale-[0.98] text-white font-semibold rounded-xl shadow-md shadow-emerald-600/20 hover:shadow-lg hover:shadow-emerald-600/30 transition-all duration-200 flex items-center justify-center gap-2 cursor-pointer"
                >
                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
                    </svg>
                    <span>Hitung Luas</span>
                </button>
            </form>

            <!-- Result Section -->
            @if(session('luas'))
                <div class="mt-6 pt-6 border-t border-slate-100 animate-result-pop">
                    <div class="p-5 rounded-2xl bg-gradient-to-br from-emerald-50 to-teal-50 border border-emerald-200/80">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-xl bg-emerald-500 text-white flex items-center justify-center shrink-0 shadow-xs">
                                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" />
                                </svg>
                            </div>
                            <div>
                                <p class="text-xs font-semibold text-emerald-800 uppercase tracking-wider">Hasil Perhitungan</p>
                                <p class="text-sm text-slate-600 mt-0.5">
                                    Hasil Hitung Luas Segitiganya Adalah:
                                </p>
                            </div>
                        </div>

                        <div class="mt-3 pl-13 flex items-baseline gap-2">
                            <span class="text-3xl sm:text-4xl font-extrabold text-emerald-700 tracking-tight">
                                {{ session('luas') }}
                            </span>
                            <span class="text-sm font-medium text-emerald-600">satuan luas</span>
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
            <span class="text-[11px] font-semibold text-emerald-600 bg-emerald-50 px-2 py-0.5 rounded-md">Segitiga (Triangle)</span>
        </div>

        <div class="h-56 bg-slate-50 rounded-2xl flex items-center justify-center border border-slate-100 relative overflow-hidden group">
            <!-- Interactive Triangle SVG -->
            <div class="relative flex flex-col items-center justify-center transition-transform duration-500 group-hover:scale-105 ">
                <svg class="w-44 h-36 text-emerald-600 filter drop-shadow-xs" viewBox="0 0 100 80" fill="none">
                    <polygon points="50,10 90,70 10,70" stroke="currentColor" stroke-width="1" fill="rgba(16, 185, 129, 0.15)" stroke-linejoin="round" />
                </svg>

                <!-- Dimension Indicators -->
                <span class="absolute -bottom-1 text-[11px] font-mono text-slate-500 font-semibold">alas (a)</span>
            </div>
        </div>

        <div class="text-xs text-slate-500 leading-relaxed bg-slate-50 p-3.5 rounded-xl border border-slate-100">
            <strong class="text-slate-800 block mb-1">Karakteristik Segitiga:</strong>
            <ul class="list-disc list-inside space-y-0.5">
                <li>Memiliki 3 sisi dan 3 titik sudut.</li>
                <li>Total ketiga sudutnya selalu $180^\circ$.</li>
            </ul>
        </div>
    </div>
</div>
</div>
@endsection
