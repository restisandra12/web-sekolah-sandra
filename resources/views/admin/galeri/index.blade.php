<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Kelola Galeri - SMK Negeri 1 Cijati</title>

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

        /* CONTAINER */
        .container {
            width: 92%;
            max-width: 1200px;
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

        /* TOMBOL */
        .btn {
            display: inline-block;
            padding: 10px 16px;
            border-radius: 6px;
            text-decoration: none;
            border: none;
            cursor: pointer;
            font-size: 14px;
            transition: 0.2s;
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
        }

        .btn-edit:hover {
            background-color: #e0a800;
        }

        .btn-hapus {
            background-color: #dc3545;
            color: white;
        }

        .btn-hapus:hover {
            background-color: #bb2d3b;
        }

        /* PESAN SUCCESS */
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
            text-align: center;
            width: 60px;
        }

        .judul {
            font-weight: bold;
            width: 200px;
        }

        .gambar {
            text-align: center;
            width: 160px;
        }

        .gambar img {
            width: 120px;
            height: 90px;
            object-fit: cover;
            border-radius: 8px;
        }

        .deskripsi {
            line-height: 1.6;
        }

        .aksi {
            text-align: center;
            width: 170px;
        }

        .aksi form {
            display: inline;
        }

        .aksi .btn {
            padding: 7px 11px;
            margin: 2px;
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

            .header {
                align-items: flex-start;
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

        <a href="{{ route('admin.dashboard') }}" class="btn btn-dashboard">
            ← Kembali ke Dashboard
        </a>

    </div>


    <!-- ISI HALAMAN -->
    <div class="container">

        <div class="header">

            <h1>Kelola Galeri</h1>

            <a href="{{ route('admin.galeri.create') }}"
               class="btn btn-tambah">
                + Tambah Galeri
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
                        <th class="gambar">Gambar</th>
                        <th>Deskripsi</th>
                        <th class="aksi">Aksi</th>
                    </tr>
                </thead>


                <tbody>

                    @forelse($galeris as $galeri)

                        <tr>

                            <td class="nomor">
                                {{ $loop->iteration }}
                            </td>


                            <td class="judul">
                                {{ $galeri->judul }}
                            </td>


                            <td class="gambar">

                                @if($galeri->gambar)

                                    <img
                                        src="{{ asset('images/' . $galeri->gambar) }}"
                                        alt="{{ $galeri->judul }}"
                                    >

                                @else

                                    Tidak ada gambar

                                @endif

                            </td>


                            <td class="deskripsi">
                                {{ $galeri->deskripsi }}
                            </td>


                            <td class="aksi">

                                <a href="{{ route('admin.galeri.edit', $galeri->id) }}"
                                   class="btn btn-edit">
                                    Edit
                                </a>


                                <form
                                    action="{{ route('admin.galeri.destroy', $galeri->id) }}"
                                    method="POST"
                                >

                                    @csrf
                                    @method('DELETE')

                                    <button
                                        type="submit"
                                        class="btn btn-hapus"
                                        onclick="return confirm('Yakin ingin menghapus galeri ini?')"
                                    >
                                        Hapus
                                    </button>

                                </form>

                            </td>

                        </tr>


                    @empty

                        <tr>

                            <td colspan="5"
                                style="text-align:center; padding:30px;">

                                Belum ada data galeri.

                            </td>

                        </tr>

                    @endforelse

                </tbody>

            </table>

        </div>

    </div>

</body>
</html>