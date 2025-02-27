<footer class="bg-center bg-no-repeat bg-slate-900 bg-[url({{ asset('client/dist/assets/images/footer-bg.png') }})]">
    <div class="container lg:px-10">
        <div class="flex flex-col lg:flex-row justify-between gap-14 py-24">
            <div class="lg:w-3/12">
                <a href="#" class="flex items-center gap-2 logo">
                    <img src="{{ asset('img/client/logo_1.png') }}" class="w-36" alt="">
                </a>

                <p class="text-gray-400 text-base font-medium max-w-xs mt-6">Bergabungkan dengan kami sebagai client yang
                    kami prioritaskan.</p>
                @php
                    $currentUrl = urlencode(url()->current());
                    $shareLinks = [
                        'facebook' => "https://www.facebook.com/sharer/sharer.php?u={$currentUrl}",
                        'twitter' => "https://twitter.com/intent/tweet?url={$currentUrl}",
                        'linkedin' => "https://www.linkedin.com/sharing/share-offsite/?url={$currentUrl}",
                        'whatsapp' => "https://wa.me/?text={$currentUrl}",
                    ];
                @endphp

                <h5 class="text-slate-300 2xl:text-lg text-base mb-4 mt-6">Share :</h5>
                <ul class="flex flex-wrap items-center gap-2">
                    <li>
                        <a href="{{ $shareLinks['facebook'] }}" target="_blank"
                            class="h-10 w-10 inline-flex items-center justify-center bg-slate-800 rounded-lg transition-all duration-500 group hover:bg-primary">
                            <i data-lucide="facebook" class="h-5 w-5 text-gray-400 group-hover:text-white"></i>
                        </a>
                    </li>
                    <li>
                        <a href="{{ $shareLinks['twitter'] }}" target="_blank"
                            class="h-10 w-10 inline-flex items-center justify-center bg-slate-800 rounded-lg transition-all duration-500 group hover:bg-sky-600">
                            <i data-lucide="twitter" class="h-5 w-5 text-gray-400 group-hover:text-white"></i>
                        </a>
                    </li>
                    <li>
                        <a href="{{ $shareLinks['linkedin'] }}" target="_blank"
                            class="h-10 w-10 inline-flex items-center justify-center bg-slate-800 rounded-lg transition-all duration-500 group hover:bg-blue-800">
                            <i data-lucide="linkedin" class="h-5 w-5 text-gray-400 group-hover:text-white"></i>
                        </a>
                    </li>
                    <li>
                        <a href="{{ $shareLinks['whatsapp'] }}" target="_blank"
                            class="h-10 w-10 inline-flex items-center justify-center bg-slate-800 rounded-lg transition-all duration-500 group hover:bg-green-500">
                            <i data-lucide="message-circle" class="h-5 w-5 text-gray-400 group-hover:text-white"></i>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="lg:w-8/12">
                <div class="grid md:grid-cols-3 sm:grid-cols-2 gap-6">
                    <div class="">
                        <ul class="flex flex-col gap-3">
                            <h5 class="xl:text-xl lg:text-lg font-semibold text-gray-200 mb-2">Lokasi Operasional Kami
                            </h5>
                            <iframe class="hidden lg:block"
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9241.475514566357!2d109.19735345729926!3d-7.423217453016131!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e655c3136423d1d%3A0x4027a76e352e4a0!2sPurwokerto%2C%20Kabupaten%20Banyumas%2C%20Jawa%20Tengah!5e1!3m2!1sid!2sid!4v1740670413707!5m2!1sid!2sid"
                                width="700" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                            <iframe class="lg:hidden"
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9241.475514566357!2d109.19735345729926!3d-7.423217453016131!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e655c3136423d1d%3A0x4027a76e352e4a0!2sPurwokerto%2C%20Kabupaten%20Banyumas%2C%20Jawa%20Tengah!5e1!3m2!1sid!2sid!4v1740670413707!5m2!1sid!2sid"
                                width="360" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </ul>
                    </div>
                </div>
            </div>
        </div><!-- Grid End -->
    </div><!-- Container End -->

    <div class="border-t border-slate-700/20 h-[75px]">
        <div
            class="container lg:px-20 flex flex-wrap justify-center items-center h-full  md:justify-between text-center md:text-start">
            <p class="text-base font-medium text-gray-400">
                <script>
                    document.write(new Date().getFullYear())
                </script>
                © Powered By Kuli IT Tecno <i data-lucide="heart" class="inline h-4 w-4 text-red-500 fill-red-500"></i>
            </p>

        </div><!-- Flex End -->
    </div><!-- Container End -->
    </div>
</footer>
