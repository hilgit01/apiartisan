<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: url('{{ asset("assets/img/image.png") }}') no-repeat center center/cover;
        }

        h1 {
            font-weight: 700;
            font-size: 35px;
            color: rgb(255, 255, 255); /* Warna teks putih */
            margin-bottom: 35px;
            text-align: center;
            text-shadow: 2px 2px 4px #2d3a4b; /* Shadow hitam */
            /* -webkit-text-stroke: 2px rgb(41, 55, 184); */
        }

        .container {
            background: rgba(255, 255, 255, 0.9);
            padding: 30px;
            border-radius: 15px;
            box-shadow: 10px 10px 30px rgba(0, 0, 0, 0.3);
            width: 500px;
            text-align: center;
            position: relative; /* Ini yang memastikan back-icon tetap di dalam container */
        }

        .back-icon {
            position: absolute;
            top: 10px;
            left: 10px;
            font-size: 35px;
            text-decoration: none;
            color:  #2d3a4b;
            padding: 6px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 30px;
            height: 30px;
        }

        .back-icon:hover {
            background: rgb(211, 220, 231);
        }

        .container h2 {
            font-weight: 700;
            color: #2d3a4b;
            margin-bottom: 20px;
        }

        .input-group {
            text-align: left;
            margin-bottom: 15px;
        }

        .input-group label {
            display: block;
            font-size: 14px;
            color: #2d3a4b;
            margin-bottom: 5px;
        }

        .input-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
        }

        .remember {
            display: flex;
            align-items: center;
            font-size: 14px;
            color: #2d3a4b;
            margin-bottom: 15px;
        }

        .remember input {
            margin-right: 5px;
        }

        .btn {
            width: 100%;
            padding: 10px;
            background: #007bff;
            border: none;
            border-radius: 5px;
            color: white;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: 0.3s;
        }

        .btn:hover {
            background: #0056b3;
        }

        .register-link {
            font-size: 14px;
            color: #2d3a4b;
            text-align: center;
            margin-top: 10px;
        }

        .register-link a {
            color: #007bff;
            text-decoration: none;
        }

        .register-link a:hover {
            text-decoration: underline;
        }

        /* Media Queries for Responsive Design */
        @media (max-width: 768px) {
            .container {
                width: 90%;
                padding: 20px;
            }

            h1 {
                width: 70%;
                font-size: 26px;
                /* -webkit-text-stroke: 1px rgb(12, 15, 13); */
            }

            .container h2, .input-group label, .input-group input, .btn {
                font-size: 12px;
            }

            .btn {
                padding: 8px;
                font-size: 14px;
            }

            .container h2 {
                font-size: 20px;
            }

            .register-link {
                font-size: 12px;
            }

            .back-icon {
                font-size: 20px;
                width: 25px;
                height: 25px;
                padding: 6px;
            }
        }

        @media (max-width: 480px) {
            .container {
                width: 70%;
                padding: 15px;
            }

            h1 {
                font-size: 20px;
                width: 70%;
            }

            .container h2, .input-group label, .input-group input, .btn {
                font-size: 10px;
            }

            .btn {
                padding: 6px;
                font-size: 12px;
            }

            .container h2 {
                font-size: 18px;
            }

            .register-link {
                font-size: 10px;
            }

            .back-icon {
                font-size: 18px;
                width: 22px;
                height: 22px;
                padding: 5px;
            }
        }

    </style>
</head>
<body>

    <h1>SELAMAT DATANG DI SAGARA TUNGKAL</h1>
    <div class="container">
    <a href="{{ route('index') }}" class="back-icon">&times;</a>
        <h2>Masuk</h2>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="input-group">
                <label for="username">Nama Pengguna</label>
                <input type="text" id="username" name="username" placeholder="Masukkan Nama Pengguna Anda" required>
            </div>
            <div class="input-group">
                <label for="password">Kata Sandi</label>
                <input type="password" id="password" name="password" placeholder="Masukkan Kata Sandi Anda" required>
            </div>

            <button type="submit" class="btn">Masuk</button>
            <p class="register-link">Belum punya akun? <a href="{{ route('register') }}">Daftar di sini</a></p>
        </form>
    </div>

</body>
</html>
