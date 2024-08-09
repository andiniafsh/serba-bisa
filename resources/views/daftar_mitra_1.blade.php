<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mitra 1</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap');

        body {
            font-family: 'Poppins';
        }

        .card {
            width: 500px;
            height: 600px;
            border-radius: 5px;
            box-shadow: 0 2px 3px rgba(0, 0, 0, 0.1);
        }

        h3 {
            color: #039855;
            font-weight: 600;
        }

        .progress {
            height: 6px;
            border-radius: 5px;
            display: flex;
            justify-content: space-between;
            gap: 5px;
            background-color: transparent;
        }

        .progress-bar {
            height: 6px;
            border-radius: 5px;
            background-color: #008000;
            flex: 1;
        }

        .progress-bar.orange,
        .progress-bar.red {
            background-color: #D9D9D9;
        }

        .form-control {
            border: 1px solid #039855;
            font-size: 14px;
            font-weight: 500;
            padding: 20px;
        }

        .form-group label {
            font-size: 14px;
            font-weight: 600;
        }

        .form-divider {
        border: 0;
        height: 2px;
        background-color: #D9D9D9;
        border-radius: 5px; 
        margin: 10px 0;
        }

        h5 {
            font-size: 16px;
            font-weight: 600;
        }

        .btn-group-toggle {
            margin-bottom: 20px; 
        }

        .btn-group-toggle .btn {
            padding: 5px 10px; 
            font-size: 14px; 
            font-family: 'Poppins';
            font-weight: 600;
            border-color: #D9D9D9; 
            background-color: #D9D9D9; 
            color: black; 
        }

         .btn-group-toggle .btn.active {
            background-color: #B0B0B0; 
        }

        .btn-group-toggle .btn i {
            font-size: 14px; 
        }

        .btn-light span {
            font-size: 18px;
        }

        .btn-group {
            display: flex;
            align-items: center;
            margin-top: auto;
            border-radius: 5px;  
        }

        .btn-light {
            flex: 0 0 auto;
            margin-right: 10px;
            background-color: #D9D9D9;
            color: black;
            border-radius: 5px;
        }

        .btn-success {
            border-radius: 5px;
            flex: 1;
            width: 100%;
        }

        @media (min-width: 768px) {
            .img-fluid {
                max-width: 100%;
                height: max-content;
                margin-top: 60px;
            }
        }

    </style>
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card p-4 d-flex flex-column">
                    <h3 class="text-center mb-4">Daftar Mitra</h3>
                    <div class="progress mb-4">
                        <div class="progress-bar"></div>
                        <div class="progress-bar orange"></div>
                        <div class="progress-bar red"></div>
                    </div>

                    <form class="d-flex flex-column flex-grow-1">
                        <div class="form-group">
                            <label for="namaLengkap">Nama Lengkap</label>
                            <input type="text" class="form-control" id="namaLengkap" placeholder="Masukkan Nama Lengkap Anda">
                        </div>

                        <div class="form-group">
                            <label for="kataSandi">Kata Sandi</label>
                            <input type="password" class="form-control" id="kataSandi" placeholder="Masukkan Kata Sandi">
                        </div>

                        <div class="form-group">
                            <label for="alamatLengkap">Alamat Lengkap</label>
                            <input type="text" class="form-control" id="alamatLengkap" placeholder="Masukkan Alamat Lengkap Anda">
                        </div>

                        <hr class="form-divider">

                        <h5>Pilih Jenis Pekerjaan</h5>

                        <div class="btn-group-toggle mb-4" data-toggle="buttons">
                            <label class="btn btn-outline-secondary">
                                <i class='bx bx-hard-hat'></i>
                                <input type="radio" name="jenisPekerjaan" autocomplete="off">
                                Pekerja Kasar
                            </label>

                            <label class="btn btn-outline-secondary">
                                <i class='bx bx-chalkboard'></i>
                                <input type="radio" name="jenisPekerjaan" autocomplete="off">
                                Teman Belajar
                            </label>

                            <label class="btn btn-outline-secondary">
                                <i class='bx bx-code-alt'></i>
                                <input type="radio" name="jenisPekerjaan" autocomplete="off">
                                Tenaga Ahli
                            </label>
                        </div>

                        <div class="btn-group mt-auto">
                            <button type="button" class="btn btn-light">
                                <span>&larr;</span>
                            </button>
                            <button type="submit" class="btn btn-success">Lanjutkan</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-6 d-none d-md-block">
                <img src="img/Foto-Daftar-Mitra.png" alt="Illustration" class="img-fluid">
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>

        document.addEventListener('DOMContentLoaded', function () {
            var inputs = document.querySelectorAll('input.form-control');

            inputs.forEach(function(input) {
                var placeholder = input.getAttribute('placeholder');
                input.addEventListener('focus', function() {
                    input.setAttribute('placeholder', '');
                });
                input.addEventListener('blur', function() {
                    if (input.value === '') {
                        input.setAttribute('placeholder', placeholder);
                    }
                });
            });
        });
    </script>
</body>

</html>
