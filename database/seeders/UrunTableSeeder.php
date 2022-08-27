<?php

namespace Database\Seeders;

use App\Models\UrunDetay;
Use Faker\Generator;
use App\Models\Urun;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UrunTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Generator $faker)
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Urun::truncate();
        UrunDetay::truncate();

        for ($i=0; $i<30; $i++)
        {
            $urun_adi = $faker->sentence(2);
            $urun = Urun::create([
                'urun_adi'=> $urun_adi,
                'slug'=> str_slug($urun_adi),
                'aciklama'=> $faker->sentence(20),
                'fiyat'=>$faker->randomFloat(3, 1, 20)
            ]);

            $detay = $urun->detay()->create([
                'goster_slider'=>rand(0,1),
                'goster_gunun_firsati'=>rand(0,1),
                'goster_one_cikan'=>rand(0,1),
                'goster_cok_satanlar'=>rand(0,1),
                'goster_indirimli'=>rand(0,1)
            ]);
        }
        DB::statement('SET FOREIGN_KEY_CHECKS=1 ;');
    }
}
