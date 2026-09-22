<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    // Menampilkan semua data guru
    public function index()
    {
        $gurus = Guru::all();

        return view('guru', compact('gurus'));
    }

    // Menampilkan form tambah guru
    public function create()
    {
        return view('admin.guru.create');
    }

    // Menyimpan guru baru
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'jabatan' => 'nullable',
        ]);

        Guru::create([
            'nama' => $request->nama,
            'jabatan' => $request->jabatan,
        ]);

        return redirect()
            ->route('admin.guru.index')
            ->with('success', 'Data guru berhasil ditambahkan.');
    }

    // Menampilkan form edit guru
    public function edit(Guru $guru)
    {
        return view('admin.guru.edit', compact('guru'));
    }

    // Memperbarui data guru
    public function update(Request $request, Guru $guru)
    {
        $request->validate([
            'nama' => 'required',
            'jabatan' => 'nullable',
        ]);

        $guru->update([
            'nama' => $request->nama,
            'jabatan' => $request->jabatan,
        ]);

        return redirect()
            ->route('admin.guru.index')
            ->with('success', 'Data guru berhasil diperbarui.');
    }

    // Menghapus data guru
    public function destroy(Guru $guru)
    {
        $guru->delete();

        return redirect()
            ->route('admin.guru.index')
            ->with('success', 'Data guru berhasil dihapus.');
    }
}