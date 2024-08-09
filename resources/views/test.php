<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mitra</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        .form-container {
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0,0,0,.1);
        }
        .illustration {
            background-image: url('path-to-your-illustration.jpg');
            background-size: cover;
            height: 200px; /* Adjust as needed */
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 mx-auto form-container">
                <h2>Daftar Mitra</h2>
                <form>
                    <div class="form-group">
                        <label for="namaLengkap">Nama Lengkap</label>
                        <input type="text" class="form-control" id="namaLengkap" placeholder="Masukkan Nama Lengkap Anda">
                    </div>
                    <div class="form-group">
                        <label for="kotaKab">Kota/Kab</label>
                        <input type="text" class="form-control" id="kotaKab" placeholder="Masukkan Kota/Kab Anda">
                    </div>
                    <div class="form-group">
                        <label for="alamatLengkap">Alamat Lengkap</label>
                        <input type="text" class="form-control" id="alamatLengkap" placeholder="Masukkan Alamat Lengkap Anda">
                    </div>
                    <div class="form-group">
                        <label for="jenisPekerjaan">Pilih Jenis Pekerjaan</label>
                        <select class="form-control" id="jenisPekerjaan">
                            <option>Pekerja Kasar</option>
                            <option>Teman Belajar</option>
                            <option>Tenaga Ahli</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Lanjutkan</button>
                    <button type="button" class="btn btn-secondary">Kembali</button>
                </form>
            </div>
            <div class="col-md-6 illustration">
                <!-- Illustration goes here -->
            </div>
        </div>
    </div>
</body>
</html>
