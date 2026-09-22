<?php

namespace App\Http\Controllers;

use App\Models\DataSekolah;
use App\Models\Guru;
use App\Models\Jurusan;
use App\Models\Ekstrakurikuler;

class HomeController extends Controller
{
    public function index()
    {
        $dataSekolah = DataSekolah::first();

        $jumlahGuru = Guru::count();

        $jumlahJurusan = Jurusan::count();

        $jumlahEskul = Ekstrakurikuler::count();

        return view('home', compact(
            'dataSekolah',
            'jumlahGuru',
            'jumlahJurusan',
            'jumlahEskul'
        ));
    }
}