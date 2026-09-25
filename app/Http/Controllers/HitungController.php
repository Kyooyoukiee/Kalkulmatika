<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HitungController extends Controller
{
    public function halaman_utama()
    {
        return view('home');
    }
    public function halaman_persegi()
    {
        return view('persegi');
    }
    public function halaman_persegi_panjang()
    {
        return view('persegi_panjang');
    }
    public function halaman_segitiga()
    {
        return view('segitiga');
    }
    public function halaman_lingkaran()
    {
        return view('lingkaran');
    }

    public function hitung_persegi(Request $request)
    {
        $request->validate([
            'sisi' => 'required|numeric|min:1',
        ],
        [
            'sisi.required' => 'Sisi persegi harus diisi.',
            'sisi.numeric' => 'Sisi persegi harus berupa angka.',
            'sisi.min' => 'Sisi persegi harus lebih besar dari 0.',
        ]);
        $sisi = $request->input('sisi');
        $luas = $sisi * $sisi;
        return redirect()->route('halaman_persegi')->with([
            'luas' => $luas,
        ]);
    }
    public function hitung_persegi_panjang(Request $request)
    {
        $request->validate([
            'panjang' => 'required|numeric|min:1',
            'lebar' => 'required|numeric|min:1',
        ],
        [
            'panjang.required' => 'Panjang sisi persegi panjang harus diisi.',
            'panjang.numeric' => 'Panjang sisi persegi panjang harus berupa angka.',
            'panjang.min' => 'Panjang sisi persegi panjang harus lebih besar dari 0.',
            'lebar.required' => 'Lebar sisi persegi panjang harus diisi.',
            'lebar.numeric' => 'Lebar sisi persegi panjang harus berupa angka.',
            'lebar.min' => 'Lebar sisi persegi panjang harus lebih besar dari 0.',
        ]);
        $panjang = $request->input('panjang');
        $lebar = $request->input('lebar');
        $luas = $panjang * $lebar;
        return redirect()->route('halaman_persegi_panjang')->with([
            'luas' => $luas,
        ]);
    }
    public function hitung_segitiga(Request $request)
    {
        $request->validate([
            'alas' => 'required|numeric|min:1',
            'tinggi' => 'required|numeric|min:1',
        ],
        [
            'alas.required' => 'Alas segitiga harus diisi.',
            'alas.numeric' => 'Alas segitiga harus berupa angka.',
            'alas.min' => 'Alas segitiga harus lebih besar dari 0.',
            'tinggi.required' => 'Tinggi segitiga harus diisi.',
            'tinggi.numeric' => 'Tinggi segitiga harus berupa angka.',
            'tinggi.min' => 'Tinggi segitiga harus lebih besar dari 0.',
        ]);
        $alas = $request->input('alas');
        $tinggi = $request->input('tinggi');
        $luas = ($alas * $tinggi) / 2;
        return redirect()->route('halaman_segitiga')->with([
            'luas' => $luas,
        ]);
    }
    public function hitung_lingkaran(Request $request)
    {
        $request->validate([
            'jari_jari' => 'required|numeric|min:1',
        ],
        [
            'jari_jari.required' => 'Jari-jari lingkaran harus diisi.',
            'jari_jari.numeric' => 'Jari-jari lingkaran harus berupa angka.',
            'jari_jari.min' => 'Jari-jari lingkaran harus lebih besar dari 0.',
        ]);
        $jari_jari = $request->input('jari_jari');
        $luas = M_PI * $jari_jari * $jari_jari;
        return redirect()->route('halaman_lingkaran')->with([
            'luas' => round($luas, 3),
        ]);
    }
}
