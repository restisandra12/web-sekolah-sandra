<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Profil;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function index()
    {
        $profil = Profil::first();

        return view('admin.profil.index', compact('profil'));
    }

    public function edit($id)
    {
        $profil = Profil::findOrFail($id);

        return view('admin.profil.edit', compact('profil'));
    }

    public function update(Request $request, $id)
    {
        $profil = Profil::findOrFail($id);

        $profil->update([
            'tentang_sekolah' => $request->tentang_sekolah,
            'visi' => $request->visi,
            'misi' => $request->misi,
        ]);

        return redirect()
            ->route('admin.profil.index')
            ->with('success', 'Profil berhasil diperbarui.');
    }
}