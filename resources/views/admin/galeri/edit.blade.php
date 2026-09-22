<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Edit Galeri - Admin SMKN 1 Cijati</title>

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f5f6fa;
        }

        /* NAVBAR */
        .navbar {
            background: #0d6efd;
            color: white;
            padding: 18px 30px;
            display: flex;
            align-items: center;
        }

        .navbar h2 {
            margin: 0;
        }

        /* CONTAINER */
        .container {
            width: 90%;
            max-width: 850px;
            margin: 50px auto;
        }

        /* CARD */
        .card {
            background: white;
            padding: 35px;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }

        .card h1 {
            margin-top: 0;
            color: #0d6efd;
            margin-bottom: 30px;
        }

        /* FORM */
        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 8px;
            color: #333;
        }

        input,
        textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 7px;
            box-sizing: border-box;
            font-size: 15px;
        }

        input:focus,
        textarea:focus {
            outline: none;
            border-color: #0d6efd;
        }

        textarea {
            resize: vertical;
        }

        /* TOMBOL */
        .tombol {
            margin-top: 25px;
            display: flex;
            gap: 10px;
        }

        .btn-update {
            background: #0d6efd;
            color: white;
            border: none;
            padding: 11px 20px;
            border-radius: 7px;
            cursor: pointer;
            font-weight: bold;
        }

        .btn-update:hover {
            background: #0b5ed7;
        }

        .btn-kembali {
            background: #6c757d;
            color: white;
            padding: 11px 20px;
            border-radius: 7px;
            text-decoration: none;
            font-weight: bold;
        }

        .btn-kembali:hover {
            background: #5c636a;
        }

        /* RESPONSIVE */
        @media (max-width: 768px) {
            .container {
                width: 92%;
            }

            .card {
                padding: 25px;
            }
        }
    </style>
</head>

<body>

    <div class="navbar">
        <h2>Admin SMKN 1 Cijati</h2>
    </div>

    <div class="container">

        <div class="card">

            <h1>✎ Edit Data Galeri</h1>

            <form action="{{ route('admin.galeri.update', $galeri->id) }}" method="POST">

                @csrf
                @method('PUT')

                <div class="form-group">
                    <label>Judul Galeri</label>

                    <input
                        type="text"
                        name="judul"
                        value="{{ $galeri->judul }}"
                        required
                    >
                </div>

                <div class="form-group">
                    <label>Nama Gambar</label>

                    <input
                        type="text"
                        name="gambar"
                        value="{{ $galeri->gambar }}"
                        placeholder="Contoh: paskibra.jpeg"
                        required
                    >
                </div>

                <div class="form-group">
                    <label>Deskripsi</label>

                    <textarea
                        name="deskripsi"
                        rows="5"
                        placeholder="Masukkan deskripsi kegiatan"
                    >{{ $galeri->deskripsi }}</textarea>
                </div>

                <div class="tombol">

                    <button type="submit" class="btn-update">
                        💾 Update Galeri
                    </button>

                    <a href="{{ route('admin.galeri.index') }}"
                       class="btn-kembali">
                        ← Kembali
                    </a>

                </div>

            </form>

        </div>

    </div>

</body>
</html>