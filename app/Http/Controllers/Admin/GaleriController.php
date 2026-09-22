<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Galeri;
use Illuminate\Http\Request;

class GaleriController extends Controller
{
    public function index()
    {
        $galeris = Galeri::all();

        return view('admin.galeri.index', compact('galeris'));
    }

    public function create()
    {
        return view('admin.galeri.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'gambar' => 'required',
            'deskripsi' => 'nullable',
        ]);

        Galeri::create([
            'judul' => $request->judul,
            'gambar' => $request->gambar,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect()
            ->route('admin.galeri.index')
            ->with('success', 'Galeri berhasil ditambahkan.');
    }

    public function edit(Galeri $galeri)
    {
        return view('admin.galeri.edit', compact('galeri'));
    }

    public function update(Request $request, Galeri $galeri)
    {
        $request->validate([
            'judul' => 'required',
            'gambar' => 'required',
            'deskripsi' => 'nullable',
        ]);

        $galeri->update([
            'judul' => $request->judul,
            'gambar' => $request->gambar,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect()
            ->route('admin.galeri.index')
            ->with('success', 'Galeri berhasil diperbarui.');
    }

    public function destroy(Galeri $galeri)
    {
        $galeri->delete();

        return redirect()
            ->route('admin.galeri.index')
            ->with('success', 'Galeri berhasil dihapus.');
    }
}