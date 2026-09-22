@extends('layouts.app')

@section('title', 'Tambah Ekstrakurikuler')

@section('content')

<style>
    .form-container {
        width: 90%;
        max-width: 800px;
        margin: 50px auto;
    }

    .form-header {
        text-align: center;
        margin-bottom: 30px;
    }

    .form-header h1 {
        font-size: 32px;
        margin-bottom: 8px;
    }

    .form-header p {
        color: #666;
        margin: 0;
    }

    .form-card {
        background: white;
        padding: 30px;
        border-radius: 15px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    }

    .form-group {
        margin-bottom: 20px;
    }

    .form-group label {
        display: block;
        font-weight: bold;
        margin-bottom: 8px;
        color: #333;
    }

    .form-group input,
    .form-group textarea {
        width: 100%;
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 8px;
        font-size: 15px;
        box-sizing: border-box;
    }

    .form-group textarea {
        resize: vertical;
    }

    .form-group input:focus,
    .form-group textarea:focus {
        outline: none;
        border-color: #0d6efd;
    }

    .button-group {
        margin-top: 25px;
        display: flex;
        gap: 10px;
    }

    .btn-simpan {
        background: #0d6efd;
        color: white;
        border: none;
        padding: 11px 22px;
        border-radius: 8px;
        cursor: pointer;
        font-size: 15px;
    }

    .btn-simpan:hover {
        background: #0b5ed7;
    }

    .btn-kembali {
        background: #6c757d;
        color: white;
        text-decoration: none;
        padding: 11px 22px;
        border-radius: 8px;
        font-size: 15px;
    }

    .btn-kembali:hover {
        background: #5c636a;
    }
</style>

<div class="form-container">

    <div class="form-header">
        <h1>Tambah Ekstrakurikuler</h1>
        <p>Tambahkan data ekstrakurikuler baru</p>
    </div>

    <div class="form-card">

        <form action="{{ route('admin.ekstrakurikuler.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label>Nama Ekstrakurikuler</label>
                <input type="text" name="nama" required>
            </div>

            <div class="form-group">
                <label>Deskripsi</label>
                <textarea name="deskripsi" rows="5"></textarea>
            </div>

            <div class="form-group">
                <label>Nama Gambar</label>
                <input
                    type="text"
                    name="gambar"
                    placeholder="contoh: pmr.jpeg"
                >
            </div>

            <div class="button-group">

                <button type="submit" class="btn-simpan">
                    Simpan
                </button>

                <a
                    href="{{ route('admin.ekstrakurikuler.index') }}"
                    class="btn-kembali"
                >
                    Kembali
                </a>

            </div>

        </form>

    </div>

</div>

@endsection