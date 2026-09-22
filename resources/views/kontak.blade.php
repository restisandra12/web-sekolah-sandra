@extends('layouts.app')

@section('title', 'Kontak - SMK Negeri 1 Cijati')

@section('content')

<style>
    .kontak-container {
        width: 90%;
        max-width: 900px;
        margin: 50px auto;
    }

    .kontak-header {
        text-align: center;
        margin-bottom: 40px;
    }

    .kontak-header h1 {
        font-size: 36px;
        margin-bottom: 10px;
    }

    .kontak-header p {
        color: #666;
        font-size: 17px;
    }

    .kontak-card {
        background: white;
        border-radius: 15px;
        padding: 30px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    }

    .kontak-item {
        padding: 20px 0;
        border-bottom: 1px solid #ddd;
    }

    .kontak-item:last-child {
        border-bottom: none;
    }

    .kontak-item h3 {
        color: #0d6efd;
        margin: 0 0 8px 0;
        font-size: 20px;
    }

    .kontak-item p {
        color: #555;
        font-size: 17px;
        margin: 0;
        line-height: 1.6;
    }

    .kontak-item a {
        color: #0d6efd;
        text-decoration: none;
    }

    .kontak-item a:hover {
        text-decoration: underline;
    }
</style>

<div class="kontak-container">

    <div class="kontak-header">
        <h1>Kontak Kami</h1>

        <p>
            Informasi kontak SMK Negeri 1 Cijati
        </p>
    </div>

    <div class="kontak-card">

        {{-- ALAMAT --}}
        <div class="kontak-item">
            <h3>📍 Alamat</h3>

            <p>
                {{ $kontak->alamat }}
            </p>
        </div>

        {{-- TELEPON --}}
        <div class="kontak-item">
            <h3>📞 Telepon</h3>

            <p>
                {{ $kontak->telepon }}
            </p>
        </div>

        {{-- EMAIL --}}
        <div class="kontak-item">
            <h3>✉️ Email</h3>

            <p>
                {{ $kontak->email }}
            </p>
        </div>

        {{-- INSTAGRAM --}}
        <div class="kontak-item">
            <h3>📷 Instagram</h3>

            <p>
                <a href="https://www.instagram.com/smkn1cijatiofficial/" target="_blank">
                    @smkn1cijatiofficial
                </a>
            </p>
        </div>

    </div>

</div>

@endsection