@extends('layouts.app')

@section('title', 'Home - Laundry Online')

@section('content')

    <!-- Hero Section -->
    <div class="overflow-hidden position-relative">
        <img src="./assets/img/bg/bg1.jpg" class="position-absolute z-n1 top-0 h-100 w-100 object-fit-cover" alt="Meeting">

        <div class="overlay position-absolute z-n1 top-0 h-100 w-100 bg-dark"
            style="opacity: 0.85; mix-blend-mode: multiply; filter: contrast(1.15) brightness(0.85);">
        </div>

        <div class="container">
            <div class="min-vh-100 row align-items-center">
                <div class="col-12 col-xl-8">
                    <div class="pt-9 pt-md-10 pt-xl-11 pb-7 pb-md-8 pb-xl-9 max-w-2xl mx-auto mx-xl-0">
                        <div class="mt-4 pt-2">
                            <div class="text-center text-xl-start">
                                <h1 class="m-0 text-white tracking-tight text-6xl fw-bold" data-aos-delay="0"
                                    data-aos="fade" data-aos-duration="3000">
                                    VIP Laundry.
                                </h1>
                                <p class="m-0 mt-4 text-white text-lg leading-8" data-aos-delay="100" data-aos="fade"
                                    data-aos-duration="3000">
                                    #Deket,Gapake Ribet
                                </p>
                                <div
                                    class="mt-4 pt-3 d-flex align-items-center justify-content-center justify-content-xl-start column-gap-3">
                                    <a href="javascript:;" class="btn btn-lg btn-primary text-white text-sm fw-semibold"
                                        data-aos-delay="200" data-aos="fade" data-aos-duration="3000">
                                        Hubungi Kami
                                    </a>
                                    <a href="{{ route('login') }}"
                                        class="btn btn-lg text-white icon-link icon-link-hover bg-secondary-hover text-sm leading-6 fw-semibold"
                                        data-aos-delay="300" data-aos="fade" data-aos-duration="3000">
                                        Mulai Sekarang
                                        <span class="bi align-self-start left-to-right" aria-hidden="true">→</span>
                                        <span class="bi align-self-start right-to-left" aria-hidden="true">←</span>
                                    </a>
                                </div>
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
                    <p class="m-0 mt-2 text-body-emphasis text-4xl tracking-tight fw-bold">
                        Nikmati Layanan Laundry VIP Kami
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
                                <img src="./assets/img/bg/bg2.jpg" class="object-fit-cover rounded-3" alt="Service image"
                                    loading="lazy">
                            </div>

                            <h3 class="m-0 mt-4 text-body-emphasis text-lg leading-6 fw-semibold">
                                Material Ramah Lingkungan
                            </h3>

                            <!-- Remove line-clamp-2 if you need more lines or add line-clamp-3 -->
                            <p class="m-0 mt-3 text-body-secondary line-clamp-2 text-sm leading-6">
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugit est cumque beatae vero
                                debitis quaerat consectetur atque saepe nostrum inventore aliquid, voluptatibus, ab, minima
                                aperiam qui dolorem ullam eveniet iusto.
                            </p>
                        </div>
                    </div>

                    <div class="col pt-5 pt-xl-4">
                        <div class="max-w-xl mx-auto mx-xl-0" data-aos-delay="100" data-aos="fade" data-aos-duration="1000">
                            <div class="ratio" style="--bs-aspect-ratio: 66.66%;">
                                <img src="./assets/img/bg/bg3.jpg" class="object-fit-cover rounded-3" alt="Service image"
                                    loading="lazy">
                            </div>

                            <h3 class="m-0 mt-4 text-body-emphasis text-lg leading-6 fw-semibold">
                                Layanan Cuci dan Lipat
                            </h3>

                            <!-- Remove line-clamp-2 if you need more lines or add line-clamp-3 -->
                            <p class="m-0 mt-3 text-body-secondary line-clamp-2 text-sm leading-6">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Commodi reiciendis, soluta modi
                                exercitationem, dolorem cupiditate deleniti placeat ea sed natus labore earum obcaecati
                                inventore aperiam perspiciatis odio dicta? Eaque, officiis.
                            </p>
                        </div>
                    </div>

                    <div class="col pt-5 pt-xl-4">
                        <div class="max-w-xl mx-auto mx-xl-0" data-aos-delay="200" data-aos="fade" data-aos-duration="1000">
                            <div class="ratio" style="--bs-aspect-ratio: 66.66%;">
                                <img src="./assets/img/bg/bg4.jpg" class="object-fit-cover rounded-3" alt="Service image"
                                    loading="lazy">
                            </div>

                            <h3 class="m-0 mt-4 text-body-emphasis text-lg leading-6 fw-semibold">
                                Pengambilan dan Pengiriman Cepat
                            </h3>

                            <!-- Remove line-clamp-2 if you need more lines or add line-clamp-3 -->
                            <p class="m-0 mt-3 text-body-secondary line-clamp-2 text-sm leading-6">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis quibusdam hic dicta
                                possimus doloribus architecto? Eveniet alias dolor aut quae possimus ex eum, qui doloribus
                                dolorem harum, quia incidunt reprehenderit.
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

    <!-- About Us -->
    <div class="overflow-hidden py-7 py-sm-8 py-xl-9">
        <div class="container">
            <div class="row gy-5 align-items-center justify-content-between">
                <div class="col-12 col-xl-5 order-last">
                    <div class="mx-auto max-w-2xl">
                        <h2 class="m-0 text-primary-emphasis text-base leading-7 fw-semibold">
                            Tentang Kami
                        </h2>
                        <p class="m-0 mt-2 text-body-emphasis text-4xl tracking-tight fw-bold">
                            Making laundry a breeze, one clean garment at a time.
                        </p>
                        <p class="m-0 mt-4 text-body-secondary text-lg leading-8">
                            Welcome to Freshen, your premier laundry service in New York, NY. We are dedicated to providing
                            top-quality, convenient, and affordable laundry solutions to our valued customers.
                        </p>
                        <div class="mt-4">
                            <a href="/about"
                                class="icon-link icon-link-hover text-decoration-none text-sm leading-6 fw-bold">
                                Tentang Kami
                                <span class="bi align-self-start left-to-right" aria-hidden="true">→</span>
                                <span class="bi align-self-start right-to-left" aria-hidden="true">←</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-xl-6">
                    <div class="mx-auto max-w-2xl">
                        <div class="ratio ratio-4x3" data-aos-delay="0" data-aos="fade" data-aos-duration="3000">
                            <img src="./assets/img/bg/bg5.jpg" class="object-fit-cover rounded-3" alt="about us"
                                loading="lazy">
                        </div>
                    </div>
                </div>
            </div>

            <!-- big image -->
            <div class="ratio ratio-16x9 mt-7 mt-sm-8 mt-xl-9">
                <img src="./assets/img/bg/bg6.jpg" class="object-fit-cover rounded-3" alt="presentation" loading="lazy">
            </div>
        </div>
    </div>

    <!-- Testimonials -->
    <div class="overflow-hidden py-7 py-sm-8 py-xl-9 bg-body-secondary">
        <div class="container">
            <div id="carouselExampleIndicators" class="carousel slide pb-5">
                <div class="carousel-indicators mb-0">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                        class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="mx-auto max-w-4xl text-center">
                            <img class="mx-auto" src="./assets/img/clients/logo1.png" height="48"
                                alt="Client Company" loading="lazy">
                            <figure class="m-0 mt-5">
                                <blockquote class="text-center fw-semibold text-body-emphasis text-2xl leading-9">
                                    <p class="m-0">
                                        “ Freshen is fantastic! Their laundry service is top-notch, and the staff is
                                        friendly and professional. I was impressed by the quality of their work and their
                                        attention to detail. Thank you, Freshen, for taking care of my laundry needs! ”
                                    </p>
                                </blockquote>

                                <figcaption class="m-0 mt-5">
                                    <img class="mx-auto rounded-circle" width="40" height="40"
                                        src="./assets/img/small-team/st1.jpg" alt="Clinet Name" loading="lazy">
                                    <div class="mt-3 d-flex align-items-center justify-content-center text-base">
                                        <div class="fw-semibold text-body-emphasis">John Bond</div>
                                        <svg viewBox="0 0 2 2" width="3" height="3" aria-hidden="true"
                                            class="mx-3 text-body-emphasis" fill="currentColor">
                                            <circle cx="1" cy="1" r="1" />
                                        </svg>
                                        <div class="text-body-secondary">CEO of Aven</div>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="mx-auto max-w-4xl text-center">
                            <img class="mx-auto" src="./assets/img/clients/logo2.png" height="48"
                                alt="Client Company" loading="lazy">
                            <figure class="m-0 mt-5">
                                <blockquote class="text-center fw-semibold text-body-emphasis text-2xl leading-9">
                                    <p class="m-0">
                                        “ Freshen is fantastic! Their laundry service is top-notch, and the staff is
                                        friendly and professional. I was impressed by the quality of their work and their
                                        attention to detail. Thank you, Freshen, for taking care of my laundry needs! ”
                                    </p>
                                </blockquote>

                                <figcaption class="m-0 mt-5">
                                    <img class="mx-auto rounded-circle" width="40" height="40"
                                        src="./assets/img/small-team/st2.jpg" alt="Client name" loading="lazy">
                                    <div class="mt-3 d-flex align-items-center justify-content-center text-base">
                                        <div class="fw-semibold text-body-emphasis">Judith Bond</div>
                                        <svg viewBox="0 0 2 2" width="3" height="3" aria-hidden="true"
                                            class="mx-3 text-body-emphasis" fill="currentColor">
                                            <circle cx="1" cy="1" r="1" />
                                        </svg>
                                        <div class="text-body-secondary">CEO of Circle</div>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="mx-auto max-w-4xl text-center">
                            <img class="mx-auto" src="./assets/img/clients/logo3.png" height="48"
                                alt="Client Company" loading="lazy">
                            <figure class="m-0 mt-5">
                                <blockquote class="text-center fw-semibold text-body-emphasis text-2xl leading-9">
                                    <p class="m-0">
                                        “ Freshen is fantastic! Their laundry service is top-notch, and the staff is
                                        friendly and professional. I was impressed by the quality of their work and their
                                        attention to detail. Thank you, Freshen, for taking care of my laundry needs! ”
                                    </p>
                                </blockquote>

                                <figcaption class="m-0 mt-5">
                                    <img class="mx-auto rounded-circle" width="40" height="40"
                                        src="./assets/img/small-team/st3.jpg" alt="Client name" loading="lazy">
                                    <div class="mt-3 d-flex align-items-center justify-content-center text-base">
                                        <div class="fw-semibold text-body-emphasis">Alex Bond</div>
                                        <svg viewBox="0 0 2 2" width="3" height="3" aria-hidden="true"
                                            class="mx-3 text-body-emphasis" fill="currentColor">
                                            <circle cx="1" cy="1" r="1" />
                                        </svg>
                                        <div class="text-body-secondary">CEO of Amara</div>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev d-none d-xl-inline" type="button"
                    data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon rtl-flip" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next d-none d-xl-inline" type="button"
                    data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon rtl-flip" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>

    <!-- Client -->
    <div class="overflow-hidden py-6 py-sm-7 py-xl-8 bg-body-tertiary">
        <div class="container">
            <div class="max-w-2xl">
                <h2 class="m-0 text-primary-emphasis text-base leading-7 fw-semibold">
                    Our Clients
                </h2>
                <div class="m-0 mt-2 text-body-emphasis text-4xl tracking-tight fw-bold">
                    We're fortunate to have incredible clients.
                </div>
            </div>

            <div class="mt-4">
                <div class="glide glideHighLinear">
                    <div class="glide__track" data-glide-el="track">
                        <ul class="glide__slides align-items-center">
                            <li class="glide__slide">
                                <div class="p-5">
                                    <img src="./assets/img/clients/produk1.png" class="img-fluid" alt="clients">
                                </div>
                            </li>
                            <li class="glide__slide">
                                <div class="p-5">
                                    <img src="./assets/img/clients/produk2.png" class="img-fluid" alt="clients">
                                </div>
                            </li>
                            <li class="glide__slide">
                                <div class="p-5">
                                    <img src="./assets/img/clients/produk3.png" class="img-fluid" alt="clients">
                                </div>
                            </li>
                            <li class="glide__slide">
                                <div class="p-5">
                                    <img src="./assets/img/clients/produk4.png" class="img-fluid" alt="clients">
                                </div>
                            </li>
                            <li class="glide__slide">
                                <div class="p-5">
                                    <img src="./assets/img/clients/produk5.png" class="img-fluid" alt="clients">
                                </div>
                            </li>
                            <li class="glide__slide">
                                <div class="p-5">
                                    <img src="./assets/img/clients/produk6.png" class="img-fluid" alt="clients">
                                </div>
                            </li>
                            <li class="glide__slide">
                                <div class="p-5">
                                    <img src="./assets/img/clients/produk7.png" class="img-fluid" alt="clients">
                                </div>
                            </li>
                            <li class="glide__slide">
                                <div class="p-5">
                                    <img src="./assets/img/clients/produk8.png" class="img-fluid" alt="clients">
                                </div>
                            </li>
                            <li class="glide__slide">
                                <div class="p-5">
                                    <img src="./assets/img/clients/produk3.png" class="img-fluid" alt="clients">
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Contact us -->
    <div id="contact-us" class="overflow-hidden py-7 py-sm-8 py-xl-9">
        <div class="container">
            <div class="row gy-5 gx-sm-5">
                <div class="col-12 col-xl-5 pt-4">
                    <div class="mx-auto max-w-2xl">
                        <h2 class="m-0 text-primary-emphasis text-base leading-7 fw-semibold">
                            Get in touch
                        </h2>
                        <p class="m-0 mt-2 text-body-emphasis text-3xl tracking-tight fw-bold">
                            Have any questions or need assistance? Contact us today!
                        </p>
                    </div>

                    <div class="mx-auto max-w-2xl mt-6">
                        <form class="row g-4 needs-validation" id="myForm" novalidate>
                            <div class="col-md-6">
                                <label for="nameForm" class="form-label text-sm">
                                    Full name
                                    <span class="text-danger-emphasis">*</span>
                                </label>
                                <input type="text" class="form-control form-control-sm" name="nameForm"
                                    id="nameForm" required>
                                <div class="invalid-feedback text-xs">
                                    Please enter your full name.
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label for="emailForm" class="form-label text-sm">
                                    Email address
                                    <span class="text-danger-emphasis">*</span>
                                </label>
                                <input type="email" class="form-control form-control-sm" name="emailForm"
                                    id="emailForm" required>
                                <div class="invalid-feedback text-xs">
                                    Please enter your email address.
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label for="phoneForm" class="form-label text-sm">
                                    Phone number
                                    <span class="text-danger-emphasis">*</span>
                                </label>
                                <input type="text" class="form-control form-control-sm" name="phoneForm"
                                    id="phoneForm" required>
                                <div class="invalid-feedback text-xs">
                                    Please enter your phone number.
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label for="subjectForm" class="form-label text-sm">
                                    Subject
                                    <span class="text-danger-emphasis">*</span>
                                </label>
                                <input type="text" class="form-control form-control-sm" name="subjectForm"
                                    id="subjectForm" required>
                                <div class="invalid-feedback text-xs">
                                    Please enter a subject for your message.
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="messageForm" class="form-label text-sm">
                                    Your message
                                    <span class="text-danger-emphasis">*</span>
                                </label>
                                <textarea class="form-control form-control-sm" name="messageForm" id="messageForm" rows="3" required></textarea>
                                <div class="invalid-feedback text-xs">
                                    Please enter a message.
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="gridCheck" required>
                                    <label class="form-check-label text-sm" for="gridCheck">
                                        I agree to the terms &amp; conditions and privacy policy
                                        <span class="text-danger-emphasis">*</span>
                                    </label>
                                    <div class="invalid-feedback text-xs">
                                        Please agree to the terms &amp; conditions and privacy policy.
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 text-center pt-3">
                                <button type="submit" class="btn btn-lg btn-primary text-white text-sm fw-semibold"
                                    id="sendMessage">
                                    Send message
                                </button>
                            </div>

                            <!-- Alert message  -->
                            <div class="col-12" id="yourMessageIsSent"></div>
                        </form>
                    </div>
                </div>

                <div class="d-none d-xl-block col-12 col-xl-7" data-aos-delay="0" data-aos="fade"
                    data-aos-duration="3000">
                    <div class="h-100 position-relative ms-xxl-5">
                        <div class="position-absolute top-0 end-0 bottom-0 start-0 z-n1 rounded-5">
                            <img src="./assets/img/bg/bg7.jpg" class="w-100 h-100 rounded-3 object-fit-cover"
                                loading="lazy" alt="Image description">
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
