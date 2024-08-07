<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Serba-Bisa | Tambah Jasa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ url('css/style.css') }}">
    <style>
        body {
            padding-top: 136px; /* Adjust this value based on the height of your navbar */
            padding-left: 35px
        }
    </style>
</head>
<body>
    <!--Navbar-->
    <header>
        <div class="bx bx-menu" id="menu-icon"></div>
        <span class="site-name">SerbaBisa.</span>
        <ul class="navbar d-flex justify-content-center">
            <li class="mx-3" style="flex-grow: 0; width: 500px; margin-left: 0;">
                <div class="input-group rounded">
                    <input type="search" class="form-control rounded" placeholder="Sedang cari jasa apa hari ini" aria-label="Search" aria-describedby="search-addon" />
                    <span class="input-group-text border-0" id="search-addon">
                        <i class='bx bx-search' style="font-size: 30px;"></i>
                    </span>
                </div>
            </li>
            <li class="mx-3">
                <i class='bx bx-cart' style="font-size: 30px"></i>
            </li>
            <li class="mx-3">
                <i class='bx bx-bell' style="font-size: 30px"></i>
            </li>
            <li class="mx-3">
                <i class='bx bx-message-rounded-detail' style="font-size: 30px"></i>
            </li>
            <li class="mx-3 d-flex align-items-center">
                <img src="/img/navbar-pict/Prima Food 39 1.png" alt="" class="rounded-circle" style="width: 30px; height: 30px;">
                <span class="ms-2">
                    <p class="mb-0">Mas Alif</p>
                </span>
            </li>
            <li class="mx-3 d-flex align-items-center">
                <img src="/img/navbar-pict/Columbina.600.3709192 1.png" alt="" class="rounded-circle" style="width: 30px; height: 30px;">
                <span class="ms-2">
                    <p class="mb-0">Poyeksi</p>
                </span>
            </li>
        </ul>
    </header>
          
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><i class='bx bx-home-alt-2' style="font-size: 24px"></i></li>
            <li class="breadcrumb-item">Profil Akun</li>
            <li class="breadcrumb-item active" aria-current="page">Toko Saya</li>
        </ol>
    </nav>

    
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>