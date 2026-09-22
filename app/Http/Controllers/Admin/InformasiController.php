<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Informasi;
use Illuminate\Http\Request;

class InformasiController extends Controller
{
    public function index()
    {
        $informasis = Informasi::latest()->get();

        return view('admin.informasi.index', compact('informasis'));
    }

    public function create()
    {
        return view('admin.informasi.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'isi' => 'required',
            'foto' => 'nullable',
            'tanggal' => 'required|date',
            'kategori' => 'nullable',
        ]);

        Informasi::create([
            'judul' => $request->judul,
            'isi' => $request->isi,
            'foto' => $request->foto,
            'tanggal' => $request->tanggal,
            'kategori' => $request->kategori,
        ]);

        return redirect()
            ->route('admin.informasi.index')
            ->with('success', 'Informasi berhasil ditambahkan.');
    }

    public function edit(Informasi $informasi)
    {
        return view('admin.informasi.edit', compact('informasi'));
    }

    public function update(Request $request, Informasi $informasi)
    {
        $request->validate([
            'judul' => 'required',
            'isi' => 'required',
            'foto' => 'nullable',
            'tanggal' => 'required|date',
            'kategori' => 'nullable',
        ]);

        $informasi->update([
            'judul' => $request->judul,
            'isi' => $request->isi,
            'foto' => $request->foto,
            'tanggal' => $request->tanggal,
            'kategori' => $request->kategori,
        ]);

        return redirect()
            ->route('admin.informasi.index')
            ->with('success', 'Informasi berhasil diperbarui.');
    }

    public function destroy(Informasi $informasi)
    {
        $informasi->delete();

        return redirect()
            ->route('admin.informasi.index')
            ->with('success', 'Informasi berhasil dihapus.');
    }
}