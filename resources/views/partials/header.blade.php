
<!-- Header -->
<div class="header">
    <div class="item-header-2 d-flex flex-column">
        <div class="d-flex justify-content-between align-items-center">
            <div class="site-name">
                <span class="serba">Serba</span><span class="bisa">Bisa.</span>
            </div>
            <div class="wrap-search">
                <input type="text" class="form-control" placeholder="Cari barang" data-toggle="modal"
                    data-target="#exampleModal">
                <div class="wrap-icon-search">
                    <img class="img-search" src="img/profil/3.png" alt="">
                </div>
            </div>

            <div class="wrap-img-shop mx-3" onclick="on()">
                <a href="/shoppingpage-keranjang">
                    <img class="img-shop" src="img/profil/shopping-cart.png" alt="">
                </a>
            </div>
            <div class="wrap-img-bell mx-3" onclick="on()">
                <img class="img-bell" src="img/profil/bell.png" alt="">
            </div>
            <div class="wrap-img-chat mx-3" onclick="on()">
                <img class="img-chat" src="img/profil/chat.png" alt="">
            </div>


    <!--navbar-->
    <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top item-header-2">
        <div class="container">
            <!--logo-->
            <a class="navbar-brand site-name" href="#" style="font-size: 1.5rem; font-weight: 700;">
                <span class="serba">Serba</span><span class="bisa">Bisa</span>
            </a>


            <div class="d-flex">
                <a href="/profil-mitra">
                    <img src="img/profil/Frame 1.png" alt="Profil" class="profile-icon ml-4" title="Profil">
                    <span class="profile-name">Toko Alif</span>
                </a>
                
                <a href="/biodata">
                    <img src="img/profil/Frame 2.png" alt="Profil" class="profile-icon ml-3" title="Profil">
                    <span class="profile-name">Poyeksi</span>
                </a>
                

            <!--Toggle Btn-->
            <button class="navbar-toggler shadow-none border-0" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!--sidebar-->
            <div class="sidebar offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel">
                <!--sidebar header-->
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel"><span class="serba">Serba</span><span
                            class="bisa">Bisa</span></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <!--sidebar body-->
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="mx-3" style="flex-grow: 0; width: 500px; margin-left: 0;">
                            <div class="input-group rounded">
                                <input type="search" class="form-control rounded"
                                    placeholder="Sedang cari jasa apa hari ini" aria-label="Search"
                                    aria-describedby="search-addon" />
                                <span class="input-group-text border-0" id="search-addon">
                                    <i class='bx bx-search' style="font-size: 30px;"></i>
                                </span>
                            </div>
                        </li>
                        <li class="nav-item">
                            <div class="wrap-img-shop mx-3" onclick="on()">
                                <i class='bx bx-cart' style="font-size: 30px"></i>
                            </div>
                        </li>
                        <li class="nav-item">
                            <div class="wrap-img-bell mx-3" onclick="on()">
                                <i class='bx bx-bell' style="font-size: 30px"></i>
                            </div>
                        </li>
                        <li class="nav-item">
                            <div class="wrap-img-chat mx-3" onclick="on()">
                                <i class='bx bx-message-rounded-detail' style="font-size: 30px"></i>
                            </div>
                        </li>
                        <li class="mx-3 d-flex align-items-center">
                            <img src="/img/navbar-pict/Prima Food 39 1.png" alt="" class="rounded-circle"
                                style="width: 30px; height: 30px;">
                            <span class="ms-2">
                                <p class="mb-0">Mas Alif</p>
                            </span>
                        </li>
                        <li class="mx-3 d-flex align-items-center">
                            <img src="/img/navbar-pict/Columbina.600.3709192 1.png" alt=""
                                class="rounded-circle" style="width: 30px; height: 30px;">
                            <span class="ms-2">
                                <p class="mb-0">Poyeksi</p>
                            </span>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </nav>
