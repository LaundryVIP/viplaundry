@extends('layouts.app')

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
                        Layanan Kami
                    </h1>
                    <p class="m-0 mt-4 text-white text-lg leading-8" data-aos-delay="100" data-aos="fade"
                        data-aos-duration="3000">
                        Nikmati Layanan Laundry VIP Kami.
                    </p>
                </div>
            </div>
        </div>
    </div>



    <!-- Why us -->
    <div class="overflow-hidden py-7 py-sm-8 py-xl-9">
        <div class="container">
            <div class="row gy-5 align-items-center justify-content-between">
                <div class="col-12 col-xl-5 order-first order-xl-last">
                    <div class="mx-auto max-w-2xl">
                        <h2 class="m-0 text-primary-emphasis text-base leading-7 fw-semibold">
                            Why Choose Us
                        </h2>
                        <p class="m-0 mt-2 text-body-emphasis text-4xl tracking-tight fw-bold">
                            Experience the power of eco-friendly laundry with our premium detergents
                        </p>
                        <p class="m-0 mt-4 text-body-secondary text-lg leading-8">
                            At Laundry Service, we prioritize the environment by using eco-friendly practices and
                            high-quality detergents. Our commitment to sustainability ensures that your clothes are cleaned
                            effectively while minimizing our impact on the planet.
                        </p>
                    </div>
                </div>

                <div class="col-12 col-xl-6">
                    <div class="mx-auto max-w-2xl">
                        <div class="ratio ratio-4x3" data-aos-delay="200" data-aos="fade" data-aos-duration="3000">
                            <img src="./assets/img/bg/bg9.jpg" class="object-fit-cover rounded-3" alt="presentation">
                        </div>
                    </div>
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
                            Service 1
                        </h2>
                        <p class="m-0 mt-2 text-body-emphasis text-4xl tracking-tight fw-bold">
                            Eco-Friendly Dry Cleaning
                        </p>
                        <p class="m-0 mt-4 text-body-secondary text-lg leading-8">
                            Indulge your delicates in a spa day! Our eco-friendly dry cleaning services safely clean your
                            finest garments, leaving them fresh, free from harsh chemicals, and looking their absolute best.
                            Breathe easy knowing you're caring for your clothes and the planet.
                        </p>
                    </div>
                </div>

                <div class="col-12 col-xl-6">
                    <div class="mx-auto max-w-2xl">
                        <div class="ratio ratio-4x3" data-aos-delay="0" data-aos="fade" data-aos-duration="3000">
                            <img src="./assets/img/bg/bg2.jpg" class="object-fit-cover rounded-3" alt="presentation"
                                loading="lazy">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- Service 2 -->
    <div class="overflow-hidden py-7 py-sm-8 py-xl-9 bg-body-tertiary">
        <div class="container">
            <div class="row gy-5 align-items-center justify-content-between">
                <div class="col-12 col-xl-5 order-first order-xl-last">
                    <div class="mx-auto max-w-2xl">
                        <h2 class="m-0 text-primary-emphasis text-base leading-7 fw-semibold">
                            Service 2
                        </h2>
                        <p class="m-0 mt-2 text-body-emphasis text-4xl tracking-tight fw-bold">
                            Wash & Fold Service
                        </p>
                        <p class="m-0 mt-4 text-body text-lg leading-8">
                            Don't settle for just clean clothes. Our expert wash & fold service combines efficiency with
                            meticulous care. We use gentle yet effective cleaning methods to ensure your clothes are not
                            only clean, but also neatly folded and ready to wear with confidence.
                        </p>
                    </div>
                </div>

                <div class="col-12 col-xl-6">
                    <div class="mx-auto max-w-2xl">
                        <div class="ratio ratio-4x3" data-aos-delay="0" data-aos="fade" data-aos-duration="3000">
                            <img src="./assets/img/bg/bg3.jpg" class="object-fit-cover rounded-3" alt="presentation"
                                loading="lazy">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- Service 3 -->
    <div class="overflow-hidden py-7 py-sm-8 py-xl-9">
        <div class="container">
            <div class="row gy-5 align-items-center justify-content-between">
                <div class="col-12 col-xl-5">
                    <div class="mx-auto max-w-2xl">
                        <h2 class="m-0 text-primary-emphasis text-base leading-7 fw-semibold">
                            Service 3
                        </h2>
                        <p class="m-0 mt-2 text-body-emphasis text-4xl tracking-tight fw-bold">
                            Same-Day Pickup & Delivery
                        </p>
                        <p class="m-0 mt-4 text-body-secondary text-lg leading-8">
                            Experience laundry like never before! Our premium same-day pickup and delivery service is
                            designed to take the hassle out of laundry. We'll conveniently pick up your clothes at a time
                            that works for you, expertly clean them using the latest technology, and then deliver them back
                            to you fresh and folded, all within the same day.
                        </p>
                    </div>
                </div>

                <div class="col-12 col-xl-6">
                    <div class="mx-auto max-w-2xl">
                        <div class="ratio ratio-4x3" data-aos-delay="0" data-aos="fade" data-aos-duration="3000">
                            <img src="./assets/img/bg/bg4.jpg" class="object-fit-cover rounded-3" alt="presentation"
                                loading="lazy">
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
