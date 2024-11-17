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
                            Silahkan Daftar Akun
                        </p>
                    </div>

                    <div class="mx-auto max-w-2xl mt-6">
                        <form method="POST" action="{{ route('register') }}" class="row g-4 needs-validation" novalidate>
                            @csrf
                            <div class="col-md-6">
                                <label for="name" class="form-label text-sm">Username <span
                                        class="text-danger-emphasis">*</span></label>
                                <input type="text" class="form-control form-control-sm" name="name" id="name"
                                    required>
                                <div class="invalid-feedback text-xs">Silahkan Masukan Username Anda.</div>
                            </div>

                            <div class="col-md-6">
                                <label for="email" class="form-label text-sm">Email <span
                                        class="text-danger-emphasis">*</span></label>
                                <input type="email" class="form-control form-control-sm" name="email" id="email"
                                    required>
                                <div class="invalid-feedback text-xs">Silahkan Masukan Email Anda.</div>
                            </div>

                            <div class="col-md-6">
                                <label for="password" class="form-label text-sm">Kata Sandi <span
                                        class="text-danger-emphasis">*</span></label>
                                <input type="password" class="form-control form-control-sm" name="password" id="password"
                                    required>
                                <div class="invalid-feedback text-xs">Silahkan Masukan Kata Sandi Anda.</div>
                            </div>

                            <div class="col-md-6">
                                <label for="password_confirmation" class="form-label text-sm">Konfirmasi Kata Sandi <span
                                        class="text-danger-emphasis">*</span></label>
                                <input type="password" class="form-control form-control-sm" name="password_confirmation"
                                    id="password_confirmation" required>
                                <div class="invalid-feedback text-xs">Silahkan Masukan Konfirmasi Password Anda.</div>
                            </div>

                            <div class="col-md-6">
                                <label for="nohp" class="form-label text-sm">Nomor HP</label>
                                <input type="text" class="form-control form-control-sm" name="nohp" id="nohp">
                            </div>

                            <div class="col-md-6">
                                <label for="alamat" class="form-label text-sm">Alamat</label>
                                <textarea class="form-control form-control-sm" name="alamat" id="alamat"></textarea>
                            </div>

                            <p>Sudah memiliki Akun?<a href="{{ route('login') }}" style="text-decoration: none">&nbsp;Masuk
                                    disini</a></p>

                            <div class="col-2 text-center pt-3">
                                <button type="submit"
                                    class="btn btn-lg btn-primary text-white text-sm fw-semibold">Daftar</button>
                            </div>
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
