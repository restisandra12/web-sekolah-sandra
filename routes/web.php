<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\EkstrakurikulerController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\InformasiController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\GuruController as AdminGuruController;
use App\Http\Controllers\Admin\JurusanController as AdminJurusanController;
use App\Http\Controllers\Admin\EkstrakurikulerController as AdminEkstrakurikulerController;
use App\Http\Controllers\Admin\GaleriController as AdminGaleriController;
use App\Http\Controllers\Admin\InformasiController as AdminInformasiController;
use App\Http\Controllers\Admin\KontakController as AdminKontakController;
use App\Http\Controllers\Admin\DataSekolahController;
use App\Http\Controllers\Admin\ProfilController as AdminProfilController;


// Beranda
Route::get('/', [HomeController::class, 'index'])->name('home');


// Profil
Route::get('/profil', [ProfileController::class, 'index'])->name('profil');


// Jurusan
Route::get('/jurusan', [JurusanController::class, 'index'])->name('jurusan');


// Ekstrakurikuler
Route::get('/ekstrakurikuler', [EkstrakurikulerController::class, 'index'])
    ->name('ekstrakurikuler');


// Galeri
Route::get('/galeri', [GaleriController::class, 'index'])->name('galeri');


// Guru
Route::get('/guru', [GuruController::class, 'index'])->name('guru');

// Admin - Guru
Route::middleware('auth')->prefix('admin')->group(function () {

    Route::get('/guru', [AdminGuruController::class, 'index'])
        ->name('admin.guru.index');

    Route::get('/guru/create', [AdminGuruController::class, 'create'])
        ->name('admin.guru.create');

    Route::post('/guru', [AdminGuruController::class, 'store'])
        ->name('admin.guru.store');

    Route::get('/guru/{guru}/edit', [AdminGuruController::class, 'edit'])
        ->name('admin.guru.edit');

    Route::put('/guru/{guru}', [AdminGuruController::class, 'update'])
        ->name('admin.guru.update');

    Route::delete('/guru/{guru}', [AdminGuruController::class, 'destroy'])
        ->name('admin.guru.destroy');

});


// Admin - Jurusan
Route::middleware('auth')->prefix('admin')->group(function () {

    Route::get('/jurusan', [AdminJurusanController::class, 'index'])
        ->name('admin.jurusan.index');

    Route::get('/jurusan/create', [AdminJurusanController::class, 'create'])
        ->name('admin.jurusan.create');

    Route::post('/jurusan', [AdminJurusanController::class, 'store'])
        ->name('admin.jurusan.store');

    Route::get('/jurusan/{jurusan}/edit', [AdminJurusanController::class, 'edit'])
        ->name('admin.jurusan.edit');

    Route::put('/jurusan/{jurusan}', [AdminJurusanController::class, 'update'])
        ->name('admin.jurusan.update');

    Route::delete('/jurusan/{jurusan}', [AdminJurusanController::class, 'destroy'])
        ->name('admin.jurusan.destroy');

});


// Admin - Ekstrakurikuler
Route::middleware('auth')->prefix('admin')->group(function () {

    Route::get('/ekstrakurikuler', [AdminEkstrakurikulerController::class, 'index'])
        ->name('admin.ekstrakurikuler.index');

    Route::get('/ekstrakurikuler/create', [AdminEkstrakurikulerController::class, 'create'])
        ->name('admin.ekstrakurikuler.create');

    Route::post('/ekstrakurikuler', [AdminEkstrakurikulerController::class, 'store'])
        ->name('admin.ekstrakurikuler.store');

    Route::get('/ekstrakurikuler/{ekstrakurikuler}/edit', [AdminEkstrakurikulerController::class, 'edit'])
        ->name('admin.ekstrakurikuler.edit');

    Route::put('/ekstrakurikuler/{ekstrakurikuler}', [AdminEkstrakurikulerController::class, 'update'])
        ->name('admin.ekstrakurikuler.update');

    Route::delete('/ekstrakurikuler/{ekstrakurikuler}', [AdminEkstrakurikulerController::class, 'destroy'])
        ->name('admin.ekstrakurikuler.destroy');
});


// Admin - Galeri
Route::middleware('auth')->prefix('admin')->group(function () {

    Route::get('/galeri', [AdminGaleriController::class, 'index'])
        ->name('admin.galeri.index');

    Route::get('/galeri/create', [AdminGaleriController::class, 'create'])
        ->name('admin.galeri.create');

    Route::post('/galeri', [AdminGaleriController::class, 'store'])
        ->name('admin.galeri.store');

    Route::get('/galeri/{galeri}/edit', [AdminGaleriController::class, 'edit'])
        ->name('admin.galeri.edit');

    Route::put('/galeri/{galeri}', [AdminGaleriController::class, 'update'])
        ->name('admin.galeri.update');

    Route::delete('/galeri/{galeri}', [AdminGaleriController::class, 'destroy'])
        ->name('admin.galeri.destroy');
});


// Admin - Informasi
Route::middleware('auth')->prefix('admin')->group(function () {

    Route::get('/informasi', [AdminInformasiController::class, 'index'])
        ->name('admin.informasi.index');

    Route::get('/informasi/create', [AdminInformasiController::class, 'create'])
        ->name('admin.informasi.create');

    Route::post('/informasi', [AdminInformasiController::class, 'store'])
        ->name('admin.informasi.store');

    Route::get('/informasi/{informasi}/edit', [AdminInformasiController::class, 'edit'])
        ->name('admin.informasi.edit');

    Route::put('/informasi/{informasi}', [AdminInformasiController::class, 'update'])
        ->name('admin.informasi.update');

    Route::delete('/informasi/{informasi}', [AdminInformasiController::class, 'destroy'])
        ->name('admin.informasi.destroy');
});


// Admin - Kontak
Route::middleware('auth')->prefix('admin')->group(function () {

    Route::get('/kontak', [AdminKontakController::class, 'index'])
        ->name('admin.kontak.index');

    Route::get('/kontak/create', [AdminKontakController::class, 'create'])
        ->name('admin.kontak.create');

    Route::post('/kontak', [AdminKontakController::class, 'store'])
        ->name('admin.kontak.store');

    Route::get('/kontak/{kontak}/edit', [AdminKontakController::class, 'edit'])
        ->name('admin.kontak.edit');

    Route::put('/kontak/{kontak}', [AdminKontakController::class, 'update'])
        ->name('admin.kontak.update');

    Route::delete('/kontak/{kontak}', [AdminKontakController::class, 'destroy'])
        ->name('admin.kontak.destroy');


        // Profil
Route::get('/profil', [AdminProfilController::class, 'index'])
    ->name('admin.profil.index');

Route::get('/profil/{id}/edit', [AdminProfilController::class, 'edit'])
    ->name('admin.profil.edit');

Route::put('/profil/{id}', [AdminProfilController::class, 'update'])
    ->name('admin.profil.update');
});


// Admin - Data Sekolah
Route::get('/data-sekolah', [DataSekolahController::class, 'index'])
    ->name('admin.data-sekolah.index');

Route::put('/data-sekolah', [DataSekolahController::class, 'update'])
    ->name('admin.data-sekolah.update');


// Kontak
Route::get('/kontak', [KontakController::class, 'index'])->name('kontak');


// Informasi
Route::get('/informasi', [InformasiController::class, 'index'])
    ->name('informasi.index');

Route::get('/informasi/{id}', [InformasiController::class, 'show'])
    ->name('informasi.show');

// Login Admin
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Dashboard Admin
Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->middleware('auth')->name('admin.dashboard');
