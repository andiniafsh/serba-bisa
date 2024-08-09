<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Serba-Bisa | Profil Mitra</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ url('css/style.css') }}">
    <link rel="stylesheet" href="{{ url('css/body.css') }}">
    <link rel="stylesheet" href="{{ url('css/profil.css') }}">
    <style>
        .activity-box {
            background-color: #ffffff; /* Warna background dari kotak */
            border-radius: 8px;        /* Membuat sudut kotak menjadi bulat */
            padding: 20px;             /* Memberikan ruang di dalam kotak */
            text-align: center;        /* Mengatur teks agar berada di tengah */
            margin: 10px;              /* Memberikan jarak antara kotak-kotak */
        }
        .activity-box h3 {
            font-size: 24px;           /* Ukuran font angka */
            color: #28a745;            /* Warna hijau untuk angka */
            margin: 0;                 /* Menghapus margin atas dan bawah */
        }
        .custom-checkbox:checked {
        background-color: #28a745; /* Bootstrap's green color */
        border-color: #28a745; /* Bootstrap's green color */
    }
    </style>
</head>
<body>
    <!--Navbar-->
    @include('partials.header')
    @include('partials.breadcrumb')
    @include('partials.profil-mitra')
    @include('partials.footer')

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
</body>
</html>