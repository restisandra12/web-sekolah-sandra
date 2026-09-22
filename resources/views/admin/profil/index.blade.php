<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Kelola Profil</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f4f7fb;
            color: #333;
        }

        .navbar {
            background: #0d6efd;
            color: white;
            padding: 20px 40px;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.15);
        }

        .navbar h2 {
            margin: 0;
            font-size: 24px;
        }

        .admin-profil-container {
            width: 90%;
            max-width: 1100px;
            margin: 40px auto;
        }

        .admin-profil-header {
            background: white;
            padding: 25px 30px;
            border-radius: 12px;
            margin-bottom: 25px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);

            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .admin-profil-header h2 {
            margin: 0;
            color: #0d6efd;
        }

        .btn-kembali {
            background: #6c757d;
            color: white;
            text-decoration: none;
            padding: 10px 18px;
            border-radius: 6px;
            font-weight: bold;
            transition: 0.3s;
        }

        .btn-kembali:hover {
            background: #5c636a;
        }

        .profil-card-admin {
            background: white;
            padding: 30px;
            border-radius: 12px;
            margin-bottom: 25px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        .profil-card-admin h3 {
            color: #0d6efd;
            margin-top: 0;
            margin-bottom: 15px;
        }

        .profil-card-admin p {
            color: #555;
            line-height: 1.8;
            font-size: 16px;
            margin-bottom: 10px;
        }

        .profil-card-admin ol {
            color: #555;
            line-height: 1.8;
            padding-left: 25px;
        }

        .profil-card-admin li {
            margin-bottom: 8px;
        }

        .btn-edit {
            display: inline-block;
            margin-top: 10px;
            background: #0d6efd;
            color: white;
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 6px;
            font-weight: bold;
            transition: 0.3s;
        }

        .btn-edit:hover {
            background: #0b5ed7;
        }

        .alert-success {
            background: #d1e7dd;
            color: #0f5132;
            padding: 12px 15px;
            border-radius: 8px;
            margin-bottom: 20px;
        }

        .alert-warning {
            background: #fff3cd;
            color: #664d03;
            padding: 15px;
            border-radius: 8px;
        }

        @media (max-width: 768px) {
            .navbar {
                padding: 18px 20px;
            }

            .navbar h2 {
                font-size: 20px;
            }

            .admin-profil-header {
                flex-direction: column;
                align-items: flex-start;
                gap: 15px;
            }

            .admin-profil-container {
                width: 92%;
            }
        }
    </style>
</head>

<body>

    <div class="navbar">
        <h2>Admin SMKN 1 Cijati</h2>
    </div>

    <div class="admin-profil-container">

        {{-- HEADER --}}
        <div class="admin-profil-header">

            <h2>Kelola Profil</h2>

            <a href="{{ route('admin.dashboard') }}" class="btn-kembali">
                Kembali
            </a>

        </div>

        {{-- PESAN BERHASIL --}}
        @if(session('success'))
            <div class="alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if($profil)

            {{-- TENTANG SEKOLAH --}}
            <div class="profil-card-admin">

                <h3>Tentang Sekolah</h3>

                <p>
                    {{ $profil->tentang_sekolah }}
                </p>

            </div>

            {{-- VISI --}}
            <div class="profil-card-admin">

                <h3>Visi</h3>

                <p>
                    {{ $profil->visi }}
                </p>

            </div>

            {{-- MISI --}}
            <div class="profil-card-admin">

                <h3>Misi</h3>

                <ol>
                    @foreach(preg_split('/\r\n|\r|\n/', $profil->misi) as $item)

                        @if(trim($item) != '')

                            <li>
                                {{ trim($item) }}
                            </li>

                        @endif

                    @endforeach
                </ol>

            </div>

            {{-- TOMBOL EDIT --}}
            <a href="{{ route('admin.profil.edit', $profil->id) }}"
               class="btn-edit">
                Edit Profil
            </a>

        @else

            <div class="profil-card-admin">

                <div class="alert-warning">
                    Data profil belum tersedia.
                </div>

            </div>

        @endif

    </div>

</body>
</html>