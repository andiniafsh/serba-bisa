<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Page Landing</title>


    <!--style-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ url('css/style.css') }}">
    <link rel="stylesheet" href="{{ url('css/profil.css') }}">
    <link rel="stylesheet" href="{{ url('css/shoppingpagelanding.css') }}">
</head>
<body>
    @include('partials.header')
    <section class="custom-section py-3">
        <div class="container">
            <div class="home-icon py-5">
                <a href="/shoppingpage" class="logo" style="color: black">
                    <i class="fa-solid fa-house"></i>
                    / 
                </a>
                <span class="home-icon-text">Metode Pembayaran > </span>
                <span class="home-icon-text"> Bukti Pembayaran</span>
            </div>
        </div>
    </section>

    <main class="main-content">
        <div class="container">
            <body></body>
        
                <!-- Pembayaran Section -->
                <div class="row mt-4">
                    <div class="col-md-8">
                        <div class="card mb-3">
                            <div class="card-body">
                                <h5>Alamat User</h5>
                                <p><i class="fas fa-map-marker-alt"></i> Poyeski</p>
                                <p>Gubeng Jaya I No. 39 Gubeng, Gubeng, Surabaya Pagar Hitam, Ada Toko</p>
                                <p>6281333624922</p>
                                <a href="/alamat">
                                    <button class="btn btn-success">Ganti Alamat</button>
                                </a>
                            </div>
                        </div>
        
                        <div class="card mb-3">
                            <div class="card-body">
                                <h5>Mitra Yang Dipesan</h5>
                                <div class="d-flex align-items-center mt-3">
                                    <img src="img/popular/pasanglpg.png" alt="Item Image" class="cart-image">
                                    <div class="ml-3">
                                        <h5>Pasang Regulator GAS 3/12 KG</h5>
                                        <p class="text-muted">Satuan Hitungan Harga Per hari</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
        
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h5>Ringkasan Pembelian</h5>
                                <p>Total Harga <span class="float-right text-success">Rp. 2.000.000</span></p>
                                <p>Total Ongkos Perjalanan <span class="float-right text-success">Rp. 50.000</span></p>
                                <p>Biaya Jasa Aplikasi <span class="float-right text-success">Rp. 1.000</span></p>
                                <hr>
                                <p>Total Akhir <span class="float-right text-success">Rp. 2.051.000</span></p>
                                <a href="shoppingpage-metodepembayaran">
                                    <button class="btn btn-success btn-block">Pilih Metode Pembayaran</button>
                                </a>
                                
                                <p class="text-danger text-center mt-3">Harap Hubungi Mitra Terlebih Dulu Sebelum Membayar</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    @include('partials.footer')

    <script src="{{ url('js/nav.js') }}"></script>
    <script src="{{ url('js/script.js') }}"></script>
    <script src="{{ url('js/shoppingpagehover.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>
</body>
</html>