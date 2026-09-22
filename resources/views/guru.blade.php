@extends('layouts.app')

@section('title', 'Guru - SMK Negeri 1 Cijati')

@section('content')

<style>
    .guru-container {
        width: 90%;
        max-width: 1100px;
        margin: 50px auto;
    }

    .guru-header {
        text-align: center;
        margin-bottom: 40px;
    }

    .guru-header h1 {
        font-size: 36px;
        margin-bottom: 10px;
    }

    .guru-header p {
        color: #666;
        font-size: 17px;
    }

    .guru-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 25px;
    }

    .guru-card {
        background: white;
        padding: 30px 25px;
        border-radius: 12px;
        text-align: center;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        transition: 0.3s;
    }

    .guru-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 18px rgba(0, 0, 0, 0.15);
    }

    .guru-card h2 {
        font-size: 20px;
        margin: 10px 0 15px;
        color: #173b67;
    }

    .jabatan {
        display: inline-block;
        padding: 7px 14px;
        background: #e9f2ff;
        color: #0d6efd;
        border-radius: 20px;
        font-size: 14px;
    }
</style>


<div class="guru-container">

    <div class="guru-header">

        <h1>Guru dan Tenaga Kependidikan</h1>

        <p>
            Daftar guru dan tenaga kependidikan SMK Negeri 1 Cijati
        </p>

    </div>


    <div class="guru-grid">

        @foreach ($gurus as $guru)

            <div class="guru-card">

                <h2>
                    {{ $guru->nama }}
                </h2>

                <span class="jabatan">
                    {{ $guru->jabatan }}
                </span>

            </div>

        @endforeach

    </div>

</div>

@endsection