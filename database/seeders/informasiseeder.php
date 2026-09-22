<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Informasi;

class InformasiSeeder extends Seeder
{
    public function run(): void
    {
        // Menghapus data informasi lama
        Informasi::query()->delete();

        // 1. Hari Kemerdekaan
        Informasi::create([
            'judul' => 'Kegiatan Hari Kemerdekaan Republik Indonesia',
            'isi' => 'SMKN 1 Cijati melaksanakan berbagai kegiatan dalam rangka memperingati Hari Kemerdekaan Republik Indonesia.',
            'foto' => 'informasi/kemerdekaan.jpeg',
            'tanggal' => '2026-08-17',
            'kategori' => 'Kegiatan Sekolah',
        ]);

        // 2. P5
        Informasi::create([
            'judul' => 'Projek Penguatan Profil Pelajar Pancasila (P5)',
            'isi' => 'SMKN 1 Cijati melaksanakan Projek Penguatan Profil Pelajar Pancasila dengan melibatkan peserta didik dalam berbagai kegiatan pembelajaran dan pengembangan karakter.',
            'foto' => 'informasi/p5.jpeg',
            'tanggal' => '2026-08-15',
            'kategori' => 'Kegiatan Sekolah',
        ]);

        // 3. PANTER
        Informasi::create([
            'judul' => 'PANTER Vol. 2 Kelas XI',
            'isi' => 'Peserta didik SMKN 1 Cijati mengikuti kegiatan PANTER Vol. 2 sebagai bagian dari kegiatan pembinaan dan pengembangan karakter siswa.',
            'foto' => 'informasi/panter.jpeg',
            'tanggal' => '2026-02-14',
            'kategori' => 'Kegiatan Sekolah',
        ]);

        // 4. MPLS
        Informasi::create([
            'judul' => 'MPLS Pancawaluya SMKN 1 Cijati',
            'isi' => 'SMKN 1 Cijati melaksanakan kegiatan Masa Pengenalan Lingkungan Sekolah (MPLS) bagi peserta didik baru untuk mengenal lingkungan sekolah.',
            'foto' => 'informasi/mpls.jpeg',
            'tanggal' => '2026-07-20',
            'kategori' => 'Kegiatan Sekolah',
        ]);

        // 5. Prestasi
        Informasi::create([
            'judul' => 'Prestasi Siswa SMKN 1 Cijati',
            'isi' => 'Siswa SMKN 1 Cijati berhasil meraih Juara 3 Bulutangkis Tunggal Putri dan Juara 3 Atletik Putri pada O2SN tingkat Kabupaten Cianjur.',
            'foto' => 'informasi/prestasi.jpeg',
            'tanggal' => '2026-08-10',
            'kategori' => 'Prestasi',
        ]);

        // 6. PPDB
        Informasi::create([
            'judul' => 'Penerimaan Peserta Didik Baru (PPDB)',
            'isi' => 'SMKN 1 Cijati membuka informasi dan pendaftaran bagi calon peserta didik baru. Informasi pendaftaran meliputi persyaratan, jadwal, dan layanan konsultasi.',
            'foto' => 'informasi/ppdb.jpeg',
            'tanggal' => '2026-06-01',
            'kategori' => 'PPDB',
        ]);
    }
}