@extends('layouts.app-client')
@section('content')
    <section id="benefit" class="py-24 bg-white ">
        <div class="container">
            <div class="flex items-center justify-center mb-16">
                <div class="max-w-2xl text-center">
                    <span
                        class="inline-block text-base border-x-2 border-x-primary text-primary font-semibold px-2 rounded-full bg-primary/20 mb-2">
                        Benefit
                    </span>
                    <h2 class="text-xl lg:text-5xl font-bold capitalize text-gray-800 mb-1.5">Kenapa Memilih<span
                            class="font-semibold text-primary">Kuli IT Tecno</span> ?</h2>
                    <p class="text-base font-medium text-gray-500 max-w-xl">Professional, kualitas terbaik, flash response
                        konsultasi
                        menjadi prioritas kami.</p>
                </div>
            </div>

            <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-6 mt-10">
                <div
                    class="flex items-center justify-center rounded-2xl border border-b-4 hover:border-b-primary transition-all duration-500 group hover:-translate-y-2">
                    <div class="text-center p-10">
                        <div class="inline-flex items-center justify-center mb-6">
                            <i data-lucide="wrench" class="h-8 w-8 text-primary fill-primary/20"></i>
                        </div>
                        <h3 class="text-2xl font-bold mb-1">Maintenances</h3>
                        <p class="text-base font-medium text-gray-500">Anda tidak perlu mengkhawatirkan kerusakan web karena
                            ancaman dari luar lagi, karena kami selalu memantau kinerja in dan out data.</p>
                    </div>
                </div>

                <div
                    class="flex items-center justify-center rounded-2xl border border-b-4 hover:border-b-primary transition-all duration-500 group hover:-translate-y-2">
                    <div class="text-center p-10">
                        <div class="inline-flex items-center justify-center mb-6">
                            <i data-lucide="badge-dollar-sign" class="h-8 w-8 text-primary fill-primary/20"></i>
                        </div>
                        <h3 class="text-2xl font-bold mb-1">Harga Terjangkau</h3>
                        <p class="text-base font-medium text-gray-500">Anda bisa mendapatkan sistem dengan kualitas
                            Profesional dengan harga yang terjangkau!</p>
                    </div>
                </div>

                <div
                    class="flex items-center justify-center rounded-2xl border border-b-4 hover:border-b-primary transition-all duration-500 group hover:-translate-y-2">
                    <div class="text-center p-10">
                        <div class="inline-flex items-center justify-center mb-6">
                            <i data-lucide="life-buoy" class="h-8 w-8 text-primary fill-primary/20"></i>
                        </div>
                        <h3 class="text-2xl font-bold mb-1">Revisi Kerusakan</h3>
                        <p class="text-base font-medium text-gray-500">Tim Kami selalu siap membantu setiap kendala yang
                            dialami client melalui media informasi yang ada.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="kinerja"
        class="py-20  bg-slate-50 bg-cover bg-left bg-no-repeat bg-[url('{{ asset('client/dist/assets/images/landing/saas/hero-3-bg.png') }}')]">
        <div class="container">
            <div class="flex items-center justify-center mb-14">
                <div class="max-w-2xl text-center">
                    <span
                        class="inline-block text-base border-x-2 border-x-primary text-primary font-semibold px-2 rounded-full bg-primary/20 mb-2">System
                        Kinerja Kami</span>
                    <h2 class="text-2xl font-bold capitalize text-gray-800 mb-1">Ini yang kalian cari bukan ?</h2>
                    <p class="text-base font-medium text-gray-600">Utamakan mencari jasa yang jelas dalam bekerja.</p>
                </div>
            </div>

            <ol class="relative border-s border-gray-200 dark:border-gray-700">
                <li class="mb-10 ms-6">
                    <span
                        class="absolute flex items-center justify-center w-6 h-6 bg-blue-100 rounded-full -start-3 ring-8 ring-white dark:ring-gray-900 dark:bg-blue-900">
                        <i class="fa-solid fa-handshake text-xs text-blue-800 dark:text-blue-300"></i>
                    </span>
                    <h3 data-aos="fade-right"
                        class="flex items-center mb-1 text-lg font-semibold text-gray-900 dark:text-white">Meeting Flow
                        Aplikasi<span
                            class="bg-blue-100 text-blue-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded dark:bg-blue-900 dark:text-blue-300 ms-3">Start</span>
                    </h3>
                    <time data-aos="fade-right"
                        class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">Client dan
                        Developer</time>
                    <p data-aos="fade-right" class="mb-4 text-base font-medium text-gray-500 dark:text-gray-400">Meeting
                        untuk
                        membahas request system
                        yang mau dibuat bersama tim kami via zoom jika jarak mempengaruhi.</p>
                </li>
                <li class="mb-10 ms-6">
                    <span
                        class="absolute flex items-center justify-center w-6 h-6 bg-blue-100 rounded-full -start-3 ring-8 ring-white dark:ring-gray-900 dark:bg-blue-900">
                        <i class="fa-solid fa-note-sticky  text-xs text-blue-800 dark:text-blue-300"></i>
                    </span>
                    <h3 data-aos="fade-right"
                        class="flex items-center mb-1 text-lg font-semibold text-gray-900 dark:text-white">Rangkuman
                        aplikasi
                    </h3>
                    <time data-aos="fade-right"
                        class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">Developer</time>
                    <p data-aos="fade-right" class="mb-4 text-base font-medium text-gray-500 dark:text-gray-400">Kami dari
                        tim
                        kuli it tecno melakukan
                        meeting internal untuk merangkum request keperluan client dan menyerahkan ke client untuk disetujui.
                    </p>
                </li>

                <li class="mb-10 ms-6">
                    <span
                        class="absolute flex items-center justify-center w-6 h-6 bg-blue-100 rounded-full -start-3 ring-8 ring-white dark:ring-gray-900 dark:bg-blue-900">
                        <i class="fa-solid fa-hand-holding-dollar text-xs text-blue-800 dark:text-blue-300"></i>
                    </span>
                    <h3 data-aos="fade-right"
                        class="flex items-center mb-1 text-lg font-semibold text-gray-900 dark:text-white">Payment 30%
                    </h3>
                    <time data-aos="fade-right"
                        class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">Client dan
                        Developer</time>
                    <p data-aos="fade-right" class="mb-4 text-base font-medium text-gray-500 dark:text-gray-400">Proses
                        pembayaran DP untuk mengetahui
                        keniatan client terhadap system yang sedang dibuat.</p>
                </li>

                <li class="mb-10 ms-6">
                    <span
                        class="absolute flex items-center justify-center w-6 h-6 bg-blue-100 rounded-full -start-3 ring-8 ring-white dark:ring-gray-900 dark:bg-blue-900">
                        <i class="fa-solid fa-code text-xs text-blue-800 dark:text-blue-300"></i>
                    </span>
                    <h3 data-aos="fade-right"
                        class="flex items-center mb-1 text-lg font-semibold text-gray-900 dark:text-white">Pembuatan
                        Aplikasi
                    </h3>
                    <time data-aos="fade-right"
                        class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">Developer</time>
                    <p data-aos="fade-right" class="mb-4 text-base font-medium text-gray-500 dark:text-gray-400">Proses
                        pembuatan aplikasinya sesuai
                        dnegan kesimpulan yang disetujui.</p>
                </li>

                <li class="mb-10 ms-6">
                    <span
                        class="absolute flex items-center justify-center w-6 h-6 bg-blue-100 rounded-full -start-3 ring-8 ring-white dark:ring-gray-900 dark:bg-blue-900">
                        <i class="fa-solid fa-video text-xs text-blue-800 dark:text-blue-300"></i>
                    </span>
                    <h3 data-aos="fade-right"
                        class="flex items-center mb-1 text-lg font-semibold text-gray-900 dark:text-white">Documentasi</h3>
                    <time data-aos="fade-right"
                        class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">Client dan
                        Developer</time>
                    <p data-aos="fade-right" class="mb-4 text-base font-medium text-gray-500 dark:text-gray-400">1 (satu)
                        minggu
                        sekali kami akan
                        mengirimkan hasil kinerja selama 1 (satu) minggu via domain staging kami atau via video.</p>
                </li>

                <li class="mb-10 ms-6">
                    <span
                        class="absolute flex items-center justify-center w-6 h-6 bg-blue-100 rounded-full -start-3 ring-8 ring-white dark:ring-gray-900 dark:bg-blue-900">
                        <i class="fa-solid fa-hand-holding-heart text-xs text-blue-800 dark:text-blue-300"></i>
                    </span>
                    <h3 data-aos="fade-right"
                        class="flex items-center mb-1 text-lg font-semibold text-gray-900 dark:text-white">Penyerahan
                        aplikasi
                    </h3>
                    <time data-aos="fade-right"
                        class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">Client dan
                        Developer</time>
                    <p data-aos="fade-right" class="mb-4 text-base font-medium text-gray-500 dark:text-gray-400">Setelah
                        selesai
                        kami akan memberikan
                        systemnya source code dan tutorialnya cara install aplikasinya.</p>
                </li>

                <li class="mb-10 ms-6">
                    <span
                        class="absolute flex items-center justify-center w-6 h-6 bg-blue-100 rounded-full -start-3 ring-8 ring-white dark:ring-gray-900 dark:bg-blue-900">
                        <i class="fa-solid fa-handshake text-xs text-blue-800 dark:text-blue-300"></i>
                    </span>
                    <h3 data-aos="fade-right"
                        class="flex items-center mb-1 text-lg font-semibold text-gray-900 dark:text-white">Proses Revisi
                        (jika
                        ada bug)</h3>
                    <time data-aos="fade-right"
                        class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">Client dan
                        Developer</time>
                    <p data-aos="fade-right" class="mb-4 text-base font-medium text-gray-500 dark:text-gray-400">Jika
                        terdapat
                        ketidak sesuaian dalam
                        pembuatan atau ada kesalahan maka kami membuka system revisi sampai bener bener diapproved client.
                    </p>
                </li>
                <li class="mb-10 ms-6">
                    <span
                        class="absolute flex items-center justify-center w-6 h-6 bg-blue-100 rounded-full -start-3 ring-8 ring-white dark:ring-gray-900 dark:bg-blue-900">
                        <i class="fa-solid fa-sack-dollar text-xs text-blue-800 dark:text-blue-300"></i>
                    </span>
                    <h3 data-aos="fade-right"
                        class="flex items-center mb-1 text-lg font-semibold text-gray-900 dark:text-white">Payment
                        100%<span
                            class="bg-blue-100 text-blue-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded dark:bg-blue-900 dark:text-blue-300 ms-3">Finish</span>
                    </h3>
                    <time data-aos="fade-right"
                        class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">Client dan
                        Developer</time>
                    <p data-aos="fade-right" class="mb-4 text-base font-medium text-gray-500 dark:text-gray-400">Client
                        melakukan pembayaran sisa dari
                        kekurangan dp diatas.</p>
                </li>
                <li class="mb-10 ms-6">
                    <span
                        class="absolute flex items-center justify-center w-6 h-6 bg-blue-100 rounded-full -start-3 ring-8 ring-white dark:ring-gray-900 dark:bg-blue-900">
                        <i class="fa-solid fa-bug text-xs text-blue-800 dark:text-blue-300"></i>
                    </span>
                    <h3 data-aos="fade-right"
                        class="flex items-center mb-1 text-lg font-semibold text-gray-900 dark:text-white">
                        Maintenances<span
                            class="bg-blue-100 text-blue-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded dark:bg-blue-900 dark:text-blue-300 ms-3">By
                            Request</span>
                    </h3>
                    <time data-aos="fade-right"
                        class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">Developer</time>
                    <p data-aos="fade-right" class="mb-4 text-base font-medium text-gray-500 dark:text-gray-400">Kami dari
                        kuli
                        IT tecno akan
                        Maintenances system sampai bisa berjalan dengan sendirinya dan tidak ada issue yang terjadi.</p>
                </li>
            </ol>
        </div>
    </section>

    <div id="testimoni" class="py-24 bg-linear-65 from-cyan-500 to-white">
        <div class="container overflow-hidden">
            <div class="flex items-center justify-center mb-16">
                <div class="max-w-2xl text-center">
                    <span
                        class="inline-block text-base border-x-2 border-x-primary text-primary font-semibold px-2 rounded-full bg-primary/20 mb-2">
                        Testimoni
                    </span>
                    <h2 class="text-xl lg:text-5xl font-bold capitalize text-gray-800 mb-1.5">Beberapa Screenshot interaksi client kami.</h2>
                    <p class="text-base font-medium text-gray-700 max-w-xl">Cari jasa yang benar benar bisa dan terpercaya.</p>
                </div>
            </div>
            <div class="gap-2">
                <div class="py-12 -my-12 overflow-x-hidden">
                    <div class="swiper feedback-swiper !overflow-visible max-w-full max-h-full">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide mb-12">
                                <div class="relative bg-white rounded-md h-full">
                                    <div class="p-2">
                                        <img src="{{ asset('img/client/cl1.png') }}" alt=""
                                            class="rounded-md max-w-full max-h-full">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide mb-12">
                                <div class="relative bg-white rounded-md h-full">
                                    <div class="p-2">
                                        <img src="{{ asset('img/client/cl2.png') }}" alt=""
                                            class="rounded-md max-w-full max-h-full">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide mb-12">
                                <div class="relative bg-white rounded-md h-full">
                                    <div class="p-2">
                                        <img src="{{ asset('img/client/cl3.png') }}" alt=""
                                            class="rounded-md max-w-full max-h-full">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide mb-12">
                                <div class="relative bg-white rounded-md h-full">
                                    <div class="p-2">
                                        <img src="{{ asset('img/client/cl4.png') }}" alt=""
                                            class="rounded-md max-w-full max-h-full">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide mb-12">
                                <div class="relative bg-white rounded-md h-full">
                                    <div class="p-2">
                                        <img src="{{ asset('img/client/cl5.png') }}" alt=""
                                            class="rounded-md max-w-full max-h-full">
                                    </div>
                                </div>
                            </div>


                        </div>

                        <div class="swiper-pagination z-10 !-start-0"></div>
                    </div><!-- end swiper -->
                </div>
            </div>
        </div>
    </div>

    <section id="client"
        class="bg-slate-50 bg-cover bg-left bg-no-repeat bg-[url('{{ asset('client/dist/assets/images/landing/saas/hero-3-bg.png') }}')]">
        <div class="py-24">
            <div class="container">
                <div class="flex items-center justify-center mb-14">
                    <div class="max-w-2xl text-center">
                        <span
                            class="inline-block text-base border-x-2 border-x-primary text-primary font-semibold px-2 rounded-full bg-primary/20 mb-2">
                            Client Kami
                        </span>
                        <h2 class="text-xl lg:text-5xl font-bold capitalize text-gray-800 mb-1.5">Beberapa client yang kami
                            maintenance</h2>
                        <p class="text-base font-medium text-gray-500 max-w-xl">Ayo hubungi kami supaya anda bisa menjadi
                            bagian dari pantauan kami.</p>
                    </div>
                </div>

                <div class="grid md:grid-cols-2 grid-cols-1 gap-6 mt-14 mb-4 items-center">
                    <div>
                        <img src="{{ asset('img/client/okinara.png') }}" class="max-w-full max-h-full rounded-md"
                            alt="Saas Image">
                    </div>
                    <div class="my-auto md:mx-auto">
                        <h2 class="lg:text-3xl text-2xl text-gray-800 font-semibold mb-2">System Management Konveksi</h2>
                        <p class="text-base text-gray-600">System yang dibuat untuk mengelola pemasukan dan pengeluaran
                            konveksi untuk mengatasi minus target.</p>

                        <div class="mt-10 flex flex-col gap-y-4">

                            <!-- Feature Item 1 -->
                            <div class="flex items-center gap-5">
                                <div>
                                    <span class="inline-flex relative z-0 bg-primary/10 h-8 w-8"
                                        style="border-radius: 30% 70% 70% 30%/30% 30% 70% 70%;">
                                        <div class="absolute -z-20 top-4 left-4 right-0 bottom-0">
                                            <svg class="w-5 h-5 text-primary" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g stroke="none" fill="currentColor">
                                                    <path
                                                        d="M7,14 C7,16.7614237 9.23857625,19 12,19 C14.7614237,19 17,16.7614237 17,14 C17,12.3742163 15.3702913,9.86852817 12,6.69922982 C8.62970872,9.86852817 7,12.3742163 7,14 Z">
                                                    </path>
                                                    <path
                                                        d="M12,4 C16.6666667,8.08933783 19,11.4226712 19,14 C19,17.8659932 15.8659932,21 12,21 L12,4 Z">
                                                    </path>
                                                </g>
                                            </svg>
                                        </div>
                                    </span>
                                </div>
                                <div>
                                    <p class="text-lg font-medium text-gray-600">
                                        Kategori System Informasi
                                    </p>
                                </div>
                            </div>

                            
                            <!-- Feature Item 2 -->
                            <div class="flex items-center gap-5">
                                <div>
                                    <span class="inline-flex relative z-0 bg-primary/10 h-8 w-8"
                                        style="border-radius: 30% 70% 70% 30%/30% 30% 70% 70%;">
                                        <div class="absolute -z-20 top-4 left-4 right-0 bottom-0">
                                            <svg class="w-5 h-5 text-primary" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g stroke="none" fill="currentColor">
                                                    <polygon opacity="0.3" points="5 3 19 3 23 8 1 8"></polygon>
                                                    <polygon points="23 8 12 20 1 8"></polygon>
                                                </g>
                                            </svg>
                                        </div>
                                    </span>
                                </div>
                                <div>
                                    <p class="text-lg font-medium text-gray-600">Teknologi Laravel 10 + Tailwind</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <hr class="border-t-2 border-dashed border-gray-300 opacity-50 my-4">

                <div class="grid md:grid-cols-2 grid-cols-1 gap-6 mt-14 mb-4 items-center">
                    <div class="my-auto md:mx-auto">
                        <h2 class="lg:text-3xl text-2xl text-gray-800 font-semibold mb-2">Management Data Hotel</h2>
                        <p class="text-base text-gray-600">System yang dibuat untuk mengelola data pengunjung untuk
                            kebutuhan target marketing.</p>

                        <div class="mt-10 flex flex-col gap-y-4">

                            <!-- Feature Item 1 -->
                            <div class="flex items-center gap-5">
                                <div>
                                    <span class="inline-flex relative z-0 bg-primary/10 h-8 w-8"
                                        style="border-radius: 30% 70% 70% 30%/30% 30% 70% 70%;">
                                        <div class="absolute -z-20 top-4 left-4 right-0 bottom-0">
                                            <svg class="w-5 h-5 text-primary" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g stroke="none" fill="currentColor">
                                                    <path
                                                        d="M7,14 C7,16.7614237 9.23857625,19 12,19 C14.7614237,19 17,16.7614237 17,14 C17,12.3742163 15.3702913,9.86852817 12,6.69922982 C8.62970872,9.86852817 7,12.3742163 7,14 Z">
                                                    </path>
                                                    <path
                                                        d="M12,4 C16.6666667,8.08933783 19,11.4226712 19,14 C19,17.8659932 15.8659932,21 12,21 L12,4 Z">
                                                    </path>
                                                </g>
                                            </svg>
                                        </div>
                                    </span>
                                </div>
                                <div>
                                    <p class="text-lg font-medium text-gray-600">
                                        Kategori System Informasi
                                    </p>
                                </div>
                            </div>

                            <!-- Feature Item 2 -->
                            <div class="flex items-center gap-5">
                                <div>
                                    <span class="inline-flex relative z-0 bg-primary/10 h-8 w-8"
                                        style="border-radius: 30% 70% 70% 30%/30% 30% 70% 70%;">
                                        <div class="absolute -z-20 top-4 left-4 right-0 bottom-0">
                                            <svg class="w-5 h-5 text-primary" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g stroke="none" fill="currentColor">
                                                    <polygon opacity="0.3" points="5 3 19 3 23 8 1 8"></polygon>
                                                    <polygon points="23 8 12 20 1 8"></polygon>
                                                </g>
                                            </svg>
                                        </div>
                                    </span>
                                </div>
                                <div>
                                    <p class="text-lg font-medium text-gray-600">Teknologi Laravel 9 + Tailwind + chart js
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <img src="{{ asset('img/client/hotel.png') }}" class="max-w-full max-h-full rounded-md"
                            alt="Saas Image">
                    </div>
                </div>

                <hr class="border-t-2 border-dashed border-gray-300 opacity-50 my-4">

                <div class="grid md:grid-cols-2 grid-cols-1 gap-6 mt-14 mb-4 items-center">
                    <div>
                        <img src="{{ asset('img/client/gedung.png') }}" class="max-w-full max-h-full rounded-md"
                            alt="Saas Image">
                    </div>
                    <div class="my-auto md:mx-auto">
                        <h2 class="lg:text-3xl text-2xl text-gray-800 font-semibold mb-2">System Penyewaan Gedung</h2>
                        <p class="text-base text-gray-600">System yang dibuat untuk pemesanan gedung dan mengelola data
                            peminjaman.</p>

                        <div class="mt-10 flex flex-col gap-y-4">

                            <!-- Feature Item 1 -->
                            <div class="flex items-center gap-5">
                                <div>
                                    <span class="inline-flex relative z-0 bg-primary/10 h-8 w-8"
                                        style="border-radius: 30% 70% 70% 30%/30% 30% 70% 70%;">
                                        <div class="absolute -z-20 top-4 left-4 right-0 bottom-0">
                                            <svg class="w-5 h-5 text-primary" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g stroke="none" fill="currentColor">
                                                    <path
                                                        d="M7,14 C7,16.7614237 9.23857625,19 12,19 C14.7614237,19 17,16.7614237 17,14 C17,12.3742163 15.3702913,9.86852817 12,6.69922982 C8.62970872,9.86852817 7,12.3742163 7,14 Z">
                                                    </path>
                                                    <path
                                                        d="M12,4 C16.6666667,8.08933783 19,11.4226712 19,14 C19,17.8659932 15.8659932,21 12,21 L12,4 Z">
                                                    </path>
                                                </g>
                                            </svg>
                                        </div>
                                    </span>
                                </div>
                                <div>
                                    <p class="text-lg font-medium text-gray-600">
                                        Kategori Business
                                    </p>
                                </div>
                            </div>

                            <!-- Feature Item 2 -->
                            <div class="flex items-center gap-5">
                                <div>
                                    <span class="inline-flex relative z-0 bg-primary/10 h-8 w-8"
                                        style="border-radius: 30% 70% 70% 30%/30% 30% 70% 70%;">
                                        <div class="absolute -z-20 top-4 left-4 right-0 bottom-0">
                                            <svg class="w-5 h-5 text-primary" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g stroke="none" fill="currentColor">
                                                    <polygon opacity="0.3" points="5 3 19 3 23 8 1 8"></polygon>
                                                    <polygon points="23 8 12 20 1 8"></polygon>
                                                </g>
                                            </svg>
                                        </div>
                                    </span>
                                </div>
                                <div>
                                    <p class="text-lg font-medium text-gray-600">Teknologi Laravel 9 + Tailwind + Alpine Js
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <hr class="border-t-2 border-dashed border-gray-300 opacity-50 my-4">

                <div class="grid md:grid-cols-2 grid-cols-1 gap-6 mt-14 items-center">
                    <div class="my-auto md:mx-auto">
                        <h2 class="lg:text-3xl text-2xl text-gray-800 font-semibold mb-2">Content Management System</h2>
                        <p class="text-base text-gray-600">System CMS Static yang dengan keamanan dan fitur yang melimpah
                            untuk instansi pemerintah.</p>

                        <div class="mt-10 flex flex-col gap-y-4">

                            <!-- Feature Item 1 -->
                            <div class="flex items-center gap-5">
                                <div>
                                    <span class="inline-flex relative z-0 bg-primary/10 h-8 w-8"
                                        style="border-radius: 30% 70% 70% 30%/30% 30% 70% 70%;">
                                        <div class="absolute -z-20 top-4 left-4 right-0 bottom-0">
                                            <svg class="w-5 h-5 text-primary" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g stroke="none" fill="currentColor">
                                                    <path
                                                        d="M7,14 C7,16.7614237 9.23857625,19 12,19 C14.7614237,19 17,16.7614237 17,14 C17,12.3742163 15.3702913,9.86852817 12,6.69922982 C8.62970872,9.86852817 7,12.3742163 7,14 Z">
                                                    </path>
                                                    <path
                                                        d="M12,4 C16.6666667,8.08933783 19,11.4226712 19,14 C19,17.8659932 15.8659932,21 12,21 L12,4 Z">
                                                    </path>
                                                </g>
                                            </svg>
                                        </div>
                                    </span>
                                </div>
                                <div>
                                    <p class="text-lg font-medium text-gray-600">
                                        Kategori System Informasi
                                    </p>
                                </div>
                            </div>

                            <!-- Feature Item 2 -->
                            <div class="flex items-center gap-5">
                                <div>
                                    <span class="inline-flex relative z-0 bg-primary/10 h-8 w-8"
                                        style="border-radius: 30% 70% 70% 30%/30% 30% 70% 70%;">
                                        <div class="absolute -z-20 top-4 left-4 right-0 bottom-0">
                                            <svg class="w-5 h-5 text-primary" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g stroke="none" fill="currentColor">
                                                    <polygon opacity="0.3" points="5 3 19 3 23 8 1 8"></polygon>
                                                    <polygon points="23 8 12 20 1 8"></polygon>
                                                </g>
                                            </svg>
                                        </div>
                                    </span>
                                </div>
                                <div>
                                    <p class="text-lg font-medium text-gray-600">Teknologi Laravel 10 + Bootstrap + Jquery
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <img src="{{ asset('img/client/cms.png') }}" class="max-w-full max-h-full rounded-md"
                            alt="Saas Image">
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section id="language" class="py-20 bg-slate-50">
        <div class="container">

            <div class="grid lg:grid-cols-3 md:grid-cols-2 gap-6">
                <div class="flex items-center gap-5 bg-white p-2 rounded">
                    <span class="flex items-center justify-center rounded-md w-12 h-12 bg-blue-100">
                        <svg class="w-6 h-6 text-primary" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 54 33">
                            <g clip-path="url(#prefix__clip0)">
                                <path fill="#38bdf8" fill-rule="evenodd"
                                    d="M27 0c-7.2 0-11.7 3.6-13.5 10.8 2.7-3.6 5.85-4.95 9.45-4.05 2.054.513 3.522 2.004 5.147 3.653C30.744 13.09 33.808 16.2 40.5 16.2c7.2 0 11.7-3.6 13.5-10.8-2.7 3.6-5.85 4.95-9.45 4.05-2.054-.513-3.522-2.004-5.147-3.653C36.756 3.11 33.692 0 27 0zM13.5 16.2C6.3 16.2 1.8 19.8 0 27c2.7-3.6 5.85-4.95 9.45-4.05 2.054.514 3.522 2.004 5.147 3.653C17.244 29.29 20.308 32.4 27 32.4c7.2 0 11.7-3.6 13.5-10.8-2.7 3.6-5.85 4.95-9.45 4.05-2.054-.513-3.522-2.004-5.147-3.653C23.256 19.31 20.192 16.2 13.5 16.2z"
                                    clip-rule="evenodd"></path>
                            </g>
                            <defs>
                                <clipPath id="prefix__clip0">
                                    <path fill="#fff" d="M0 0h54v32.4H0z"></path>
                                </clipPath>
                            </defs>
                        </svg>
                    </span>
                    <h5>Tailwind Css</h5>
                </div>

                <div class="flex items-center gap-5 bg-white p-2 rounded">
                    <span class="flex items-center justify-center rounded-md w-12 h-12 bg-red-100">
                        <i class="fa-brands fa-laravel text-red-500 text-2xl"></i>
                    </span>
                    <h5>Laravel</h5>
                </div>

                <!-- Bootstrap -->
                <div class="flex items-center gap-5 bg-white p-2 rounded">
                    <span class="flex items-center justify-center rounded-md w-12 h-12 bg-purple-100">
                        <i class="fa-brands fa-bootstrap text-purple-600 text-2xl"></i>
                    </span>
                    <h5>Bootstrap</h5>
                </div>

                <!-- JavaScript -->
                <div class="flex items-center gap-5 bg-white p-2 rounded">
                    <span class="flex items-center justify-center rounded-md w-12 h-12 bg-yellow-100">
                        <i class="fa-brands fa-js text-yellow-500 text-2xl"></i>
                    </span>
                    <h5>JavaScript</h5>
                </div>

                <!-- Flutter -->
                <div class="flex items-center gap-5 bg-white p-2 rounded">
                    <span class="flex items-center justify-center rounded-md w-12 h-12 bg-blue-200">
                        <i class="fa-brands fa-flutter text-blue-600 text-2xl"></i>
                    </span>
                    <h5>Flutter</h5>
                </div>

                <!-- Python -->
                <div class="flex items-center gap-5 bg-white p-2 rounded">
                    <span class="flex items-center justify-center rounded-md w-12 h-12 bg-green-100">
                        <i class="fa-brands fa-python text-green-600 text-2xl"></i>
                    </span>
                    <h5>Python</h5>
                </div>

                <!-- Golang -->
                <div class="flex items-center gap-5 bg-white p-2 rounded">
                    <span class="flex items-center justify-center rounded-md w-12 h-12 bg-teal-100">
                        <i class="fa-brands fa-golang text-teal-500 text-2xl"></i>
                    </span>
                    <h5>Golang</h5>
                </div>

                <!-- GitHub & GitLab -->
                <div class="flex items-center gap-5 bg-white p-2 rounded">
                    <span class="flex items-center justify-center rounded-md w-12 h-12 bg-gray-100">
                        <i class="fa-brands fa-git-alt text-gray-600 text-2xl"></i>
                    </span>
                    <h5>GitHub & GitLab</h5>
                </div>

                <!-- Express.js -->
                <div class="flex items-center gap-5 bg-white p-2 rounded">
                    <span class="flex items-center justify-center rounded-md w-12 h-12 bg-black text-white">
                        <i class="fa-brands fa-node-js text-white text-2xl"></i>
                    </span>
                    <h5>Express.js</h5>
                </div>

                <!-- React.js -->
                <div class="flex items-center gap-5 bg-white p-2 rounded">
                    <span class="flex items-center justify-center rounded-md w-12 h-12 bg-blue-100">
                        <i class="fa-brands fa-react text-blue-500 text-2xl"></i>
                    </span>
                    <h5>React.js</h5>
                </div>

                <!-- PHP -->
                <div class="flex items-center gap-5 bg-white p-2 rounded">
                    <span class="flex items-center justify-center rounded-md w-12 h-12 bg-indigo-100">
                        <i class="fa-brands fa-php text-indigo-500 text-2xl"></i>
                    </span>
                    <h5>PHP</h5>
                </div>

                <!-- Etc -->
                <div class="flex items-center gap-5 bg-white p-2 rounded">
                    <span class="flex items-center justify-center rounded-md w-12 h-12 bg-gray-300">
                        <i class="fa-solid fa-ellipsis text-gray-600 text-2xl"></i>
                    </span>
                    <h5>Dan Lain Lain</h5>
                </div>

            </div>
        </div>
    </section>

    <section id="faq" class="py-24">
        <div class="container">
            <div class="flex items-center justify-center mb-14">
                <div class="max-w-2xl text-center">
                    <h5 class="capitalize text-lg  text-gray-800 font-medium mb-2">Help <span
                            class="font-semibold text-primary">Center</span></h5>
                    <h2 class="text-3xl/snug font-bold text-gray-800 mb-1">Pertanyaan yang sering diajukan</h2>
                </div>
            </div>

            <div class="max-w-2xl mx-auto">
                <div class="hs-accordion-group space-y-4">
                    <div class="hs-accordion active border border-gray-200 rounded-lg overflow-hidden" id="faq-1">
                        <button
                            class="hs-accordion-toggle capitalize px-6 py-4 inline-flex items-center justify-between gap-x-3 w-full text-left text-gray-950 transition-all"
                            aria-controls="faq-accordion-1">
                            <h5 class="text-base font-semibold">
                                <i class="uil uil-question-circle text-xl/none align-middle me-2"></i>
                                Membuat landing page kisaran berapa ?
                            </h5>
                            <i data-lucide="chevron-up"
                                class="h-4 w-4 transition-all duration-500 hs-accordion-active:-rotate-180"></i>
                        </button>
                        <div id="faq-accordion-1"
                            class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300"
                            aria-labelledby="faq-1">
                            <div class="px-6 pb-4 pt-0">
                                <p class="text-gray-600 text-sm font-medium mb-2">
                                    Untuk membuat landing page / menampilkan produk anda kami biasanya mengajukan budget 300
                                    - 500 tanpa domain dan hosting.
                                </p>
                                <p class="text-gray-600 text-sm font-medium">
                                    Estimasi max 3 hari selesai.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="hs-accordion border border-gray-200 rounded-lg overflow-hidden" id="faq-2">
                        <button
                            class="hs-accordion-toggle capitalize px-6 py-4 inline-flex items-center justify-between gap-x-3 w-full text-left text-gray-950 transition-all"
                            aria-controls="faq-2">
                            <h5 class="text-base font-semibold">
                                <i class="uil uil-question-circle text-xl/none align-middle me-2"></i>
                                Apakah pengerjaannya cepat ?
                            </h5>
                            <i data-lucide="chevron-up"
                                class="h-4 w-4 transition-all duration-500 hs-accordion-active:-rotate-180"></i>
                        </button>
                        <div id="faq-2"
                            class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                            aria-labelledby="faq-2">
                            <div class="px-6 pb-4 pt-0">
                                <p class="text-gray-600 text-sm font-medium mb-2">
                                    Ya.. kami mengerjakan secara team dengan budget minimum tapi hasil maksimal dan sesuai
                                    dengan deatline yang diberikan.
                                </p>
                                <p class="text-gray-600 text-sm font-medium">
                                    Biasanya system komplex 1 bulan selesai.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="hs-accordion border border-gray-200 rounded-lg overflow-hidden" id="faq-3">
                        <button
                            class="hs-accordion-toggle capitalize px-6 py-4 inline-flex items-center justify-between gap-x-3 w-full text-left text-gray-950 transition-all"
                            aria-controls="faq-3">
                            <h5 class="text-base font-semibold">
                                <i class="uil uil-question-circle text-xl/none align-middle me-2"></i>
                                Kalau update website yang sudah jadi apakah bisa ?
                            </h5>
                            <i data-lucide="chevron-up"
                                class="h-4 w-4 transition-all duration-500 hs-accordion-active:-rotate-180"></i>
                        </button>
                        <div id="faq-3"
                            class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                            aria-labelledby="faq-3">
                            <div class="px-6 pb-4 pt-0">
                                <p class="text-gray-600 text-sm font-medium mb-2">
                                    yahh.. bisa sekali .. kami sudah terbiasa rebuild system yang sudah jadi, update fitur
                                    dari website yang sudah ada sesuai keinginan.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="hs-accordion border border-gray-200 rounded-lg overflow-hidden" id="faq-4">
                        <button
                            class="hs-accordion-toggle capitalize px-6 py-4 inline-flex items-center justify-between gap-x-3 w-full text-left text-gray-950 transition-all"
                            aria-controls="faq-4">
                            <h5 class="text-base font-semibold">
                                <i class="uil uil-question-circle text-xl/none align-middle me-2"></i>
                                Apakah bisa dibantu mendeploy systemnya ?
                            </h5>
                            <i data-lucide="chevron-up"
                                class="h-4 w-4 transition-all duration-500 hs-accordion-active:-rotate-180"></i>
                        </button>
                        <div id="faq-4"
                            class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                            aria-labelledby="faq-4">
                            <div class="px-6 pb-4 pt-0">
                                <p class="text-gray-600 text-sm font-medium mb-2">
                                    Dengan budget awal yang sudah ditentukan kami akan membantu mendeploynya ke vps atau
                                    share hosting yang sudah tersedia.
                                </p>
                                <p class="text-gray-600 text-sm font-medium">
                                    dan tanpa biaya tambahan apapun.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="hs-accordion border border-gray-200 rounded-lg overflow-hidden" id="faq-5">
                        <button
                            class="hs-accordion-toggle capitalize px-6 py-4 inline-flex items-center justify-between gap-x-3 w-full text-left text-gray-950 transition-all"
                            aria-controls="faq-5">
                            <h5 class="text-base font-semibold">
                                <i class="uil uil-question-circle text-xl/none align-middle me-2"></i>
                                Kalau untuk tugas apakah bisa dijelaskan ?
                            </h5>
                            <i data-lucide="chevron-up"
                                class="h-4 w-4 transition-all duration-500 hs-accordion-active:-rotate-180"></i>
                        </button>
                        <div id="faq-5"
                            class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                            aria-labelledby="faq-5">
                            <div class="px-6 pb-4 pt-0">
                                <p class="text-gray-600 text-sm font-medium mb-2">
                                    Khusus untuk tugas kuliah atau apapun kita akan membuatkan documentasi mengenai project
                                    yang dibuat businness prosess yang terjadi didalamnya.
                                </p>
                                <p class="text-gray-600 text-sm font-medium">
                                    Bisa juga via zoom untuk menjelaskan baris code jika dibutuhkan.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
