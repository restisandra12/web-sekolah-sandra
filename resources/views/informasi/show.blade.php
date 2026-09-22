@extends('layouts.app')

@section('title', $informasi->judul . ' - SMKN 1 Cijati')

@section('content')

<style>
    .detail-container {
        width: 90%;
        max-width: 1000px;
        margin: 50px auto;
    }

    .detail-card {
        background: white;
        padding: 30px;
        border-radius: 15px;

        box-shadow:
            0 4px 12px rgba(0, 0, 0, 0.1);
    }

    .detail-foto {
        width: 100%;
        height: 400px;
        object-fit: cover;
        border-radius: 12px;
        margin-bottom: 25px;
        display: block;
    }

    .detail-card h1 {
        color: #0d6efd;
        font-size: 36px;
        margin-bottom: 10px;
    }

    .detail-date {
        color: #888;
        font-size: 14px;
        margin-bottom: 25px;
    }

    .detail-content {
        color: #555;
        font-size: 17px;
        line-height: 1.8;
    }

    .btn-kembali {
        display: inline-block;
        margin-top: 30px;
        padding: 12px 20px;

        background: #0d6efd;
        color: white;
        text-decoration: none;

        border-radius: 8px;
        font-weight: bold;
    }

    .btn-kembali:hover {
        opacity: 0.85;
    }

    @media (max-width: 768px) {
        .detail-foto {
            height: 300px;
        }
    }

    @media (max-width: 480px) {
        .detail-container {
            width: 92%;
            margin: 30px auto;
        }

        .detail-card {
            padding: 20px;
        }

        .detail-foto {
            height: 220px;
        }

        .detail-card h1 {
            font-size: 28px;
        }

        .detail-content {
            font-size: 16px;
        }
    }
</style>


<div class="detail-container">

    <div class="detail-card">

        @if($informasi->foto)

            <img
                src="{{ asset('images/' . $informasi->foto) }}"
                alt="{{ $informasi->judul }}"
                class="detail-foto"
            >

        @endif


        <h1>
            {{ $informasi->judul }}
        </h1>


        <div class="detail-date">
            {{ $informasi->created_at->format('d F Y') }}
        </div>


        <div class="detail-content">
            {{ $informasi->isi }}
        </div>


        <a href="{{ route('informasi.index') }}" class="btn-kembali">
            ← Kembali ke Informasi
        </a>

    </div>

</div>

@endsection