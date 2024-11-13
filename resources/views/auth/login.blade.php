@extends('layouts.auth')

@section('title', 'Login')

@section('content')
    <!-- Contact us -->
    <div id="contact-us" class="overflow-hidden py-7 py-sm-8 py-xl-9">
        <div class="container">
            <div class="row gy-5 gx-sm-5">
                <div class="col-12 col-xl-5 pt-4">
                    <div class="mx-auto max-w-2xl">
                        <p class="m-0 mt-2 text-body-emphasis text-3xl tracking-tight fw-bold">
                            Silahkan Masuk
                        </p>
                    </div>

                    <div class="mx-auto max-w-2xl mt-6">
                        <form class="row g-4 needs-validation" id="myForm" novalidate>
                            <div class="col-md-6">
                                <label for="nameForm" class="form-label text-sm">
                                    Username
                                    <span class="text-danger-emphasis">*</span>
                                </label>
                                <input type="text" class="form-control form-control-sm" name="nameForm" id="nameForm"
                                    required>
                                <div class="invalid-feedback text-xs">
                                    Silahkan Masukan Username Anda.
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label for="emailForm" class="form-label text-sm">
                                    Kata Sandi
                                    <span class="text-danger-emphasis">*</span>
                                </label>
                                <input type="email" class="form-control form-control-sm" name="emailForm" id="emailForm"
                                    required>
                                <div class="invalid-feedback text-xs">
                                    Silahkan Masukan Kata Sandi Anda.
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="gridCheck" required>
                                    <label class="form-check-label text-sm" for="gridCheck">
                                        Remember Me
                                    </label>
                                </div>
                            </div>

                            <div class="col-2 text-center pt-3">
                                <button type="submit" class="btn btn-lg btn-primary text-white text-sm fw-semibold"
                                    id="sendMessage">
                                    Masuk
                                </button>
                            </div>

                            <p>Belum memiliki Akun?<a href="{{ route('register') }}"
                                    style="text-decoration: none">&nbsp;Daftar disini</a></p>

                            <!-- Alert message  -->
                            <div class="col-12" id="yourMessageIsSent"></div>
                        </form>
                    </div>
                </div>

                <div class="d-none d-xl-block col-12 col-xl-7" data-aos-delay="0" data-aos="fade" data-aos-duration="3000">
                    <div class="h-100 position-relative ms-xxl-5">
                        <div class="position-absolute top-0 end-0 bottom-0 start-0 z-n1 rounded-5">
                            <img src="./assets/img/bg/bg7.jpg" class="w-100 h-100 rounded-3 object-fit-cover" loading="lazy"
                                alt="Image description">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
