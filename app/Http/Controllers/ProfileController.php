<?php

namespace App\Http\Controllers;

use App\Models\Profil;

class ProfileController extends Controller
{
    public function index()
    {
        $profil = Profil::first();

        return view('profil', compact('profil'));
    }
}