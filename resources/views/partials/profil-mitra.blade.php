<div class="container mt-5">
    <div class="row">
        @include('partials.sidebar')

        {{-- main content --}}
        <div class="col-md-8">
            {{-- aktivitas terkini --}}
            <div class="container my-5">
                <h2 class="text-success">Aktivitas Terkini</h2>
                <p>Aktivitas Yang Perlu Anda Pantau</p>
                <div class="row text-center">
                    <div class="col-md-3">
                        <div class="activity-box">
                            <h5>Pesanan Baru</h5>
                            <h3>1</h3>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="activity-box">
                            <h5>Dalam Pengerjaan</h5>
                            <h3>0</h3>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="activity-box">
                            <h5>Chat Terbaru</h5>
                            <h3>1</h3>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="activity-box">
                            <h5>Ulasan Terbaru</h5>
                            <h3>0</h3>
                        </div>
                    </div>
                </div>
            {{-- daftar jasa --}}
            <h3 class="text-success mt-5">Daftar Jasa</h3>
            <p>Daftar Jasa Yang Anda Jual</p>
            <hr>
            {{-- Pelih semua daftar jasa --}}
            <div class="card">
                <div class="card-body mx-3 d-flex justify-content-between align-items-center">
                    <div>
                        <input class="form-check-input me-1 custom-checkbox" type="checkbox" value="" id="firstCheckbox">
                        <label class="form-check-label" for="firstCheckbox">Pilih Semua</label>
                    </div>
                    <div class="col-4 mx-0">
                        <button type="button" class="btn btn-outline-danger w-100">
                            <i class='bx bxs-trash-alt'></i>
                            Hapus
                        </button>
                    </div>                
                </div>
            </div>
            {{-- List Jasa --}}
            <div class="card">
                <div class="card-body img-display mx-3 d-flex justify-content-between align-items-center">
                    <div class="row">
                        {{-- Foto --}}
                        <div class="col-4">
                            <input class="form-check-input me-1 custom-checkbox" type="checkbox" value="" id="firstCheckbox">
                            <img class="image-display ml-3" src="img/profil/Frame 3.png" alt="Jasa">
                        </div>
                        {{-- Deskripsi --}}
                        <div class="col-8">
                            <h5 class="card-title">Tim Tukang Bangunan Maju Mundur Jaya</h5>
                            
                            <div class="row">
                                <div class="col-md-4 border-end">
                                    <p>Satuan Hitungan Harga: <span class="text-success">Per hari</span></p>
                                    <p>Keterangan Tambahan: <span class="text-success">Jumlah Kuli 10 orang</span></p>
                                </div>
                                <div class="col-md-4 border-end">
                                    <p>Jam Kerja: <span class="text-success">08.00 - 17.00</span></p>
                                    <p>Chat / Kontak: <span class="text-success">Serba Bisa, Whatsapp</span></p>
                                </div>
                                <div class="col-md-4">
                                    <p>Jumlah Pesanan: <span class="text-success">1</span></p>
                                    <p>Status Jasa: <span class="text-warning">Sedang Menerima Pesanan</span></p>
                                    
                                </div>
                            </div>
                            <div class="row mt-5 justify-content-end">
                                <div class="col-4 mx-0">
                                    <button type="button" class="btn btn-outline-danger w-100">
                                        <i class='bx bxs-trash-alt'></i>
                                        Hapus
                                    </button>
                                </div>
                                <div class="col-4 mx-0">
                                    <button type="button" class="btn btn-success w-100">
                                        <i class='bx bxs-edit-alt'></i>
                                        Edit
                                    </button>
                                </div>
                            </div>
                            {{-- <div class="row">
                                <div class="col-md-6">
                                    <p>Satuan Hitungan Harga: <span class="text-success">Per hari</span></p>
                                    <p>Keterangan Tambahan: <span class="text-success">Jumlah Kuli 10 orang</span></p>
                                </div>
                                <div class="col-md-6">
                                    <p>Jam Kerja: <span class="text-success">08.00 - 17.00</span></p>
                                    <p>Chat / Kontak: <span class="text-success">Serba Bisa, Whatsapp</span></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <p>Jumlah Pesanan: <span class="text-success">1</span></p>
                                </div>
                                <div class="col-md-6">
                                    <p>Status Jasa: <span class="text-warning">Sedang Menerima Pesanan</span></p>
                                </div>
                            </div> --}}
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>