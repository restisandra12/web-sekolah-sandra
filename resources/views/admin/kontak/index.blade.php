<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Kelola Kontak - SMK Negeri 1 Cijati</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f4f7fb;
            color: #333;
        }

        /* NAVBAR */
        .navbar {
            background-color: #0d6efd;
            color: white;
            padding: 18px 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 8px rgba(0,0,0,0.15);
        }

        .navbar h2 {
            margin: 0;
            font-size: 22px;
        }

        /* TOMBOL */
        .btn {
            display: inline-block;
            padding: 10px 16px;
            border-radius: 6px;
            text-decoration: none;
            border: none;
            cursor: pointer;
            font-size: 14px;
        }

        .btn-dashboard {
            background-color: #6c757d;
            color: white;
        }

        .btn-dashboard:hover {
            background-color: #5a6268;
        }

        .btn-tambah {
            background-color: #198754;
            color: white;
        }

        .btn-tambah:hover {
            background-color: #157347;
        }

        .btn-edit {
            background-color: #ffc107;
            color: #212529;
            padding: 7px 12px;
        }

        .btn-edit:hover {
            background-color: #e0a800;
        }

        .btn-hapus {
            background-color: #dc3545;
            color: white;
            padding: 7px 12px;
        }

        .btn-hapus:hover {
            background-color: #bb2d3b;
        }

        /* CONTAINER */
        .container {
            width: 92%;
            max-width: 1100px;
            margin: 35px auto;
        }

        /* HEADER */
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 25px;
            gap: 15px;
            flex-wrap: wrap;
        }

        .header h1 {
            margin: 0;
            color: #173b67;
            font-size: 30px;
        }

        /* ALERT */
        .alert {
            background-color: #d1e7dd;
            color: #0f5132;
            padding: 12px 16px;
            border-radius: 7px;
            margin-bottom: 20px;
        }

        /* KARTU KONTAK */
        .kontak-card {
            background-color: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 3px 12px rgba(0,0,0,0.08);
            margin-bottom: 20px;
        }

        .kontak-card h3 {
            color: #173b67;
            font-size: 24px;
            margin-top: 0;
            margin-bottom: 25px;
        }

        .kontak-item {
            margin-bottom: 20px;
        }

        .kontak-item strong {
            display: block;
            color: #173b67;
            margin-bottom: 6px;
            font-size: 16px;
        }

        .kontak-item p {
            margin: 0;
            line-height: 1.6;
        }

        .kontak-item a {
            color: #0d6efd;
            text-decoration: none;
        }

        .kontak-item a:hover {
            text-decoration: underline;
        }

        .aksi {
            margin-top: 25px;
            padding-top: 20px;
            border-top: 1px solid #ddd;
        }

        .aksi form {
            display: inline;
        }

        /* KOSONG */
        .kosong {
            background: white;
            padding: 30px;
            border-radius: 10px;
            text-align: center;
            box-shadow: 0 3px 12px rgba(0,0,0,0.08);
        }

        /* RESPONSIVE */
        @media (max-width: 768px) {

            .navbar {
                padding: 15px 20px;
                gap: 10px;
            }

            .navbar h2 {
                font-size: 18px;
            }

            .container {
                width: 95%;
            }

            .header h1 {
                font-size: 24px;
            }

            .kontak-card {
                padding: 22px;
            }
        }
    </style>
</head>

<body>

    <!-- NAVBAR -->
    <div class="navbar">

        <h2>Admin - SMK Negeri 1 Cijati</h2>

        <a href="{{ route('admin.dashboard') }}" class="btn btn-dashboard">
            ← Kembali ke Dashboard
        </a>

    </div>


    <!-- ISI -->
    <div class="container">

        <div class="header">

            <h1>Kelola Kontak</h1>

            <a href="{{ route('admin.kontak.create') }}"
               class="btn btn-tambah">
                + Tambah Kontak
            </a>

        </div>


        <!-- PESAN SUCCESS -->
        @if(session('success'))

            <div class="alert">
                {{ session('success') }}
            </div>

        @endif


        <!-- DATA KONTAK -->
        @forelse($kontaks as $kontak)

            <div class="kontak-card">

                <h3>Informasi Kontak Sekolah</h3>


                <!-- ALAMAT -->
                <div class="kontak-item">

                    <strong>Alamat</strong>

                    <p>
                        {{ $kontak->alamat }}
                    </p>

                </div>


                <!-- TELEPON -->
                <div class="kontak-item">

                    <strong>Telepon</strong>

                    <p>
                        {{ $kontak->telepon ?? '-' }}
                    </p>

                </div>


                <!-- EMAIL -->
                <div class="kontak-item">

                    <strong>Email</strong>

                    <p>
                        {{ $kontak->email ?? '-' }}
                    </p>

                </div>


                <!-- INSTAGRAM -->
                <div class="kontak-item">

                    <strong>Instagram</strong>

                    <p>

                        @if($kontak->website)

                            <a href="https://www.instagram.com/smkn1cijatiofficial/"
                               target="_blank">

                                @smkn1cijatiofficial

                            </a>

                        @else

                            -

                        @endif

                    </p>

                </div>


                <!-- AKSI -->
                <div class="aksi">

                    <a href="{{ route('admin.kontak.edit', $kontak->id) }}"
                       class="btn btn-edit">
                        Edit
                    </a>


                    <form
                        action="{{ route('admin.kontak.destroy', $kontak->id) }}"
                        method="POST"
                    >

                        @csrf
                        @method('DELETE')

                        <button
                            type="submit"
                            class="btn btn-hapus"
                            onclick="return confirm('Yakin ingin menghapus kontak ini?')"
                        >
                            Hapus
                        </button>

                    </form>

                </div>

            </div>

        @empty

            <div class="kosong">
                Belum ada data kontak.
            </div>

        @endforelse

    </div>

</body>
</html>