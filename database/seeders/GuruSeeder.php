<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Guru;

class GuruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 1. KEPALA SEKOLAH
        Guru::create([
            'nama' => 'A Rahmat Dimyati, S.Pd.M.Pd.',
            'jabatan' => 'Kepala Sekolah',
        ]);

        // 2. GURU / TENAGA KEPENDIDIKAN

        Guru::create([
            'nama' => 'Santi Mustika',
            'jabatan' => 'Guru Pemasaran',
        ]);

        Guru::create([
            'nama' => 'Moch Najib',
            'jabatan' => 'Laboran PPLG',
        ]);

        Guru::create([
            'nama' => 'Ahmad Suhendra',
            'jabatan' => 'Petugas Kebersihan',
        ]);

        Guru::create([
            'nama' => 'D Jamaludin',
            'jabatan' => 'Petugas Kebersihan',
        ]);

        Guru::create([
            'nama' => 'Apendi',
            'jabatan' => 'Petugas Kebersihan',
        ]);

        Guru::create([
            'nama' => 'Tatang Rustandi',
            'jabatan' => 'Petugas Kebersihan',
        ]);

        Guru::create([
            'nama' => 'Muldiansah',
            'jabatan' => 'Keamanan & Ketertiban Sekolah',
        ]);

        Guru::create([
            'nama' => 'Yogi Saputra',
            'jabatan' => 'Keamanan & Ketertiban Sekolah',
        ]);

        Guru::create([
            'nama' => 'Didi Mei Somatri, S.KOM.',
            'jabatan' => 'Guru PPLG',
        ]);

        Guru::create([
            'nama' => 'Budiana Hermawan, S.TP.',
            'jabatan' => 'Guru APHP',
        ]);

        Guru::create([
            'nama' => 'Edeh Kurniasih, S.PD.',
            'jabatan' => 'Guru Bahasa Indonesia',
        ]);

        Guru::create([
            'nama' => 'Romi Darmayadi, S.PD., S.T.',
            'jabatan' => 'Guru Teknik Otomotif',
        ]);

        Guru::create([
            'nama' => 'Eli Maryamah, S.PD.',
            'jabatan' => 'Guru Pemasaran',
        ]);

        Guru::create([
            'nama' => 'Nanang Suryana, SE., M.M.',
            'jabatan' => 'Guru Pemasaran',
        ]);

        Guru::create([
            'nama' => 'Indra Priatna, S.PD.',
            'jabatan' => 'Guru Pendidikan Pancasila & Informatika',
        ]);

        Guru::create([
            'nama' => 'Indra Murgianto, S.PD.',
            'jabatan' => 'Guru Pemasaran',
        ]);

        Guru::create([
            'nama' => 'Dedi Sukardi, S.PD.',
            'jabatan' => 'Guru PJOK',
        ]);

        Guru::create([
            'nama' => 'Nuraeni, S.PD.',
            'jabatan' => 'Guru Matematika',
        ]);

        Guru::create([
            'nama' => 'Ela Haryati, S.PD.',
            'jabatan' => 'Guru Pendidikan Pancasila & PKK',
        ]);

        Guru::create([
            'nama' => 'Habib Suhandar, S.PD.',
            'jabatan' => 'Guru Pendidikan Pancasila & Sejarah',
        ]);

        Guru::create([
            'nama' => 'Nopi Yanti, S.PD.',
            'jabatan' => 'Guru Pendidikan Pancasila & Sejarah',
        ]);

        Guru::create([
            'nama' => 'Jaya Nur Setiawandi, S.PD.',
            'jabatan' => 'Guru PJOK & Bahasa Sunda',
        ]);

        Guru::create([
            'nama' => 'Setiawan, S.E.',
            'jabatan' => 'Guru Pemasaran',
        ]);

        Guru::create([
            'nama' => 'Dini Andriani, S.E.',
            'jabatan' => 'Guru Pemasaran',
        ]);

        Guru::create([
            'nama' => 'Emi Resmiyati, S.PD.',
            'jabatan' => 'Guru Projek Ilmu Pengetahuan Alam dan Sosial',
        ]);

        Guru::create([
            'nama' => 'Rina Susana, S.PD.',
            'jabatan' => 'Guru Bahasa Inggris',
        ]);

        Guru::create([
            'nama' => 'Nurdiansah, S.IP.',
            'jabatan' => 'Adm Persuratan, Kesiswaan & Kurikulum',
        ]);

        Guru::create([
            'nama' => 'Sima Kristina, S.KOM.',
            'jabatan' => 'Adm Keuangan dan Publikasi',
        ]);

        Guru::create([
            'nama' => 'Sakti Alamsyah, SE.',
            'jabatan' => 'Administrasi Sarpras',
        ]);

        Guru::create([
            'nama' => 'Ayi Suryati, A.MA.PUST.',
            'jabatan' => 'Administrasi Perpustakaan',
        ]);

        Guru::create([
            'nama' => 'Nurah Alwaini, A.MA.PUST.',
            'jabatan' => 'Administrasi Perpustakaan',
        ]);

        Guru::create([
            'nama' => 'Ramdan Bastaman',
            'jabatan' => 'Administrasi Sarpras',
        ]);

        Guru::create([
            'nama' => 'Saripul Basar',
            'jabatan' => 'Laboran APHP',
        ]);

        Guru::create([
            'nama' => 'Asep Purnama',
            'jabatan' => 'Laboran Teknik Otomotif',
        ]);

        Guru::create([
            'nama' => 'Asep Muhlis Sulaeman, S.PD.I.',
            'jabatan' => 'Guru PAI-BP',
        ]);

        Guru::create([
            'nama' => 'Yayup Hindriyani, S.PD.',
            'jabatan' => 'Guru Matematika & Informatika',
        ]);

        Guru::create([
            'nama' => 'Wahyudin, S.TR.KOM.',
            'jabatan' => 'Guru PPLG',
        ]);

        Guru::create([
            'nama' => 'Kamalia, S.E.',
            'jabatan' => 'Guru Pemasaran',
        ]);

        Guru::create([
            'nama' => 'Andri Muhoir, S.T.',
            'jabatan' => 'Guru Teknik Otomotif',
        ]);

        Guru::create([
            'nama' => 'Moch. Yoga Agung N., S.PD., M.PD.',
            'jabatan' => 'Guru Bahasa Sunda',
        ]);

        Guru::create([
            'nama' => 'Rahmat Setiawan, S.T.',
            'jabatan' => 'Guru PPLG',
        ]);

        Guru::create([
            'nama' => 'Ende Iskandar, S.TP.',
            'jabatan' => 'Guru APHP',
        ]);

        Guru::create([
            'nama' => 'Jajang Ridwan, S.T.',
            'jabatan' => 'Guru Teknik Otomotif',
        ]);

        Guru::create([
            'nama' => 'Yani Cahyani, S.PD.',
            'jabatan' => 'Guru Bahasa Inggris',
        ]);

        Guru::create([
            'nama' => 'Mega Nurunnisa, S.PD.',
            'jabatan' => 'Guru Bahasa Indonesia & Seni Budaya',
        ]);

        Guru::create([
            'nama' => 'Mia Rusmiati, S.PD.',
            'jabatan' => 'Guru Matematika & Bahasa Inggris',
        ]);

        Guru::create([
            'nama' => 'Silvi Danu Respita, S.T.',
            'jabatan' => 'Guru PPLG',
        ]);

        Guru::create([
            'nama' => 'Siti Rahmawati, S.E.',
            'jabatan' => 'Guru PAI-BP',
        ]);

        Guru::create([
            'nama' => 'Ai Nurhasanah, S.PD.',
            'jabatan' => 'Guru Matematika & Informatika',
        ]);

        Guru::create([
            'nama' => 'Isnan Wiranursyeha, S.PD.',
            'jabatan' => 'Guru Bahasa Indonesia',
        ]);

        Guru::create([
            'nama' => 'Bani Fudoly, S.T',
            'jabatan' => 'Guru PPLG',
        ]);
    }
}