<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Jurusan;

class JurusanSeeder extends Seeder
{
    public function run(): void
    {
        Jurusan::create([
            'nama' => 'Pemasaran',
            'slug' => 'pemasaran',
            'logo' => 'pm.jpeg',
            'deskripsi' => 'Jurusan yang mempelajari pemasaran, penjualan, dan pengelolaan bisnis.',
            'kompetensi' => 'Pemasaran, penjualan, pelayanan pelanggan, dan pengelolaan bisnis.',
        ]);

        Jurusan::create([
            'nama' => 'Pengembangan Perangkat Lunak dan Gim',
            'slug' => 'pplg',
            'logo' => 'pplg.jpeg',
            'deskripsi' => 'Jurusan yang mempelajari pengembangan perangkat lunak dan gim.',
            'kompetensi' => 'Pemrograman, pembuatan website, aplikasi, dan pengembangan gim.',
        ]);

        Jurusan::create([
            'nama' => 'Teknik Kendaraan Ringan Otomotif',
            'slug' => 'tkro',
            'logo' => 'tkro.jpeg',
            'deskripsi' => 'Jurusan yang mempelajari perawatan dan perbaikan kendaraan ringan.',
            'kompetensi' => 'Perawatan kendaraan, perbaikan mesin, kelistrikan, dan sistem otomotif.',
        ]);

        Jurusan::create([
            'nama' => 'Agribisnis Pengolahan Hasil Pertanian',
            'slug' => 'aphp',
            'logo' => 'aphp.jpeg',
            'deskripsi' => 'Jurusan yang mempelajari pengolahan hasil pertanian dan agribisnis.',
            'kompetensi' => 'Pengolahan hasil pertanian, pengemasan, pemasaran, dan kewirausahaan.',
        ]);
    }
}