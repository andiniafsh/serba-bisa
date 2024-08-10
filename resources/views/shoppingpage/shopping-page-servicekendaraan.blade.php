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
    <section class="custom-section py-3">
        <div class="container">
            <div class="home-icon py-5">
                <a href="/shoppingpage" class="logo" style="color: black">
                    <i class="fa-solid fa-house"></i>
                    / 
                </a>
                <span class="home-icon-text">Service Kendaaraan</span>
            </div>
        </div>
    </section>

    <main class="main-content">
        <div class="container">
            <body>
                
                

            <section class="services-list">
                <div class="filter d-flex justify-content-start">
                    <div class="dropdown me-3">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="jenisLayananDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                            Jenis Layanan
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="jenisLayananDropdown">
                            <li><a class="dropdown-item" href="#">Pekerja Kasar</a></li>
                            <li><a class="dropdown-item" href="#">Tenaga Profesional</a></li>
                            <li><a class="dropdown-item" href="#">Teman Belajar</a></li>
                        </ul>
                    </div>
                    <div class="dropdown me-3">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="hargaJasaDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                            Harga Jasa
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="hargaJasaDropdown">
                            <li><a class="dropdown-item" href="#">Low to High</a></li>
                            <li><a class="dropdown-item" href="#">High to Low</a></li>
                        </ul>
                    </div>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="jamKerjaDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                            Jam Kerja
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="jamKerjaDropdown">
                            <li><a class="dropdown-item" href="#">09.00 - 18.00</a></li>
                            <li><a class="dropdown-item" href="#">10.00 - 19.00</a></li>
                        </ul>
                    </div>
                </div>
                <div class="service-cards row">
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <img src="img/popular/servicekendaraan.png" alt="Service Image">
                            <div class="card-body">
                                <h5 class="card-title">Sevice Motor / Mobil</h5>
                                <p class="card-rating">⭐4.6 (2)</p>
                                <p class="card-description">Saya bisa membantu service motor atau mobil tanpa anda keluar rumah karena saya yang kerumah anda.</p>
                                <p class="card-user">Pak Tor</p>
                                <p class="card-status">Status: buka</p>
                                <p class="card-time">10.00 - 16.00 WIB</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
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