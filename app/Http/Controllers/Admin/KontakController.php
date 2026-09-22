<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Kontak;
use Illuminate\Http\Request;

class KontakController extends Controller
{
    public function index()
    {
        $kontaks = Kontak::latest()->get();

        return view('admin.kontak.index', compact('kontaks'));
    }

    public function create()
    {
        return view('admin.kontak.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'alamat' => 'required',
            'telepon' => 'nullable',
            'email' => 'nullable|email',
            'website' => 'nullable',
        ]);

        Kontak::create([
            'alamat' => $request->alamat,
            'telepon' => $request->telepon,
            'email' => $request->email,
            'website' => $request->website,
        ]);

        return redirect()
            ->route('admin.kontak.index')
            ->with('success', 'Kontak berhasil ditambahkan.');
    }

    public function edit(Kontak $kontak)
    {
        return view('admin.kontak.edit', compact('kontak'));
    }

    public function update(Request $request, Kontak $kontak)
    {
        $request->validate([
            'alamat' => 'required',
            'telepon' => 'nullable',
            'email' => 'nullable|email',
            'website' => 'nullable',
        ]);

        $kontak->update([
            'alamat' => $request->alamat,
            'telepon' => $request->telepon,
            'email' => $request->email,
            'website' => $request->website,
        ]);

        return redirect()
            ->route('admin.kontak.index')
            ->with('success', 'Kontak berhasil diperbarui.');
    }

    public function destroy(Kontak $kontak)
    {
        $kontak->delete();

        return redirect()
            ->route('admin.kontak.index')
            ->with('success', 'Kontak berhasil dihapus.');
    }
}