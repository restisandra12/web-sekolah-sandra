<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'SMKN 1 Cijati')</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f5f7fa;
        }

        nav {
            background: #0d6efd;
            padding: 10px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        nav .logo {
            color: white;
            font-size: 22px;
            font-weight: bold;
            display: flex;
            align-items: center;
        }

        nav .logo img {
            width: 45px;
            height: 45px;
            object-fit: contain;
            margin-right: 10px;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin-left: 20px;
        }

        nav a:hover {
            text-decoration: underline;
        }

        main {
            min-height: 80vh;
        }

        footer {
            background: #0d6efd;
            color: white;
            text-align: center;
            padding: 20px;
        }
    </style>
</head>

<body>

    <nav>

        <!-- LOGO DAN NAMA SEKOLAH -->
        <div class="logo">
            <img src="{{ asset('images/logo.png') }}" alt="Logo SMK Negeri 1 Cijati">
            <span>SMK Negeri 1 Cijati</span>
        </div>

        <!-- MENU NAVBAR -->
        <div>
            <a href="/">Beranda</a>
            <a href="/profil">Profil</a>
            <a href="/jurusan">Jurusan</a>
            <a href="/ekstrakurikuler">Ekstrakurikuler</a>
            <a href="/galeri">Galeri</a>
            <a href="/guru">Guru</a>
            <a href="/kontak">Kontak</a>
            <a href="/informasi">Informasi</a>
        </div>

    </nav>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>© {{ date('Y') }} SMKN 1 Cijati</p>
    </footer>

</body>
</html>