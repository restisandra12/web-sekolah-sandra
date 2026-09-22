<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Data Jurusan - Admin</title>

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
            max-width: 1100px;
            margin: 40px auto;
        }

        .header {
            background: white;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }

        .header h1 {
            margin-top: 0;
            color: #0d6efd;
        }

        .btn {
            display: inline-block;
            padding: 10px 16px;
            border-radius: 6px;
            text-decoration: none;
            color: white;
            border: none;
            cursor: pointer;
        }

        .btn-tambah {
            background: #198754;
        }

        .btn-edit {
            background: #ffc107;
            color: #000;
        }

        .btn-hapus {
            background: #dc3545;
        }

        table {
            width: 100%;
            margin-top: 25px;
            background: white;
            border-collapse: collapse;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
            border-radius: 10px;
            overflow: hidden;
        }

        th, td {
            padding: 15px;
            border-bottom: 1px solid #ddd;
            text-align: left;
        }

        th {
            background: #0d6efd;
            color: white;
        }

        .logo {
            width: 80px;
            height: 80px;
            object-fit: contain;
        }

        .aksi {
            display: flex;
            gap: 8px;
        }
    </style>
</head>

<body>

    <div class="navbar">
        <h2>Admin SMKN 1 Cijati</h2>

        <a href="{{ route('admin.dashboard') }}"
           class="btn"
           style="background:white; color:#0d6efd;">
            Dashboard
        </a>
    </div>


    <div class="container">

        <div class="header">

            <h1>Data Jurusan</h1>

            <p>Kelola data jurusan SMKN 1 Cijati.</p>

            <a href="{{ route('admin.jurusan.create') }}"
               class="btn btn-tambah">
                + Tambah Jurusan
            </a>

        </div>


        <table>

            <thead>
                <tr>
                    <th>No</th>
                    <th>Logo</th>
                    <th>Nama Jurusan</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>

                @forelse ($jurusans as $jurusan)

                    <tr>

                        <td>
                            {{ $loop->iteration }}
                        </td>

                        <td>
                            @if ($jurusan->logo)
                                <img
                                    src="{{ asset('images/' . $jurusan->logo) }}"
                                    class="logo"
                                    alt="{{ $jurusan->nama }}"
                                >
                            @else
                                Tidak ada logo
                            @endif
                        </td>

                        <td>
                            {{ $jurusan->nama }}
                        </td>

                        <td>

                            <div class="aksi">

                                <a href="{{ route('admin.jurusan.edit', $jurusan->id) }}"
                                   class="btn btn-edit">
                                    Edit
                                </a>

                                <form action="{{ route('admin.jurusan.destroy', $jurusan->id) }}"
                                      method="POST">

                                    @csrf
                                    @method('DELETE')

                                    <button type="submit"
                                            class="btn btn-hapus"
                                            onclick="return confirm('Yakin ingin menghapus jurusan ini?')">
                                        Hapus
                                    </button>

                                </form>

                            </div>

                        </td>

                    </tr>

                @empty

                    <tr>
                        <td colspan="4" style="text-align:center;">
                            Belum ada data jurusan.
                        </td>
                    </tr>

                @endforelse

            </tbody>

        </table>

    </div>

</body>
</html>