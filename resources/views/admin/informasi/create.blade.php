<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Informasi</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f9;
            padding: 30px;
        }

        .container {
            max-width: 700px;
            margin: auto;
            background: white;
            padding: 25px;
            border-radius: 10px;
        }

        input, textarea, select {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 15px;
            box-sizing: border-box;
        }

        textarea {
            height: 150px;
        }

        button {
            background: #2563eb;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 6px;
            cursor: pointer;
        }

        .kembali {
            margin-left: 10px;
            text-decoration: none;
        }
    </style>
</head>

<body>

<div class="container">

    <h1>Tambah Informasi</h1>

    <form action="{{ route('admin.informasi.store') }}" method="POST">
        @csrf

        <label>Judul</label>
        <input type="text" name="judul" required>

        <label>Isi</label>
        <textarea name="isi" required></textarea>

        <label>Foto</label>
        <input type="text" name="foto" placeholder="contoh: kegiatan.jpg">

        <label>Tanggal</label>
        <input type="date" name="tanggal" required>

        <label>Kategori</label>
        <input type="text" name="kategori" placeholder="contoh: Berita">

        <button type="submit">Simpan</button>

        <a href="{{ route('admin.informasi.index') }}" class="kembali">
            Kembali
        </a>
    </form>

</div>

</body>
</html>