@extends('layouts.dashboard')

@section('title', 'Services - Laundry Online')

@section('content')

    <!-- header body -->
    <div class="overflow-hidden py-9 py-xl-10 position-relative">
        <img src="./assets/img/bg/bg1.jpg" class="position-absolute z-n1 top-0 h-100 w-100 object-fit-cover" alt="Meeting">

        <div class="position-absolute z-n1 top-0 h-100 w-100 bg-dark"
            style="opacity: 0.85; mix-blend-mode: multiply; filter: contrast(1.15) brightness(0.85);">
        </div>

        <div class="position-absolute z-0 top-0 h-100 w-100">
            <div class="container h-100 d-flex align-items-center">
                <div class="max-w-2xl mx-auto mx-xl-0 text-center text-xl-start">
                    <h1 class="m-0 mt-7 text-white tracking-tight text-6xl fw-bold" data-aos-delay="0" data-aos="fade"
                        data-aos-duration="3000">
                        Laundry Kiloan
                    </h1>
                    <p class="m-0 mt-4 text-white text-lg leading-8" data-aos-delay="100" data-aos="fade"
                        data-aos-duration="3000">
                        Selamat Datang di Layanan Laundry Kiloan VIPLaundry.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Service 1 -->
    <div class="overflow-hidden py-7 py-sm-8 py-xl-9">
        <div class="container">
            <div class="row gy-5 align-items-center justify-content-between">
                <div class="col-12 col-xl-5">
                    <div class="mx-auto max-w-2xl">
                        <h2 class="m-0 text-primary-emphasis text-base leading-7 fw-semibold">
                            Layanan
                        </h2>
                        <p class="m-0 mt-2 text-body-emphasis text-4xl tracking-tight fw-bold">
                            Laundry Kiloan
                        </p>
                        <p class="m-0 mt-4 text-body-secondary text-lg leading-8">
                            Solusi mudah untuk pakaian sehari-hari Anda! Dengan layanan laundry kiloan kami, Anda hanya
                            perlu menimbang pakaian, dan kami akan mengurus sisanya. Cocok untuk kebutuhan mencuci rutin
                            dengan harga yang terjangkau dan hasil yang bersih serta harum.
                        </p>
                    </div>
                </div>

                <!-- Card 1 -->
                <div class="col-md-4">
                    <div class="card">
                        <img src="./assets/img/bg/bg4.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Laundry Kiloan</h5>
                            <p class="card-text">Solusi mencuci pakaian sehari-hari Anda dengan mudah dan cepat!</p>
                            <a href="#" class="btn btn-primary text-white">Pesan Sekarang</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Back to top button -->
    <button type="button"
        class="btn btn-primary btn-back-to-top rounded-circle justify-content-center align-items-center p-2 text-white">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
            class="bi bi-caret-up-fill" viewBox="0 0 16 16">
            <path
                d="m7.247 4.86-4.796 5.481c-.566.647-.106 1.659.753 1.659h9.592a1 1 0 0 0 .753-1.659l-4.796-5.48a1 1 0 0 0-1.506 0z" />
        </svg>
    </button>

@endsection
