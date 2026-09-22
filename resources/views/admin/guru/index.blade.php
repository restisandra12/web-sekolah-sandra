<!DOCTYPE html>  <html lang="id">  
<head>  
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  <title>Data Guru - Admin SMKN 1 Cijati</title>  

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
        margin-bottom: 25px;  
    }  

    .header h1 {  
        margin-top: 0;  
        color: #0d6efd;  
    }  

    .btn-tambah {  
        display: inline-block;  
        background: #0d6efd;  
        color: white;  
        padding: 10px 16px;  
        border-radius: 6px;  
        text-decoration: none;  
        font-weight: bold;  
    }  

    .btn-tambah:hover {  
        background: #0b5ed7;  
    }  

    .success {  
        background: #d1e7dd;  
        color: #0f5132;  
        padding: 12px;  
        border-radius: 6px;  
        margin-bottom: 20px;  
    }  

    table {  
        width: 100%;  
        border-collapse: collapse;  
        background: white;  
        box-shadow: 0 4px 12px rgba(0,0,0,0.1);  
        border-radius: 12px;  
        overflow: hidden;  
    }  

    th {  
        background: #0d6efd;  
        color: white;  
        padding: 14px;  
        text-align: left;  
    }  

    td {  
        padding: 14px;  
        border-bottom: 1px solid #ddd;  
    }  

    tr:hover {  
        background: #f8f9fa;  
    }  

    .btn-edit {  
        background: #ffc107;  
        color: black;  
        padding: 7px 12px;  
        border-radius: 5px;  
        text-decoration: none;  
        margin-right: 5px;  
    }  

    .btn-hapus {  
        background: #dc3545;  
        color: white;  
        border: none;  
        padding: 7px 12px;  
        border-radius: 5px;  
        cursor: pointer;  
    }  

    .kembali {  
        display: inline-block;  
        margin-bottom: 20px;  
        color: #0d6efd;  
        text-decoration: none;  
    }  

    @media (max-width: 768px) {  
        table {  
            font-size: 14px;  
        }  

        th, td {  
            padding: 8px;  
        }  
    }  
</style>

</head>  <body>  <div class="navbar">  
    <h2>Admin SMKN 1 Cijati</h2>  
</div>  

<div class="container">  

    <a href="{{ route('admin.dashboard') }}" class="kembali">  
        ← Kembali ke Dashboard  
    </a>  

    <div class="header">  
        <h1>Data Guru</h1>  

        <p>  
            Kelola data guru SMKN 1 Cijati.  
        </p>  

        <a href="{{ route('admin.guru.create') }}" class="btn-tambah">  
            + Tambah Guru  
        </a>  
    </div>  

    @if(session('success'))  
        <div class="success">  
            {{ session('success') }}  
        </div>  
    @endif  

    <table>  

        <thead>  
            <tr>  
                <th>No</th>  
                <th>Nama Guru</th>  
                <th>Jabatan</th>  
                <th>Aksi</th>  
            </tr>  
        </thead>  

        <tbody>  

            @forelse($gurus as $guru)  

                <tr>  
                    <td>{{ $loop->iteration }}</td>  

                    <td>  
                        {{ $guru->nama }}  
                    </td>  

                    <td>  
                        {{ $guru->jabatan ?? '-' }}  
                    </td>  

                    <td>  

                        <a href="{{ route('admin.guru.edit', $guru->id) }}"  
                           class="btn-edit">  
                            Edit  
                        </a>  

                        <form action="{{ route('admin.guru.destroy', $guru->id) }}"  
                              method="POST"  
                              style="display:inline;">  

                            @csrf  
                            @method('DELETE')  

                            <button type="submit"  
                                    class="btn-hapus"  
                                    onclick="return confirm('Yakin ingin menghapus data guru ini?')">  
                                Hapus  
                            </button>  

                        </form>  

                    </td>  
                </tr>  

            @empty  

                <tr>  
                    <td colspan="4" style="text-align:center;">  
                        Belum ada data guru.  
                    </td>  
                </tr>  

            @endforelse  

        </tbody>  

    </table>  

</div>

</body>  
</html>  