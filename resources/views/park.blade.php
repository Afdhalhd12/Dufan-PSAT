@extends('template.layout')
{{-- extends = memangil file template --}}

@section('content')
    <div class="container-fluid position-relative mb-5"
        style="background-image: url('{{ asset('images/kill.png') }}'); background-size: cover; background-position: center; min-height: 30vh; overflow: hidden;">
        <div class="position-absolute top-0 start-0 w-100 h-100"
            style="backdrop-filter: blur(2px); background-color: #132a807b; z-index: 1;"></div>
        <div class="row position-relative" style="margin-left: 30px; z-index: 2;">
            <h1 class="fw-bold text-light d-flex justify-content-center align-items-center" style="margin-top: 60px">WAHANA</h1>
            <p class="text-light text-center">Yuk, kenalan dengan wahana favorit pengunjung</p>
        </div>
    </div>


    <div class="card mt-3 mb-5 wahana" style="min-height:50vh; max-width: 90%; margin-left:65px;" id="halilintar">
        <div class="d-flex align-items-start">
            <!-- Carousel -->
            <div id="carouselExampleSlidesOnly" class="carousel slide me-4" style="max-width:40%;" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('images/halilintar2.jpg') }}" class="rounded" alt="..."
                            style="height: 400px">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/halilintar.jpg') }}" class="rounded" alt="..."
                            style="height: 400px">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/halilintar3.jpg') }}" class="rounded" alt="..."
                            style="height: 400px">
                    </div>
                </div>
            </div>

            <!-- Text -->
            <div style="margin-top: 50px; text-align: justify;">
                <h1 class="m-0 fw-bold">Halilintar</h1>
                <hr>
                <p class="mt-2" style="max-width: 600px;">Menjadi salah satu wahana favorit dan ekstrim di Dufan, wahana
                    Halilintar mampu menguji adrenalin Anda untuk bukan hanya merasakan seluncuran dengan loop 360°, tapi
                    juga lintasan turunan dan tanjakan yang tinggi dan cukup menikung. Berkapasitas 24 orang, wahana ini
                    mampu membuat Anda serta kerabat dan teman-teman berteriak histeris untuk melupakan segala kejenuhan
                    dari rutinitas sehari-hari.</p>
            </div>
        </div>
    </div>

    <div class="card mt-5 mb-5 wahana" style="min-height:50vh; max-width: 90%; margin-left:65px;" id="bianglala">
        <div class="d-flex align-items-start">
            <!-- Text -->
            <div style="margin-top: 50px; text-align: justify; margin-left: 90px;">
                <h1 class="m-0 fw-bold">Bianglala</h1>
                <hr>
                <p class="mt-2" style="max-width: 700px;">Tak lengkap kunjungan ke Dufan tanpa menikmati wahana Bianglala,
                    sebuah kincir besar yang siap membawa Anda ke ketinggian ± 30 meter dpl.
                    Berkapasitas 180 orang, wahana ini tentunya lebih tepat untuk dinikmati bersama keluarga, teman, dan
                    kerabat. Walaupun dapat dinikmati kapan saja, tetapi banyak pengunjung yang memilih untuk menikmati
                    wahana ini di sore hari karena selain dapat menikmati pemandangan pantai dari ketinggian yang paling
                    atas, mereka juga dapat menikmati romantisme terbenamnya matahari yang silih berganti dengan gemerlap
                    lampu-lampu Ancol Taman Impian.</p>
            </div>
            <!-- Carousel -->
            <div id="carouselExampleSlidesOnly" class="carousel slide me-10" style="max-width:45%; margin-left: 80px;"
                data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('images/bianglala.jpg') }}" class="rounded" alt="..." style="height: 400px;">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/bianglala1.jpg') }}" class="rounded" alt="..."
                            style="height: 400px;">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/bianglala2.jpg') }}" class="rounded" alt="..."
                            style="height: 400px;">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card mt-5 mb-5 wahana" style="min-height:50vh; max-width: 90%; margin-left:65px;" id="tornado" >
        <div class="d-flex align-items-start">
            <!-- Carousel -->
            <div id="carouselExampleSlidesOnly" class="carousel slide me-4" style="max-width:40%;" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('images/tornado.jpg') }}" class="rounded" alt="..." style="height: 400px">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/tornado1.jpg') }}" class="rounded" alt="..." style="height: 400px">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/tornado2.jpg') }}" class="rounded" alt="..." style="height: 400px">
                    </div>
                </div>
            </div>

            <!-- Text -->
            <div style="margin-top: 50px; text-align: justify;">
                <h1 class="m-0 fw-bold">Tornado</h1>
                <hr>
                <p class="mt-2" style="max-width: 600px;">Wahana paling atraktif karena tidak hanya menegangkan tapi juga
                    menghibur. Wahana ini merupakan kelas paling canggih dari jenis permainan Top Spin yang ada di dunia
                    yang mana kedua lengan utamanya bisa bergerak secara bebas. Beroperasi sejak 2007 dan asal negara
                    pembuatannya dari Italia dengan kapasitas sebesar 40 orang.
                    Anda akan diajak berputar secara bebas dan duduk terbalik secara tiba-tiba.</p>
            </div>
        </div>
    </div>
@endsection
