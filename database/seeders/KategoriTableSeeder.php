<?php

namespace Database\Seeders;

Use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class KategoriTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('kategori')->truncate();
        $id =  DB::table('kategori')->insertGetId(['kategori_adi'=>'Elektronik','slug'=>'elektronik']);
        DB::table('kategori')->insert(['kategori_adi'=>'Bilgisayar', 'slug'=>'bilgisayar', 'parent'=>$id]);
        DB::table('kategori')->insert(['kategori_adi'=>'Klavye', 'slug'=>'klavye', 'parent'=>$id]);
        DB::table('kategori')->insert(['kategori_adi'=>'Mouse', 'slug'=>'mouse', 'parent'=>$id]);

        $id = DB::table('kategori')->insertGetId(['kategori_adi'=>'Kitap','slug'=>'kitap']);
        DB::table('kategori')->insert(['kategori_adi'=>'Roman Kitapları','slug'=>'roman-kitaplari', 'parent'=>$id]);
        DB::table('kategori')->insert(['kategori_adi'=>'Şiir Kitapları','slug'=>'siir-kitaplari', 'parent'=>$id]);

        DB::table('kategori')->insert(['kategori_adi'=>'Oyuncak','slug'=>'oyuncak']);
        $id = DB::table('kategori')->insertGetId(['kategori_adi'=>'Mobilya','slug'=>'mobilya']);
        DB::table('kategori')->insert(['kategori_adi'=>'Koltuk','slug'=>'koltuk', 'parent'=>$id]);
        DB::table('kategori')->insert(['kategori_adi'=>'Yatak','slug'=>'yatak', 'parent'=>$id]);

        DB::table('kategori')->insert(['kategori_adi'=>'Dekorasyon','slug'=>'dekorasyon']);

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
