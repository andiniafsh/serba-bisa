<div class="container mt-5">
    <div class="row">
        @include('partials.sidebar')

        {{-- main content --}}
        <div class="col-md-8">
            {{-- status jasa --}}
            <div class="card">
                <div class="card-body">
                    <h3 class="font-weight-bold text-green">Tambah Jasa</h3>
                    <h5 class="font-weight-bold text-green">Status Jasa</h5>
                    <br>
                    <div class="row">
                        <div class="col-4">
                            <p class="font-weight-bold text-green">Status <span class="badge rounded-pill text-bg-success">Wajib diisi</span></p>
                            <p>Status pengerjaan dari suatu jasa</p>
                            <p>Anda sudah menerima pesanan, Wajib merubah ke Sedang Menerima Pesanan</p>
                        </div>
                        <div class="col-8">
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Pilih Status</option>
                                <option value="1">Sedang Menerima pesanan</option>
                                <option value="2">Buka</option>
                                <option value="3">Tutup</option>
                            </select>
                        </div>
                    </div>                    
                </div>
            </div>
            {{-- informasi utama jasa --}}
            <div class="card">
                <div class="card-body">
                    <h5 class="font-weight-bold text-green">Informasi Utama Jasa</h5>
                    <br>
                    {{-- nama jasa --}}
                    <div class="row">
                        <div class="col-4">
                            <p class="font-weight-bold text-green">Nama Jasa <span class="badge rounded-pill text-bg-success">Wajib diisi</span></p>
                            <p>Masukkan nama jasa minimal 25 kata</p>
                            <p>Harap diingat, nama tidak bisa dirubah setelah jasa terjual</p>
                        </div>
                        <div class="col-8">
                            <textarea class="form-control" aria-label="With textarea"></textarea>
                        </div>
                    </div>        
                    {{-- tagar --}}
                    <div class="row mt-5">
                        <div class="col-4">
                            <p class="font-weight-bold text-green">Tagar</p>
                            <p>Pilih tagar yang sesuai untuk membantu calon pembeli mencari jasa Anda</p>
                            <p>Apabila tidak ada tagar yang sesuai, Anda bisa memilih tagar lainnya</p>
                        </div>
                        <div class="col-8">
                            <input type="checkbox" class="btn-check" id="btn-check-1" autocomplete="off">
                            <label class="btn btn-secondary" for="btn-check-1">
                                <i class='bx bxs-hard-hat'></i>
                                Tukang Bangunan
                            </label>
                            <input type="checkbox" class="btn-check" id="btn-check-2" autocomplete="off">
                            <label class="btn btn-secondary" for="btn-check-2">
                                <i class='bx bx-color'></i>
                                Tambal Ban
                            </label>
                            <input type="checkbox" class="btn-check" id="btn-check-3" autocomplete="off">
                            <label class="btn btn-secondary" for="btn-check-3">
                                <i class='bx bxs-wrench'></i>
                                Service Kendaraan
                            </label>
                            <input type="checkbox" class="btn-check" id="btn-check-4" autocomplete="off">
                            <label class="btn btn-secondary" for="btn-check-4">
                                <i class='bx bxs-home-smile'></i>
                                Cleaning Service
                            </label>
                            <input type="checkbox" class="btn-check" id="btn-check-5" autocomplete="off">
                            <label class="btn btn-secondary" for="btn-check-5">
                                <i class='bx bxs-chat'></i>
                                Teman Belajar Bahasa Inggris
                            </label>
                            <input type="checkbox" class="btn-check" id="btn-check-6" autocomplete="off">
                            <label class="btn btn-secondary" for="btn-check-6">
                                <i class='bx bx-code-alt'></i>
                                Teman Belajar Web Dev
                            </label>
                            <input type="checkbox" class="btn-check" id="btn-check-7" autocomplete="off">
                            <label class="btn btn-secondary" for="btn-check-7">
                                <i class='bx bxs-leaf'></i>
                                Potong Rumput dan Berkebun
                            </label>
                            <input type="checkbox" class="btn-check" id="btn-check-8" autocomplete="off">
                            <label class="btn btn-secondary" for="btn-check-8">
                                <i class='bx bx-file-blank'></i>
                                Lainnya
                            </label>
                        </div>
                    </div>
                    {{-- Jam kerja    --}}
                    <div class="row mt-5">
                        <div class="col-4">
                            <p class="font-weight-bold text-green">Jam Kerja <span class="badge rounded-pill text-bg-success">Wajib diisi</span></p>
                            <p>Pastikan Anda untuk bisa mengerjakan jasa pada jam yang sudah Anda tetapkan</p>
                        </div>
                        <div class="col-7">
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Pilih Jam</option>
                                <option value="1">Pagi (06.00 - 11.00)</option>
                                <option value="2">Siang (11.01 - 15.00)</option>
                                <option value="3">Sore (15.01 - 18.00)</option>
                                <option value="4">Malam (18.01 - 22.00)</option>
                            </select>
                        </div>
                        <div class="col-1">
                            <p class="font-weight-bold">WIB</p>
                        </div>
                    </div>
                    {{-- No whatsapp --}}
                    <div class="row mt-5">
                        <div class="col-4">
                            <p class="font-weight-bold text-green">No. Whatsapp <span class="badge rounded-pill text-bg-success">Wajib diisi</span></p>
                            <p>Masukkan No. Whatsapp aktif</p>
                        </div>
                        <div class="col-8">
                            <input type="number" class="form-control" placeholder="No. Whatsapp" aria-label="Phone" aria-describedby="basic-addon1">
                        </div>
                    </div>
                    {{-- keterangan tambahan --}}
                    <div class="row">
                        <div class="col-4">
                            <p class="font-weight-bold text-green">Keterangan Tambahan</p>
                            <p>Isi bagian ini dengan keterangan singkat tambahan yang dirasa penting untuk diketahui calon customer yang tidak tersampaikan di bagian sebelumnya</p>
                        </div>
                        <div class="col-8">
                            <textarea class="form-control" aria-label="With textarea"></textarea>
                        </div>
                    </div> 
                </div>
            </div>
            {{-- Detail jasa --}}
            <div class="card">
                <div class="card-body">
                    <h5 class="font-weight-bold text-green">Detail Jasa</h5>
                    <br>
                    {{-- foto --}}
                    <div class="row">
                        <div class="col-4">
                            <p class="font-weight-bold text-green">Foto Jasa <span class="badge rounded-pill text-bg-success">Wajib diisi</span></p>
                            <p>Masukkan foto yang berkaitan dengan jasa yang dijual. Disarankan menggunakan lima foto berbada yang menarik</p>
                            <p>Harap diingat, untuk memastikan ukuran foto minimal 300 x 300 px dan maksimal 1200 x 1200 px</p>
                        </div>
                        <div class="col-8">
                            <div class="container mt-4">
                                <div class="row">
                                    <div class="col-2">
                                        <div class="upload-btn-wrapper">
                                            <img src="https://via.placeholder.com/50" class="upload-icon" alt="Upload Icon">
                                            <input type="file" name="foto_utama">
                                        </div>
                                        <div class="upload-label">Foto Utama</div>
                                    </div>
                                    <div class="col-2">
                                        <div class="upload-btn-wrapper">
                                            <img src="https://via.placeholder.com/50" class="upload-icon" alt="Upload Icon">
                                            <input type="file" name="foto_2">
                                        </div>
                                        <div class="upload-label">Foto 2</div>
                                    </div>
                                    <div class="col-2">
                                        <div class="upload-btn-wrapper">
                                            <img src="https://via.placeholder.com/50" class="upload-icon" alt="Upload Icon">
                                            <input type="file" name="foto_3">
                                        </div>
                                        <div class="upload-label">Foto 3</div>
                                    </div>
                                    <div class="col-2">
                                        <div class="upload-btn-wrapper">
                                            <img src="https://via.placeholder.com/50" class="upload-icon" alt="Upload Icon">
                                            <input type="file" name="foto_4">
                                        </div>
                                        <div class="upload-label">Foto 4</div>
                                    </div>
                                    <div class="col-2">
                                        <div class="upload-btn-wrapper">
                                            <img src="https://via.placeholder.com/50" class="upload-icon" alt="Upload Icon">
                                            <input type="file" name="foto_5">
                                        </div>
                                        <div class="upload-label">Foto 5</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                    {{-- video--}}
                    <div class="row">
                        <div class="col-4">
                            <p class="font-weight-bold text-green">Video Jasa </p>
                            <p>Masukkan Video yang menerangkan jasa Anda</p>
                            <p>Pastikan durasi video Anda maks. 120 detik dengan ukuran maks 100 mb</p>
                        </div>
                        <div class="col-8">
                            <div class="container mt-4">
                                <div class="row">
                                    <div class="col-2">
                                        <div class="upload-btn-wrapper">
                                            <img src="https://via.placeholder.com/50" class="upload-icon" alt="Upload Icon">
                                            <input type="file" name="foto_utama">
                                        </div>
                                        <div class="upload-label">Video</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                    {{-- deskripsi --}}
                    <div class="row">
                        <div class="col-4">
                            <p class="font-weight-bold text-green">Deskripsi Jasa <span class="badge rounded-pill text-bg-success">Wajib diisi</span></p>
                            <p>Pastikan deskripsi memuat penjelasan detail terkait produk Anda agar pembeli mudah mengerti dan menemukan jasa Anda.</p>
                            <p>Disarankan untuk tidak memasukkan info nomor HP, e-mail, dsb. ke dalam deskripsi produk untuk melindungi data pribadi Anda.</p>
                        </div>
                        <div class="col-8">
                            <textarea class="form-control" aria-label="With textarea"></textarea>
                        </div>
                    </div> 
                </div>
            </div>
            {{-- Harga Jasa --}}
            <div class="card">
                <div class="card-body">
                    <h5 class="font-weight-bold text-green">Harga Jasa</h5>
                    <br>
                    <div class="row">
                        <div class="col-4">
                            <p class="font-weight-bold text-green">Harga <span class="badge rounded-pill text-bg-success">Wajib diisi</span></p>
                            <p>Pastikan harga yang dicantumkan sudah sesuai</p>
                            <p>Tulis seperti contoh:
                                100.000</p>
                        </div>
                        <div class="col-1"><p>Rp. </p></div>
                        <div class="col-7">
                            <input type="number" class="form-control" placeholder="Misal, 100.000" aria-label="Harga Jasa" aria-describedby="basic-addon1">
                        </div>
                    </div> 
                    {{-- satuan harga --}}                   
                    <div class="row">
                        <div class="col-4">
                            <p class="font-weight-bold text-green">Satuan Harga <span class="badge rounded-pill text-bg-success">Wajib diisi</span></p>
                            <p>Tulis satuan harga seperti contoh di bawah</p>
                            <p>per hari, per 2 jam, per 10 menit</p>
                        </div>
                        <div class="col-1"><p>Rp. </p></div>
                        <div class="col-7">
                            <input type="number" class="form-control" placeholder="Misal, hari" aria-label="Harga Jasa" aria-describedby="basic-addon1">
                        </div>
                    </div> 
                </div>
            </div>
            
        </div>
    </div>
</div>