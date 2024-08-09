<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Page Pasang Regulator Gas</title>


    <!--style-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ url('css/style.css') }}">
    <link rel="stylesheet" href="{{ url('css/profil.css') }}">
    <link rel="stylesheet" href="{{ url('css/shoppingpagelanding.css') }}">
    <link rel="stylesheet" href="{{ url('css/shoppingpagelandingpasanggas.css') }}">
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
                <span class="home-icon-text">Pasang Regulator Gas</span>
            </div>
        </div>
    </section>

    <main class="main-content">
        <div class="container">
            <body>
                <div class="row service-details">
                    <div class="col-md-6">
                        <div id="serviceCarousel" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="img/popular/pasanglpg.png" class="d-block w-100 service-image" alt="Gambar Tukang Bangunan">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#serviceCarousel" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#serviceCarousel" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="service-header">
                            <h2>Pasang Regulator GAS 3/12 KG</h2>
                            <div class="service-status status-open">Buka</div>
                        </div>
                        <div class="mt-3">
                            <p><strong>Pak Gas</strong></p>
                            <p>Rating: <span class="text-success">4.6</span> (20 Ulasan) | (3 Antrian Pesanan)</p>
                            <h4 class="text-success">Rp. 2.000.000</h4>
                            <p>Satuan Hitungan Harga: Per hari</p>
                            <p>Jam Kerja: 08.00 - 17.00</p>
                            <p><strong>Chat / Kontak:</strong> Serba Bisa, Whatsapp</p>
                            <a href="shoppingpage-keranjang">
                                <button class="btn btn-success">Masukkan Keranjang</button>
                            </a>
                        </div>
                    </div>
                </div>
        
                <hr>
        
                <div class="service-description">
                    <h4>Detail Jasa Dan Mitra</h4>
                    <p>Tag: <span class="badge badge-success">Pekerja Kasar</span></p>
                    <p><strong>Jam Kerja:</strong> 08.00 - 17.00</p>
                    <h5>Chat</h5>
                    <p>Calon pembeli bisa menghubungi penjual melalui chat website yang mana selanjutnya akan diarahkan ke WhatsApp.</p>
                    <h5>Deskripsi Lengkap</h5>
                    <p>My Name Is Erni, And I Am Here To Help You To Stop Worrying About Your Social Media Marketing Efforts.</p>
                    <p>I Know You Know How Important It Is To Your Business, So Let Me Tell You Why Picking Me And My Team Is The Better Decision.</p>
                    <h5>Here’s Your Recipe To Social Media Success:</h5>
                    <ul>
                        <li>First, You Will Need A Big Bowl.</li>
                        <li>Grab A Designer, Peel Off Any Ideas That They Might Have, And Sprinkle Your Vision In Them.</li>
                        <li>Then, Get Some Content Creators, Give Them A Nice Big Squeeze So They Can Get You Some Great Content.</li>
                        <li>Make Sure To Marinate It All With A Strategy,</li>
                        <li>And Finally, Let It Rest For 2-3 Sleepless Months, Worrying If It Will Turn Out Good.</li>
                    </ul>
                    <p>Or, You Can Just Place An Order, And We’ll Do It For You!</p>
                    <p>Upon Hiring Us, Our Marketing Services Include But Are Not Limited To:</p>
                    <ul>
                        <li>Optimizing Your Social Media Accounts</li>
                        <li>Content Plan And Content Scheduling</li>
                        <li>Creating High-Quality Post Design Branded With Your Logo Or Website URL</li>
                        <li>Trending Hashtag Research</li>
                        <li>Increasing Brand Awareness Through Providing Content Tailored To Your Audience.</li>
                    </ul>
                    <p>And Much More!</p>
                    <p><strong>Platforms:</strong></p>
                    <ul>
                        <li>~ Facebook</li>
                        <li>~ Instagram</li>
                        <li>~ Twitter</li>
                        <li>~ LinkedIn</li>
                        <li>~ Pinterest</li>
                    </ul>
                    <p>Please Feel Free To Contact Me Before Ordering For A Customized Offer.</p>
                </div>
        
                <hr>
        
                <div class="review">
                    <h4>Ulasan Jasa</h4>
                    <div class="review-item">
                        <div class="d-flex">
                            <div class="review-author">
                                <img src="img/user.jpg" alt="User">
                            </div>
                            <div class="review-content">
                                <div class="review-header">
                                    <h5>Pake_Nanya</h5>
                                    <span>500 <i class="fa fa-thumbs-up text-success"></i> | 2 <i class="fa fa-thumbs-down text-danger"></i></span>
                                </div>
                                <div class="review-body">
                                    <p>Tukang Bangunan ini sangat bagus dan terampil, juga cekatan saat bekerja. Saya merekomendasikannya.</p>
                                </div>
                                <div class="review-footer">
                                    <button class="btn btn-outline-primary btn-sm">Balasan (1)</button>
                                </div>
                                <div class="reply">
                                    <textarea class="form-control" placeholder="Tambahkan Balasan...." rows="1"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="review-item">
                        <div class="d-flex">
                            <div class="review-author">
                                <img src="img/user.jpg" alt="User">
                            </div>
                            <div class="review-content">
                                <div class="review-header">
                                    <h5>Pake_Nanya</h5>
                                    <span>500 <i class="fa fa-thumbs-up text-success"></i> | 2 <i class="fa fa-thumbs-down text-danger"></i></span>
                                </div>
                                <div class="review-body">
                                    <p>Tukang Bangunan ini sangat bagus dan terampil, juga cekatan saat bekerja. Saya merekomendasikannya.</p>
                                </div>
                                <div class="review-footer">
                                    <button class="btn btn-outline-primary btn-sm">Balasan (0)</button>
                                </div>
                                <div class="reply">
                                    <textarea class="form-control" placeholder="Tambahkan Balasan...." rows="1"></textarea>
                                </div>
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