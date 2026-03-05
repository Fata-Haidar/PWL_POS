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
        $data = [
            ['supplier_id' => 1, 'supplier_kode' => 'SP001', 'supplier_nama' => 'PT Sukarasa', 'supplier_alamat' => 'Jl. Sukamaju A No.5', ],
            ['supplier_id' => 2, 'supplier_kode' => 'SP002', 'supplier_nama' => 'CV Makmur Jaya', 'supplier_alamat' => 'Jl. Bandar Tengah B No.6', ],
            ['supplier_id' => 3, 'supplier_kode' => 'SP003', 'supplier_nama' => 'PT Maju Berkah', 'supplier_alamat' => 'Jl. Krincing Timur E No. 9', ],
        ];
        DB::table('m_supplier')->insert($data);
    }
}
