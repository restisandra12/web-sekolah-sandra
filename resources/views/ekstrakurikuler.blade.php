@extends('layouts.app')

@section('title', 'Ekstrakurikuler - SMK Negeri 1 Cijati')

@section('content')

<style>
    .eskul-page {
        padding: 50px 30px;
        max-width: 1200px;
        margin: auto;
    }

    .eskul-title {
        text-align: center;
        margin-bottom: 40px;
    }

    .eskul-title h1 {
        font-size: 36px;
        color: #0d6efd;
        margin-bottom: 10px;
    }

    .eskul-title p {
        color: #666;
        font-size: 16px;
    }

    .eskul-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 25px;
    }

    .eskul-card {
        background: white;
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 4px 15px rgba(0,0,0,0.12);
        transition: 0.3s;
    }

    .eskul-card:hover {
        transform: translateY(-5px);
    }

    .eskul-card img {
        width: 100%;
        height: 180px;
        object-fit: contain;
        display: block;
    }

    .eskul-content {
        padding: 20px;
    }

    .eskul-content h2 {
        margin-top: 0;
        margin-bottom: 10px;
        color: #0d6efd;
        font-size: 23px;
    }

    .eskul-content p {
        color: #555;
        line-height: 1.6;
        margin: 0;
    }

    .tidak-ada {
        text-align: center;
        padding: 40px;
        background: white;
        border-radius: 15px;
        color: #666;
    }
</style>

<div class="eskul-page">

    <div class="eskul-title">
        <h1>Ekstrakurikuler</h1>
        <p>
            Berbagai kegiatan ekstrakurikuler yang tersedia di SMK Negeri 1 Cijati
        </p>
    </div>

    @if($ekstrakurikulers->count() > 0)

        <div class="eskul-grid">

            @foreach($ekstrakurikulers as $eskul)

                <div class="eskul-card">

                    <img
                        src="{{ asset('images/' . $eskul->gambar) }}"
                        alt="{{ $eskul->nama }}"
                    >

                    <div class="eskul-content">

                        <h2>{{ $eskul->nama }}</h2>

                        <p>
                            {{ $eskul->deskripsi }}
                        </p>

                    </div>

                </div>

            @endforeach

        </div>

    @else

        <div class="tidak-ada">
            <h2>Data ekstrakurikuler belum tersedia.</h2>
        </div>

    @endif

</div>

@endsection