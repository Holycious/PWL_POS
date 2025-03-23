<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('m_supplier')->insert([
            [
                'supplier_id' => '1',
                'supplier_kode' => 'SUP001',
                'supplier_nama' => 'PT. Sumber Makmur',
                'alamat' => 'Jl. Merdeka No. 10, Jakarta',
            ],
            [
                'supplier_id' => '2',
                'supplier_kode' => 'SUP002',
                'supplier_nama' => 'CV. Berkah Jaya',
                'alamat' => 'Jl. Sudirman No. 15, Bandung',
            ],
            [
                'supplier_id' => '3',
                'supplier_kode' => 'SUP003',
                'supplier_nama' => 'UD. Sentosa',
                'alamat' => 'Jl. Diponegoro No. 7, Surabaya',
            ],
            [
                'supplier_id' => '4',
                'supplier_kode' => 'SUP004',
                'supplier_nama' => 'PT. Abadi Sejahtera',
                'alamat' => 'Jl. Ahmad Yani No. 23, Medan',
            ],
            [
                'supplier_id' => '5',
                'supplier_kode' => 'SUP005',
                'supplier_nama' => 'CV. Maju Terus',
                'alamat' => 'Jl. Gajah Mada No. 5, Semarang',
            ],
        ]);
    }
}
