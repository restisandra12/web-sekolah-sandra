<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\GuruSeeder;
use Database\Seeders\JurusanSeeder;
use Database\Seeders\EkstrakurikulerSeeder;
use Database\Seeders\GaleriSeeder;
use Database\Seeders\KontakSeeder;
use Database\Seeders\InformasiSeeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\ProfilSeeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            GuruSeeder::class,
            JurusanSeeder::class,
            EkstrakurikulerSeeder::class,
            GaleriSeeder::class,
            KontakSeeder::class,
            InformasiSeeder::class,
            UserSeeder::class,
            ProfilSeeder::class,
        ]);
    }
}