@extends('layouts.app')

@section('title', 'Beranda - SMKN 1 Cijati')

@section('content')

<style>
    /* =========================
       HERO / BERANDA UTAMA
    ========================= */

    .hero {
        min-height: 75vh;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        padding: 60px 20px;

        background:
            linear-gradient(
                rgba(0, 0, 0, 0.45),
                rgba(0, 0, 0, 0.45)
            ),
            url('{{ asset('images/rps.jpeg') }}')
            center center / cover no-repeat;

        color: white;
    }

    .hero-content {
        max-width: 800px;
    }

    .hero h1 {
        font-size: 48px;
        margin-bottom: 15px;
    }

    .hero p {
        font-size: 20px;
        line-height: 1.6;
        margin-bottom: 30px;
    }

    /* TOMBOL */

    .btn {
        display: inline-block;
        padding: 12px 25px;
        background: white;
        color: #0d6efd;
        text-decoration: none;
        border-radius: 8px;
        font-weight: bold;
        margin: 5px;
    }

    .btn:hover {
        opacity: 0.85;
    }


    /* =========================
       SAMBUTAN KEPALA SEKOLAH
    ========================= */

    .sambutan-container {
        width: 90%;
        max-width: 1100px;
        margin: 50px auto;
    }

    .sambutan-card {
        background: white;
        border-radius: 18px;
        padding: 35px;

        display: flex;
        align-items: center;
        gap: 35px;

        box-shadow:
            0 4px 15px rgba(0, 0, 0, 0.1);
    }

    .sambutan-foto {
        width: 220px;
        flex-shrink: 0;
        text-align: center;
    }

    .sambutan-foto img {
        width: 180px;
        height: 220px;
        object-fit: cover;

        border-radius: 15px;
        border: 4px solid #0d6efd;
    }

    .sambutan-foto h3 {
        margin: 12px 0 5px;
        color: #173b67;
        font-size: 18px;
    }

    .sambutan-foto p {
        margin: 0;
        color: #666;
    }

    .sambutan-isi {
        flex: 1;
    }

    .sambutan-label {
        display: inline-block;

        background: #0d6efd;
        color: white;

        padding: 7px 15px;
        border-radius: 20px;

        font-size: 14px;
        margin-bottom: 12px;
    }

    .sambutan-isi h2 {
        color: #173b67;
        font-size: 28px;
        margin: 5px 0 15px;
    }

    .sambutan-isi p {
        color: #555;
        font-size: 16px;
        line-height: 1.8;
        margin-bottom: 12px;
    }

    .sambutan-isi strong {
        color: #0d6efd;
    }


    /* =========================
       TENTANG SEKOLAH
    ========================= */

    .welcome {
        width: 90%;
        max-width: 1100px;
        margin: 50px auto;
        text-align: center;
    }

    .welcome h2 {
        font-size: 32px;
        margin-bottom: 15px;
    }

    .welcome p {
        color: #666;
        line-height: 1.8;
        font-size: 17px;
    }


    /* =========================
       STATISTIK
    ========================= */

    .stats-grid {
        width: 90%;
        max-width: 1100px;
        margin: 40px auto 60px;

        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 20px;
    }

    .stat-card {
        background: white;
        padding: 30px 20px;
        text-align: center;
        border-radius: 15px;

        box-shadow:
            0 4px 12px rgba(0, 0, 0, 0.1);
    }

    .stat-card .icon {
        font-size: 40px;
        margin-bottom: 10px;
    }

    .stat-card h2 {
        color: #0d6efd;
        font-size: 36px;
        margin: 5px 0;
    }

    .stat-card p {
        color: #666;
        font-size: 16px;
        font-weight: bold;
        margin: 0;
    }


    /* =========================
       INFORMASI
    ========================= */

    .info-grid {
        width: 90%;
        max-width: 1100px;
        margin: 40px auto 60px;

        display: grid;
        grid-template-columns:
            repeat(auto-fit, minmax(250px, 1fr));

        gap: 25px;
    }

    .info-card {
        background: white;
        padding: 30px;
        text-align: center;
        border-radius: 12px;

        box-shadow:
            0 4px 12px rgba(0, 0, 0, 0.1);
    }

    .info-card h3 {
        color: #0d6efd;
        margin-bottom: 10px;
    }

    .info-card p {
        color: #666;
        line-height: 1.6;
    }

    .info-card a {
        color: #0d6efd;
        text-decoration: none;
        font-weight: bold;
    }

    .info-card a:hover {
        text-decoration: underline;
    }


    /* =========================
       LOGIN ADMIN
    ========================= */

    .login-admin {
        position: fixed;
        right: 20px;
        bottom: 20px;

        width: 32px;
        height: 32px;

        display: flex;
        align-items: center;
        justify-content: center;

        background: white;
        border-radius: 50%;

        text-decoration: none;
        font-size: 14px;

        box-shadow:
            0 3px 10px rgba(0, 0, 0, 0.2);

        z-index: 9999;

        transition: 0.2s;
    }

    .login-admin:hover {
        transform: scale(1.1);
    }


    /* =========================
       RESPONSIVE
    ========================= */

    @media (max-width: 768px) {

        .hero {
            min-height: 70vh;
        }

        .hero h1 {
            font-size: 36px;
        }

        .hero p {
            font-size: 17px;
        }

        .stats-grid {
            grid-template-columns: repeat(2, 1fr);
        }

        .sambutan-card {
            flex-direction: column;
            text-align: center;
        }

        .sambutan-foto {
            width: 100%;
        }

        .sambutan-isi h2 {
            font-size: 23px;
        }
    }


    @media (max-width: 480px) {

        .hero {
            padding: 40px 15px;
        }

        .hero h1 {
            font-size: 30px;
        }

        .hero p {
            font-size: 16px;
        }

        .stats-grid {
            grid-template-columns: 1fr;
        }

        .sambutan-card {
            padding: 25px 20px;
        }
    }
</style>


<!-- =========================
     HERO
========================= -->

<section class="hero">

    <div class="hero-content">

        <h1>
            Selamat Datang di SMK Negeri 1 Cijati
        </h1>

        <p>
            Website resmi SMK Negeri 1 Cijati yang menyediakan
            informasi mengenai profil sekolah, jurusan,
            ekstrakurikuler, galeri kegiatan, dan kontak sekolah.
        </p>

        <a href="/profil" class="btn">
            Lihat Profil
        </a>

        <a href="/jurusan" class="btn">
            Lihat Jurusan
        </a>

    </div>

</section>


<!-- =========================
     SAMBUTAN KEPALA SEKOLAH
========================= -->

<section class="sambutan-container">

    <div class="sambutan-card">

        <!-- FOTO KEPALA SEKOLAH -->

        <div class="sambutan-foto">

            <img
                src="{{ asset('images/kepala-sekolah.jpeg') }}"
                alt="Kepala SMK Negeri 1 Cijati"
            >

            <h3>
                Kepala SMK Negeri 1 Cijati
            </h3>

            <p>
                Kepala Sekolah
            </p>

        </div>


        <!-- ISI SAMBUTAN -->

        <div class="sambutan-isi">

            <span class="sambutan-label">
                Sambutan Kepala Sekolah
            </span>

            <h2>
                Assalamu'alaikum Warahmatullahi Wabarakatuh
            </h2>

            <p>
                Puji syukur kita panjatkan ke hadirat Allah SWT
                atas rahmat dan karunia-Nya. Selamat datang di
                website resmi SMK Negeri 1 Cijati.
            </p>

            <p>
                Website ini diharapkan dapat menjadi sarana
                informasi dan komunikasi bagi seluruh warga
                sekolah maupun masyarakat.
            </p>

            <p>
                Melalui website ini, berbagai informasi mengenai
                sekolah, program keahlian, kegiatan, dan prestasi
                siswa dapat diakses dengan mudah.
            </p>

            <p>
                Semoga SMK Negeri 1 Cijati terus berkembang
                menjadi sekolah yang unggul, berkarakter,
                kompeten, dan mampu mempersiapkan peserta didik
                menghadapi dunia kerja maupun melanjutkan
                pendidikan ke jenjang yang lebih tinggi.
            </p>

            <p>
                <strong>
                    Wassalamu'alaikum Warahmatullahi Wabarakatuh.
                </strong>
            </p>

        </div>

    </div>

</section>


<!-- =========================
     TENTANG SEKOLAH
========================= -->

<section class="welcome">

    <h2>
        Tentang SMK Negeri 1 Cijati
    </h2>

    <p>
        SMK Negeri 1 Cijati merupakan sekolah menengah kejuruan
        yang berkomitmen memberikan pendidikan dan keterampilan
        kepada peserta didik agar siap menghadapi dunia kerja,
        melanjutkan pendidikan, maupun berwirausaha.
    </p>

</section>


<!-- =========================
     STATISTIK SEKOLAH
========================= -->

<section class="stats-grid">

    <div class="stat-card">

        <div class="icon">
            👨‍🎓
        </div>

        <h2>
            {{ $dataSekolah->jumlah_siswa }}
        </h2>

        <p>
            Jumlah Siswa
        </p>

    </div>


    <div class="stat-card">

        <div class="icon">
            👨‍🏫
        </div>

        <h2>
            {{ $jumlahGuru }}
        </h2>

        <p>
            Jumlah Guru
        </p>

    </div>


    <div class="stat-card">

        <div class="icon">
            🎓
        </div>

        <h2>
            {{ $jumlahJurusan }}
        </h2>

        <p>
            Jumlah Jurusan
        </p>

    </div>


    <div class="stat-card">

        <div class="icon">
            🏆
        </div>

        <h2>
            {{ $jumlahEskul }}
        </h2>

        <p>
            Jumlah Ekstrakurikuler
        </p>

    </div>

</section>


<!-- =========================
     INFORMASI
========================= -->

<section class="info-grid">


    <!-- JURUSAN -->

    <div class="info-card">

        <h3>
            🎓 Jurusan
        </h3>

        <p>
            Temukan berbagai program keahlian yang tersedia
            di SMK Negeri 1 Cijati.
        </p>

        <a href="/jurusan">
            Lihat Jurusan
        </a>

    </div>


    <!-- EKSTRAKURIKULER -->

    <div class="info-card">

        <h3>
            🏆 Ekstrakurikuler
        </h3>

        <p>
            Berbagai kegiatan ekstrakurikuler untuk
            mengembangkan bakat dan minat siswa.
        </p>

        <a href="/ekstrakurikuler">
            Lihat Eskul
        </a>

    </div>


    <!-- GALERI -->

    <div class="info-card">

        <h3>
            📸 Galeri
        </h3>

        <p>
            Lihat dokumentasi berbagai kegiatan
            siswa dan sekolah.
        </p>

        <a href="/galeri">
            Lihat Galeri
        </a>

    </div>


    <!-- KONTAK -->

    <div class="info-card">

        <h3>
            📞 Kontak
        </h3>

        <p>
            Temukan informasi kontak dan alamat
            SMK Negeri 1 Cijati.
        </p>

        <a href="/kontak">
            Hubungi Kami
        </a>

    </div>


</section>


{{-- LOGIN ADMIN --}}

<a href="{{ route('login') }}" class="login-admin">
    🔐
</a>


@endsection