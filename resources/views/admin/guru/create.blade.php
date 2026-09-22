@extends('layouts.app')

@section('title', 'Tambah Guru - Admin')

@section('content')

<div style="max-width: 700px; margin: 50px auto; padding: 30px; background: white; border-radius: 15px; box-shadow: 0 4px 15px rgba(0,0,0,0.1);">

    <h1 style="color: #0d6efd; margin-bottom: 30px;">
        ➕ Tambah Data Guru
    </h1>

    @if ($errors->any())
        <div style="background: #f8d7da; color: #842029; padding: 15px; border-radius: 8px; margin-bottom: 20px;">
            <ul style="margin: 0; padding-left: 20px;">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.guru.store') }}" method="POST">

        @csrf

        <div style="margin-bottom: 20px;">
            <label for="nama" style="display: block; font-weight: bold; margin-bottom: 8px;">
                Nama Guru
            </label>

            <input
                type="text"
                id="nama"
                name="nama"
                value="{{ old('nama') }}"
                placeholder="Masukkan nama guru"
                required
                style="width: 100%; padding: 12px; border: 1px solid #ccc; border-radius: 8px; box-sizing: border-box;"
            >
        </div>

        <div style="margin-bottom: 25px;">
            <label for="jabatan" style="display: block; font-weight: bold; margin-bottom: 8px;">
                Jabatan
            </label>

            <input
                type="text"
                id="jabatan"
                name="jabatan"
                value="{{ old('jabatan') }}"
                placeholder="Contoh: Guru Matematika"
                style="width: 100%; padding: 12px; border: 1px solid #ccc; border-radius: 8px; box-sizing: border-box;"
            >
        </div>

        <button
            type="submit"
            style="padding: 12px 25px; background: #0d6efd; color: white; border: none; border-radius: 8px; font-weight: bold; cursor: pointer;"
        >
            💾 Simpan Guru
        </button>

        <a
            href="{{ route('admin.guru.index') }}"
            style="display: inline-block; margin-left: 10px; padding: 12px 25px; background: #6c757d; color: white; text-decoration: none; border-radius: 8px;"
        >
            ← Kembali
        </a>

    </form>

</div>

@endsection