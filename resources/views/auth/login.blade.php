<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin - SMKN 1 Cijati</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
        }

        body {
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
            position: relative;
            overflow: hidden;

            background-image:
                linear-gradient(
                    rgba(0, 55, 150, 0.45),
                    rgba(0, 130, 210, 0.45)
                ),
                url("{{ asset('images/bgsekolah.jpeg') }}");

            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        body::before {
            content: "";
            position: absolute;
            width: 350px;
            height: 350px;
            border: 2px solid rgba(255, 255, 255, 0.18);
            border-radius: 50%;
            top: -170px;
            left: -100px;
        }

        body::after {
            content: "";
            position: absolute;
            width: 400px;
            height: 400px;
            border: 2px solid rgba(255, 255, 255, 0.18);
            border-radius: 50%;
            bottom: -250px;
            right: -100px;
        }

        .login-box {
            width: 100%;
            max-width: 490px;
            padding: 45px 48px;

            background: rgba(255, 255, 255, 0.25);
            border: 1px solid rgba(255, 255, 255, 0.45);
            border-radius: 25px;

            box-shadow:
                0 20px 60px rgba(0, 0, 0, 0.3),
                inset 0 0 25px rgba(255, 255, 255, 0.08);

            position: relative;
            z-index: 2;

            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
        }

        .logo {
            width: 105px;
            height: 105px;
            object-fit: contain;
            display: block;
            margin: 0 auto 20px;

            filter:
                drop-shadow(0 0 5px rgba(255, 255, 255, 0.9))
                drop-shadow(0 0 12px rgba(0, 180, 255, 0.9))
                drop-shadow(0 0 25px rgba(0, 150, 255, 0.7));

            animation: logoGlow 2s ease-in-out infinite alternate;
        }

        @keyframes logoGlow {
            from {
                filter:
                    drop-shadow(0 0 5px rgba(255, 255, 255, 0.8))
                    drop-shadow(0 0 12px rgba(0, 180, 255, 0.7))
                    drop-shadow(0 0 20px rgba(0, 150, 255, 0.5));
            }

            to {
                filter:
                    drop-shadow(0 0 10px rgba(255, 255, 255, 1))
                    drop-shadow(0 0 25px rgba(0, 200, 255, 1))
                    drop-shadow(0 0 40px rgba(0, 150, 255, 0.9));
            }
        }

        h1 {
            text-align: center;
            color: white;
            font-size: 32px;
            margin-bottom: 8px;
            text-shadow:
                0 0 5px rgba(255, 255, 255, 0.8),
                0 2px 5px rgba(0, 0, 0, 0.3);
        }

        .subtitle {
            text-align: center;
            color: rgba(255, 255, 255, 0.95);
            font-size: 16px;
            margin-bottom: 35px;
            text-shadow: 0 1px 3px rgba(0, 0, 0, 0.3);
        }

        .form-group {
            margin-bottom: 22px;
        }

        label {
            display: block;
            color: white;
            font-size: 15px;
            font-weight: bold;
            margin-bottom: 9px;
            text-shadow: 0 1px 3px rgba(0, 0, 0, 0.3);
        }

        input {
            width: 100%;
            padding: 15px 17px;
            border: 1px solid rgba(255, 255, 255, 0.65);
            border-radius: 10px;
            outline: none;
            font-size: 15px;
            background: rgba(255, 255, 255, 0.85);
            color: #333;
            transition: 0.3s;
        }

        input::placeholder {
            color: #777;
        }

        input:focus {
            border-color: white;
            background: white;
            box-shadow:
                0 0 0 3px rgba(255, 255, 255, 0.25),
                0 0 15px rgba(255, 255, 255, 0.3);
        }

        /* =========================
           PASSWORD TOGGLE
        ========================= */

        .password-wrapper {
            position: relative;
        }

        .password-wrapper input {
            padding-right: 50px;
        }

        .toggle-password {
            position: absolute;
            right: 17px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            font-size: 20px;
            color: #555;
            user-select: none;
            transition: 0.3s;
        }

        .toggle-password:hover {
            color: #168bd1;
        }

        .btn-login {
            width: 100%;
            border: none;
            padding: 15px;
            margin-top: 8px;
            border-radius: 10px;
            background: linear-gradient(135deg, #168bd1, #20a9df);
            color: white;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: 0.3s;
            box-shadow: 0 0 10px rgba(32, 169, 223, 0.4);
        }

        .btn-login:hover {
            transform: translateY(-2px);
            box-shadow:
                0 8px 20px rgba(22, 139, 209, 0.4),
                0 0 20px rgba(32, 169, 223, 0.7);
        }

        .back-link {
            display: block;
            text-align: center;
            margin-top: 25px;
            color: white;
            text-decoration: none;
            font-size: 15px;
            font-weight: bold;
            text-shadow: 0 1px 3px rgba(0, 0, 0, 0.3);
        }

        .back-link:hover {
            color: #e0f5ff;
            text-decoration: underline;
        }

        .alert {
            padding: 12px 15px;
            margin-bottom: 20px;
            border-radius: 8px;
            background: rgba(255, 220, 220, 0.9);
            color: #c0392b;
            font-size: 14px;
        }

        @media (max-width: 600px) {
            .login-box {
                padding: 35px 25px;
                max-width: 100%;
            }

            h1 {
                font-size: 27px;
            }

            .logo {
                width: 85px;
                height: 85px;
            }
        }
    </style>
</head>

<body>

    <div class="login-box">

        <img
            src="{{ asset('images/logo.jpeg') }}"
            alt="Logo SMKN 1 Cijati"
            class="logo"
        >

        <h1>Login Admin</h1>
        <p class="subtitle">SMKN 1 Cijati</p>

        @if ($errors->any())
            <div class="alert">
                {{ $errors->first() }}
            </div>
        @endif

        <form action="{{ url('/login') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="email">Email</label>
                <input
                    type="email"
                    id="email"
                    name="email"
                    placeholder="Masukkan email"
                    value="{{ old('email') }}"
                    required
                    autofocus
                >
            </div>

            <div class="form-group">
                <label for="password">Password</label>

                <div class="password-wrapper">
                    <input
                        type="password"
                        id="password"
                        name="password"
                        placeholder="Masukkan password"
                        required
                    >

                    <span
                        class="toggle-password"
                        onclick="togglePassword()"
                        title="Tampilkan password"
                    >👁️</span>
                </div>
            </div>

            <button type="submit" class="btn-login">
                Login
            </button>
        </form>

        <a href="{{ url('/') }}" class="back-link">
            ← Kembali ke Website
        </a>

    </div>

    <script>
        function togglePassword() {
            const password = document.getElementById('password');
            const toggle = document.querySelector('.toggle-password');

            if (password.type === 'password') {
                password.type = 'text';
                toggle.textContent = '🐣';
                toggle.title = 'Sembunyikan password';
            } else {
                password.type = 'password';
                toggle.textContent = '👁️';
                toggle.title = 'Tampilkan password';
            }
        }
    </script>

</body>
</html>