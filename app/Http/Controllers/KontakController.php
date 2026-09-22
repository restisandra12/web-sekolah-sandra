<?php

namespace App\Http\Controllers;

use App\Models\Kontak;

class KontakController extends Controller
{
    public function index()
    {
        $kontak = Kontak::latest()->first();

        return view('kontak', compact('kontak'));
    }
}