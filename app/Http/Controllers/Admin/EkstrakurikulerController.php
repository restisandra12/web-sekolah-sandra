<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Ekstrakurikuler;
use Illuminate\Http\Request;

class EkstrakurikulerController extends Controller
{
    public function index()
    {
        $ekstrakurikulers = Ekstrakurikuler::all();

        return view('admin.ekstrakurikuler.index', compact('ekstrakurikulers'));
    }

    public function create()
    {
        return view('admin.ekstrakurikuler.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'deskripsi' => 'nullable',
            'gambar' => 'nullable',
        ]);

        Ekstrakurikuler::create([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'gambar' => $request->gambar,
        ]);

        return redirect()
            ->route('admin.ekstrakurikuler.index')
            ->with('success', 'Ekstrakurikuler berhasil ditambahkan.');
    }

    public function edit(Ekstrakurikuler $ekstrakurikuler)
    {
        return view('admin.ekstrakurikuler.edit', compact('ekstrakurikuler'));
    }

    public function update(Request $request, Ekstrakurikuler $ekstrakurikuler)
    {
        $request->validate([
            'nama' => 'required',
            'deskripsi' => 'nullable',
            'gambar' => 'nullable',
        ]);

        $ekstrakurikuler->update([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'gambar' => $request->gambar,
        ]);

        return redirect()
            ->route('admin.ekstrakurikuler.index')
            ->with('success', 'Ekstrakurikuler berhasil diperbarui.');
    }

    public function destroy(Ekstrakurikuler $ekstrakurikuler)
    {
        $ekstrakurikuler->delete();

        return redirect()
            ->route('admin.ekstrakurikuler.index')
            ->with('success', 'Ekstrakurikuler berhasil dihapus.');
    }
}