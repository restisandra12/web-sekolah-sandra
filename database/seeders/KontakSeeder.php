<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kontak;

class KontakSeeder extends Seeder
{
    public function run(): void
    {
        Kontak::create([
    'alamat' => 'Jl. Raya Cijati, Kabupaten Cianjur, Jawa Barat',
    'telepon' => '02632361091',
    'email' => 'smkn.1cijati@yahoo.co.id',
    'website' => 'https://smkn1cijati.sch.id',
]);
    }
}