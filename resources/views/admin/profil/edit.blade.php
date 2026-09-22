@extends('layouts.app')

@section('title', 'Edit Profil')

@section('content')

<style>
    .profil-edit-container {
        width: 90%;
        max-width: 900px;
        margin: 40px auto;
    }

    .profil-edit-card {
        background: white;
        padding: 35px;
        border-radius: 12px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    }

    .profil-edit-card h2 {
        color: #0d6efd;
        margin-bottom: 30px;
    }

    .form-group {
        margin-bottom: 25px;
    }

    .form-group label {
        display: block;
        font-weight: bold;
        margin-bottom: 8px;
        color: #333;
    }

    .form-group textarea {
        width: 100%;
        min-height: 150px;
        padding: 12px;
        border: 1px solid #ddd;
        border-radius: 8px;
        font-size: 15px;
        line-height: 1.6;
        box-sizing: border-box;
        resize: vertical;
    }

    .form-group textarea:focus {
        outline: none;
        border-color: #0d6efd;
    }

    .button-group {
        display: flex;
        gap: 10px;
        margin-top: 30px;
    }

    .btn-simpan {
        background: #0d6efd;
        color: white;
        border: none;
        padding: 11px 22px;
        border-radius: 7px;
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
        border-radius: 7px;
        font-size: 15px;
    }

    .btn-kembali:hover {
        background: #5c636a;
    }
</style>

<div class="profil-edit-container">

    <div class="profil-edit-card">

        <h2>Edit Profil SMK Negeri 1 Cijati</h2>

        <form action="{{ route('admin.profil.update', $profil->id) }}" method="POST">

            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="tentang_sekolah">Tentang Sekolah</label>

                <textarea
                    name="tentang_sekolah"
                    id="tentang_sekolah"
                    required>{{ $profil->tentang_sekolah }}</textarea>
            </div>

            <div class="form-group">
                <label for="visi">Visi</label>

                <textarea
                    name="visi"
                    id="visi"
                    required>{{ $profil->visi }}</textarea>
            </div>

            <div class="form-group">
                <label for="misi">Misi</label>

                <textarea
                    name="misi"
                    id="misi"
                    required>{{ $profil->misi }}</textarea>
            </div>

            <div class="button-group">

                <button type="submit" class="btn-simpan">
                    Simpan Perubahan
                </button>

                <a href="{{ route('admin.profil.index') }}"
                   class="btn-kembali">
                    Kembali
                </a>

            </div>

        </form>

    </div>

</div>

@endsection