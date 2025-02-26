<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
        [
            'barang_id' => 1,
            'kategori_id' => 1,
            'barang_kode' => 'FNB001',
            'barang_nama' => 'Kopi Arabika 250gr',
            'harga_beli' => 50000,
            'harga_jual' => 70000,
        ],
        [
            'barang_id' => 2,
            'kategori_id' => 1,
            'barang_kode' => 'FNB002',
            'barang_nama' => 'Teh Hijau Organik 100gr',
            'harga_beli' => 30000,
            'harga_jual' => 45000,
        ],

        [
            'barang_id' => 3,
            'kategori_id' => 2,
            'barang_kode' => 'MED001',
            'barang_nama' => 'Paracetamol 500mg',
            'harga_beli' => 5000,
            'harga_jual' => 10000,
        ],
        [
            'barang_id' => 4,
            'kategori_id' => 2,
            'barang_kode' => 'MED002',
            'barang_nama' => 'Vitamin C 1000mg',
            'harga_beli' => 20000,
            'harga_jual' => 35000,
        ],

        [
            'barang_id' => 5,
            'kategori_id' => 3,
            'barang_kode' => 'TOY001',
            'barang_nama' => 'Boneka Teddy Bear',
            'harga_beli' => 100000,
            'harga_jual' => 150000,
        ],
        [
            'barang_id' => 6,
            'kategori_id' => 3,
            'barang_kode' => 'TOY002',
            'barang_nama' => 'Lego Classic Set',
            'harga_beli' => 250000,
            'harga_jual' => 300000,
        ],

        [
            'barang_id' => 7,
            'kategori_id' => 4,
            'barang_kode' => 'HOM001',
            'barang_nama' => 'Lampu LED 10W',
            'harga_beli' => 40000,
            'harga_jual' => 60000,
        ],
        [
            'barang_id' => 8,
            'kategori_id' => 4,
            'barang_kode' => 'HOM002',
            'barang_nama' => 'Dispenser Air Panas & Dingin',
            'harga_beli' => 500000,
            'harga_jual' => 650000,
        ],

        [
            'barang_id' => 9,
            'kategori_id' => 5,
            'barang_kode' => 'BEA001',
            'barang_nama' => 'Lipstik Matte Merah',
            'harga_beli' => 70000,
            'harga_jual' => 100000,
        ],
        [
            'barang_id' => 10,
            'kategori_id' => 5,
            'barang_kode' => 'BEA002',
            'barang_nama' => 'Serum Wajah Vitamin C',
            'harga_beli' => 150000,
            'harga_jual' => 200000,
        ],
    ];
    DB::table('m_barang')->insert($data);
    }
}
