<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Dashboard Admin - SMKN 1 Cijati</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f5f6fa;
        }

        /* NAVBAR */
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

        .logout {
            background: white;
            color: #0d6efd;
            border: none;
            padding: 9px 15px;
            border-radius: 6px;
            cursor: pointer;
            font-weight: bold;
        }

        .logout:hover {
            background: #e9ecef;
        }

        /* CONTAINER */
        .container {
            width: 90%;
            max-width: 1100px;
            margin: 40px auto;
        }

        /* WELCOME */
        .welcome {
            background: white;
            padding: 30px;
            border-radius: 12px;

            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }

        .welcome h1 {
            margin-top: 0;
            color: #0d6efd;
        }

        .welcome p {
            color: #555;
            font-size: 16px;
        }

        /* MENU */
        .menu {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            margin-top: 25px;
        }

        /* CARD LINK */
        .card-link {
            text-decoration: none;
            color: inherit;
            display: block;
        }

        /* CARD */
        .card {
            background: white;
            padding: 25px;
            border-radius: 12px;
            text-align: center;

            box-shadow: 0 4px 12px rgba(0,0,0,0.1);

            transition: 0.2s;
            height: 100%;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 16px rgba(0,0,0,0.15);
        }

        .card .icon {
            font-size: 40px;
            margin-bottom: 10px;
        }

        .card h3 {
            color: #333;
            margin: 10px 0;
        }

        .card p {
            color: #555;
            margin-bottom: 0;
        }

        /* RESPONSIVE */
        @media (max-width: 768px) {

            .menu {
                grid-template-columns: 1fr;
            }

            .navbar {
                padding: 15px 20px;
            }

            .navbar h2 {
                font-size: 18px;
            }

            .container {
                width: 92%;
            }
        }
    </style>
</head>

<body>

    {{-- NAVBAR --}}
    <div class="navbar">

        <h2>
            Admin SMKN 1 Cijati
        </h2>

        <form action="{{ route('logout') }}" method="POST">
            @csrf

            <button type="submit" class="logout">
                Logout
            </button>
        </form>

    </div>


    {{-- CONTENT --}}
    <div class="container">

        {{-- WELCOME --}}
        <div class="welcome">

            <h1>
                Dashboard Admin
            </h1>

            <p>
                Selamat datang,
                <strong>{{ Auth::user()->name }}</strong>!
            </p>

            <p>
                Silakan kelola data website SMKN 1 Cijati melalui dashboard ini.
            </p>

        </div>


        {{-- MENU --}}
        <div class="menu">


            {{-- DATA GURU --}}
            <a href="{{ route('admin.guru.index') }}" class="card-link">

                <div class="card">

                    <div class="icon">
                        👨‍🏫
                    </div>

                    <h3>
                        Data Guru
                    </h3>

                    <p>
                        Kelola data guru.
                    </p>

                </div>

            </a>


            {{-- DATA SEKOLAH --}}
            <a href="{{ route('admin.data-sekolah.index') }}" class="card-link">

                <div class="card">

                    <div class="icon">
                        🏫
                    </div>

                    <h3>
                        Data Sekolah
                    </h3>

                    <p>
                        Kelola jumlah siswa.
                    </p>

                </div>

            </a>


            {{-- DATA JURUSAN --}}
            <a href="{{ route('admin.jurusan.index') }}" class="card-link">

                <div class="card">

                    <div class="icon">
                        🎓
                    </div>

                    <h3>
                        Data Jurusan
                    </h3>

                    <p>
                        Kelola data jurusan.
                    </p>

                </div>

            </a>


            {{-- EKSTRAKURIKULER --}}
            <a href="/admin/ekstrakurikuler" class="card-link">

                <div class="card">

                    <div class="icon">
                        🏆
                    </div>

                    <h3>
                        Ekstrakurikuler
                    </h3>

                    <p>
                        Kelola data ekstrakurikuler.
                    </p>

                </div>

            </a>


            {{-- GALERI --}}
            <a href="/admin/galeri" class="card-link">

                <div class="card">

                    <div class="icon">
                        🖼️
                    </div>

                    <h3>
                        Galeri
                    </h3>

                    <p>
                        Kelola galeri sekolah.
                    </p>

                </div>

            </a>


            {{-- INFORMASI --}}
            <a href="/admin/informasi" class="card-link">

                <div class="card">

                    <div class="icon">
                        📰
                    </div>

                    <h3>
                        Informasi
                    </h3>

                    <p>
                        Kelola informasi dan kegiatan.
                    </p>

                </div>

            </a>


            {{-- KONTAK --}}
            <a href="{{ route('admin.kontak.index') }}" class="card-link">

                <div class="card">

                    <div class="icon">
                        📞
                    </div>

                    <h3>
                        Kontak
                    </h3>

                    <p>
                        Kelola informasi kontak.
                    </p>

                </div>

            </a>


            {{-- PROFIL --}}
            <a href="{{ route('admin.profil.index') }}" class="card-link">

                <div class="card">

                    <div class="icon">
                        🏫
                    </div>

                    <h3>
                        Profil
                    </h3>

                    <p>
                        Kelola profil sekolah.
                    </p>

                </div>

            </a>


        </div>

    </div>

</body>
</html>