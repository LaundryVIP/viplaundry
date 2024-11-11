<!DOCTYPE html>
<html lang="en" dir="ltr" data-bs-theme="auto">

<head>
    <!-- JavaScript untuk mengelola tema warna -->
    <script src="{{ asset('assets/js/color-modes.js') }}"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="your_description_goes_here">
    <meta name="keywords" content="your_keywords_goes_here">
    <meta name="author" content="tigmatemplate">
    <meta name="generator" content="Bootstrap">
    <title>@yield('title', 'Laundry Online')</title>

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/logo/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/logo/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/logo/favicon-16x16.png') }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/logo/favicon.ico') }}">
    <link rel="manifest" href="{{ asset('assets/logo/site.webmanifest') }}">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{ asset('assets/libraries/glide/css/glide.core.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/libraries/aos/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/main.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="your_title_goes_here">
    <meta property="og:description" content="your_description_goes_here">
    <meta property="og:image" content="your_absolute_image_url_goes_here">
    <meta property="og:url" content="your_absolute_content_url_goes_here">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="en_US">

    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@yourtwitterhandle">
    <meta name="twitter:title" content="your_title_goes_here">
    <meta name="twitter:description" content="your_description_goes_here">
    <meta name="twitter:image" content="your_absolute_image_url_goes_here">

    <link rel="canonical" href="your_canonical_url_goes_here">
</head>

<body>
    @include('partials.loader')
    @include('partials.navbar')


    <div class="content">
        @yield('content')
    </div>

    @include('partials.footer')

    <!-- Scripts -->
    <script src="{{ asset('assets/libraries/glide/glide.min.js') }}"></script>
    <script src="{{ asset('assets/libraries/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/libraries/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/scripts.js') }}"></script>
    <script src="{{ asset('assets/php/contact/script.js') }}"></script>

</body>

</html>
