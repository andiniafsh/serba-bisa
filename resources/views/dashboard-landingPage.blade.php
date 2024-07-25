<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="{{ url('css/style.css') }}">
</head>

<body>
    <!--Navbar-->
    <header>
        <div class="bx bx-menu" id="menu-icon"></div>
        <span class="site-name">SebaBisa.</span> <!-- Nama website -->
        <ul class="navbar">
            <li><a href="#beranda">Beranda</a></li>
            <li><a href="#jelajah">Jelajah</a></li>
            <li><a href="#kontak">Kontak</a></li>
            <li><a href="#masuk">Masuk</a></li>
            <li><a href="#daftar">Daftar</a></li>
        </ul>
    </header>
    <!--Banner About-->
    <section class="banner" id="banner">
        <div class="banner-text">
            <span>Semua Jenis Pekerjaan Tersedia Disini!</span>
            <h1>Serba Bisa adalah Website yang Menyediakan<br>
                Layanan Freelancer Unik bagi Masyarakat yang<br>
                Menganggur.</h1>
            <a href="#" class="btn-mitra">Daftar Mitra</a>
            <a href="#" class="btn-pekerja">Cari Pekerjaan</a>
        </div>
        <div class="banner-img">
            <img src="" alt="">
        </div>
    </section>

    <!-- Layanan -->
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
                        <img src="img/Populer Picture 1.png" alt="Gambar Populer 1">
                    </div>
                </div>
                <div class="box">
                    <div class="box-img">
                        <img src="img/Populer Picture 1.png" alt="Gambar Populer 1">
                    </div>
                </div>
                <div class="box">
                    <div class="box-img">
                        <img src="img/Populer Picture 1.png" alt="Gambar Populer 1">
                    </div>
                </div>
                <div class="box">
                    <div class="box-img">
                        <img src="img/Populer Picture 1.png" alt="Gambar Populer 1">
                    </div>
                </div>
                <div class="box">
                    <div class="box-img">
                        <img src="img/Populer Picture 1.png" alt="Gambar Populer 1">
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

    <!--Mitra Populer -->
    <section class="mitra" id="mitra">
        <div class="heading">
            <h1>Mitra Terpopuler Kami</h1>
        </div>
        <div class="mitra-container">
            <div class="mitra-card">
                <figure>
                    <img src="img/Populer Picture 1.png" alt="">
                </figure>
                <div class="content-mitra">
                    <h3>Jozanda Aulia</h3>
                    <p>Joki Mobile Legend Teraman</p>
                    <a href="#">Lihat Selengkapnya
                        <i class='bx bx-chevron-right'></i>
                    </a>
                </div>
            </div>
            <div class="mitra-card">
                <figure>
                    <img src="img/Populer Picture 1.png" alt="">
                </figure>
                <div class="content-mitra">
                    <h3>Jozanda Aulia</h3>
                    <p>Joki Mobile Legend Teraman</p>
                    <a href="#">Lihat Selengkapnya
                        <i class='bx bx-chevron-right'></i>
                    </a>
                </div>
            </div>
            <div class="mitra-card">
                <figure>
                    <img src="img/Populer Picture 1.png" alt="">
                </figure>
                <div class="content-mitra">
                    <h3>Jozanda Aulia</h3>
                    <p>Joki Mobile Legend Teraman</p>
                    <a href="#">Lihat Selengkapnya
                        <i class='bx bx-chevron-right'></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!--Gabung Mitra-->
    <section class="Gabung" id="gabung">
        <div class="gabung-container">
            <div class="gabung-card">
                <h1>Bergabung Menjadi Mitra?</h1>
                <h3>Daftar sekarang juga dan jadilah bagian dari seratusribu<br> lebih mitra terpilih kami!</h3>
                <a href="#"> Menjadi Mitra</a>
            </div>
        </div>
    </section>

    <footer>
        <div class="footer-container">
          <div class="footer-section about">
            <h2>SerbaBisa</h2>
            <h10>
              Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis, atque eaque fugiat accusamus magnam aliquid saepe earum aperiam quae ipsum pariatur dolores eum vitae omnis ad, necessitatibus voluptates doloribus labore!
            </h10>
            <div class="kontak">
                <a href="#"><i class='bx bxl-instagram'></i></a>
                <a href="#"><i class='bx bxl-whatsapp' ></i></a>
                <a href="#"><i class='bx bxl-twitter' ></i></a>
            </div>
          </div>
          <div class="footer-section layanan">
            <h4>Tentang Kami</h4>
            <li>Layanan</li>
            <li>Layanan</li>
            <li>Layanan</li>
          </div>
          <div class="footer-section Tim">
            <h4>Tim Kami</h4>
            <li>Layanan </li>
            <li>Layanan </li>
            <li>Layanan </li>
          </div>
          <div class="footer-section Kontak Kami">
            <h4>Kontak Kami</h4>
            <li>Layanan Kami</li>
            <li>Layanan Kami</li>
            <li>Layanan Kami</li>
          </div>
        </div>
        <div class="footer-bawah">Copyright &copy;</div>
      </footer>
    <script src="{{ url('js/main.js') }}"></script>
</body>

</html>
