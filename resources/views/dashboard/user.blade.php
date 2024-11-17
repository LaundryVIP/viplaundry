@extends('layouts.dashboard')

@section('title', 'Home - Laundry Online')

@section('content')

    <!-- Hero Section -->
    <div class="overflow-hidden position-relative">
        <img src="./assets/img/bg/bg1.jpg" class="position-absolute z-n1 top-0 h-100 w-100 object-fit-cover" alt="Meeting">
        <div class="overlay position-absolute z-n1 top-0 h-100 w-100 bg-dark"
            style="opacity: 0.85; mix-blend-mode: multiply; filter: contrast(1.15) brightness(0.85);"></div>
        <div class="container">
            <div class="min-vh-100 row align-items-center">
                <div class="col-12 col-xl-8">
                    <div class="pt-9 pt-md-10 pt-xl-11 pb-7 pb-md-8 pb-xl-9 max-w-2xl mx-auto mx-xl-0">
                        <div class="mt-4 pt-2">
                            <div class="text-center text-xl-start">
                                <h1 class="m-0 text-white tracking-tight text-6xl fw-bold" data-aos-delay="0"
                                    data-aos="fade" data-aos-duration="3000">
                                    Selamat Datang di Layanan VIPLaundry Online.
                                </h1>
                                <p class="m-0 mt-4 text-white text-lg leading-8" data-aos-delay="100" data-aos="fade"
                                    data-aos-duration="3000">
                                    #Deket,Gapake Ribet
                                </p>
                                @if (session('success'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        {{ session('success') }}
                                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                                            aria-label="Close"></button>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- services -->
    <div class="overflow-hidden py-7 py-sm-8 py-xl-9 bg-body-tertiary">
        <div class="container">
            <div>
                <div class="mx-auto max-w-2xl text-center">
                    <h2 class="m-0 text-primary-emphasis text-base leading-7 fw-semibold">
                        Layanan Kami
                    </h2>
                    <p class="m-0 mt-2 text-body-emphasis text-3xl tracking-tight fw-bold">
                        Pesan Sekarang dan Nikmati Kemudahan Laundry Tanpa Ribet!
                    </p>
                    {{-- <p class="m-0 mt-4 text-body text-lg leading-8">
                        Experience the power of eco-friendly laundry with our premium detergents
                    </p> --}}
                </div>
            </div>
            <div>
                <div
                    class="row row-cols-1 row-cols-xl-3 gy-5 gx-xl-4 mt-1 justify-content-center justify-content-xl-between">
                    <div class="col pt-5 pt-xl-4">
                        <div class="max-w-xl mx-auto mx-xl-0" data-aos-delay="0" data-aos="fade" data-aos-duration="1000">
                            <div class="ratio" style="--bs-aspect-ratio: 66.66%;">
                                <img src="./assets/img/bg/bg4.jpg" class="object-fit-cover rounded-3" alt="Service image"
                                    loading="lazy">
                            </div>

                            <h3 class="m-0 mt-4 text-body-emphasis text-lg leading-6 fw-semibold">
                                Layanan Laundry Kiloan
                            </h3>

                            <!-- Remove line-clamp-2 if you need more lines or add line-clamp-3 -->
                            <p class="m-0 mt-3 text-body-secondary line-clamp-2 text-sm leading-6">
                                Solusi mudah untuk pakaian sehari-hari Anda! Dengan layanan laundry kiloan kami, Anda hanya
                                perlu menimbang pakaian, dan kami akan mengurus sisanya. Cocok untuk kebutuhan mencuci rutin
                                dengan harga yang terjangkau dan hasil yang bersih serta harum.
                            </p>
                        </div>
                    </div>

                    <div class="col pt-5 pt-xl-4">
                        <div class="max-w-xl mx-auto mx-xl-0" data-aos-delay="100" data-aos="fade" data-aos-duration="1000">
                            <div class="ratio" style="--bs-aspect-ratio: 66.66%;">
                                <img src="./assets/img/bg/bg2.jpg" class="object-fit-cover rounded-3" alt="Service image"
                                    loading="lazy">
                            </div>

                            <h3 class="m-0 mt-4 text-body-emphasis text-lg leading-6 fw-semibold">
                                Layanan Laundry Satuan
                            </h3>

                            <!-- Remove line-clamp-2 if you need more lines or add line-clamp-3 -->
                            <p class="m-0 mt-3 text-body-secondary line-clamp-2 text-sm leading-6">
                                Rawat pakaian istimewa Anda dengan layanan laundry satuan. Cocok untuk pakaian formal
                                seperti jas, gaun, atau pakaian berbahan khusus yang memerlukan perhatian lebih. Kami
                                menjamin pakaian Anda akan kembali dalam kondisi sempurna.
                            </p>
                        </div>
                    </div>

                    <div class="col pt-5 pt-xl-4">
                        <div class="max-w-xl mx-auto mx-xl-0" data-aos-delay="200" data-aos="fade" data-aos-duration="1000">
                            <div class="ratio" style="--bs-aspect-ratio: 66.66%;">
                                <img src="./assets/img/bg/bg3.jpg" class="object-fit-cover rounded-3" alt="Service image"
                                    loading="lazy">
                            </div>

                            <h3 class="m-0 mt-4 text-body-emphasis text-lg leading-6 fw-semibold">
                                Layanan Setrika Kiloan
                            </h3>

                            <!-- Remove line-clamp-2 if you need more lines or add line-clamp-3 -->
                            <p class="m-0 mt-3 text-body-secondary line-clamp-2 text-sm leading-6">
                                Miliki pakaian yang rapi tanpa repot menyetrika dan melipat sendiri! Layanan setrika kiloan
                                dan lipat baju kami memastikan pakaian Anda terlihat rapi dan siap digunakan, langsung dari
                                paket ke lemari.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center pt-7">
                <a href="/services"
                    class="btn btn-lg btn-primary text-white icon-link icon-link-hover text-sm leading-6 fw-semibold">
                    Layanan Kami
                    <span class="bi align-self-start left-to-right" aria-hidden="true">→</span>
                    <span class="bi align-self-start right-to-left" aria-hidden="true">←</span>
                </a>
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
