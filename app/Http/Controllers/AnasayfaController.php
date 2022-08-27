<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Urun;
use App\Models\UrunDetay;

class AnasayfaController extends Controller
{
    public function index()
    {
        $kategoriler = Kategori::take(8)->get();

        $urunler_one_cikan = UrunDetay::with('urun')->where('goster_one_cikan', 1)->take(4)->get();
        $urunler_firsat = Urun::select('urun.*')
            ->join('urun_detay', 'urun_detay.urun_id', 'urun_id')
            ->where('urun_detay.goster_gunun_firsati', 1)
            ->orderBy('updated_at', 'desc')
            ->first();
        $urunler_slider = UrunDetay::with('urun')->where('goster_slider', 1)->take(4)->get();
        $urunler_cok_satanlar = UrunDetay::with('urun')->where('goster_cok_satanlar', 1)->take(4)->get();
        $urunler_indirimli = UrunDetay::with('urun')->where('goster_indirimli', 1)->take(4)->get();



        return view('anasayfa', compact('kategoriler','urunler_slider','urunler_firsat','urunler_one_cikan','urunler_cok_satanlar','urunler_indirimli'));
    }
}
