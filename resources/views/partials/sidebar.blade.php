{{-- sidebar --}}
<div class="col-md-4 sidebar">
    <div class="card">
        <div class="card-body text-center">
            {{-- profilpict --}}
            <div class="row">
                <div class="col-4">
                    <img src="/img/profil/Frame 1.png" class="rounded-circle mb-3" alt="Profile Pict">
                </div>
                <div class="col-6 align-items-center">
                    <h5 class="text-center">Mas Alif</h5>
                    <div class="badge text-bg-success fs-7 p-3">Pekerja Kasar</div> 
                </div>
            </div>
            
            {{-- jadwal dan total --}}
            <div class="my-3">
                <p>Jadwal Buka <span style="font-weight: bold">08.00-18.00</span></p>
                <p>Total Transaksi <span style="font-weight: bold">5</span></p>
            </div>

            {{-- navigasi --}}

            <div class="my-3 border-top">
                <nav class="nav flex-column" style="text-align: left;">
                    <a class="nav-link active font-weight-bold text-green" href="/shoppingpage">
                        <i class="fa-solid fa-house"></i>
                        Home
                    </a>
                </nav>
                <nav class="nav flex-column" style="text-align: left;">
                    <a class="nav-link active font-weight-bold text-green" href="#">
                        <i class='bx bx-message-rounded-detail'></i>
                        Pesan Chat
                    </a>
                </nav>
                <nav class="nav flex-column" style="text-align: left;">
                    <div class="dropdown">
                        <button class="btn btn-link dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                            Jasa Yang Dijual
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <li>
                                <a class="dropdown-item sale" href="/tambah-jasa">
                                    Tambah Jasa
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="/edit-jasa">
                                    Daftar Jasa
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
                
                {{-- <nav class="nav flex-column" style="text-align: left;">
                    <a class="nav-link active font-weight-bold text-green" href="#">
                        <i class='bx bx-food-menu'></i>
                        Pesanan
                    </a>
                </nav>
                <nav class="nav flex-column" style="text-align: left;">
                    <a class="nav-link active font-weight-bold text-green" href="#">
                        <i class='bx bx-smile' ></i>
                        Ulasan
                    </a>
                </nav> --}}
            </div>
            
        </div>
    </div>
</div>