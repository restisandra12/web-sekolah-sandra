<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Profil;

class ProfilSeeder extends Seeder
{
    public function run(): void
    {
        Profil::create([
            'tentang_sekolah' => 'SMK Negeri 1 Cijati merupakan Sekolah Menengah Kejuruan yang memberikan pendidikan dan keterampilan kepada peserta didik sesuai dengan bidang keahlian yang dipelajari.

Sekolah berupaya menciptakan lingkungan pendidikan yang mendukung perkembangan akademik, keterampilan, karakter, kreativitas, dan kemandirian siswa.',

            'visi' => 'Terwujudnya lulusan KEREN dan BERSINERGI melalui pembelajaran mendalam, penguatan karakter pancawaluya, serta kolaborasi aktif dengan dunia kerja dan industri.',

            'misi' => 'Menyelenggarakan pembelajaran mendalam yang berpusat pada peserta didik untuk mengembangkan kompetensi secara optimal.
Menumbuhkan karakter religius, energik, dan nasionalis dalam kehidupan sehari-hari melalui penguatan nilai-nilai pancawaluya.
Membentuk karakter siswa yang disiplin, bertanggung jawab, dan mandiri.
Mengembangkan lulusan yang kompeten dan berdaya saing sesuai dengan kebutuhan dunia kerja dan perkembangan zaman.
Menanamkan jiwa kewirausahaan (entrepreneurship) melalui kegiatan pembelajaran dan praktik nyata.
Menumbuhkan integritas, etos kerja, dan tanggung jawab melalui pembiasaan, keteladanan, dan budaya sekolah yang positif. Menguatkan kolaborasi dan kemitraan aktif dengan dunia kerja dan industri untuk meningkatkan relevansi dan kualitas lulusan.',
        ]);
    }
}