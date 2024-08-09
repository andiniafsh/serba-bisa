<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Page Landing</title>


    <!--style-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ url('css/style.css') }}">
    <link rel="stylesheet" href="{{ url('css/profil.css') }}">
    <link rel="stylesheet" href="{{ url('css/shoppingpagelanding.css') }}">
    <link rel="stylesheet" href="{{ url('css/metodepembayaran.css') }}">
</head>
<body>
    @include('partials.header')
    <section class="custom-section py-2">
        <div class="container">
            <div class="home-icon">
                <a href="/shoppingpage" class="logo" style="color: black">
                    <i class="fa-solid fa-house"></i>
                    / 
                </a>
                <a href="/shoppingpage-pembayaran" style="color: black">
                    <span class="home-icon-text">Metode Pembayaran > </span>
                </a>
                
                <span class="home-icon-text"> Bukti Pembayaran</span>
            </div>
        </div>
    </section>

    <main class="main-content">
        <div class="container">
            <!-- Pembayaran Section -->
            <div class="container mt-4">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="card popup-card">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <h5 class="mb-0">Pembayaran</h5>
                                <button class="close">
                                    <span>&times;</span>
                                </button>
                            </div>
                            <div class="card-body">
                                <p><i class="fas fa-clock"></i> Selesaikan Pembayaran Sebelum 15 menit</p>
                                <h5>Metode Pembayaran</h5>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="paymentMethod" id="bcaVa" checked>
                                    <label class="form-check-label" for="bcaVa">
                                        <img src="img/popular/BCA Logo.png" alt="BCA Logo" class="payment-logo"> BCA Virtual Account
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="paymentMethod" id="bniVa">
                                    <label class="form-check-label" for="bniVa">
                                        <img src="img/popular/BNI Logo.png" alt="BNI Logo" class="payment-logo"> BNI Virtual Account
                                    </label>
                                </div>
                                <h5 class="mt-4">Ringkasan Pembayaran</h5>
                                <p>Total Biaya <span class="float-right text-success">Rp. 2.051.000</span></p>
                                <p>Biaya Layanan <span class="float-right text-success">Rp. 1.000</span></p>
                                <hr>
                                <p>Total Akhir <span class="float-right text-success">Rp. 2.052.000</span></p>
                            </div>
                            <div class="card-footer">
                                <a href="/shoppingpage-pembayaranberhasil">
                                    <button type="button" class="btn btn-success btn-block">Bayar Sekarang</button>
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
</body>
</html>