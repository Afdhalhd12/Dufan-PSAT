@extends('template.layout')
{{-- extends = memangil file template --}}

@section('content')
    <div class="container-fluid position-relative" data-aos="zoom-in"
        style="background-image: url('{{ asset('images/juki.jpg') }}'); background-size: cover; background-position: center; min-height: 92vh; overflow: hidden;">
        <div class="position-absolute top-0 start-0 w-100 h-100"
            style="backdrop-filter: blur(2px); background-color: #132a807b; z-index: 1;"></div>
        <div class="row position-relative" style="margin-left: 30px; z-index: 2;">
            <div class="col-md-12 text-left text-light" style="max-width: 700px; margin-top: 150px;">
                <h1 class="fw-bold">Selamat Datang di Dufan</h1>
                <p>
                    Dunia Fantasi adalah sebuah Taman hiburan yang terletak di kawasan Taman Impian Ancol, Jakarta Utara,
                    Indonesia yang diresmikan dan dibuka untuk umum pada tanggal 29 Agustus 1985.
                </p>
            </div>
            <div class="d-grid gap-2 d-md-block mt-3">
                <button class="btn btn-primary" type="button" onclick="window.location.href='{{ url('park') }}'">Wahana</button>
                <button class="btn btn-light" type="button" onclick="window.location.href='{{ url('contact')}}'">Kontak</button>
            </div>
        </div>
    </div>

    <div class="mt-3" style="background-color: rgb(255, 255, 255); padding-bottom: 100px; padding-top: 50px;" data-aos="fade-up">
        <h1 class="fw-bold text-center">Kenapa Harus Ke Dufan?</h1>
        <p class="text-center">Dunia Fantasi selalu berinovasi</p>

        <div class="d-flex justify-content-center flex-wrap gap-5 mt-4 mb-5">
            <div class="card text-center p-3 kartu">
                <h1 class="pt-3"><i class="fa-solid fa-gamepad"></i></h1>
                <h4 class="pt-5 fw-bold">Wahana Seru & Lengkap</h4>
                <p>Mulai dari yang memacu adrenalin hingga yang ramah keluarga, semua bisa dinikmati di satu tempat.</p>
            </div>
            <div class="card text-center p-3 kartu">
                <h1 class="pt-3"><i class="fa-solid fa-music"></i></h1>
                <h4 class="pt-5 fw-bold">Hiburan Langsung yang Memukau</h4>
                <p>Nikmati parade, pertunjukan musik, hingga event musiman yang menghadirkan dunia fantasi jadi nyata.</p>
            </div>
            <div class="card text-center p-3 kartu">
                <h1 class="pt-3"><i class="fa-solid fa-camera"></i></h1>
                <h4 class="pt-5 fw-bold">Spot Foto Instagramable</h4>
                <p>Setiap sudut Dufan dirancang tematik dan estetik sempurna untuk foto-foto memorable.</p>
            </div>
        </div>
    </div>

    <div class="mt-3" style="background-color: #f8f9fa; padding-bottom: 100px; padding-top: 50px;" data-aos="zoom-in">
        <h1 class="fw-bold text-center">Top 3 Wahana Di Dufan</h1>
        <p class="text-center">Jelajahi Petualangan Tak Terlupakan</p>


        <div class="d-flex justify-content-center align-items-center gap-4 flex-wrap mt-4 mb-5 p-5">
            <div class="image-wrapper but">
                <img src="{{ asset('images/halilintar.jpg') }}" class="rounded sudah"
                    style="height: 250px; width: 400px; object-fit: cover; " alt="Halilintar" >
                  <button type="button" class="hover-button btn btn-primary"  onclick="window.location.href='{{ url('/park#halilintar') }}'">Lihat Detail</button>
            </div>
            <div class="image-wrapper but">
                <img src="{{ asset('images/bianglala.jpg') }}" class="rounded sudah"
                    style="height: 250px; width: 400px; object-fit: cover; " alt="Bianglala">
                <button type="button" class="hover-button btn btn-primary" onclick="window.location.href='{{ url('/park#bianglala') }}'">Lihat Detail</button>
            </div>
            <div class="image-wrapper but">
                <img src="{{ asset('images/tornado.jpg') }}" class="rounded sudah"
                    style="height: 250px; width: 400px; object-fit: cover; " alt="Tornado">
                <button type="button" class="hover-button btn btn-primary" onclick="window.location.href='{{ url('/park#tornado') }}'">Lihat Detail</button>
            </div>
            </div>
        </div>

<div class="mt-3" style="background-color: rgb(255, 255, 255); padding-bottom: 100px; padding-top: 50px;" data-aos="fade-up">
        <h1 class="fw-bold text-center">Ulasan Pengunjung</h1>
        <p class="text-center">Ulasan dari beberapa Pengunjung</p>

        <div class="d-flex justify-content-center flex-wrap gap-5 mt-4 mb-5">
            <div class="card text-left p-3 kartu1">
                <img src="{{ asset('images/kdm1.jpg') }}" class="rounded-circle" style="width: 70px; height: 70px;" alt="Hiburan">
                <div class="stars mt-2">
                    <i class="fas fa-star text-warning"></i>
                    <i class="fas fa-star text-warning"></i>
                    <i class="fas fa-star text-warning"></i>
                    <i class="fas fa-star text-warning"></i>
                    <i class="fas fa-star text-secondary"></i>
                </div>
                <h1 class="fw-bold">Kang Dedi Mulyadi</h1>
                <p style="text-align: justify">Tempatnya cocok buat rekreasi sama keluarga cuma harga tiket masih lumayan. Tp dengan harga segitu bisa nikmati hampir semua wahana</p>
            </div>
            <div class="card text-left p-3 kartu1">
                <img src="{{ asset('images/brando.jpg') }}" class="rounded-circle" style="width: 70px; height: 70px;" alt="Hiburan">
                <div class="stars mt-2">
                    <i class="fas fa-star text-warning"></i>
                    <i class="fas fa-star text-warning"></i>
                    <i class="fas fa-star text-warning"></i>
                    <i class="fas fa-star text-warning"></i>
                    <i class="fas fa-star text-warning"></i>
                </div>
                <h1 class="fw-bold">Windah Basudara</h1>
                <p style="text-align: justify">Wih, gila sih Dufan! Seru banget, bro! Dari naik Halilintar sampe Bianglala, jantung gua hampir copot, tapi nagih! Wajib cobain kalo lagi di Jakarta. Full hiburan, full jerit-jerit, tapi asik.</p>
            </div>
            <div class="card text-left p-3 kartu1">
                <img src="{{ asset('images/miawaug.jpg') }}" class="rounded-circle" style="width: 70px; height: 70px;" alt="Hiburan">
                <div class="stars mt-2">
                    <i class="fas fa-star text-warning"></i>
                    <i class="fas fa-star text-warning"></i>
                    <i class="fas fa-star text-warning"></i>
                    <i class="fas fa-star text-warning"></i>
                    <i class="fas fa-star text-warning"></i>
                </div>
                <h1 class="fw-bold">MiawAug</h1>
                <p style="text-align: justify">seruuu bangettt, tapi sarann mending fast track guys, walaupun mahal setidaknya bisa duluan makai fasilitas, ngantri lama, sekalipun gaa weekend.</p>
            </div>
        </div>
    </div>

@endsection
