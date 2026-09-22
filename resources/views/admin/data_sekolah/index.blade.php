<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Data Sekolah - Admin SMKN 1 Cijati</title>

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

            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .navbar h2 {
            margin: 0;
        }

        .container {
            width: 90%;
            max-width: 800px;
            margin: 40px auto;
        }

        .header {
            background: white;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
            margin-bottom: 25px;
        }

        .header h1 {
            margin-top: 0;
            color: #0d6efd;
        }

        .header p {
            color: #666;
            margin-bottom: 20px;
        }

        .btn-dashboard {
            display: inline-block;
            background: #0d6efd;
            color: white;
            padding: 10px 16px;
            border-radius: 6px;
            text-decoration: none;
            font-weight: bold;
            margin-bottom: 25px;
        }

        .btn-dashboard:hover {
            background: #0b5ed7;
        }

        .data-card {
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }

        .data-card label {
            display: block;
            font-weight: bold;
            margin-bottom: 8px;
            color: #333;
        }

        .data-card input {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 16px;
            margin-bottom: 20px;
            box-sizing: border-box;
        }

        .data-card input:focus {
            outline: none;
            border-color: #0d6efd;
        }

        .btn-simpan {
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 8px;
            background: #0d6efd;
            color: white;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
        }

        .btn-simpan:hover {
            background: #0056d6;
        }

        .success {
            background: #d1e7dd;
            color: #0f5132;
            padding: 12px;
            border-radius: 8px;
            margin-bottom: 20px;
        }

        .error {
            background: #f8d7da;
            color: #842029;
            padding: 12px;
            border-radius: 8px;
            margin-bottom: 20px;
        }
    </style>
</head>

<body>

    <div class="navbar">
        <h2>Admin SMKN 1 Cijati</h2>
    </div>

    <div class="container">

        <a href="{{ route('admin.dashboard') }}" class="btn-dashboard">
            ← Kembali ke Dashboard
        </a>

        <div class="header">
            <h1>Data Sekolah</h1>

            <p>
                Kelola jumlah siswa yang ditampilkan di Beranda.
            </p>
        </div>

        @if (session('success'))
            <div class="success">
                {{ session('success') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="error">
                {{ $errors->first() }}
            </div>
        @endif

        <div class="data-card">

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
                    value="{{ $dataSekolah->jumlah_siswa ?? 0 }}"
                    min="0"
                    required
                >

                <button type="submit" class="btn-simpan">
                    Simpan Perubahan
                </button>

            </form>

        </div>

    </div>

</body>
</html>