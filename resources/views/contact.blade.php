@extends('template.layout')
@section('content')
    <div class="container-fluid position-relative mb-4" data-aos="fade-up"
        style="background-image: url('{{ asset('images/kill.png') }}'); background-size: cover; background-position: center; min-height: 30vh; overflow: hidden;">
        <div class="position-absolute top-0 start-0 w-100 h-100"
            style="backdrop-filter: blur(2px); background-color: #132a807b; z-index: 1;"></div>
        <div class="row position-relative" style="margin-left: 30px; z-index: 2;">
            <h1 class="fw-bold text-light d-flex justify-content-center align-items-center" style="margin-top: 60px">Kontak
            </h1>
            <p class="text-light text-center">Apakah Anda memiliki pertanyaan atau ingin berkonsultasi dengan tim kami?
                Jangan ragu untuk menghubungi kami.</p>
        </div>
    </div>

    <h1 class="fw-bold text-center mb-4" data-aos="fade-up">Hubungi Kami</h1>
    <div class="d-flex">

        <!-- Card Informasi Kontak -->
        <div class="card mb-5 bg bg-primary rounded"
            style="max-width: 500px; height: 400px; margin-left: 110px; padding: 20px;" data-aos="fade-up">
            <h2 class="mt-2 fw-bold text-light">Informasi Kontak</h2>
            <div class="mt-3" style="margin-left: 25px;">
                <h4 class="text-light fw-bold mb-1"><i class="fas fa-map-marker-alt me-2"></i>Alamat Kami</h4>
                <p class="text-light" style="max-width: 250px; margin-left: 25px;">Jakarta Utara, Indonesia</p>
                <h4 class="text-light fw-bold mb-1"><i class="fas fa-phone me-2"></i>Hubungi Kami</h4>
                <p class="text-light" style="max-width: 250px; margin-left: 25px;">+62-877-8222-2422</p>
                <h4 class="text-light fw-bold mb-1"><i class="fas fa-envelope me-2"></i>Email Kami</h4>
                <p class="text-light" style="max-width: 250px; margin-left: 25px;">dufan@ancol.com</p>
                <h4 class="text-light fw-bold mb-1"><i class="fa-solid fa-clock me-2"></i>Jam Operasional</h4>
                <p class="text-light" style="max-width: 250px; margin-left: 25px;">Senin - Minggu: 10:00 - 17:00</p>
            </div>
        </div>

        <!-- Card Form Kontak -->
        <div class="card"
            style="width: 800px; height: 400px; margin-left: 50px; padding: 20px; box-shadow: 2px 2px 2px rgba(0, 0, 0, 0.219);"
            data-aos="fade-up">
            <form>
                <div class="d-flex">
                    <div class="mb-3 w-50">
                        <label for="exampleInputName" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control" id="exampleInputName" placeholder="Nama lengkap" aria-describedby="nameHelp">
                    </div>
                    <div class="mb-3" style="margin-left: 30px; width: 50%;">
                        <label for="exampleInputEmail" class="form-label">Email</label>
                        <input type="text" class="form-control" id="exampleInputEmail" placeholder="example@gmail.com" aria-describedby="emailHelp">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputSubjek" class="form-label">Subjek</label>
                    <input type="text" class="form-control" id="exampleInputSubjek" placeholder="Subjek pesan">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Pesan</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Ketik pesan disini" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary w-100">Kirim</button>
            </form>
        </div>
    </div>
@endsection
