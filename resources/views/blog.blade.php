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
                        Postingan Blog
                    </h1>
                    <p class="m-0 mt-4 text-white text-lg leading-8" data-aos-delay="100" data-aos="fade"
                        data-aos-duration="3000">
                        Learn how to grow your business with our expert advice.
                    </p>
                </div>
            </div>
        </div>
    </div>



    <div class="overflow-hidden py-6 py-sm-7 py-xl-8">
        <div class="container">
            <div class="row gy-5 gx-xl-5 justify-content-between">
                <div class="col-12 col-xl-8">
                    <div class="max-w-3xl mx-auto mx-xl-0 mt-4">
                        <a class="icon-link link-primary-emphasis icon-link-hover text-decoration-none" href="javascript:;"
                            style="--bs-icon-link-transform: translate3d(-.125rem, 0, 0);">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                                class="bi fs-1 bi-arrow-left-short rtl-flip" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z" />
                            </svg>

                            <span class="fw-bold">
                                Back to Blog
                            </span>
                        </a>

                        <h2 class="my-4 text-body-emphasis text-4xl tracking-tight fw-bold">
                            The Future is Bright: How Technology is Improving Our Lives
                        </h2>

                        <div class="d-flex justify-content-between align-items-center flex-wrap">
                            <div class="mt-2">
                                <img src="./assets/img/small-team/st4.jpg" height="40" width="40"
                                    class="img-fluid rounded-circle" alt="small team" loading="lazy">

                                <span class="text-body text-sm fw-medium ps-2">
                                    Margaret Parson
                                </span>

                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-dot text-body-tertiary" viewBox="0 0 16 16">
                                    <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3" />
                                </svg>

                                <small class="ps-1 text-body-tertiary text-xs fw-medium">
                                    CEO, The Wealth Inc.
                                </small>
                            </div>

                            <div class="mt-2">
                                <!-- X icon -->
                                <a href="javascript:;" class="btn bg-body-tertiary bg-body-secondary-hover social my-2">
                                    <span class="d-flex justify-content-center align-items-center">
                                        <svg width="16" height="16" fill="currentColor" viewBox="0 0 24 24"
                                            aria-hidden="true">
                                            <g>
                                                <path
                                                    d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z">
                                                </path>
                                            </g>
                                        </svg>
                                    </span>
                                </a>

                                <!-- intagram icon -->
                                <a href="javascript:;" class="btn bg-body-tertiary bg-body-secondary-hover social my-2">
                                    <span class="d-flex justify-content-center align-items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" viewBox="0 0 16 16">
                                            <path
                                                d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                                        </svg>
                                    </span>
                                </a>

                                <!-- facebook icon -->
                                <a href="javascript:;" class="btn bg-body-tertiary bg-body-secondary-hover social my-2">
                                    <span class="d-flex justify-content-center align-items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" viewBox="0 0 320 512">
                                            <path
                                                d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z" />
                                        </svg>
                                    </span>
                                </a>

                                <!-- linkedIn icon -->
                                <a href="javascript:;" class="btn bg-body-tertiary bg-body-secondary-hover social my-2">
                                    <span class="d-flex justify-content-center align-items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" viewBox="0 0 448 512">
                                            <path
                                                d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z" />
                                        </svg>
                                    </span>
                                </a>
                            </div>
                        </div>

                        <div class="mt-5">
                            <div class="ratio ratio-16x9" data-aos-delay="0" data-aos="fade" data-aos-duration="3000">
                                <img src="./assets/img/bg/bg2.jpg" class="object-fit-cover rounded-3" alt="presentation"
                                    loading="lazy">
                            </div>
                        </div>

                        <p class="mt-4 text-body-secondary text-lg leading-8">
                            Technology has revolutionized the way we live, work, and communicate. From smartphones and
                            laptops to smart homes and self-driving cars, the world of technology is constantly evolving and
                            shaping our future. The advancements in Artificial Intelligence (AI), Machine Learning (ML), and
                            the Internet of Things (IoT) have transformed many industries and created new opportunities for
                            businesses to operate more efficiently and effectively.
                        </p>

                        <p class="text-body-secondary text-lg leading-8">
                            In the healthcare industry, technology has led to the development of telemedicine, which allows
                            doctors to remotely diagnose and treat patients. The use of virtual and augmented reality
                            technologies has also enabled medical students to train in a simulated environment, providing a
                            safe and cost-effective way to learn complex procedures.
                        </p>

                        <div class="text-center my-6 text-secondary">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                                    class="bi bi-three-dots" viewBox="0 0 16 16">
                                    <path
                                        d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z" />
                                </svg>
                            </span>
                        </div>

                        <div class="mt-4">
                            <h2 class="mb-3 text-body-emphasis tracking-tight text-3xl fw-semibold">
                                1 / From Health Care to Education, Here's How Tech is Making a Positive Impact
                            </h2>

                            <p class="text-body-secondary text-lg leading-8">
                                In the financial sector, technology has made banking more accessible and convenient with
                                online and mobile banking, as well as the use of digital wallets and cryptocurrency. The
                                rise of fintech companies has also disrupted traditional banking practices, making it easier
                                for people to access financial services and manage their money.
                            </p>

                            <div class="mt-5">
                                <div class="ratio ratio-16x9" data-aos-delay="0" data-aos="fade"
                                    data-aos-duration="3000">
                                    <img src="./assets/img/bg/bg3.jpg" class="img-fluid object-fit-cover rounded-3"
                                        alt="presentation" loading="lazy">
                                </div>
                            </div>
                        </div>

                        <div class="text-center my-6 text-secondary">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                    fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16">
                                    <path
                                        d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z" />
                                </svg>
                            </span>
                        </div>

                        <div class="mt-4">
                            <h2 class="mb-3 text-body-emphasis tracking-tight text-3xl fw-semibold">
                                2 / From Health Care to Education, Here's How Tech is Making a Positive Impact
                            </h2>

                            <p class="text-body-secondary text-lg leading-8">
                                In the entertainment industry, technology has enabled the creation of immersive experiences
                                through virtual reality and augmented reality. Video streaming services have also
                                transformed the way we consume media, giving us access to a vast library of content at our
                                fingertips.
                            </p>

                            <div class="mt-5">
                                <div class="ratio ratio-16x9" data-aos-delay="0" data-aos="fade"
                                    data-aos-duration="3000">
                                    <img src="./assets/img/bg/bg4.jpg" class="img-fluid object-fit-cover rounded-3"
                                        alt="presentation" loading="lazy">
                                </div>
                            </div>
                        </div>

                        <div class="mt-6">
                            <h2 class="mb-3 text-body-emphasis tracking-tight text-3xl fw-semibold">
                                3 / Conclusion
                            </h2>

                            <p class="text-body-secondary text-lg leading-8">
                                Overall, technology has transformed our lives in countless ways, and its impact will only
                                continue to grow as we move towards a more connected and digital future.
                            </p>
                        </div>
                    </div>
                </div>


                <!-- side bar -->
                <div class="col-12 col-xl-4">
                    <div class="max-w-xl mx-auto mx-xl-0 pt-5 pt-xl-0">
                        <div class="mt-4">
                            <div class="p-4 shadow rounded-3 bg-body-tertiary">
                                <div class="input-group flex-nowrap input-group-lg">
                                    <input type="text" class="form-control" placeholder="Search"
                                        aria-label="Username" aria-describedby="addon-wrapping">
                                    <span class="input-group-text bg-primary text-light" id="addon-wrapping">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                            <path
                                                d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="mt-5">
                            <div class="p-4 shadow rounded-3 bg-body-tertiary">
                                <h3 class="text-body-emphasis text-2xl tracking-tight fw-semibold">
                                    Popular Posts
                                </h3>

                                <hr class="text-body-emphasis opacity-10">

                                <a href="javascript:;"
                                    class="d-flex align-items-center mt-4 text-body link-offset-2 link-underline link-underline-opacity-0 link-underline-opacity-25-hover">
                                    <div class="p-5 position-relative">
                                        <img src="./assets/img/bg/bg7.jpg"
                                            class="position-absolute top-0 start-0 h-100 w-100 object-fit-cover rounded"
                                            loading="lazy" alt="Meeting">
                                    </div>

                                    <div class="ps-3">
                                        <time datetime="2024-09-16" class="d-block text-body-tertiary">
                                            Sep 16, 2024
                                        </time>
                                        <h6 class="m-0 mt-3 text-body-secondary line-clamp-2 text-sm leading-6">
                                            The Tech Revolution: How Innovations Are Changing
                                        </h6>
                                    </div>
                                </a>

                                <a href="javascript:;"
                                    class="d-flex align-items-center mt-4 text-body link-offset-2 link-underline link-underline-opacity-0 link-underline-opacity-25-hover">
                                    <div class="p-5 position-relative">
                                        <img src="./assets/img/bg/bg8.jpg"
                                            class="position-absolute top-0 start-0 h-100 w-100 object-fit-cover rounded"
                                            loading="lazy" alt="Meeting">
                                    </div>

                                    <div class="ps-3">
                                        <time datetime="2024-09-16" class="d-block text-body-tertiary">
                                            Sep 16, 2024
                                        </time>
                                        <h6 class="m-0 mt-3 text-body-secondary line-clamp-2 text-sm leading-6">
                                            The Tech Revolution: How Innovations Are Changing
                                        </h6>
                                    </div>
                                </a>

                                <a href="javascript:;"
                                    class="d-flex align-items-center mt-4 text-body link-offset-2 link-underline link-underline-opacity-0 link-underline-opacity-25-hover">
                                    <div class="p-5 position-relative">
                                        <img src="./assets/img/bg/bg9.jpg"
                                            class="position-absolute top-0 start-0 h-100 w-100 object-fit-cover rounded"
                                            loading="lazy" alt="Meeting">
                                    </div>

                                    <div class="ps-3">
                                        <time datetime="2024-09-16" class="d-block text-body-tertiary">
                                            Sep 16, 2024
                                        </time>
                                        <h6 class="m-0 mt-3 text-body-secondary line-clamp-2 text-sm leading-6">
                                            The Tech Revolution: How Innovations Are Changing
                                        </h6>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="mt-5">
                            <div class="p-4 shadow rounded-3 bg-body-tertiary">
                                <h3 class="text-body-emphasis text-2xl tracking-tight fw-semibold">
                                    Categories
                                </h3>

                                <hr class="text-body-secondary opacity-10">

                                <ul class="ps-3 text-body-secondary">
                                    <li class="mt-2">
                                        <a href="javascript:;"
                                            class="text-body-secondary link-offset-2 link-underline link-underline-opacity-0 link-underline-opacity-25-hover text-sm leading-6">
                                            Artificial Intelligence
                                        </a>
                                    </li>
                                    <li class="mt-2">
                                        <a href="javascript:;"
                                            class="text-body-secondary link-offset-2 link-underline link-underline-opacity-0 link-underline-opacity-25-hover text-sm leading-6">
                                            Artificial Intelligence
                                        </a>
                                    </li>
                                    <li class="mt-2">
                                        <a href="javascript:;"
                                            class="text-body-secondary link-offset-2 link-underline link-underline-opacity-0 link-underline-opacity-25-hover text-sm leading-6">
                                            Artificial Intelligence
                                        </a>
                                    </li>
                                    <li class="mt-2">
                                        <a href="javascript:;"
                                            class="text-body-secondary link-offset-2 link-underline link-underline-opacity-0 link-underline-opacity-25-hover text-sm leading-6">
                                            Artificial Intelligence
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="mt-5">
                            <div class="p-4 shadow rounded-3 bg-body-tertiary">
                                <h3 class="text-body-emphasis text-2xl tracking-tight fw-semibold">
                                    Popular Tags
                                </h3>
                                <hr class="text-body-emphasis opacity-10">

                                <div class="d-flex flex-wrap gap-3">
                                    <button
                                        class="btn text-body-tertiary border bg-body-secondary-hover text-sm fw-semibold">
                                        AI
                                    </button>
                                    <button
                                        class="btn text-body-tertiary border bg-body-secondary-hover text-sm fw-semibold">
                                        Ecommerce
                                    </button>
                                    <button
                                        class="btn text-body-tertiary border bg-body-secondary-hover text-sm fw-semibold">
                                        IoT
                                    </button>
                                    <button
                                        class="btn text-body-tertiary border bg-body-secondary-hover text-sm fw-semibold">
                                        Blockchain
                                    </button>
                                    <button
                                        class="btn text-body-tertiary border bg-body-secondary-hover text-sm fw-semibold">
                                        Patient
                                    </button>
                                    <button
                                        class="btn text-body-tertiary border bg-body-secondary-hover text-sm fw-semibold">
                                        Smart Home
                                    </button>
                                    <button
                                        class="btn text-body-tertiary border bg-body-secondary-hover text-sm fw-semibold">
                                        Robotics
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- Call to action -->
    <div class="pb-9 pt-7">
        <div class="container">
            <div class="py-6 position-relative text-white rounded-3">
                <img src="./assets/img/bg/bg10.jpg"
                    class="position-absolute z-n1 top-0 h-100 w-100 object-fit-cover rounded-3" loading="lazy"
                    alt="Meeting">

                <div class="position-absolute z-n1 top-0 h-100 w-100 bg-dark rounded-3"
                    style="opacity: 0.85; mix-blend-mode: multiply; filter: contrast(1.15) brightness(0.85);">
                </div>

                <div class="px-6">
                    <div class="mx-auto max-w-2xl">
                        <h2 class="m-0 tracking-tight text-4xl fw-bold text-center">
                            Reclaim Your Time. Experience Fresh.
                        </h2>
                        <p class="m-0 mt-4 text-lg leading-8 text-center">
                            Let us handle your laundry, so you can focus on what matters.
                        </p>
                        <div class="mt-4 pt-3 text-center">
                            <a href="javascript:;" class="btn btn-lg btn-primary text-white text-sm fw-semibold">
                                Schedule Your Pickup
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
