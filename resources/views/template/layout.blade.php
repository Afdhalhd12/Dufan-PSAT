<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css">
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
        integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

</head>

<body>
    <nav class="navbar navbar-expand-lg  p-3 position-sticky niv" style="top: 0; z-index:3;">
        <div class="container-fluid">
            <a class="navbar-brand text-primary fw-bold" href="{{ route('home') }}"><img
                    src="{{ asset('images/duffan.png') }}" alt="Logo" width="50" height="50">DUFAN</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <ul class="nav justify-content-end">
                <li class="nav-item animasi">
                    <a class="nav huruf" aria-current="page" href="{{ route('home') }}">Beranda</a>
                </li>
                <li class="nav-item animasi">
                    <a class="nav huruf" href="{{ route('park') }}">Wahana</a>
                </li>
                <li class="nav-item animasi">
                    <a class="nav huruf" href="{{ route('contact') }}">Kontak</a>
                </li>
            </ul>
    </nav>


    @yield('content')

    <footer class="bg-dark text-white py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4">
                    <h5 class="fw-bold mb-3">Dufan</h5>
                    <p class="text-light" style="text-align: justify">Dunia Fantasi adalah sebuah Taman hiburan yang
                        terletak di kawasan Taman Impian Ancol, Jakarta Utara, Indonesia yang diresmikan dan dibuka
                        untuk umum pada tanggal 29 Agustus 1985.</p>
                    <div class="social-links">
                        <a href="https://www.facebook.com/ancoltmnimpian" class="text-white me-3"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://www.instagram.com/infodufan?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" class="text-white me-3"><i class="fab fa-instagram"></i></a>
                        <a href="https://youtube.com/@ancoltamanimpian?si=zLrxbl56_eg5yHvr" class="text-white"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6">
                    <h6 class="fw-bold mb-3">Quick Links</h6>
                    <ul class="list-unstyled">
                        <li><a href="{{route('home')}}" class="text-light text-decoration-none">Beranda</a></li>
                        <li><a href="{{route('park')}}" class="text-light text-decoration-none">Wahana</a></li>
                        <li><a href="{{route('contact')}}" class="text-light text-decoration-none">Kontak</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h6 class="fw-bold mb-3">Info Kontak</h6>
                    <p class="text-light mb-1"><i class="fas fa-map-marker-alt me-2"></i>Jakarta, Indonesia</p>
                    <p class="text-light mb-1"><i class="fas fa-phone me-2"></i>+62-877-8222-2422</p>
                    <p class="text-light"><i class="fas fa-envelope me-2"></i>dufan@ancol.com</p>
                </div>
                <div class="col-lg-3">
                    <h6 class="fw-bold mb-3"> Wahana & Promo</h6>
                    <p class="text-light mb-3">Temukan info seputar wahana baru, tiket hemat, dan event seru!</p>
                </div>
            </div>
            <hr class="my-4">
            <div class="row">
                <div class="col-12 text-center">
                    <p class="text-light mb-0">&copy;Copyright 2025 Dunia Fantasi. All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.min.js"
        integrity="sha384-RuyvpeZCxMJCqVUGFI0Do1mQrods/hhxYlcVfGPOfQtPJh0JCw12tUAZ/Mv10S7D" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>
