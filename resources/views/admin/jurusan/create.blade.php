<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Jurusan</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f5f6fa;
            margin: 0;
            padding: 30px;
        }

        .container {
            max-width: 700px;
            margin: auto;
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 3px 10px rgba(0,0,0,0.1);
        }

        h2 {
            margin-bottom: 25px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        input,
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 18px;
            border: 1px solid #ccc;
            border-radius: 6px;
            box-sizing: border-box;
        }

        textarea {
            height: 120px;
        }

        .btn {
            padding: 10px 18px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            text-decoration: none;
        }

        .btn-simpan {
            background: #198754;
            color: white;
        }

        .btn-kembali {
            background: #6c757d;
            color: white;
            margin-left: 8px;
        }
    </style>
</head>

<body>

<div class="container">

    <h2>Tambah Jurusan</h2>

    <form action="{{ route('admin.jurusan.store') }}" method="POST">
        @csrf

        <label>Nama Jurusan</label>
        <input type="text" name="nama" value="{{ old('nama') }}" required>

        <label>Slug</label>
        <input type="text" name="slug" value="{{ old('slug') }}" required>

        <label>Logo</label>
        <input type="text" name="logo" value="{{ old('logo') }}" placeholder="Contoh: pm.jpeg" required>

        <label>Deskripsi</label>
        <textarea name="deskripsi" required>{{ old('deskripsi') }}</textarea>

        <label>Kompetensi</label>
        <textarea name="kompetensi" required>{{ old('kompetensi') }}</textarea>

        <button type="submit" class="btn btn-simpan">
            Simpan
        </button>

        <a href="{{ route('admin.jurusan.index') }}" class="btn btn-kembali">
            Kembali
        </a>

    </form>

</div>

</body>
</html>