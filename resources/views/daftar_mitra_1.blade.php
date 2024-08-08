<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mitra 1</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="daftar-mitra1.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card p-4">
                    <h2 class="text-center mb-4">Daftar Mitra</h2>
                    <div class="progress mb-4">
                        <div class="progress-bar" role="progressbar" style="width: 25%; background-color: #008000;"></div>
                    </div>

                    <form>

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

                        <hr>

                        <h5 class="mb-3">Pilih Jenis Pekerjaan</h5>

                        <div class="btn-group-toggle mb-4" data-toggle="buttons">

                            <label class="btn btn-outline-secondary">
                                <i class='bx bx-hard-hat' ></i>
                                <input type="radio" name="jenisPekerjaan" autocomplete="off">
                                Pekerja Kasar
                            </label>

                            <label class="btn btn-outline-secondary">
                                <i class='bx bx-chalkboard'></i>
                                <input type="radio" name="jenisPekerjaan" autocomplete="off"> 
                                Teman Belajar
                            </label>

                            <label class="btn btn-outline-secondary">
                                <i class='bx bx-code-alt' ></i>
                                <input type="radio" name="jenisPekerjaan" autocomplete="off"> 
                                Tenaga Ahli
                            </label>

                        </div>
                        
                        {{-- <div class="d-grid gap-2 d-md-block">
                            <button class="btn btn-light" type="button">Button</button>
                            <button class="btn btn-success" type="button">Button</button>
                        </div> --}}
                        {{-- <button type="submit" class="btn btn-success btn-block">Lanjutkan</button>
                        <button type="button" class="btn btn-light btn-block mt-2">
                            <span>&larr;</span> 
                        </button> --}}

                        <div class="d-grid gap-2 d-md-block">
                            <button type="button" class="btn btn-light">
                                <span>&larr;</span> 
                            </button>
                            <button type="submit" class="btn btn-success ">Lanjutkan</button>
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
</body>
</html>
