<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Edit Ekstrakurikuler - Admin SMKN 1 Cijati</title>

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f5f6fa;
        }

        .navbar {
            background: #0d6efd;
            color: white;
            padding: 18px 30px;
        }

        .navbar h2 {
            margin: 0;
        }

        .container {
            width: 90%;
            max-width: 900px;
            margin: 50px auto;
        }

        .form-box {
            background: white;
            padding: 35px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }

        .form-box h1 {
            margin-top: 0;
            color: #0d6efd;
            margin-bottom: 30px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        input,
        textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 7px;
            box-sizing: border-box;
            font-size: 15px;
            font-family: Arial, sans-serif;
        }

        textarea {
            min-height: 120px;
            resize: vertical;
        }

        input:focus,
        textarea:focus {
            border-color: #0d6efd;
            outline: none;
        }

        .btn-update {
            background: #0d6efd;
            color: white;
            border: none;
            padding: 11px 18px;
            border-radius: 6px;
            font-weight: bold;
            cursor: pointer;
        }

        .btn-update:hover {
            background: #0b5ed7;
        }

        .btn-kembali {
            display: inline-block;
            background: #6c757d;
            color: white;
            padding: 11px 18px;
            border-radius: 6px;
            text-decoration: none;
            margin-left: 8px;
        }

        .btn-kembali:hover {
            background: #5c636a;
        }

        .kembali {
            display: inline-block;
            margin-bottom: 20px;
            color: #0d6efd;
            text-decoration: none;
        }

        @media (max-width: 768px) {
            .container {
                width: 90%;
            }

            .form-box {
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

        <a href="{{ route('admin.ekstrakurikuler.index') }}" class="kembali">
            ← Kembali ke Data Ekstrakurikuler
        </a>

        <div class="form-box">

            <h1>✏️ Edit Ekstrakurikuler</h1>

            <form action="{{ route('admin.ekstrakurikuler.update', $ekstrakurikuler->id) }}"
                  method="POST">

                @csrf
                @method('PUT')

                <div class="form-group">
                    <label>Nama Ekstrakurikuler</label>

                    <input
                        type="text"
                        name="nama"
                        value="{{ $ekstrakurikuler->nama }}"
                        placeholder="Masukkan nama ekstrakurikuler"
                        required
                    >
                </div>

                <div class="form-group">
                    <label>Deskripsi</label>

                    <textarea
                        name="deskripsi"
                        placeholder="Masukkan deskripsi ekstrakurikuler"
                    >{{ $ekstrakurikuler->deskripsi }}</textarea>
                </div>

                <div class="form-group">
                    <label>Nama Gambar</label>

                    <input
                        type="text"
                        name="gambar"
                        value="{{ $ekstrakurikuler->gambar }}"
                        placeholder="Contoh: pmr.jpeg"
                    >
                </div>

                <button type="submit" class="btn-update">
                    💾 Update Ekstrakurikuler
                </button>

                <a href="{{ route('admin.ekstrakurikuler.index') }}"
                   class="btn-kembali">
                    ← Kembali
                </a>

            </form>

        </div>

    </div>

</body>
</html>