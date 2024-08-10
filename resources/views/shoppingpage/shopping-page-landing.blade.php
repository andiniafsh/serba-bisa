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
    <link rel="stylesheet" href="{{ url('css/style.css') }}">
    <link rel="stylesheet" href="{{ url('css/profil.css') }}">
    <link rel="stylesheet" href="{{ url('css/shoppingpagelanding.css') }}">
</head>
<body>
    @include('partials.header')

    <main class="main-content">
        <div class="container-fluid">
            <section class="popular-services" id="popular-services">
                <div class="heading">
                    <h1>Layanan Terpopuler
                        <i class='bx bx-trending-up'></i>
                    </h1>
                </div>
                <div class="popular-container-wrapper">
                    <div class="popular-container">
                        <div class="box">
                            <div class="box-img">
                                <a href="/shoppingpage-tukangkebun">
                                    <img src="img/popular/tukangkebun.png"  alt="Gambar Populer 1">
                                </a>
                            </div>
                        </div>
                        <div class="box">
                            <div class="box-img">
                                <a href="/shoppingpage-tukangbangunan">
                                    <img src="img/popular/tukangbangunan.png"  alt="Gambar Populer 1">
                                </a>
                            </div>
                        </div>
                        <div class="box">
                            <a href="/shoppingpage-cleaningservice">
                                <img src="img/popular/cleaningservice.png"  alt="Gambar Populer 1">
                            </a>
                        </div>
                        <div class="box">
                            <div class="box-img">
                                <a href="/shoppingpage-servicekendaraan">
                                    <img src="img/popular/servicekendaraan.png"  alt="Gambar Populer 1">
                                </a>
                            </div>
                        </div>
                        <div class="box">
                            <div class="box-img">
                                <img src="img/popular/tambalban.png" alt="Gambar Populer 1">
                            </div>
                        </div>
                        <div class="box">
                            <div class="box-img">
                                <a href="/shoppingpage-belajaringgris">
                                    <img src="img/popular/belajaringgris.png"  alt="Gambar Populer 1">
                                </a>
                            </div>
                        </div>
                        <div class="box">
                            <div class="box-img">
                                <a href="/shoppingpage-serviceac">
                                    <img src="img/popular/serviceac.png"  alt="Gambar Populer 1">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="nav-controls">
                        <button id="prev-btn" class="nav-btn"><i class='bx bx-chevron-left'></i></button>
                        <button id="next-btn" class="nav-btn"><i class='bx bx-chevron-right'></i></button>
                    </div>
                </div>
                <div class="pagination-line">
                    <div class="page-item active"></div>
                    <div class="page-item"></div>
                </div>
            </section>

            

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
                            <a href="/shoppingpage-pasangregulatorgas"> 
                                <img src="img/popular/pasanglpg.png" alt="Service Image">
                                <div class="card-body">
                                 <h5 class="card-title">Pasang Regulator GAS 3/12 KG</h5>
                                 <p class="card-rating">⭐4.6 (20)</p>
                                 <p class="card-description">Saya bisa membantu memasang, melepas, dan pengecekan LPG.</p>
                                 <p class="card-user">Pak GAS</p>
                                 <p class="card-status">Status: Buka</p>
                                 <p class="card-time">10.00 - 16.00 WIB</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <img src="img/popular/jokigame.png" alt="Service Image">
                            <div class="card-body">
                                <h5 class="card-title">Joki All Game Sesuai Request</h5>
                                <p class="card-rating">⭐4.9 (1)</p>
                                <p class="card-description">Saya bisa membantu grinding, Push rank, dan Top global game sesuai request.</p>
                                <p class="card-user">EPOS GILANG</p>
                                <p class="card-status">Status: Buka</p>
                                <p class="card-time">10.00 - 16.00 WIB</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <img src="img/popular/tukangbangunan.png" alt="Service Image">
                            <div class="card-body">
                                <h5 class="card-title">Membangun / Renovasi Rumah Impianmu</h5>
                                <p class="card-rating">⭐4.6 (2)</p>
                                <p class="card-description">Saya bisa membantu membangun, renovasi rumahmu.</p>
                                <p class="card-user">Pak Ren</p>
                                <p class="card-status">Status: buka</p>
                                <p class="card-time">10.00 - 16.00 WIB</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <img src="img/popular/tukangkebun.png" alt="Service Image">
                            <div class="card-body">
                                <h5 class="card-title">Membersihkan kebun / taman </h5>
                                <p class="card-rating">⭐4.6 (4)</p>
                                <p class="card-description">Saya bisa memotong rumput, menata tanaman dan menghias taman.</p>
                                <p class="card-user">Pak Bon</p>
                                <p class="card-status">Status: buka</p>
                                <p class="card-time">10.00 - 16.00 WIB</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <img src="img/popular/serviceac.png" alt="Service Image">
                            <div class="card-body">
                                <h5 class="card-title">Service AC </h5>
                                <p class="card-rating">⭐4.6 (1)</p>
                                <p class="card-description">Saya bisa membantu mendinginkan kembali rumah dengan AC yang tidak rusak lagi.</p>
                                <p class="card-user">Pak Kull</p>
                                <p class="card-status">Status: buka</p>
                                <p class="card-time">10.00 - 16.00 WIB</p>
                            </div>
                        </div>
                    </div>
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
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <img src="img/popular/cleaningservice.png" alt="Service Image">
                            <div class="card-body">
                                <h5 class="card-title">Cleaning Service</h5>
                                <p class="card-rating">⭐4.6 (5)</p>
                                <p class="card-description">Saya bisa membantu menjaga kebersihan dirumah anda.</p>
                                <p class="card-user">Bu Ersih</p>
                                <p class="card-status">Status: buka</p>
                                <p class="card-time">10.00 - 16.00 WIB</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <img src="img/popular/belajaringgris.png" alt="Service Image">
                            <div class="card-body">
                                <h5 class="card-title">Teman Belajar Bahasa inggris</h5>
                                <p class="card-rating">⭐4.8 (7)</p>
                                <p class="card-description">Saya bisa membantu belajar bahasa inggris.</p>
                                <p class="card-user">Rizz</p>
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
    
</body>
</html>