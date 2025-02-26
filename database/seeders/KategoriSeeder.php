<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['kategori_id' => 1, 'kategori_kode' => 'FNB', 'kategori_nama' =>'FoodAndBeverage'],
            ['kategori_id' => 2, 'kategori_kode' => 'MED', 'kategori_nama' =>'Medicine'],
            ['kategori_id' => 3, 'kategori_kode' => 'TOY', 'kategori_nama' =>'Toys'],
            ['kategori_id' => 4, 'kategori_kode' => 'HOM', 'kategori_nama' =>'HomeProduct'],
            ['kategori_id' => 5, 'kategori_kode' => 'BEA', 'kategori_nama' =>'BeautyProduct'],
        ];
        DB::table('m_kategori')->insert($data);
    }
}
