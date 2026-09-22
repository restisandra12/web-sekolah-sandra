<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DataSekolah;
use Illuminate\Http\Request;

class DataSekolahController extends Controller
{
    /**
     * Menampilkan data sekolah
     */
    public function index()
    {
        $dataSekolah = DataSekolah::first();

        return view('admin.data_sekolah.index', compact('dataSekolah'));
    }

    /**
     * Memperbarui jumlah siswa
     */
    public function update(Request $request)
    {
        $request->validate([
            'jumlah_siswa' => 'required|integer|min:0',
        ]);

        $dataSekolah = DataSekolah::first();

        if (!$dataSekolah) {
            $dataSekolah = new DataSekolah();
        }

        $dataSekolah->jumlah_siswa = $request->jumlah_siswa;
        $dataSekolah->save();

        return redirect()
            ->route('admin.data-sekolah.index')
            ->with('success', 'Jumlah siswa berhasil diperbarui.');
    }
}