<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Tambah Kontak - SMK Negeri 1 Cijati</title>

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
            width: 90%;
            max-width: 800px;
            margin: 45px auto;
        }

        /* HEADER */
        .header {
            text-align: center;
            margin-bottom: 30px;
        }

        .header h1 {
            margin: 0 0 8px 0;
            color: #173b67;
            font-size: 32px;
        }

        .header p {
            margin: 0;
            color: #666;
        }

        /* CARD */
        .form-card {
            background-color: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }

        /* FORM */
        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            font-weight: bold;
            color: #173b67;
            margin-bottom: 8px;
            font-size: 16px;
        }

        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 15px;
            font-family: Arial, sans-serif;
        }

        .form-group textarea {
            resize: vertical;
        }

        .form-group input:focus,
        .form-group textarea:focus {
            outline: none;
            border-color: #0d6efd;
        }

        /* BUTTON */
        .button-group {
            margin-top: 25px;
            display: flex;
            gap: 10px;
        }

        .btn-simpan {
            background-color: #0d6efd;
            color: white;
            border: none;
            padding: 11px 22px;
            border-radius: 8px;
            cursor: pointer;
            font-size: 15px;
        }

        .btn-simpan:hover {
            background-color: #0b5ed7;
        }

        .btn-kembali {
            background-color: #6c757d;
            color: white;
            text-decoration: none;
            padding: 11px 22px;
            border-radius: 8px;
            font-size: 15px;
        }

        .btn-kembali:hover {
            background-color: #5c636a;
        }

        /* RESPONSIVE */
        @media (max-width: 768px) {

            .navbar {
                padding: 15px 20px;
            }

            .navbar h2 {
                font-size: 18px;
            }

            .container {
                width: 95%;
            }

            .header h1 {
                font-size: 26px;
            }

            .form-card {
                padding: 22px;
            }

            .button-group {
                flex-wrap: wrap;
            }
        }
    </style>
</head>

<body>

    <!-- NAVBAR -->
    <div class="navbar">

        <h2>Admin - SMK Negeri 1 Cijati</h2>

    </div>


    <!-- ISI -->
    <div class="container">

        <div class="header">

            <h1>Tambah Kontak</h1>

            <p>Tambahkan informasi kontak sekolah</p>

        </div>


        <!-- FORM CARD -->
        <div class="form-card">

            <form action="{{ route('admin.kontak.store') }}" method="POST">

                @csrf


                <!-- ALAMAT -->
                <div class="form-group">

                    <label>Alamat</label>

                    <textarea
                        name="alamat"
                        rows="4"
                        required
                    >{{ old('alamat') }}</textarea>

                </div>


                <!-- TELEPON -->
                <div class="form-group">

                    <label>Telepon</label>

                    <input
                        type="text"
                        name="telepon"
                        value="{{ old('telepon') }}"
                    >

                </div>


                <!-- EMAIL -->
                <div class="form-group">

                    <label>Email</label>

                    <input
                        type="email"
                        name="email"
                        value="{{ old('email') }}"
                    >

                </div>


                <!-- INSTAGRAM -->
                <div class="form-group">

                    <label>Instagram</label>

                    <input
                        type="text"
                        name="website"
                        value="{{ old('website') }}"
                        placeholder="@smkn1cijatiofficial"
                    >

                </div>


                <!-- BUTTON -->
                <div class="button-group">

                    <button type="submit" class="btn-simpan">
                        Simpan
                    </button>

                    <a
                        href="{{ route('admin.kontak.index') }}"
                        class="btn-kembali"
                    >
                        Kembali
                    </a>

                </div>

            </form>

        </div>

    </div>

</body>
</html>