<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\DataSekolah;

class DataSekolahSeeder extends Seeder
{
    public function run(): void
    {
        DataSekolah::create([
            'jumlah_siswa' => 700,
        ]);
    }
}