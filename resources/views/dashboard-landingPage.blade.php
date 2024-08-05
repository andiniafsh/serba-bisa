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
        <span class="site-name">SerbaBisa.</span>
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
    <!--Jenis Layanan Jasa di Serba Bisa-->
    <section class="layanan-jasa" id="layanan-jasa">
        <div class="heading">
            <h1>Jenis Layanan Jasa di Serba Bisa</h1>
        </div>
        <div class="service">
            <img src="img/layanan-jasa/teman belajar.png" alt="Teman Belajar">
            <div class="description">
                <h2>Teman Belajar</h2>
                <p>Teman Belajar adalah jenis layanan<br> belajar bersama mitra yang sudah<br> mumpuni di bidangnya melalui metode<br> yang mudah dan menyenangkan</p>
            </div>
            <div class="picture">
                <img src="img/layanan-jasa/PNG1.png" alt="img1">
            </div>
        </div>
        <div class="service">
            <img src="img/layanan-jasa/pekerja kasar.png" alt="Pekerja Kasar">
            <div class="description">
                <h2>Pekerja Kasar</h2>
                <p>Pekerja kasar adalah layanan jasa<br> bantuan bagi masyarakat yang<br> kesulitan atau tidak punya waktu<br> mengerjakan pekerjaan ringan di<br> rumah, kantor, atau instansi tertentu</p>
            </div>
            <div class="picture2">
                <img src="img/layanan-jasa/PNG 3.png" alt="img2">
            </div>
        </div>
        <div class="service">
            <img src="img/layanan-jasa/tenaga profesional.png" alt="Tenaga Profesional">
            <div class="description">
                <h2>Tenaga Profesional</h2>
                <p>Tenaga Profesional merupakan layanan<br> yang menghadirkan para mitra<br> terverifikasi di bidangnya. Memiliki<br> pengalaman yang luar biasa serta<br> mampu memberikan pelayanan terbaik</p>
            </div>
            <div class="picture3">
                <img src="img/layanan-jasa/PNG 2.png" alt="img1">
            </div>
        </div>
        <div class="service">
            <div class="picture4">
                <img src="img/layanan-jasa/PNG 4.png" alt="img1">
            </div>
        </div>
    </section>
     <!--Mengapa serba bisa?-->
     <section class="reason" id="reason">
        <div class="heading">
            <h1>Mengapa SerbaBisa?</h1>
        </div>
        <div class="vector">
            <img src="img/alasan/Vector.png" alt="img1">
            {{-- <img id="vector2" src="img/alasan/objek.png" alt="img2"> --}}
        </div>
        <div class="vector5">
            <img src="img/alasan/Group.png" alt="img5">
        </div>
        <div class="about">
            <div class="about-img">
                <div class="vector3">
                    <img src="img/alasan/image 21.png" alt="img3">
                </div>
                <div class="vector4">
                    <img src="img/alasan/image 22.png" alt="img4">
                </div>
                <img id="img1" src="{{ url('img/alasan/pekerja 1 1.png') }}" alt="pekerja" />
                <img id="img2" src="{{ url('img/alasan/guru 1.png') }}" alt="pekerja2" />
            </div>
            <div class="about-content">
                    <div class="reason-list">
                        <img src="img/alasan/Vector (1).png" alt="alasan1">
                        <div class="description">
                            <h4>Pelayanan terjamin</h4>
                            <p>
                                Banyaknya pilihan mitra dengan berbagai jenis pelayanan yang disediakan,
                                kami menghadirkan para ahli di bidangnya
                            </p>
                        </div>
                    </div>
                    <div class="reason-list">
                        <img src="img/alasan/Vector(2).png" alt="alasan2">
                        <div class="description">
                            <h4>Mudah dan Cepat</h4>
                            <p>
                                SerbaBisa memberikan pelayanan yang mudah dan cepat serta hasil yang memuaskan bagi para konsumen 
                            </p>
                        </div>
                    </div>
                    <div class="reason-list">
                        <img src="img/alasan/Vector(3).png" alt="alasan3">
                        <div class="description">
                            <h4>Ada setiap saat</h4>
                            <p>
                                SerbaBisa Hadir dalam setiap waktu kapanpun anda memerlukan bantuan 
                            </p>
                        </div>
                    </div>
                </div>
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
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis, atque eaque fugiat accusamus
                    magnam aliquid saepe earum aperiam quae ipsum pariatur dolores eum vitae omnis ad, necessitatibus
                    voluptates doloribus labore!
                </h10>
                <div class="kontak">
                    <a href="#"><i class='bx bxl-instagram'></i></a>
                    <a href="#"><i class='bx bxl-whatsapp'></i></a>
                    <a href="#"><i class='bx bxl-twitter'></i></a>
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
