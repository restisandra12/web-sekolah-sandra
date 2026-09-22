@extends('layouts.app')

@section('title', 'Profil - SMK Negeri 1 Cijati')

@section('content')

<style>
    .profil-container {
        width: 90%;
        max-width: 1100px;
        margin: 50px auto;
    }

    .profil-header {
        text-align: center;
        margin-bottom: 40px;
    }

    .profil-header h1 {
        font-size: 36px;
        margin-bottom: 10px;
    }

    .profil-header p {
        color: #666;
        font-size: 17px;
    }

    .profil-card {
        background: white;
        padding: 35px;
        border-radius: 12px;
        margin-bottom: 30px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    }

    .profil-card h2 {
        color: #0d6efd;
        margin-top: 0;
        margin-bottom: 15px;
    }

    .profil-card p {
        color: #555;
        line-height: 1.8;
        font-size: 16px;
    }

    .visi-misi {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 25px;
        margin-bottom: 30px;
    }

    .visi,
    .misi {
        background: white;
        padding: 30px;
        border-radius: 12px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    }

    .visi h2,
    .misi h2 {
        color: #0d6efd;
        margin-top: 0;
    }

    .visi p,
    .misi li {
        color: #555;
        line-height: 1.8;
    }

    .misi ol {
        padding-left: 25px;
    }
</style>


<div class="profil-container">

    <!-- HEADER -->

    <div class="profil-header">

        <h1>Profil SMK Negeri 1 Cijati</h1>

        <p>
            Mengenal lebih dekat SMK Negeri 1 Cijati
        </p>

    </div>


    <!-- TENTANG SEKOLAH -->

    <div class="profil-card">

        <h2>Tentang Sekolah</h2>

        <p>
            {{ $profil->tentang_sekolah }}
        </p>

    </div>


    <!-- VISI DAN MISI -->

    <div class="visi-misi">

        <!-- VISI -->

        <div class="visi">

            <h2>Visi</h2>

            <p>
                {{ $profil->visi }}
            </p>

        </div>


        <!-- MISI -->

        <div class="misi">

            <h2>Misi</h2>

            <ol>

                @foreach(preg_split('/\r\n|\r|\n/', $profil->misi) as $item)

                    @if(trim($item) != '')
                        <li>
                            {{ trim($item) }}
                        </li>
                    @endif

                @endforeach

            </ol>

        </div>

    </div>


    <!-- TUJUAN PENDIDIKAN -->

    <div class="profil-card">

        <h2>Tujuan Pendidikan</h2>

        <p>
            SMK Negeri 1 Cijati berusaha memberikan bekal pengetahuan,
            keterampilan, dan pengalaman kepada siswa sehingga
            mampu menjadi lulusan yang memiliki kompetensi sesuai
            bidang keahlian serta mampu beradaptasi dengan
            perkembangan zaman.
        </p>

    </div>

</div>

@endsection