@extends('layouts.app')

@section('title', 'Informasi - SMKN 1 Cijati')

@section('content')

<style>
    .informasi-container {
        width: 90%;
        max-width: 1100px;
        margin: 50px auto;
    }

    .informasi-header {
        text-align: center;
        margin-bottom: 40px;
    }

    .informasi-header h1 {
        font-size: 36px;
        margin-bottom: 10px;
        color: #222;
    }

    .informasi-header p {
        color: #666;
        font-size: 17px;
    }

    .informasi-grid {
        width: 100%;
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 25px;
    }

    .informasi-card {
        background: white;
        padding: 20px;
        border-radius: 12px;

        box-shadow:
            0 4px 12px rgba(0, 0, 0, 0.1);

        overflow: hidden;
    }

    .informasi-foto {
        width: 100%;
        height: 180px;
        object-fit: cover;
        border-radius: 10px;
        margin-bottom: 15px;
        display: block;
    }

    .informasi-card h2 {
        color: #0d6efd;
        font-size: 22px;
        margin-bottom: 10px;
    }

    .informasi-card p {
        color: #666;
        line-height: 1.6;
        font-size: 16px;
    }

    .informasi-card a {
        display: inline-block;
        margin-top: 10px;
        color: #0d6efd;
        text-decoration: none;
        font-weight: bold;
    }

    .informasi-card a:hover {
        text-decoration: underline;
    }

    @media (max-width: 768px) {
        .informasi-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (max-width: 480px) {
        .informasi-container {
            width: 92%;
            margin: 30px auto;
        }

        .informasi-header h1 {
            font-size: 30px;
        }

        .informasi-grid {
            grid-template-columns: 1fr;
        }
    }
</style>


<div class="informasi-container">

    <div class="informasi-header">

        <h1>
            Informasi Sekolah
        </h1>

        <p>
            Informasi terbaru mengenai kegiatan dan berita
            SMK Negeri 1 Cijati.
        </p>

    </div>


    <div class="informasi-grid">

        @forelse($informasis as $informasi)

            <div class="informasi-card">

                @if($informasi->foto)

                    <img
                        src="{{ asset('images/' . $informasi->foto) }}"
                        alt="{{ $informasi->judul }}"
                        class="informasi-foto"
                    >

                @endif


                <h2>
                    {{ $informasi->judul }}
                </h2>


                <p>
                    {{ Str::limit($informasi->isi, 150) }}
                </p>


                <a href="{{ route('informasi.show', $informasi->id) }}">
                    Selengkapnya →
                </a>

            </div>

        @empty

            <div class="informasi-card">

                <h2>
                    Belum Ada Informasi
                </h2>

                <p>
                    Saat ini belum ada informasi yang tersedia.
                </p>

            </div>

        @endforelse

    </div>

</div>

@endsection