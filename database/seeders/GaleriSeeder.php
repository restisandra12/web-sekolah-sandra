<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Galeri;

class GaleriSeeder extends Seeder
{
    public function run(): void
    {
        Galeri::create([
            'judul' => 'Kegiatan Upacara',
            'gambar' => 'kegiatan-upacara.jpeg',
            'deskripsi' => 'Kegiatan upacara bendera di sekolah.',
        ]);

        Galeri::create([
            'judul' => 'Kegiatan Pramuka',
            'gambar' => 'kegiatan-pramuka.jpeg',
            'deskripsi' => 'Dokumentasi kegiatan ekstrakurikuler Pramuka.',
        ]);

        Galeri::create([
            'judul' => 'Kegiatan Paskibra',
            'gambar' => 'kegiatan-paskibra.jpeg',
            'deskripsi' => 'Dokumentasi kegiatan Paskibra sekolah.',
        ]);

        Galeri::create([
            'judul' => 'Kegiatan Olahraga',
            'gambar' => 'kegiatan-olahraga.jpeg',
            'deskripsi' => 'Kegiatan olahraga siswa di sekolah.',
        ]);

        Galeri::create([
            'judul' => 'Kegiatan Seni',
            'gambar' => 'kegiatan-seni.jpeg',
            'deskripsi' => 'Kegiatan seni dan kreativitas siswa.',
        ]);
    }
}