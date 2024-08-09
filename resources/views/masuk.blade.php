<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masuk</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap');

        body {
            background: linear-gradient(to bottom right, #32D583, #CCEE99);
            height: 100vh;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: 'Poppins';
        }

        .login-box {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 470px;
            height: 450px;
            text-align: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            font-family: 'Poppins';
        }

        .login-box input[type="text"],
        .login-box input[type="password"] {
            width: 65%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #039855;
            border-radius: 5px;
            box-sizing: border-box;
        }

        .login-box button {
            width: 65%;
            padding: 10px;
            background-color: #039855;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            font-weight: 600;
            margin-top: 20px;
        }

        .login-box button:active {
            background-color: #027a43;
        }

        .login-box h1 {
            color: #039855;
            font-family: 'Poppins';
            font-weight: 600;
            margin-bottom: 40px;
        }

        .register-link p {
            font-size: 12px;
        }

        .register-link a {
            font-size: 12px;
        }
    </style>
</head>

<body>
    <div class="login-box">
        <h1>Masuk</h1>
        <form>
            <input type="text" id="username" placeholder="Nama Pengguna" required>
            <input type="password" id="password" placeholder="Kata Sandi" required>
            <button type="submit">Masuk</button>
        </form>
        <div class="register-link">
            <p>Tidak Memiliki akun? <a style="color: #039855" href="#">Daftar</a></p>
        </div>
    </div>

    <script>
        document.querySelectorAll('.login-box input').forEach(input => {
            input.addEventListener('focus', function() {
                this.setAttribute('data-placeholder', this.getAttribute('placeholder'));
                this.setAttribute('placeholder', '');
            });

            input.addEventListener('blur', function() {
                this.setAttribute('placeholder', this.getAttribute('data-placeholder'));
            });
        });
    </script>
</body>

</html>

