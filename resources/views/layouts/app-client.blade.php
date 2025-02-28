<!DOCTYPE html>
<html lang="en" class="dfark">

<head>
    <meta charset="utf-8" />
    <title>@yield('title', 'Jasa Web Kuli IT Tecno')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Meta Description & Keywords -->
    <meta name="description" content="@yield('meta_description', 'Jasa pembuatan website dan system terpercaya dan terbukti pengerjaannya.')">
    <meta name="keywords" content="@yield('meta_keywords', 'Jasa website, Build Website, Jasa web murah, Jasa web terpercaya, maintenance website')">
    <meta name="author" content="Kuli IT Tecno">

    <!-- Open Graph (OG) untuk Social Media -->
    <meta property="og:title" content="@yield('title', 'Jasa Web Kuli IT Tecno')">
    <meta property="og:description" content="@yield('meta_description', 'Jasa pembuatan website dan system terpercaya dan terbukti pengerjaannya.')">
    <meta property="og:image" content="@yield('meta_image', asset('img/client/banner.png'))">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Jasa Web Kuli IT Tecno">

    <!-- Twitter Card (untuk preview di Twitter) -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('title', 'Jasa Web Kuli IT Tecno')">
    <meta name="twitter:description" content="@yield('meta_description', 'Jasa pembuatan website dan system terpercaya dan terbukti pengerjaannya.')">
    <meta name="twitter:image" content="@yield('meta_image', asset('img/client/banner.png'))">
    <meta name="twitter:site" content="@kuliittecno">

    <!-- Meta Tag Robots -->
    <meta name="robots" content="index, follow">

    <!-- Canonical URL (mencegah duplikat konten) -->
    <link rel="canonical" href="{{ url()->current() }}">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('img/client/logo_2.png') }}">

    <!-- External Styles & Scripts -->
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="{{ asset('client/dist/assets/css/style.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('client/dist/assets/libs/@iconscout/unicons/css/line.css') }}" rel="stylesheet"type="text/css">
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

    <script type="text/javascript">
        window.$crisp = [];
        window.CRISP_WEBSITE_ID = "95de8075-161c-4017-b3c7-629f1e14877f";
        (function() {
            d = document;
            s = d.createElement("script");
            s.src = "https://client.crisp.chat/l.js";
            s.async = 1;
            d.getElementsByTagName("head")[0].appendChild(s);
        })();
    </script>
</body>

</html>
