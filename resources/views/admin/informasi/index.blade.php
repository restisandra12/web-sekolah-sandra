<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Kelola Informasi - SMK Negeri 1 Cijati</title>

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

        /* TOMBOL KEMBALI */
        .btn-dashboard {
            display: inline-block;
            background-color: #6c757d;
            color: white;
            padding: 10px 16px;
            border-radius: 6px;
            text-decoration: none;
            font-size: 14px;
        }

        .btn-dashboard:hover {
            background-color: #5a6268;
        }

        /* CONTAINER */
        .container {
            width: 92%;
            max-width: 1250px;
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

        /* TOMBOL TAMBAH */
        .btn-tambah {
            display: inline-block;
            background-color: #198754;
            color: white;
            padding: 10px 16px;
            border-radius: 6px;
            text-decoration: none;
            font-size: 14px;
        }

        .btn-tambah:hover {
            background-color: #157347;
        }

        /* ALERT */
        .alert {
            background-color: #d1e7dd;
            color: #0f5132;
            padding: 12px 16px;
            border-radius: 7px;
            margin-bottom: 20px;
        }

        /* TABEL */
        .table-wrapper {
            background: white;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 3px 12px rgba(0,0,0,0.08);
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th {
            background-color: #0d6efd;
            color: white;
            padding: 14px 12px;
            text-align: center;
        }

        td {
            padding: 14px 12px;
            border-bottom: 1px solid #ddd;
            vertical-align: middle;
        }

        tr:hover {
            background-color: #f8f9fa;
        }

        .nomor {
            width: 55px;
            text-align: center;
        }

        .judul {
            width: 220px;
            font-weight: bold;
        }

        .isi {
            min-width: 300px;
            line-height: 1.5;
        }

        .foto {
            width: 130px;
            text-align: center;
        }

        .foto img {
            width: 100px;
            height: 70px;
            object-fit: cover;
            border-radius: 7px;
        }

        .tanggal {
            width: 120px;
            text-align: center;
        }

        .kategori {
            width: 130px;
            text-align: center;
        }

        .aksi {
            width: 150px;
            text-align: center;
        }

        /* TOMBOL AKSI */
        .btn-edit {
            display: inline-block;
            background-color: #ffc107;
            color: #212529;
            padding: 7px 11px;
            border-radius: 5px;
            text-decoration: none;
            margin: 2px;
        }

        .btn-edit:hover {
            background-color: #e0a800;
        }

        .btn-hapus {
            background-color: #dc3545;
            color: white;
            border: none;
            padding: 7px 11px;
            border-radius: 5px;
            cursor: pointer;
            margin: 2px;
        }

        .btn-hapus:hover {
            background-color: #bb2d3b;
        }

        .aksi form {
            display: inline;
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
        }
    </style>
</head>

<body>

    <!-- NAVBAR -->
    <div class="navbar">

        <h2>Admin - SMK Negeri 1 Cijati</h2>

        <a href="{{ route('admin.dashboard') }}" class="btn-dashboard">
            ← Kembali ke Dashboard
        </a>

    </div>


    <!-- ISI HALAMAN -->
    <div class="container">

        <div class="header">

            <h1>Kelola Informasi</h1>

            <a href="{{ route('admin.informasi.create') }}"
               class="btn-tambah">
                + Tambah Informasi
            </a>

        </div>


        <!-- PESAN SUCCESS -->
        @if(session('success'))

            <div class="alert">
                {{ session('success') }}
            </div>

        @endif


        <!-- TABEL -->
        <div class="table-wrapper">

            <table>

                <thead>
                    <tr>
                        <th class="nomor">No</th>
                        <th>Judul</th>
                        <th>Isi</th>
                        <th class="foto">Foto</th>
                        <th class="tanggal">Tanggal</th>
                        <th class="kategori">Kategori</th>
                        <th class="aksi">Aksi</th>
                    </tr>
                </thead>


                <tbody>

                    @forelse($informasis as $informasi)

                        <tr>

                            <td class="nomor">
                                {{ $loop->iteration }}
                            </td>


                            <td class="judul">
                                {{ $informasi->judul }}
                            </td>


                            <td class="isi">
                                {{ $informasi->isi }}
                            </td>


                            <td class="foto">

                                @if($informasi->foto)

                                    <img
                                        src="{{ asset('images/' . $informasi->foto) }}"
                                        alt="{{ $informasi->judul }}"
                                    >

                                @else

                                    Tidak ada foto

                                @endif

                            </td>


                            <td class="tanggal">
                                {{ $informasi->tanggal }}
                            </td>


                            <td class="kategori">
                                {{ $informasi->kategori ?? '-' }}
                            </td>


                            <td class="aksi">

                                <a href="{{ route('admin.informasi.edit', $informasi->id) }}"
                                   class="btn-edit">
                                    Edit
                                </a>


                                <form
                                    action="{{ route('admin.informasi.destroy', $informasi->id) }}"
                                    method="POST"
                                >

                                    @csrf
                                    @method('DELETE')

                                    <button
                                        type="submit"
                                        class="btn-hapus"
                                        onclick="return confirm('Yakin ingin menghapus informasi ini?')"
                                    >
                                        Hapus
                                    </button>

                                </form>

                            </td>

                        </tr>


                    @empty

                        <tr>

                            <td colspan="7"
                                style="text-align:center; padding:30px;">

                                Belum ada data informasi.

                            </td>

                        </tr>

                    @endforelse

                </tbody>

            </table>

        </div>

    </div>

</body>
</html>