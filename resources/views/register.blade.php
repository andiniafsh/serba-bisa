<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap');

        body {
            background: linear-gradient(to bottom right, #32D583, #CCEE99);
            height: 100vh;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: 'Poppins', sans-serif;
            padding: 10px;
            box-sizing: border-box;
        }

        .login-box {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 470px;
            text-align: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .login-box input[type="text"],
        .login-box input[type="password"] {
            width: 100%;
            max-width: 400px;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #039855;
            border-radius: 5px;
            box-sizing: border-box;
        }

        .login-box button {
            width: 100%;
            max-width: 400px;
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
            font-weight: 600;
            margin-bottom: 30px;
            font-size: 24px;
        }

        .register-link p {
            font-size: 12px;
            margin: 10px 0;
        }

        .register-link a {
            font-size: 12px;
            color: #039855;
            text-decoration: none;
        }

        .register-link a:hover {
            text-decoration: underline;
        }

        @media (max-width: 768px) {
            .login-box {
                padding: 15px;
            }

            .login-box h1 {
                margin-bottom: 20px;
                font-size: 22px;
            }

            .login-box button {
                margin-top: 15px;
                font-size: 14px;
            }
        }

        @media (max-width: 480px) {
            body {
                padding: 5px;
            }

            .login-box {
                padding: 10px;
            }

            .login-box h1 {
                margin-bottom: 15px;
                font-size: 20px;
            }

            .login-box input[type="text"],
            .login-box input[type="password"] {
                padding: 8px;
                font-size: 14px;
            }

            .login-box button {
                padding: 8px;
                font-size: 14px;
                margin-top: 10px;
            }

            .register-link p,
            .register-link a {
                font-size: 10px;
            }
        }
    </style>
</head>

<body>
    <div class="login-box">
        <h1>Daftar</h1>
        <form id="registerForm">
            <input type="text" id="username" placeholder="Nama Pengguna" required>
            <input type="password" id="password" placeholder="Kata Sandi" required>
            <input type="password" id="confirm-password" placeholder="Konfirmasi Kata Sandi" required>
            <button type="submit">Buat akun</button>
        </form>
        <div class="register-link">
            <p>Sudah Mempunyai akun? <a href="#">Masuk</a></p>
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

        document.getElementById('registerForm').addEventListener('submit', function(event) {
            event.preventDefault();
            const username = document.getElementById('username').value;
            const password = document.getElementById('password').value;
            const confirmPassword = document.getElementById('confirm-password').value;

            if (password !== confirmPassword) {
                alert("Password tidak cocok");
                return;
            }

            fetch('/register', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({ username, password })
            })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        alert('Registrasi berhasil');
                    } else {
                        alert('Registrasi gagal: ' + data.message);
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                });
        });
    </script>
</body>

</html>