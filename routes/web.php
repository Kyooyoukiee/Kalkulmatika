<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HitungController;

Route::get('/', [HitungController::class, 'halaman_utama'])->name('halaman_utama');
Route::get('/persegi', [HitungController::class, 'halaman_persegi'])->name('halaman_persegi');
Route::get('/persegi_panjang', [HitungController::class, 'halaman_persegi_panjang'])->name('halaman_persegi_panjang');
Route::get('/segitiga', [HitungController::class, 'halaman_segitiga'])->name('halaman_segitiga');
Route::get('/lingkaran', [HitungController::class, 'halaman_lingkaran'])->name('halaman_lingkaran');


Route::post('/hitung_persegi', [HitungController::class, 'hitung_persegi'])->name('hitung_persegi');
Route::post('/hitung_persegi_panjang', [HitungController::class, 'hitung_persegi_panjang'])->name('hitung_persegi_panjang');
Route::post('/hitung_segitiga', [HitungController::class, 'hitung_segitiga'])->name('hitung_segitiga');
Route::post('/hitung_lingkaran', [HitungController::class, 'hitung_lingkaran'])->name('hitung_lingkaran');
