<!DOCTYPE html>
<html lang="en" class="dfark">

<head>
    <meta charset="utf-8" />
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="coderthemes" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('client/dist/assets/images/favicon.ico') }}">
    <!-- style css -->
    <link href="{{ asset('client/dist/assets/css/style.min.css') }}" rel="stylesheet" type="text/css">
    <!-- unicons Icons css -->
    <link href="{{ asset('client/dist/assets/libs/@iconscout/unicons/css/line.css') }}" rel="stylesheet"type="text/css">
    <!-- Swiper slider css -->
    <link href="{{ asset('client/dist/assets/libs/swiper/swiper-bundle.min.css') }}" rel="stylesheet" type="text/css">

</head>

<body>
    <!-- Navbar Start -->
    @include('components.client.navbar-1')
    <!-- Navbar End -->

    <!-- Hero Section Start -->
    @include('components.client.hero-1')
    <!-- Hero Section End -->

    @yield('content')

    <!-- Footer section start -->
    @include('components.client.footer-1')
    <!-- Footer section End -->

    <!-- Back To Top Start -->
    <button id="back-to-top" onclick="topFunction()"
        class="fixed text-xl rounded-full z-10 bottom-5 end-5 h-9 w-9 text-center bg-primary/20 text-primary flex justify-center items-center">
        <i class="uil uil-arrow-up text-base"></i>
    </button>
    <!-- Back To Top End -->

    <!-- Watch Video Modal Start -->
    <div id="watchvideomodal"
        class="hs-overlay hidden fixed top-0 left-0 z-[60] transition-all duration-500 fc-modal w-full h-full min-h-full items-center hs-overlay-open:flex">
        <div
            class="hs-overlay-open:opacity-100 duration-500 opacity-0 ease-out transition-[opacity] relative sm:max-w-2xl sm:w-full sm:mx-auto flex-col bg-white shadow-sm rounded-md overflow-hidden group">
            <video id="VisaChipCardVideo" class="w-full" controls="">
                <source src="https://www.w3schools.com/html/mov_bbb.mp4" type="video/mp4">
                <!--Browser does not support <video> tag -->
            </video>
        </div>
    </div>
    <!-- Watch Video Modal End -->

    <!-- Plugin Js -->
    <script src="{{ asset('client/dist/assets/libs/preline/preline.js') }}"></script>
    <!-- Gumshoejs -->
    <script src="{{ asset('client/dist/assets/libs/gumshoejs/gumshoe.polyfills.min.js') }}"></script>
    <!-- Swiper Js -->
    <script src="{{ asset('client/dist/assets/libs/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('client/dist/assets/js/swiper.js') }}"></script>
    <!-- Lucid Icons -->
    <script src="{{ asset('client/dist/assets/libs/lucide/umd/lucide.min.js') }}"></script>
    <!-- Theme Js -->
    <script src="{{ asset('client/dist/assets/js/theme.js') }}"></script>
</body>

</html>
