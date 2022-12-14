<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnasayfaController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\UrunController;
use App\Http\Controllers\SepetController;
use App\Http\Controllers\OdemeController;
use App\Http\Controllers\SiparisController;
use App\Http\Controllers\KullaniciController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [AnasayfaController::class, "index"])->name('anasayfa');
Route::get('/kategori/{slug_kategoriadi}',[KategoriController::class, "index"])->name('kategori');
Route::get('/urun/{slug_urunadi}',[UrunController::class, "index"])->name('urun');

Route::post('/ara', [UrunController::class, "ara"])->name('urun_ara');
Route::get('/ara', [UrunController::class, "ara"])->name('urun_ara');

Route::get('/sepet',[SepetController::class, "index"])->name('sepet');
Route::get('/odeme',[OdemeController::class, "index"])->name('odeme');

Route::get('/siparisler',[SiparisController::class, "index"])->name('siparisler');
Route::get('/siparisler/{id}',[SiparisController::class, "detay"])->name('siparis.detay');


Route::group(['prefix'=> 'kullanici'], function(){
    Route::get('/oturumac',[KullaniciController::class, "giris_form"])->name('kullanici.oturumac');
    Route::get('/kaydol',[KullaniciController::class, "kaydol_form"])->name('kullanici.kaydol');
    Route::get('/sifre-sifirla',[KullaniciController::class, "sifre_form"])->name('kullanici.sifre_form');
});


