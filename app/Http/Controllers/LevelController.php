<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LevelController extends Controller
{
    public function index()
    {
        //DB::insert('INSERT INTO m_level (level_kode, level_nama, created_at) VALUES (?, ?, ?)', ['CUS', 'Pelanggan', now()]);
        //return 'Insert data berhasil';

        //$now = DB::update('UPDATE m_level SET level_nama = ? WHERE level_kode = ?', ['Customer', 'CUS']);
        //return 'Update data berhasil. Jumlah data yang diupdate: ' . $now. ' baris';

        //$now = DB::delete('DELETE FROM m_level WHERE level_kode = ?', ['CUS']);
        //return 'Delete data berhasil. Jumlah data yang dihapus: ' . $now. ' baris';

        $data = DB::select('SELECT * FROM m_level');
        return view('level', ['data' => $data]);
    }
}
