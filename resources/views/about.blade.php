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
                        Tentang Kami
                    </h1>
                    <p class="m-0 mt-4 text-white text-lg leading-8" data-aos-delay="100" data-aos="fade"
                        data-aos-duration="3000">
                        Memudahkan proses mencuci, satu pakaian bersih dalam satu waktu.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- About Us -->
    <div class="overflow-hidden py-7 py-sm-8 py-xl-9">
        <div class="container">
            <div class="row gy-5 align-items-center justify-content-between">
                <div class="col-12 col-xl-5 order-first order-xl-last">
                    <div class="mx-auto max-w-2xl">
                        <h2 class="m-0 text-primary-emphasis text-base leading-7 fw-semibold">
                            About Freshen
                        </h2>
                        <p class="m-0 mt-2 text-body-emphasis text-4xl tracking-tight fw-bold">
                            Making laundry effortless, one clean fold at a time
                        </p>
                        <p class="m-0 mt-4 text-body-secondary text-lg leading-8">
                            Welcome to Freshen, your premier laundry service in New York, NY. We are dedicated to providing
                            top-quality, convenient, and affordable laundry solutions to our valued customers.
                        </p>
                        <p class="m-0 mt-4 text-body-secondary text-lg leading-8">
                            With our state-of-the-art facilities and expert staff, we ensure that your garments are treated
                            with the utmost care and attention. Trust Freshen for all your laundry needs and experience the
                            difference today.
                        </p>
                    </div>
                </div>

                <div class="col-12 col-xl-6">
                    <div class="mx-auto max-w-2xl">
                        <div class="ratio ratio-4x3" data-aos-delay="200" data-aos="fade" data-aos-duration="3000">
                            <img src="./assets/img/bg/bg5.jpg" class="object-fit-cover rounded-3" alt="presentation">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- Our purpose our future Our Principles -->
    <div class="overflow-hidden py-6 py-sm-7 py-xl-8">
        <div class="container">
            <div class="row gy-5 row-cols-1 row-cols-lg-3">
                <div class="col" data-aos-delay="0" data-aos="fade-left" data-aos-duration="3000">
                    <div class="bg-primary rounded-3 d-inline-flex align-items-center justify-content-center"
                        style="width: 2.5rem; height: 2.5rem;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1.5rem" height="1.5rem" fill="currentColor"
                            class="text-white bi bi-flag" viewBox="0 0 16 16">
                            <path
                                d="M14.778.085A.5.5 0 0 1 15 .5V8a.5.5 0 0 1-.314.464L14.5 8l.186.464-.003.001-.006.003-.023.009a12 12 0 0 1-.397.15c-.264.095-.631.223-1.047.35-.816.252-1.879.523-2.71.523-.847 0-1.548-.28-2.158-.525l-.028-.01C7.68 8.71 7.14 8.5 6.5 8.5c-.7 0-1.638.23-2.437.477A20 20 0 0 0 3 9.342V15.5a.5.5 0 0 1-1 0V.5a.5.5 0 0 1 1 0v.282c.226-.079.496-.17.79-.26C4.606.272 5.67 0 6.5 0c.84 0 1.524.277 2.121.519l.043.018C9.286.788 9.828 1 10.5 1c.7 0 1.638-.23 2.437-.477a20 20 0 0 0 1.349-.476l.019-.007.004-.002h.001M14 1.221c-.22.078-.48.167-.766.255-.81.252-1.872.523-2.734.523-.886 0-1.592-.286-2.203-.534l-.008-.003C7.662 1.21 7.139 1 6.5 1c-.669 0-1.606.229-2.415.478A21 21 0 0 0 3 1.845v6.433c.22-.078.48-.167.766-.255C4.576 7.77 5.638 7.5 6.5 7.5c.847 0 1.548.28 2.158.525l.028.01C9.32 8.29 9.86 8.5 10.5 8.5c.668 0 1.606-.229 2.415-.478A21 21 0 0 0 14 7.655V1.222z" />
                        </svg>
                    </div>

                    <h3 class="m-0 mt-3 text-body-emphasis text-base leading-7 fw-semibold">
                        Our Purpose
                    </h3>
                    <p class="m-0 mt-2 text-body-secondary text-base leading-7 max-w-lg">
                        To liberate you from the chore of laundry. We believe your time is precious and should be spent on
                        things you enjoy. We offer a convenient and reliable laundry service that frees you from the tedious
                        task of washing, drying, and folding your clothes.
                    </p>
                </div>

                <div class="col" data-aos-delay="100" data-aos="fade-left" data-aos-duration="3000">
                    <div class="bg-primary rounded-3 d-inline-flex align-items-center justify-content-center"
                        style="width: 2.5rem; height: 2.5rem;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1.5rem" height="1.5rem" fill="currentColor"
                            class="text-white bi bi-binoculars" viewBox="0 0 16 16">
                            <path
                                d="M3 2.5A1.5 1.5 0 0 1 4.5 1h1A1.5 1.5 0 0 1 7 2.5V5h2V2.5A1.5 1.5 0 0 1 10.5 1h1A1.5 1.5 0 0 1 13 2.5v2.382a.5.5 0 0 0 .276.447l.895.447A1.5 1.5 0 0 1 15 7.118V14.5a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 14.5v-3a.5.5 0 0 1 .146-.354l.854-.853V9.5a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v.793l.854.853A.5.5 0 0 1 7 11.5v3A1.5 1.5 0 0 1 5.5 16h-3A1.5 1.5 0 0 1 1 14.5V7.118a1.5 1.5 0 0 1 .83-1.342l.894-.447A.5.5 0 0 0 3 4.882zM4.5 2a.5.5 0 0 0-.5.5V3h2v-.5a.5.5 0 0 0-.5-.5zM6 4H4v.882a1.5 1.5 0 0 1-.83 1.342l-.894.447A.5.5 0 0 0 2 7.118V13h4v-1.293l-.854-.853A.5.5 0 0 1 5 10.5v-1A1.5 1.5 0 0 1 6.5 8h3A1.5 1.5 0 0 1 11 9.5v1a.5.5 0 0 1-.146.354l-.854.853V13h4V7.118a.5.5 0 0 0-.276-.447l-.895-.447A1.5 1.5 0 0 1 12 4.882V4h-2v1.5a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5zm4-1h2v-.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5zm4 11h-4v.5a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5zm-8 0H2v.5a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5z" />
                        </svg>
                    </div>

                    <h3 class="m-0 mt-3 text-body-emphasis text-base leading-7 fw-semibold">
                        Our Future
                    </h3>
                    <p class="m-0 mt-2 text-body-secondary text-base leading-7 max-w-lg">
                        To become the leading provider of eco-friendly and innovative laundry solutions. We are committed to
                        developing sustainable practices and utilizing cutting-edge technology to ensure the highest quality
                        care for your garments.
                    </p>
                </div>

                <div class="col" data-aos-delay="200" data-aos="fade-left" data-aos-duration="3000">
                    <div class="bg-primary rounded-3 d-inline-flex align-items-center justify-content-center"
                        style="width: 2.5rem; height: 2.5rem;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1.5rem" height="1.5rem" fill="currentColor"
                            class="text-white bi bi-award" viewBox="0 0 16 16">
                            <path
                                d="M9.669.864 8 0 6.331.864l-1.858.282-.842 1.68-1.337 1.32L2.6 6l-.306 1.854 1.337 1.32.842 1.68 1.858.282L8 12l1.669-.864 1.858-.282.842-1.68 1.337-1.32L13.4 6l.306-1.854-1.337-1.32-.842-1.68zm1.196 1.193.684 1.365 1.086 1.072L12.387 6l.248 1.506-1.086 1.072-.684 1.365-1.51.229L8 10.874l-1.355-.702-1.51-.229-.684-1.365-1.086-1.072L3.614 6l-.25-1.506 1.087-1.072.684-1.365 1.51-.229L8 1.126l1.356.702z" />
                            <path d="M4 11.794V16l4-1 4 1v-4.206l-2.018.306L8 13.126 6.018 12.1z" />
                        </svg>
                    </div>

                    <h3 class="m-0 mt-3 text-body-emphasis text-base leading-7 fw-semibold">
                        Our Principles
                    </h3>
                    <p class="m-0 mt-2 text-body-secondary text-base leading-7 max-w-lg">
                        Happy Customers: Your satisfaction is our priority.
                        Quality Care: Gentle cleaning for long-lasting clothes.
                        Green Laundry: Sustainable practices for a cleaner planet.
                        Effortless Service: Convenient options to fit your life.
                    </p>
                </div>
            </div>
        </div>
    </div>



    <!-- 2 landscap images -->
    <div class="overflow-hidden pt-6 pt-sm-7 pt-xl-8 pb-7 pb-sm-8 pb-xl-9">
        <div class="container">
            <div class="row gx-lg-4 row-cols-1 row-cols-lg-2">
                <div class="col">
                    <div class="ratio ratio-1x1" data-aos-delay="0" data-aos="fade" data-aos-duration="1000">
                        <img src="./assets/img/bg/bg3.jpg" class="object-fit-cover rounded-3" alt="presentation"
                            loading="lazy">
                    </div>
                </div>

                <div class="col d-none d-lg-block">
                    <div class="ratio ratio-1x1" data-aos-delay="100" data-aos="fade" data-aos-duration="1000">
                        <img src="./assets/img/bg/bg4.jpg" class="object-fit-cover rounded-3" alt="presentation"
                            loading="lazy">
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- Our Story -->
    <div class="overflow-hidden py-7 py-sm-8 py-xl-9 bg-body-tertiary">
        <div class="container">
            <div class="row gy-5 justify-content-between align-items-center">
                <div class="col-12 col-xl-6 col-xxl-5">
                    <div class="mx-auto mx-xl-0 max-w-2xl">
                        <h2 class="m-0 text-primary-emphasis text-base leading-7 fw-semibold">
                            Our Story
                        </h2>
                        <p class="m-0 mt-2 text-body-emphasis text-4xl tracking-tight fw-bold">
                            From Laundry Woes to Fresh Starts
                        </p>
                        <p class="m-0 mt-4 text-body text-lg leading-8">
                            It all began with a simple observation: laundry. It's a never-ending cycle, stealing precious
                            time and often leaving us feeling overwhelmed. We, the founders of [Your Laundry Service Name],
                            were no strangers to laundry piles that seemed to grow faster than we could fold them.
                        </p>
                        <p class="m-0 mt-4 text-body text-lg leading-8">
                            But our story isn't over yet! We're constantly looking for ways to improve and expand our
                            services, always striving to make laundry a breeze for you.
                            Join us on our journey to a fresher, cleaner tomorrow!
                        </p>
                    </div>
                </div>
                <div class="col-12 col-xl-6">
                    <div class="mx-auto mx-xl-0 max-w-2xl">
                        <div class="ratio ratio-4x3" data-aos-delay="0" data-aos="fade" data-aos-duration="3000">
                            <img src="./assets/img/bg/bg2.jpg" class="object-fit-cover rounded-3" alt="presentation"
                                loading="lazy">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Team -->
    <div class="overflow-hidden py-7 py-sm-8 py-xl-9">
        <div class="container">
            <div class="row gx-sm-5 gy-5">
                <div class="col-12 col-xl-4">
                    <div class="max-w-2xl">
                        <h2 class="m-0 text-body-emphasis tracking-tight text-4xl fw-bold">
                            Meet our leadership
                        </h2>
                        <p class="m-0 mt-4 text-body-secondary text-lg leading-8">
                            Our Executive Team: Meet the talented and experienced leaders who oversee our strategy,
                            operations, and culture.
                        </p>
                    </div>
                </div>

                <div class="col-12 col-xl-8">
                    <div class="row gx-sm-4 gy-5">
                        <div class="col-12 col-md-6">
                            <div class="d-flex align-items-center gap-4">
                                <img class="rounded-circle" src="./assets/img/small-team/st1.jpg" width="64"
                                    height="64" alt="team" loading="lazy">
                                <div>
                                    <h3 class="m-0 text-body-emphasis text-base leading-7 tracking-tight fw-semibold">
                                        Bob Lee
                                    </h3>
                                    <p class="m-0 text-primary-emphasis text-sm leading-6 fw-semibold">
                                        Software Engineer
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-6">
                            <div class="d-flex align-items-center gap-4">
                                <img class="rounded-circle" src="./assets/img/small-team/st2.jpg" width="64"
                                    height="64" alt="team" loading="lazy">
                                <div>
                                    <h3 class="m-0 text-body-emphasis text-base leading-7 tracking-tight fw-semibold">
                                        Alice Chen
                                    </h3>
                                    <p class="m-0 text-primary-emphasis text-sm leading-6 fw-semibold">
                                        Marketing Manager
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-6">
                            <div class="d-flex align-items-center gap-4">
                                <img class="rounded-circle" src="./assets/img/small-team/st3.jpg" width="64"
                                    height="64" alt="team" loading="lazy">
                                <div>
                                    <h3 class="m-0 text-body-emphasis text-base leading-7 tracking-tight fw-semibold">
                                        David Jones
                                    </h3>
                                    <p class="m-0 text-primary-emphasis text-sm leading-6 fw-semibold">
                                        Sales Representative
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-6">
                            <div class="d-flex align-items-center gap-4">
                                <img class="rounded-circle" src="./assets/img/small-team/st4.jpg" width="64"
                                    height="64" alt="team" loading="lazy">
                                <div>
                                    <h3 class="m-0 text-body-emphasis text-base leading-7 tracking-tight fw-semibold">
                                        Emma Wilson
                                    </h3>
                                    <p class="m-0 text-primary-emphasis text-sm leading-6 fw-semibold">
                                        Customer Support Specialist
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-6">
                            <div class="d-flex align-items-center gap-4">
                                <img class="rounded-circle" src="./assets/img/small-team/st5.jpg" width="64"
                                    height="64" alt="team" loading="lazy">
                                <div>
                                    <h3 class="m-0 text-body-emphasis text-base leading-7 tracking-tight fw-semibold">
                                        Frank Garcia
                                    </h3>
                                    <p class="m-0 text-primary-emphasis text-sm leading-6 fw-semibold">
                                        Project Manager
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-6">
                            <div class="d-flex align-items-center gap-4">
                                <img class="rounded-circle" src="./assets/img/small-team/st6.jpg" width="64"
                                    height="64" alt="team" loading="lazy">
                                <div>
                                    <h3 class="m-0 text-body-emphasis text-base leading-7 tracking-tight fw-semibold">
                                        Grace Kim
                                    </h3>
                                    <p class="m-0 text-primary-emphasis text-sm leading-6 fw-semibold">
                                        Graphic Designer
                                    </p>
                                </div>
                            </div>
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
