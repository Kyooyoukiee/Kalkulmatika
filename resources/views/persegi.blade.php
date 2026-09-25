@extends('layout.app')

@section('content')
<div class="max-w-4xl mx-auto space-y-6">
    <!-- Breadcrumb / Back Link -->
    <div class="flex items-center gap-2 text-sm text-slate-500 animate-page-enter">
        <a href="{{ route('halaman_utama') }}" class="hover:text-indigo-600 transition-colors flex items-center gap-1 group">
            <svg class="w-4 h-4 transform group-hover:-translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
            </svg>
            <span>Beranda</span>
        </a>
        <span>/</span>
        <span class="text-slate-900 font-medium">Persegi</span>
    </div>

    <!-- Main Grid with Form and Animated Geometric Visual -->
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 items-start">
        <!-- Form Calculator Card (8 Cols) -->
        <div class="lg:col-span-7 bg-white rounded-3xl border border-slate-200/80 shadow-xs overflow-hidden animate-page-enter">
            <!-- Card Header -->
            <div class="bg-gradient-to-r from-indigo-600 to-indigo-700 p-6 sm:p-7 text-white">
                <div class="flex items-center gap-4">
                    <div class="w-12 h-12 rounded-2xl bg-white/15 backdrop-blur-md border border-white/20 flex items-center justify-center text-white shrink-0 shadow-inner">
                        <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                            <rect width="16" height="16" x="4" y="4" rx="1.5"/>
                        </svg>
                    </div>
                    <div>
                        <h1 class="text-xl sm:text-2xl font-bold tracking-tight">Hitung Luas Persegi</h1>
                        <p class="text-indigo-100 text-xs sm:text-sm mt-0.5">
                            Silahkan masukkan panjang sisi persegi untuk menghitung luasnya.
                        </p>
                    </div>
                </div>

                <!-- Formula Chip -->
                <div class="mt-5 pt-3 border-t border-white/15 flex items-center justify-between text-xs text-indigo-100">
                    <span>Rumus:</span>
                    <span class="px-3 py-1 rounded-lg bg-white/15 backdrop-blur-xs font-mono font-bold text-white tracking-wide shadow-xs">
                        Luas = s × s
                    </span>
                </div>
            </div>

            <!-- Card Body / Form -->
            <div class="p-6 sm:p-7 space-y-6">
                <form action="{{ route('hitung_persegi') }}" method="POST" novalidate class="space-y-5">
                    @csrf

                    <div>
                        <label for="sisi" class="block text-sm font-semibold text-slate-700 mb-1.5">
                            Masukkan Panjang Sisi Persegi (s):
                        </label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-slate-400">
                                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 20l4-16m2 16l4-16M6 9h14M4 15h14" />
                                </svg>
                            </div>
                            <input
                                type="text"
                                id="sisi"
                                name="sisi"
                                value="{{ old('sisi') }}"
                                placeholder="Contoh: 5"
                                class="w-full pl-10 pr-4 py-3 rounded-xl border {{ $errors->has('sisi') ? 'border-rose-400 ring-2 ring-rose-100 focus:border-rose-500 focus:ring-rose-200' : 'border-slate-300 focus:border-indigo-500 focus:ring-4 focus:ring-indigo-500/10' }} bg-slate-50/50 hover:bg-white focus:bg-white text-slate-900 text-base transition-all duration-200 outline-none"
                            >
                        </div>

                        @error('sisi')
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
                        class="w-full sm:w-auto px-7 py-3 bg-indigo-600 hover:bg-indigo-700 active:scale-[0.98] text-white font-semibold rounded-xl shadow-md shadow-indigo-600/20 hover:shadow-lg hover:shadow-indigo-600/30 transition-all duration-200 flex items-center justify-center gap-2 cursor-pointer"
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
                                        Hasil Hitung Luas Perseginya Adalah:
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
                <span class="text-[11px] font-semibold text-indigo-600 bg-indigo-50 px-2 py-0.5 rounded-md">Persegi (Square)</span>
            </div>

            <div class="h-56 bg-slate-50 rounded-2xl flex items-center justify-center border border-slate-100 relative overflow-hidden group">
                <!-- Interactive Square SVG with Smooth Pulse Hover Animation -->
                <div class="w-36 h-36 border-2 border-indigo-600 bg-indigo-500/10 rounded-xl flex items-center justify-center relative transition-transform duration-500 group-hover:scale-105 group-hover:bg-indigo-500/15 shadow-inner">

                    <!-- Dimension Indicators -->
                    <span class="absolute -bottom-6 text-[11px] font-mono text-slate-500 font-semibold">sisi (s)</span>
                    <span class="absolute -left-10 text-[11px] font-mono text-slate-500 font-semibold -rotate-90">sisi (s)</span>
                </div>
            </div>

            <div class="text-xs text-slate-500 leading-relaxed bg-slate-50 p-3.5 rounded-xl border border-slate-100">
                <strong class="text-slate-800 block mb-1">Karakteristik Persegi:</strong>
                <ul class="list-disc list-inside space-y-0.5">
                    <li>Memiliki 4 sisi yang sama panjang (s).</li>
                    <li>Memiliki 4 sudut siku-siku (90°).</li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
