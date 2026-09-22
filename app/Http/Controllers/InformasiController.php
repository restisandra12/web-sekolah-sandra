<?php

namespace App\Http\Controllers;

use App\Models\Informasi;

class InformasiController extends Controller
{
    public function index()
    {
        $informasis = Informasi::latest()->get();

        return view('informasi.index', compact('informasis'));
    }

    public function show($id)
    {
        $informasi = Informasi::findOrFail($id);

        return view('informasi.show', compact('informasi'));
    }
}