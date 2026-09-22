<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Edit Jumlah Siswa - SMK Negeri 1 Cijati</title>

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        body {
            min-height: 100vh;
            background: #f4f7fb;
        }

        .navbar {
            background: #0d6efd;
            color: white;
            padding: 18px 30px;
            font-size: 20px;
            font-weight: bold;
        }

        .container {
            width: 90%;
            max-width: 600px;
            margin: 50px auto;
        }

        .card {
            background: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
        }

        h2 {
            color: #003b7a;
            margin-bottom: 25px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        input {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 16px;
            margin-bottom: 20px;
        }

        input:focus {
            outline: none;
            border-color: #0d6efd;
        }

        .btn {
            display: inline-block;
            padding: 12px 20px;
            border: none;
            border-radius: 8px;
            background: #0d6efd;
            color: white;
            font-size: 15px;
            font-weight: bold;
            cursor: pointer;
            text-decoration: none;
        }

        .btn:hover {
            background: #0056d6;
        }

        .btn-kembali {
            background: #6c757d;
            margin-left: 8px;
        }

        .btn-kembali:hover {
            background: #5a6268;
        }

        .error {
            color: red;
            margin-bottom: 15px;
        }
    </style>
</head>

<body>

    <div class="navbar">
        Dashboard Admin - SMK Negeri 1 Cijati
    </div>

    <div class="container">

        <div class="card">

            <h2>Edit Jumlah Siswa</h2>

            @if ($errors->any())
                <div class="error">
                    {{ $errors->first() }}
                </div>
            @endif

            <form action="{{ route('admin.data-sekolah.update') }}" method="POST">

                @csrf
                @method('PUT')

                <label for="jumlah_siswa">
                    Jumlah Siswa
                </label>

                <input
                    type="number"
                    id="jumlah_siswa"
                    name="jumlah_siswa"
                    value="{{ $dataSekolah->jumlah_siswa }}"
                    min="0"
                    required
                >

                <button type="submit" class="btn">
                    Simpan
                </button>

                <a href="{{ route('admin.dashboard') }}" class="btn btn-kembali">
                    Kembali
                </a>

            </form>

        </div>

    </div>

</body>
</html>