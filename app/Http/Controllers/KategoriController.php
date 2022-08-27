<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index($slug_kategoriadi)
    {
        $kategori = Kategori::where("slug", $slug_kategoriadi)->firstOrFail();
        $childKategori = Kategori::where('parent', $kategori->id)->get();

        $urunler = $kategori->urunler;
        return view('kategori',compact('kategori','childKategori','urunler'));
    }
}
