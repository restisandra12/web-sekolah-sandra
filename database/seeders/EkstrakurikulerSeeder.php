<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Ekstrakurikuler;

class EkstrakurikulerSeeder extends Seeder
{
    public function run(): void
    {
        Ekstrakurikuler::create([
            'nama' => 'PMR',
            'deskripsi' => 'Kegiatan Palang Merah Remaja yang melatih kepedulian, kesehatan, dan jiwa kemanusiaan siswa.',
            'gambar' => 'pmr.jpeg',
        ]);

        Ekstrakurikuler::create([
            'nama' => 'Pramuka',
            'deskripsi' => 'Kegiatan kepramukaan untuk melatih kedisiplinan, kemandirian, kepemimpinan, dan kerja sama.',
            'gambar' => 'pramuka.jpeg',
        ]);

        Ekstrakurikuler::create([
            'nama' => 'Marching Band',
            'deskripsi' => 'Kegiatan musik dan baris-berbaris yang melatih kekompakan, kedisiplinan, dan kreativitas.',
            'gambar' => 'marching-band.jpeg',
        ]);

        Ekstrakurikuler::create([
            'nama' => 'Paskibra',
            'deskripsi' => 'Kegiatan untuk melatih kedisiplinan, tanggung jawab, kepemimpinan, dan keterampilan baris-berbaris.',
            'gambar' => 'paskibra.jpeg',
        ]);

        Ekstrakurikuler::create([
            'nama' => 'Cinemak',
            'deskripsi' => 'Kegiatan yang mengembangkan kreativitas siswa dalam bidang perfilman, fotografi, dan videografi.',
            'gambar' => 'cinemak.jpeg',
        ]);

        Ekstrakurikuler::create([
            'nama' => 'Rohis',
            'deskripsi' => 'Kegiatan kerohanian untuk meningkatkan pengetahuan, pemahaman, dan kegiatan keagamaan siswa.',
            'gambar' => 'rohis.jpeg',
        ]);

        Ekstrakurikuler::create([
            'nama' => 'Volly',
            'deskripsi' => 'Kegiatan olahraga bola voli untuk meningkatkan kemampuan, kesehatan, kerja sama, dan sportivitas siswa.',
            'gambar' => 'volly.jpeg',
        ]);

        Ekstrakurikuler::create([
            'nama' => 'Futsal',
            'deskripsi' => 'Kegiatan olahraga futsal untuk meningkatkan kebugaran, keterampilan, kerja sama, dan sportivitas siswa.',
            'gambar' => 'futsal.jpeg',
        ]);

        Ekstrakurikuler::create([
            'nama' => 'Bahasa Jepang',
            'deskripsi' => 'Kegiatan untuk meningkatkan kemampuan siswa dalam berbahasa dan mengenal budaya Jepang.',
            'gambar' => 'bahasa-jepang.jpeg',
        ]);

        Ekstrakurikuler::create([
            'nama' => 'Karawitan',
            'deskripsi' => 'Kegiatan seni musik tradisional untuk melestarikan budaya dan mengembangkan kreativitas siswa.',
            'gambar' => 'karawitan.jpeg',
        ]);
    }
}