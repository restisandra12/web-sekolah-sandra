<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Edit Kontak</title>

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f4f6f9;
        }

        .container {
            width: 90%;
            max-width: 850px;
            margin: 50px auto;
            background: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.08);
            box-sizing: border-box;
        }

        h1 {
            color: #2457c5;
            margin-bottom: 30px;
        }

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
            border-radius: 8px;
            box-sizing: border-box;
            font-size: 15px;
        }

        input:focus,
        textarea:focus {
            outline: none;
            border-color: #0d6efd;
        }

        textarea {
            min-height: 120px;
            resize: vertical;
        }

        .button-group {
            margin-top: 25px;
        }

        .btn-update {
            background: #0d6efd;
            color: white;
            border: none;
            padding: 12px 22px;
            border-radius: 8px;
            cursor: pointer;
            font-size: 15px;
            margin-right: 10px;
        }

        .btn-update:hover {
            background: #0b5ed7;
        }

        .btn-kembali {
            display: inline-block;
            background: #6c757d;
            color: white;
            text-decoration: none;
            padding: 12px 22px;
            border-radius: 8px;
            font-size: 15px;
        }

        .btn-kembali:hover {
            background: #5c636a;
        }
    </style>
</head>

<body>

<div class="container">

    <h1>✏️ Edit Kontak</h1>

    <form action="{{ route('admin.kontak.update', $kontak->id) }}" method="POST">

        @csrf
        @method('PUT')

        <div class="form-group">
            <label>Alamat</label>

            <textarea
                name="alamat"
                required
            >{{ old('alamat', $kontak->alamat) }}</textarea>
        </div>

        <div class="form-group">
            <label>Telepon</label>

            <input
                type="text"
                name="telepon"
                value="{{ old('telepon', $kontak->telepon) }}"
            >
        </div>

        <div class="form-group">
            <label>Email</label>

            <input
                type="email"
                name="email"
                value="{{ old('email', $kontak->email) }}"
            >
        </div>

        <div class="form-group">
            <label>Website</label>

            <input
                type="text"
                name="website"
                value="{{ old('website', $kontak->website) }}"
            >
        </div>

        <div class="button-group">

            <button type="submit" class="btn-update">
                💾 Update
            </button>

            <a
                href="{{ route('admin.kontak.index') }}"
                class="btn-kembali"
            >
                ← Kembali
            </a>

        </div>

    </form>

</div>

</body>
</html>