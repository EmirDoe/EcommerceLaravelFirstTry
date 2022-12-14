<?php

namespace App\Http\Controllers;

use App\Models\Urun;
use Illuminate\Http\Request;

class UrunController extends Controller
{
    public function index($slug_urunadi)
    {
        $urun = Urun::where('slug', $slug_urunadi)->firstOrFail();
        return view('urun',compact('urun'));
    }
    public function ara()
    {
        $aranan = request()->input('aranan');
        $urunler = Urun::where('urun_adi', 'like', "%$aranan%")
            ->orWhere('aciklama', 'like', "%$aranan%")
            ->paginate(12);
        request()->flash();
        $arama_sayi = $urunler->total();

        return view('arama', compact('urunler','arama_sayi'));
    }
}
