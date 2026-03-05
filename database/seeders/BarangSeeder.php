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
            ['barang_id' => 1, 'kategori_id' => 1, 'barang_kode' => 'BRG001', 'barang_nama' => 'Indomie Goreng', 'harga_beli' => 2500, 'harga_jual' => 4000],
            ['barang_id' => 2, 'kategori_id' => 1, 'barang_kode' => 'BRG002', 'barang_nama' => 'Potato Crunchy Original', 'harga_beli' => 5000, 'harga_jual' => 7000],
            ['barang_id' => 3, 'kategori_id' => 1, 'barang_kode' => 'BRG003', 'barang_nama' => 'Sosis Kanzler Keju', 'harga_beli' => 8500, 'harga_jual' => 9000],
            ['barang_id' => 4, 'kategori_id' => 2, 'barang_kode' => 'BRG004', 'barang_nama' => 'Teh Botol Sosro', 'harga_beli' => 3000, 'harga_jual' => 5000],
            ['barang_id' => 5, 'kategori_id' => 2, 'barang_kode' => 'BRG005', 'barang_nama' => 'Aqua Botol', 'harga_beli' => 2000, 'harga_jual' => 4000],
            ['barang_id' => 6, 'kategori_id' => 2, 'barang_kode' => 'BRG006', 'barang_nama' => 'Coca-Cola 350ml', 'harga_beli' => 2500, 'harga_jual' => 3000],
            ['barang_id' => 7, 'kategori_id' => 3, 'barang_kode' => 'BRG007', 'barang_nama' => 'Headphone JBL', 'harga_beli' => 150000, 'harga_jual' => 200000],
            ['barang_id' => 8, 'kategori_id' => 3, 'barang_kode' => 'BRG008', 'barang_nama' => 'Speaker Bluetooth Olike', 'harga_beli' => 250000, 'harga_jual' => 300000],
            ['barang_id' => 9, 'kategori_id' => 3, 'barang_kode' => 'BRG009', 'barang_nama' => 'Power Bank Anker', 'harga_beli' => 350000, 'harga_jual' => 400000],
            ['barang_id' => 10, 'kategori_id' => 4, 'barang_kode' => 'BRG010', 'barang_nama' => 'Pulpen Pilot', 'harga_beli' => 5000, 'harga_jual' => 8000],
            ['barang_id' => 11, 'kategori_id' => 4, 'barang_kode' => 'BRG011', 'barang_nama' => 'Buku Tulis Sinar Dunia', 'harga_beli' => 10000, 'harga_jual' => 15000],
            ['barang_id' => 12, 'kategori_id' => 4, 'barang_kode' => 'BRG012', 'barang_nama' => 'Penghapus Joyko', 'harga_beli' => 3000, 'harga_jual' => 5000],
            ['barang_id' => 13, 'kategori_id' => 5, 'barang_kode' => 'BRG013', 'barang_nama' => 'Pelembab Wardah', 'harga_beli' => 50000, 'harga_jual' => 75000],
            ['barang_id' => 14, 'kategori_id' => 5, 'barang_kode' => 'BRG014', 'barang_nama' => 'Serum Garnier', 'harga_beli' => 60000, 'harga_jual' => 85000],
            ['barang_id' => 15, 'kategori_id' => 5, 'barang_kode' => 'BRG015', 'barang_nama' => 'Sunscreen Nivea', 'harga_beli' => 40000, 'harga_jual' => 60000],
        ];
        DB::table('m_barang')->insert($data); 
    }
}
