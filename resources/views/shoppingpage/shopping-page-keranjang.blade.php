<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Page Landing</title>


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="{{ url('css/style.css') }}">
    <link rel="stylesheet" href="{{ url('css/profil.css') }}">
    <link rel="stylesheet" href="{{ url('css/shoppingpagelanding.css') }}">
</head>
<body>
    @include('partials.header')
    
    <main class="main-content">
        <div class="container">
            <body>
                <!-- Keranjang Section -->
                <br>
                <br>
                <div class="row mt-4 py-2" >
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-body">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="selectAll">
                                    <label class="form-check-label" for="selectAll">Pilih Semua</label>
                                </div>
                            </div>
                        </div>
        
                        <div class="card mt-3">
                            <div class="card-body d-flex align-items-center">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="selectItem">
                                </div>
                                <img src="img/popular/pasanglpg.png" alt="Item Image" class="cart-image ml-3">
                                <div class="ml-3">
                                    <h5>Pasang Regulator GAS 3/12 KG</h5>
                                    <p class="text-success">Rp. 2.000.000</p>
                                    <p class="text-muted">Satuan Hitungan Harga Per hari</p>
                                </div>
                            </div>
                        </div>
                    </div>
        
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h5>Ringkasan Belanja</h5>
                                <p>Total Harga</p>
                                <h4 class="text-success">Rp. 2.000.000</h4>
                                <a href="/shoppingpage-pembayaran">
                                    <button class="btn btn-success btn-block">Bayar Sekarang</button>
                                </a>
                                
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