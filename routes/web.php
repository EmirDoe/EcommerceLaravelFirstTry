<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnasayfaController;

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

Route::get('asd', function (){
    echo "deneme";
});

Route::get('/urun/{urunadi}/{id?}', function ($urunadi, $id=0){
    return "Ürün Adı: $id $urunadi";
})->name('urun_detay');

Route::get('kampanya', function (){
   return redirect()->route('urun_detay',['urunadi'=>"Portakal",'id'=>4]);
});
