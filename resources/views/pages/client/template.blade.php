@extends('layouts.app-client')
@section('title', 'Home')
@section('content')
    <!-- About section start -->
    <section id="about" class="py-24 bg-white">
        <div class="container">
            <div class="flex items-center justify-center mb-16">
                <div class="max-w-2xl text-center">
                    <h5 class="capitalize text-lg  text-gray-800 font-medium mb-2">Our <span
                            class="font-semibold text-primary">Work</span></h5>
                    <h2 class="text-3xl/snug font-bold capitalize text-gray-800 mb-1.5">How it work</h2>
                    <p class="text-base font-medium text-gray-500 max-w-xl">Sending your money has never been so Easier.</p>
                </div>
            </div><!-- flex end -->

            <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-6 mt-10">
                <div
                    class="flex items-center justify-center rounded-2xl border border-b-4 hover:border-b-primary transition-all duration-500 group hover:-translate-y-2">
                    <div class="text-center p-10">
                        <div class="inline-flex items-center justify-center mb-6">
                            <i data-lucide="user-2" class="h-8 w-8 text-primary fill-primary/20"></i>
                        </div>
                        <h3 class="text-2xl font-bold mb-1">Creat an account</h3>
                        <p class="text-base font-medium text-gray-500">Integer tincidunt cras dapibus vivamus elementum
                            semper nisi aenean vulputate eleifend tellus.</p>
                    </div>
                </div><!-- end grid-col -->

                <div
                    class="flex items-center justify-center rounded-2xl border border-b-4 hover:border-b-primary transition-all duration-500 group hover:-translate-y-2">
                    <div class="text-center p-10">
                        <div class="inline-flex items-center justify-center mb-6">
                            <i data-lucide="building" class="h-8 w-8 text-primary fill-primary/20"></i>
                        </div>
                        <h3 class="text-2xl font-bold mb-1">Attach bank accounts</h3>
                        <p class="text-base font-medium text-gray-500">Dapibus in viverra quis feugiat a tellus phasellus
                            viverra nulla ut metus varius laoreet quisque rutrum.</p>
                    </div>
                </div><!-- end grid-col -->

                <div
                    class="flex items-center justify-center rounded-2xl border border-b-4 hover:border-b-primary transition-all duration-500 group hover:-translate-y-2">
                    <div class="text-center p-10">
                        <div class="inline-flex items-center justify-center mb-6">
                            <i data-lucide="scroll-text" class="h-8 w-8 text-primary fill-primary/20"></i>
                        </div>
                        <h3 class="text-2xl font-bold mb-1">Quick and easy invoicing</h3>
                        <p class="text-base font-medium text-gray-500">neque sit amet convallis pulvinar, justo nulla
                            eleifend augue, ac auctor orci leo non est.</p>
                    </div>
                </div><!-- end grid-col -->

                <div
                    class="flex items-center justify-center rounded-2xl border border-b-4 hover:border-b-primary transition-all duration-500 group hover:-translate-y-2">
                    <div class="text-center p-10">
                        <div class="inline-flex items-center justify-center mb-6">
                            <i data-lucide="credit-card" class="h-8 w-8 text-primary fill-primary/20"></i>
                        </div>
                        <h3 class="text-2xl font-bold mb-1">Pay anywhere any time</h3>
                        <p class="text-base font-medium text-gray-500">Vestibulum dapibus nunc ac augue. Curabitur
                            vestibulum aliquam leo neque eu enim.</p>
                    </div>
                </div><!-- end grid-col -->

                <div
                    class="flex items-center justify-center rounded-2xl border border-b-4 hover:border-b-primary transition-all duration-500 group hover:-translate-y-2">
                    <div class="text-center p-10">
                        <div class="inline-flex items-center justify-center mb-6">
                            <i data-lucide="banknote" class="h-8 w-8 text-primary fill-primary/20"></i>
                        </div>
                        <h3 class="text-2xl font-bold mb-1">Send money</h3>
                        <p class="text-base font-medium text-gray-500">Cras ultricies mi eu turpis hendrerit fringilla
                            vestibulum ante ipsum primis faucibus luctus etultrices.</p>
                    </div>
                </div><!-- end grid-col -->

                <div
                    class="flex items-center justify-center rounded-2xl border border-b-4 hover:border-b-primary transition-all duration-500 group hover:-translate-y-2">
                    <div class="text-center p-10">
                        <div class="inline-flex items-center justify-center mb-6">
                            <i data-lucide="wallet" class="h-8 w-8 text-primary fill-primary/20"></i>
                        </div>
                        <h3 class="text-2xl font-bold mb-1">Choos your method</h3>
                        <p class="text-base font-medium text-gray-500">In hac habitasse platea dictumst. Fusce a quam. Etiam
                            ut purus mattis mauris sodales aliquams.</p>
                    </div>
                </div><!-- end grid-col -->
            </div><!-- Grid End -->
        </div><!-- Container End -->
    </section>
    <!-- About section End -->


    <!-- Platform section start -->
    <section id="platform" class="py-24">
        <div class="container">
            <div class="flex items-center justify-center mb-16">
                <div class="max-w-2xl text-center">
                    <h5 class="capitalize text-lg  text-gray-800 font-medium mb-2">Our <span
                            class="font-semibold text-primary">Platform</span></h5>
                    <h2 class="text-3xl/snug font-bold capitalize text-gray-800 mb-1.5">Simple payment platform</h2>
                    <p class="text-base font-medium text-gray-500 max-w-xl">Itaque earum rerum tenetur sapiente delectus aut
                        reiciendis voluptatibus doloribus asperiores repellat.</p>
                </div>
            </div><!-- flex end -->

            <div class="grid lg:grid-cols-2 grid-cols-1 gap-6 mt-12">
                <div class="rounded-lg border p-6">
                    <div class="flex">
                        <div>
                            <div
                                class="flex items-center justify-center h-10 w-10 bg-primary/10 rounded-md dark:bg-primary/20">
                                <i class="uil-chart-pie-alt text-primary text-xl"></i>
                            </div>
                        </div>
                        <div class="ms-6">
                            <h4 class="text-xl font-bold mb-2">Mobile Wallet</h4>
                            <p class="text-lg font-medium text-slate-500 mb-6">On the other hand, we denounce with righteous
                                indignation dislike trouble & demoralization.</p>
                            <div class="flex items-center">
                                <a href="#"
                                    class="group relative inline-block font-semibold tracking-wide align-middle text-base text-center border-none text-primary hover:text-primary duration-500"><span
                                        class="absolute h-px w-7/12 group-hover:w-full transition-all duration-500 rounded bg-primary/80 -bottom-0"></span>Learn
                                    More <i class="uil uil-angle-right text-xl/none align-middle"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="rounded-lg border p-6">
                    <div class="flex">
                        <div>
                            <div
                                class="flex items-center justify-center h-10 w-10 bg-primary/10 rounded-md dark:bg-primary/20">
                                <i class="uil-unlock text-primary text-xl"></i>
                            </div>
                        </div>
                        <div class="ms-6">
                            <h4 class="text-xl font-bold mb-2">Highly Secured</h4>
                            <p class="text-lg font-medium text-slate-500 mb-6">Itaque earum rerum hic tenetur a sapiente
                                delectus ut aut reiciendis voluptatibus maiores alias.</p>
                            <div class="flex items-center">
                                <a href="#"
                                    class="group relative inline-block font-semibold tracking-wide align-middle text-base text-center border-none text-primary hover:text-primary duration-500"><span
                                        class="absolute h-px w-7/12 group-hover:w-full transition-all duration-500 rounded bg-primary/80 -bottom-0"></span>Learn
                                    More <i class="uil uil-angle-right text-xl/none align-middle"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="rounded-lg border p-6">
                    <div class="flex">
                        <div>
                            <div
                                class="flex items-center justify-center h-10 w-10 bg-primary/10 rounded-md  dark:bg-primary/20">
                                <i class="uil-dollar-sign text-primary text-xl"></i>
                            </div>
                        </div>
                        <div class="ms-6">
                            <h4 class="text-xl font-bold mb-2">No Hidden Fees</h4>
                            <p class="text-lg font-medium text-slate-500 mb-6">On the other hand, we denounce with righteous
                                indignation dislike trouble & demoralization.</p>
                            <div class="flex items-center">
                                <a href="#"
                                    class="group relative inline-block font-semibold tracking-wide align-middle text-base text-center border-none text-primary hover:text-primary duration-500"><span
                                        class="absolute h-px w-7/12 group-hover:w-full transition-all duration-500 rounded bg-primary/80 -bottom-0"></span>Learn
                                    More <i class="uil uil-angle-right text-xl/none align-middle"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="rounded-lg border p-6">
                    <div class="flex">
                        <div>
                            <div
                                class="flex items-center justify-center h-10 w-10 bg-primary/10 rounded-md  dark:bg-primary/20">
                                <i class="uil-money-bill text-primary text-xl"></i>
                            </div>
                        </div>
                        <div class="ms-6">
                            <h4 class="text-xl font-bold mb-2">Fast Transaction</h4>
                            <p class="text-lg font-medium text-slate-500 mb-6">inventore veritatis et quasi architecto
                                beatae vitae dicta sunt explicabo.</p>
                            <div class="flex items-center">
                                <a href="#"
                                    class="group relative inline-block font-semibold tracking-wide align-middle text-base text-center border-none text-primary hover:text-primary duration-500"><span
                                        class="absolute h-px w-7/12 group-hover:w-full transition-all duration-500 rounded bg-primary/80 -bottom-0"></span>Learn
                                    More <i class="uil uil-angle-right text-xl/none align-middle"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- Grid End -->
        </div><!-- Container End -->
    </section>
    <!-- Platform section End -->

    <!-- features start -->
    <section id="features" class="py-20 bg-slate-50">
        <div class="container">
            <div class="flex items-center justify-center mb-14">
                <div class="max-w-2xl text-center">
                    <span
                        class="inline-block text-base border-x-2 border-x-primary text-primary font-semibold px-2 rounded-full bg-primary/20 mb-2">Landing
                        Features</span>
                    <h2 class="text-3xl/snug font-bold capitalize text-gray-800 mb-1">Why Choose Opixo</h2>
                    <p class="text-base font-medium text-gray-600">A modern design, fresh look and feel</p>
                </div>
            </div>

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
                    <h5>Based on latest Tailwind v3.3.3</h5>
                </div>

                <div class="flex items-center gap-5 bg-white p-2 rounded">
                    <span class="flex items-center justify-center rounded-md w-12 h-12 bg-blue-100">
                        <svg class="w-6 h-6 text-primary" viewBox="0 0 24 24" version="1.1"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect id="bound" x="0" y="0" width="24" height="24"></rect>
                                <path
                                    d="M8,2.5 C7.30964406,2.5 6.75,3.05964406 6.75,3.75 L6.75,20.25 C6.75,20.9403559 7.30964406,21.5 8,21.5 L16,21.5 C16.6903559,21.5 17.25,20.9403559 17.25,20.25 L17.25,3.75 C17.25,3.05964406 16.6903559,2.5 16,2.5 L8,2.5 Z"
                                    id="Combined-Shape" fill="currentcolor" opacity="0.3"></path>
                                <path
                                    d="M8,2.5 C7.30964406,2.5 6.75,3.05964406 6.75,3.75 L6.75,20.25 C6.75,20.9403559 7.30964406,21.5 8,21.5 L16,21.5 C16.6903559,21.5 17.25,20.9403559 17.25,20.25 L17.25,3.75 C17.25,3.05964406 16.6903559,2.5 16,2.5 L8,2.5 Z M8,1 L16,1 C17.5187831,1 18.75,2.23121694 18.75,3.75 L18.75,20.25 C18.75,21.7687831 17.5187831,23 16,23 L8,23 C6.48121694,23 5.25,21.7687831 5.25,20.25 L5.25,3.75 C5.25,2.23121694 6.48121694,1 8,1 Z M9.5,1.75 L14.5,1.75 C14.7761424,1.75 15,1.97385763 15,2.25 L15,3.25 C15,3.52614237 14.7761424,3.75 14.5,3.75 L9.5,3.75 C9.22385763,3.75 9,3.52614237 9,3.25 L9,2.25 C9,1.97385763 9.22385763,1.75 9.5,1.75 Z"
                                    id="Combined-Shape" fill="currentcolor"></path>
                            </g>
                        </svg>
                    </span>
                    <h5>Fully Responsive</h5>
                </div>

                <div class="flex items-center gap-5 bg-white p-2 rounded">
                    <span class="flex items-center justify-center rounded-md w-12 h-12 bg-blue-100">
                        <svg class="w-6 h-6 text-primary" viewBox="0 0 24 24" version="1.1"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect id="bound" x="0" y="0" width="24" height="24"></rect>
                                <rect id="Rectangle-7-Copy" fill="currentcolor" x="2" y="5" width="19"
                                    height="4" rx="1"></rect>
                                <rect id="Rectangle-7-Copy-4" fill="currentcolor" opacity="0.3" x="2" y="11"
                                    width="19" height="10" rx="1"></rect>
                            </g>
                        </svg>
                    </span>
                    <h5>Cross-browser compatible</h5>
                </div>

                <div class="flex items-center gap-5 bg-white p-2 rounded" data-duration="900">
                    <span class="flex items-center justify-center rounded-md w-12 h-12 bg-blue-100">
                        <span class="text-xl font-semibold text-primary">S</span>
                    </span>
                    <h5>Sass Powered</h5>
                </div>

                <div class="flex items-center gap-5 bg-white p-2 rounded" data-duration="900">
                    <span class="flex items-center justify-center rounded-md w-12 h-12 bg-blue-100">
                        <svg class="w-6 h-6 text-primary" viewBox="0 0 24 24" version="1.1"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect id="bound" x="0" y="0" width="24" height="24"></rect>
                                <path
                                    d="M12,20 C7.581722,20 4,16.418278 4,12 C4,7.581722 7.581722,4 12,4 C16.418278,4 20,7.581722 20,12 C20,16.418278 16.418278,20 12,20 Z M12,5.99999664 C8.6862915,6 6,8.6862915 6,12 C6,15.3137085 8.6862915,18 12,18.0000034 L12,5.99999664 Z"
                                    id="Combined-Shape" fill="currentColor"></path>
                            </g>
                        </svg>
                    </span>
                    <h5>Easy to customize</h5>
                </div>

                <div class="flex items-center gap-5 bg-white p-2 rounded" data-duration="900">
                    <span class="flex items-center justify-center rounded-md w-12 h-12 bg-blue-100">
                        <svg class="w-6 h-6 text-primary" viewBox="0 0 24 24" version="1.1"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect id="bound" x="0" y="0" width="24" height="24"></rect>
                                <rect id="Combined-Shape" fill="currentColor" opacity="0.3" x="2" y="2" width="20"
                                    height="20" rx="10"></rect>
                                <path
                                    d="M6.16794971,14.5547002 C5.86159725,14.0951715 5.98577112,13.4743022 6.4452998,13.1679497 C6.90482849,12.8615972 7.52569784,12.9857711 7.83205029,13.4452998 C8.9890854,15.1808525 10.3543313,16 12,16 C13.6456687,16 15.0109146,15.1808525 16.1679497,13.4452998 C16.4743022,12.9857711 17.0951715,12.8615972 17.5547002,13.1679497 C18.0142289,13.4743022 18.1384028,14.0951715 17.8320503,14.5547002 C16.3224187,16.8191475 14.3543313,18 12,18 C9.64566871,18 7.67758127,16.8191475 6.16794971,14.5547002 Z"
                                    id="Path-56" fill="currentColor"></path>
                            </g>
                        </svg>
                    </span>
                    <h5>Developer Friendly</h5>
                </div>

                <div class="flex items-center gap-5 bg-white p-2 rounded" data-duration="1200">
                    <span class="flex items-center justify-center rounded-md w-12 h-12 bg-blue-100">
                        <svg class="w-6 h-6 text-primary" viewBox="0 0 24 24" version="1.1"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect id="bound" x="0" y="0" width="24" height="24"></rect>
                                <path
                                    d="M17.2718029,8.68536757 C16.8932864,8.28319382 16.9124644,7.65031935 17.3146382,7.27180288 C17.7168119,6.89328641 18.3496864,6.91246442 18.7282029,7.31463817 L22.7282029,11.5646382 C23.0906029,11.9496882 23.0906029,12.5503176 22.7282029,12.9353676 L18.7282029,17.1853676 C18.3496864,17.5875413 17.7168119,17.6067193 17.3146382,17.2282029 C16.9124644,16.8496864 16.8932864,16.2168119 17.2718029,15.8146382 L20.6267538,12.2500029 L17.2718029,8.68536757 Z M6.72819712,8.6853647 L3.37324625,12.25 L6.72819712,15.8146353 C7.10671359,16.2168091 7.08753558,16.8496835 6.68536183,17.2282 C6.28318808,17.6067165 5.65031361,17.5875384 5.27179713,17.1853647 L1.27179713,12.9353647 C0.909397125,12.5503147 0.909397125,11.9496853 1.27179713,11.5646353 L5.27179713,7.3146353 C5.65031361,6.91246155 6.28318808,6.89328354 6.68536183,7.27180001 C7.08753558,7.65031648 7.10671359,8.28319095 6.72819712,8.6853647 Z"
                                    id="Combined-Shape" fill="currentColor"></path>
                                <rect id="Rectangle-28" fill="currentColor" opacity="0.3"
                                    transform="translate(12.000000, 12.000000) rotate(-345.000000) translate(-12.000000, -12.000000) "
                                    x="11" y="4" width="2" height="16" rx="1"></rect>
                            </g>
                        </svg>
                    </span>
                    <h5>Clean &amp; Easy to Understand Code</h5>
                </div>

                <div class="flex items-center gap-5 bg-white p-2 rounded" data-duration="1200">
                    <span class="flex items-center justify-center rounded-md w-12 h-12 bg-blue-100">
                        <svg class="w-6 h-6 text-primary" viewBox="0 0 24 24" version="1.1"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <polygon id="Shape" points="0 0 24 0 24 24 0 24"></polygon>
                                <rect id="Rectangle-25" fill="currentColor" opacity="0.3" x="2" y="4" width="20"
                                    height="16" rx="2"></rect>
                                <polygon id="Path" fill="currentColor" opacity="0.3" points="4 20 10.5 11 17 20">
                                </polygon>
                                <polygon id="Path-Copy" fill="currentColor" points="11 20 15.5 14 20 20"></polygon>
                                <circle id="Oval-76" fill="currentColor" opacity="0.3" cx="18.5" cy="8.5"
                                    r="1.5"></circle>
                            </g>
                        </svg>
                    </span>
                    <h5>Font and SVG Icons</h5>
                </div>

                <div class="flex items-center gap-5 bg-white p-2 rounded" data-duration="1200">
                    <span class="flex items-center justify-center rounded-md w-12 h-12 bg-blue-100">
                        <svg class="w-6 h-6 text-primary" viewBox="0 0 24 24" version="1.1"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <polygon id="Shape" points="0 0 24 0 24 24 0 24"></polygon>
                                <path
                                    d="M9.26193932,16.6476484 C8.90425297,17.0684559 8.27315905,17.1196257 7.85235158,16.7619393 C7.43154411,16.404253 7.38037434,15.773159 7.73806068,15.3523516 L16.2380607,5.35235158 C16.6013618,4.92493855 17.2451015,4.87991302 17.6643638,5.25259068 L22.1643638,9.25259068 C22.5771466,9.6195087 22.6143273,10.2515811 22.2474093,10.6643638 C21.8804913,11.0771466 21.2484189,11.1143273 20.8356362,10.7474093 L17.0997854,7.42665306 L9.26193932,16.6476484 Z"
                                    id="Path-94-Copy" fill="currentColor" opacity="0.3"
                                    transform="translate(14.999995, 11.000002) rotate(-180.000000) translate(-14.999995, -11.000002) ">
                                </path>
                                <path
                                    d="M4.26193932,17.6476484 C3.90425297,18.0684559 3.27315905,18.1196257 2.85235158,17.7619393 C2.43154411,17.404253 2.38037434,16.773159 2.73806068,16.3523516 L11.2380607,6.35235158 C11.6013618,5.92493855 12.2451015,5.87991302 12.6643638,6.25259068 L17.1643638,10.2525907 C17.5771466,10.6195087 17.6143273,11.2515811 17.2474093,11.6643638 C16.8804913,12.0771466 16.2484189,12.1143273 15.8356362,11.7474093 L12.0997854,8.42665306 L4.26193932,17.6476484 Z"
                                    id="Path-94" fill="currentColor"
                                    transform="translate(9.999995, 12.000002) rotate(-180.000000) translate(-9.999995, -12.000002) ">
                                </path>
                            </g>
                        </svg>
                    </span>
                    <h5>Free Updates</h5>
                </div>
            </div>
        </div>
    </section>
    <!-- features end -->

    <!-- service Section Start -->
    <section id="service" class="py-24">
        <div class="container">
            <div class="flex items-center justify-center mb-14">
                <div class="max-w-2xl text-center">
                    <h5 class="capitalize text-lg  text-gray-800 font-medium mb-2">Customer <span
                            class="font-semibold text-primary">Service</span></h5>
                    <h2 class="text-3xl/snug font-bold capitalize text-gray-800 mb-1">Choose dashboard for every stage
                        of your Customer journey</h2>
                    <p class="text-base text-gray-600">Nemo enim ipsam voluptatem that quia voluptas aut fugit </p>
                </div>
            </div>

            <div class="grid lg:grid-cols-3 sm:grid-cols-2 grid-cols-1 gap-8">
                <div class="bg-white p-6">
                    <span class="inline-flex relative z-0 bg-blue-50 h-14 w-14 mb-6"
                        style="border-radius: 30% 70% 70% 30%/30% 30% 70% 70%;">
                        <div class="absolute -z-20 top-5 left-5 right-0 bottom-0">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 text-blue-500" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path
                                    d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z">
                                </path>
                                <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
                                <line x1="12" y1="22.08" x2="12" y2="12"></line>
                            </svg>
                        </div>
                    </span>
                    <h5 class="text-xl font-medium mt-5 text-gray-800">Clean Design</h5>
                    <p class="text-base text-slate-600 mt-4">Quisque quis velit quiars ligula aliquet lacinia quis a
                        diam quisque pretium nulla nec ultricies magna.</p>
                </div>

                <div class="bg-white p-6">
                    <span class="inline-flex relative z-0 bg-red-50 h-14 w-14 mb-6"
                        style="border-radius: 30% 70% 70% 30%/30% 30% 70% 70%;">
                        <div class="absolute -z-20 top-5 left-5 right-0 bottom-0">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 text-red-600" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <circle cx="12" cy="12" r="4"></circle>
                                <path d="M16 8v5a3 3 0 0 0 6 0v-1a10 10 0 1 0-3.92 7.94"></path>
                            </svg>
                        </div>
                    </span>
                    <h5 class="text-xl font-medium mt-5 text-gray-800">Awesome Code</h5>
                    <p class="text-base text-slate-600 mt-4">Nemo enim ipsam voluptatem quia voluptas sit aspernatur
                        aut
                        odit aut fugit sed quia consequuntur nesciunt.</p>
                </div>

                <div class="bg-white p-6">
                    <span class="inline-flex relative z-0 bg-emerald-50 h-14 w-14 mb-6"
                        style="border-radius: 30% 70% 70% 30%/30% 30% 70% 70%;">
                        <div class="absolute -z-20 top-5 left-5 right-0 bottom-0">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 text-emerald-500"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path
                                    d="M22.65 14.39L12 22.13 1.35 14.39a.84.84 0 0 1-.3-.94l1.22-3.78 2.44-7.51A.42.42 0 0 1 4.82 2a.43.43 0 0 1 .58 0 .42.42 0 0 1 .11.18l2.44 7.49h8.1l2.44-7.51A.42.42 0 0 1 18.6 2a.43.43 0 0 1 .58 0 .42.42 0 0 1 .11.18l2.44 7.51L23 13.45a.84.84 0 0 1-.35.94z">
                                </path>
                            </svg>
                        </div>
                    </span>
                    <h5 class="text-xl font-medium mt-5 text-gray-800">Creative Idea</h5>
                    <p class="text-base text-slate-600 mt-4">At vero eos et accusamus et iusto odio dignissimos ducimus
                        qui blanditiis praesentium.</p>
                </div>

                <div class="bg-white p-6">
                    <span class="inline-flex relative z-0 bg-sky-50 h-14 w-14 mb-6"
                        style="border-radius: 30% 70% 70% 30%/30% 30% 70% 70%;">
                        <div class="absolute -z-20 top-5 left-5 right-0 bottom-0">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 text-sky-500" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <rect x="3" y="3" width="7" height="7"></rect>
                                <rect x="14" y="3" width="7" height="7"></rect>
                                <rect x="14" y="14" width="7" height="7"></rect>
                                <rect x="3" y="14" width="7" height="7"></rect>
                            </svg>
                        </div>
                    </span>
                    <h5 class="text-xl font-medium mt-5 text-gray-800">Unlimited Features</h5>
                    <p class="text-base text-slate-600 mt-4">Et harum quidem rerum facilis est expedita distinctio nam
                        libero tempore cum soluta nobis est eligendi.</p>
                </div>

                <div class="bg-white p-6">
                    <span class="inline-flex relative z-0 bg-amber-50 h-14 w-14 mb-6"
                        style="border-radius: 30% 70% 70% 30%/30% 30% 70% 70%;">
                        <div class="absolute -z-20 top-5 left-5 right-0 bottom-0">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 text-amber-500" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <rect x="2" y="3" width="20" height="14" rx="2" ry="2">
                                </rect>
                                <line x1="8" y1="21" x2="16" y2="21"></line>
                                <line x1="12" y1="17" x2="12" y2="21"></line>
                            </svg>
                        </div>
                    </span>
                    <h5 class="text-xl font-medium mt-5 text-gray-800">Fully Responsive</h5>
                    <p class="text-base text-slate-600 mt-4">Temporibus autem quibusdam et aut officiis debitis aut
                        rerum necessitatibus saepe eveniet ut et voluptates.</p>
                </div>

                <div class="bg-white p-6">
                    <span class="inline-flex relative z-0 bg-violet-50 h-14 w-14 mb-6"
                        style="border-radius: 30% 70% 70% 30%/30% 30% 70% 70%;">
                        <div class="absolute -z-20 top-5 left-5 right-0 bottom-0">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 text-violet-500" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <circle cx="12" cy="12" r="10"></circle>
                                <circle cx="12" cy="12" r="4"></circle>
                                <line x1="21.17" y1="8" x2="12" y2="8"></line>
                                <line x1="3.95" y1="6.06" x2="8.54" y2="14"></line>
                                <line x1="10.88" y1="21.94" x2="15.46" y2="14"></line>
                            </svg>
                        </div>
                    </span>
                    <h5 class="text-xl font-medium mt-5 text-gray-800">Finance Friendly</h5>
                    <p class="text-base text-slate-600 mt-4">Sed ut perspiciatis unde omnis iste natus error sit
                        voluptatem accusantium rem doloremque laudantium.</p>
                </div>
            </div><!-- Grid End -->
        </div><!-- Container End -->
    </section>
    <!-- service Section End -->

    <!-- features Section Start -->
    <section id="features"
        class="bg-slate-50 bg-cover bg-left bg-no-repeat bg-[url('{{ asset('client/dist/assets/images/landing/saas/hero-3-bg.png') }}')]">
        <div class="py-24">
            <div class="container">
                <div class="flex items-center justify-center mb-14">
                    <div class="max-w-2xl text-center">
                        <h5 class="capitalize text-lg text-gray-800 font-medium mb-2">Our <span
                                class="font-semibold text-primary">Features</span></h5>
                        <h2 class="text-3xl/snug font-bold text-gray-800 mb-1">Simply Beautiful Crafted Pages For Every
                            Usecase</h2>
                        <p class="text-base text-gray-600">Nemo enim ipsam voluptatem that quia voluptas aut fugit</p>
                    </div>
                </div>

                <div class="grid md:grid-cols-2 grid-cols-1 gap-6 mt-14 items-center">
                    <div>
                        <img src="{{ asset('client/dist/assets/images/landing/saas/saas2.png') }}"
                            class="max-w-full max-h-full rounded-md" alt="Saas Image">
                    </div>

                    <div class="my-auto md:mx-auto">
                        <h2 class="lg:text-3xl text-2xl text-gray-800 font-semibold mb-2">Saas Application</h2>
                        <p class="text-base text-gray-600">A simple and clean landing page designed for <br> saas based
                            application</p>

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
                                    <p class="text-lg font-medium text-gray-600">Clean Design</p>
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
                                    <p class="text-lg font-medium text-gray-600">Most Of Common Section Covered</p>
                                </div>
                            </div>

                            <!-- Feature Item 3 -->
                            <div class="flex items-center gap-5">
                                <div>
                                    <span class="inline-flex relative z-0 bg-primary/10 h-8 w-8"
                                        style="border-radius: 30% 70% 70% 30%/30% 30% 70% 70%;">
                                        <div class="absolute -z-20 top-4 left-4 right-0 bottom-0">
                                            <svg class="w-5 h-5 text-primary" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g stroke="none" fill="currentColor">
                                                    <path
                                                        d="M4.857,1 L11.736,1 C12.091,1 12.434,1.126 12.705,1.355 L17.469,5.384 C17.806,5.669 18,6.088 18,6.529 L18,19.083 C18,20.874 17.98,21 16.143,21 L4.857,21 C3.02,21 3,20.874 3,19.083 L3,2.917 C3,1.126 3.02,1 4.857,1 Z">
                                                    </path>
                                                    <path
                                                        d="M8,12 C7.448,12 7,12.448 7,13 C7,13.552 7.448,14 8,14 L15,14 C15.552,14 16,13.552 16,13 C16,12.448 15.552,12 15,12 L8,12 Z M8,16 C7.448,16 7,16.448 7,17 C7,17.552 7.448,18 8,18 L11,18 C11.552,18 12,17.552 12,17 C12,16.448 11.552,16 11,16 L8,16 Z"
                                                        opacity="0.3"></path>
                                                </g>
                                            </svg>
                                        </div>
                                    </span>
                                </div>
                                <div>
                                    <p class="text-lg font-medium text-gray-600">Well Documented</p>
                                </div>
                            </div>

                        </div><!-- End Feature List -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="price" class="py-24">
        <div class="pb-24">
            <div class="container">
                <div class="grid md:grid-cols-2 grid-cols-1 gap-6 items-center">
                    <div class="my-auto md:mx-auto">
                        <h2 class="lg:text-3xl text-2xl text-gray-800 font-semibold mb-2">Mobile Application</h2>
                        <p class="text-base font-medium text-gray-600">showcase your awesome mobile application <br>
                            with fascination impression</p>

                        <div class="mt-10 flex flex-col gap-y-4">
                            <div class="flex items-center gap-5">
                                <div>
                                    <span class="inline-flex relative z-0 bg-primary/10 h-8 w-8"
                                        style="border-radius: 30% 70% 70% 30%/30% 30% 70% 70%;">
                                        <div class="absolute -z-20 top-4 left-4 right-0 bottom-0">
                                            <svg class="w-5 h-5 text-primary" viewBox="0 0 24 24" version="1.1"
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect id="bound" x="0" y="0" width="24" height="24">
                                                    </rect>
                                                    <path
                                                        d="M7,14 C7,16.7614237 9.23857625,19 12,19 C14.7614237,19 17,16.7614237 17,14 C17,12.3742163 15.3702913,9.86852817 12,6.69922982 C8.62970872,9.86852817 7,12.3742163 7,14 Z M12,21 C8.13400675,21 5,17.8659932 5,14 C5,11.4226712 7.33333333,8.08933783 12,4 C16.6666667,8.08933783 19,11.4226712 19,14 C19,17.8659932 15.8659932,21 12,21 Z"
                                                        id="Oval-2" fill="currentColor"></path>
                                                    <path
                                                        d="M12,4 C16.6666667,8.08933783 19,11.4226712 19,14 C19,17.8659932 15.8659932,21 12,21 L12,4 Z"
                                                        id="Combined-Shape" fill="currentColor"></path>
                                                </g>
                                            </svg>
                                        </div>
                                    </span>
                                </div>
                                <div>
                                    <p class="text-lg font-medium text-gray-600">Clean Design</p>
                                </div>
                            </div><!-- Flex End -->

                            <div class="flex items-center gap-5">
                                <div>
                                    <span class="inline-flex relative z-0 bg-primary/10 h-8 w-8"
                                        style="border-radius: 30% 70% 70% 30%/30% 30% 70% 70%;">
                                        <div class="absolute -z-20 top-4 left-4 right-0 bottom-0">
                                            <svg class="w-5 h-5 text-primary" viewBox="0 0 24 24" version="1.1"
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect id="bound" x="0" y="0" width="24" height="24">
                                                    </rect>
                                                    <polygon id="Path-48" fill="currentColor" opacity="0.3"
                                                        points="5 3 19 3 23 8 1 8"></polygon>
                                                    <polygon id="Path-48-Copy" fill="currentColor"
                                                        points="23 8 12 20 1 8">
                                                    </polygon>
                                                </g>
                                            </svg>
                                        </div>
                                    </span>
                                </div>
                                <div>
                                    <p class="text-lg font-medium text-gray-600">Most Of Common Section Covered</p>
                                </div>
                            </div><!-- Flex End -->

                            <div class="flex items-center gap-5">
                                <div>
                                    <span class="inline-flex relative z-0 bg-primary/10 h-8 w-8"
                                        style="border-radius: 30% 70% 70% 30%/30% 30% 70% 70%;">
                                        <div class="absolute -z-20 top-4 left-4 right-0 bottom-0">
                                            <svg class="w-5 h-5 text-primary" viewBox="0 0 24 24" version="1.1"
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <polygon id="Shape" points="0 0 24 0 24 24 0 24"></polygon>
                                                    <path
                                                        d="M4.85714286,1 L11.7364114,1 C12.0910962,1 12.4343066,1.12568431 12.7051108,1.35473959 L17.4686994,5.3839416 C17.8056532,5.66894833 18,6.08787823 18,6.52920201 L18,19.0833333 C18,20.8738751 17.9795521,21 16.1428571,21 L4.85714286,21 C3.02044787,21 3,20.8738751 3,19.0833333 L3,2.91666667 C3,1.12612489 3.02044787,1 4.85714286,1 Z M8,12 C7.44771525,12 7,12.4477153 7,13 C7,13.5522847 7.44771525,14 8,14 L15,14 C15.5522847,14 16,13.5522847 16,13 C16,12.4477153 15.5522847,12 15,12 L8,12 Z M8,16 C7.44771525,16 7,16.4477153 7,17 C7,17.5522847 7.44771525,18 8,18 L11,18 C11.5522847,18 12,17.5522847 12,17 C12,16.4477153 11.5522847,16 11,16 L8,16 Z"
                                                        id="Combined-Shape-Copy" fill="currentColor" opacity="0.3">
                                                    </path>
                                                    <path
                                                        d="M6.85714286,3 L14.7364114,3 C15.0910962,3 15.4343066,3.12568431 15.7051108,3.35473959 L20.4686994,7.3839416 C20.8056532,7.66894833 21,8.08787823 21,8.52920201 L21,21.0833333 C21,22.8738751 20.9795521,23 19.1428571,23 L6.85714286,23 C5.02044787,23 5,22.8738751 5,21.0833333 L5,4.91666667 C5,3.12612489 5.02044787,3 6.85714286,3 Z M8,12 C7.44771525,12 7,12.4477153 7,13 C7,13.5522847 7.44771525,14 8,14 L15,14 C15.5522847,14 16,13.5522847 16,13 C16,12.4477153 15.5522847,12 15,12 L8,12 Z M8,16 C7.44771525,16 7,16.4477153 7,17 C7,17.5522847 7.44771525,18 8,18 L11,18 C11.5522847,18 12,17.5522847 12,17 C12,16.4477153 11.5522847,16 11,16 L8,16 Z"
                                                        id="Combined-Shape" fill="currentColor"></path>
                                                </g>
                                            </svg>
                                        </div>
                                    </span>
                                </div>
                                <div>
                                    <p class="text-lg font-medium text-gray-600">Secondary Page Include</p>
                                </div>
                            </div><!-- Flex End -->

                            <div class="flex items-center gap-5">
                                <div>
                                    <span class="inline-flex relative z-0 bg-primary/10 h-8 w-8"
                                        style="border-radius: 30% 70% 70% 30%/30% 30% 70% 70%;">
                                        <div class="absolute -z-20 top-4 left-4 right-0 bottom-0">
                                            <svg class="w-5 h-5 text-primary" viewBox="0 0 24 24" version="1.1"
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <g id="Stockholm-icons-/-Layout-/-Layout-top-panel-2" stroke="none"
                                                    stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect id="bound" x="0" y="0" width="24" height="24">
                                                    </rect>
                                                    <path
                                                        d="M3,4 L20,4 C20.5522847,4 21,4.44771525 21,5 L21,7 C21,7.55228475 20.5522847,8 20,8 L3,8 C2.44771525,8 2,7.55228475 2,7 L2,5 C2,4.44771525 2.44771525,4 3,4 Z M10,10 L20,10 C20.5522847,10 21,10.4477153 21,11 L21,19 C21,19.5522847 20.5522847,20 20,20 L10,20 C9.44771525,20 9,19.5522847 9,19 L9,11 C9,10.4477153 9.44771525,10 10,10 Z"
                                                        id="Combined-Shape" fill="currentColor"></path>
                                                    <rect id="Rectangle-7-Copy-2" fill="currentColor" opacity="0.3"
                                                        x="2" y="10" width="5" height="10" rx="1">
                                                    </rect>
                                                </g>
                                            </svg>
                                        </div>
                                    </span>
                                </div>
                                <div>
                                    <p class="text-lg font-medium text-gray-600">No Additional Cost</p>
                                </div>
                            </div><!-- Flex End -->
                        </div>
                    </div>

                    <div>
                        <img src="{{ asset('client/dist/assets/images/landing/saas/app.png') }}"
                            class="max-w-full max-h-[650px] mx-auto rounded-md" alt="">
                    </div>
                </div><!-- grid End -->
            </div><!-- Container End -->
        </div>
    </section>
    <!-- features Section End -->

    <!-- pricing Section Start -->
    <section id="price" class="py-24">
        <div class="container">
            <div class="flex items-center justify-center mb-14">
                <div class="max-w-2xl text-center">
                    <h5 class="capitalize text-lg  text-gray-800 font-medium mb-2">Our <span
                            class="font-semibold text-primary">Pricing</span></h5>
                    <h2 class="text-3xl/snug font-bold text-gray-800 mb-1">Simple Plans For Everyone</h2>
                    <p class="text-base text-gray-600 mb-8">Nemo enim ipsam voluptatem that quia voluptas aut fugit
                    </p>
                    <div class="flex items-center justify-center gap-4">
                        <span class="text-base font-bold text-gray-700">Monthly</span>
                        <label for="pricing-input" class="relative inline-flex items-center cursor-pointer">
                            <input type="checkbox" id="pricing-input" value="" class="sr-only peer">
                            <span
                                class="w-11 h-4 bg-gray-200 rounded-full  peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-1/2 after:-translate-y-1/2 after:left-[2px] after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all after:ring-2 after:ring-offset-2 after:ring-primary after:bg-primary"></span>
                        </label>
                        <span class="text-base font-bold text-gray-700">Yearly</span>
                    </div>
                </div>
            </div>

            <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 mt-10 gap-6">
                <div class="bg-slate-50 rounded relative overflow-hidden shadow-md">
                    <div class="flex flex-col h-full p-6">
                        <div class="shrink">
                            <div class="mb-6">
                                <h3 class="flex items-center gap-2 font-bold text-[38px] text-gray-800">
                                    <span>$8</span>
                                    <span class="text-lg font-medium">/month</span>
                                </h3>
                            </div>
                            <div class="hidden mb-6">
                                <h3 class="flex items-center gap-2 font-bold text-[38px] text-gray-800">
                                    <span>$28</span>
                                    <span class="text-lg font-medium">/yearly</span>
                                </h3>
                            </div>
                        </div>

                        <div class="">
                            <h5 class="text-xl font-bold mb-2 text-gray-800">Basic Plan</h5>
                            <p class="text-sm text-gray-700 font-medium">All the basics for starting a new bissnesses.
                            </p>
                        </div>

                        <hr class="border-gray-400 my-6">

                        <ul class="grow ">
                            <li class="flex items-center gap-2 mb-4 font-medium text-base">
                                <span
                                    class="h-5 w-5 inline-flex items-center justify-center rounded-full bg-primary/20 text-primary text-sm font-bold">
                                    <i class="uil uil-check"></i>
                                </span>
                                <p class="text-gray-900">10 users</p>
                            </li>
                            <li class="flex items-center gap-2 mb-4 font-medium text-base">
                                <span
                                    class="h-5 w-5 inline-flex items-center justify-center rounded-full bg-primary/20 text-primary text-sm font-bold">
                                    <i class="uil uil-check"></i>
                                </span>
                                <p class="text-gray-900">50 GB storage</p>
                            </li>
                            <li class="flex items-center gap-2 mb-4 font-medium text-base">
                                <span
                                    class="h-5 w-5 inline-flex items-center justify-center rounded-full bg-primary/20 text-primary text-sm font-bold">
                                    <i class="uil uil-check"></i>
                                </span>
                                <p class="text-gray-900">Front plan features</p>
                            </li>
                            <li class="flex items-center gap-2 mb-4 font-medium text-base">
                                <span
                                    class="h-5 w-5 inline-flex items-center justify-center rounded-full bg-primary/20 text-primary text-sm font-bold">
                                    <i class="uil uil-check"></i>
                                </span>
                                <p class="text-gray-900">100 apps</p>
                            </li>
                            <li class="flex items-center gap-2 mb-4 font-medium text-base">
                                <span
                                    class="h-5 w-5 inline-flex items-center justify-center rounded-full bg-red-500/20 text-red-500 text-sm font-bold">
                                    <i class="uil uil-times"></i>
                                </span>
                                <p class="text-gray-900">Product support</p>
                            </li>
                            <li class="flex items-center gap-2 mb-4 font-medium text-base">
                                <span
                                    class="h-5 w-5 inline-flex items-center justify-center rounded-full bg-red-500/20 text-red-500 text-sm font-bold">
                                    <i class="uil uil-times"></i>
                                </span>
                                <p class="text-gray-900">Advanced security</p>
                            </li>
                            <li class="flex items-center gap-2 mb-4 font-medium text-base">
                                <span
                                    class="h-5 w-5 inline-flex items-center justify-center rounded-full bg-red-500/20 text-red-500 text-sm font-bold">
                                    <i class="uil uil-times"></i>
                                </span>
                                <p class="text-gray-900">Free subdomain</p>
                            </li>
                        </ul>

                        <div class="shrink mt-3">
                            <a href="#"
                                class="w-full py-2 px-8 inline-flex justify-center items-center gap-2 rounded-md font-semibold border border-primary text-primary text-base focus:outline-none focus:ring-0 transition-all hover:bg-primary hover:text-white">
                                Continue
                            </a>
                        </div>
                    </div>
                </div><!-- End grid-col -->

                <div class="bg-slate-50 rounded relative overflow-hidden shadow-md">
                    <div
                        class="absolute bg-primary text-sm text-center inline-flex items-center gap-2 text-white font-semibold rounded-s py-1 px-2 end-0 top-3 w-36">
                        <i class="uil uil-link text-base/none"></i>
                        Most Populer
                    </div>
                    <div class="flex flex-col h-full p-6">
                        <div class="shrink">
                            <div class="mb-6">
                                <h3 class="flex items-center gap-2 font-bold text-[38px] text-gray-800">
                                    <span>$18</span>
                                    <span class="text-lg font-medium">/month</span>
                                </h3>
                            </div>
                            <div class="hidden mb-6">
                                <h3 class="flex items-center gap-2 font-bold text-[38px] text-gray-800">
                                    <span>$48</span>
                                    <span class="text-lg font-medium">/yearly</span>
                                </h3>
                            </div>
                        </div>

                        <div class="">
                            <h5 class="text-xl font-bold mb-2 text-gray-800">Business Plan</h5>
                            <p class="text-sm text-gray-700 font-medium">All the basics for starting
                                a new bissnesses.</p>
                        </div>

                        <hr class="border-gray-400 my-6">

                        <ul class="grow ">
                            <li class="flex items-center gap-2 mb-4 font-medium text-base">
                                <span
                                    class="h-5 w-5 inline-flex items-center justify-center rounded-full bg-primary/20 text-primary text-sm font-bold">
                                    <i class="uil uil-check"></i>
                                </span>
                                <p class="text-gray-900">10 users</p>
                            </li>
                            <li class="flex items-center gap-2 mb-4 font-medium text-base">
                                <span
                                    class="h-5 w-5 inline-flex items-center justify-center rounded-full bg-primary/20 text-primary text-sm font-bold">
                                    <i class="uil uil-check"></i>
                                </span>
                                <p class="text-gray-900">50 GB storage</p>
                            </li>
                            <li class="flex items-center gap-2 mb-4 font-medium text-base">
                                <span
                                    class="h-5 w-5 inline-flex items-center justify-center rounded-full bg-primary/20 text-primary text-sm font-bold">
                                    <i class="uil uil-check"></i>
                                </span>
                                <p class="text-gray-900">Front plan features</p>
                            </li>
                            <li class="flex items-center gap-2 mb-4 font-medium text-base">
                                <span
                                    class="h-5 w-5 inline-flex items-center justify-center rounded-full bg-primary/20 text-primary text-sm font-bold">
                                    <i class="uil uil-check"></i>
                                </span>
                                <p class="text-gray-900">100 apps</p>
                            </li>
                            <li class="flex items-center gap-2 mb-4 font-medium text-base">
                                <span
                                    class="h-5 w-5 inline-flex items-center justify-center rounded-full bg-primary/20 text-primary text-sm font-bold">
                                    <i class="uil uil-check"></i>
                                </span>
                                <p class="text-gray-900">Product support</p>
                            </li>
                            <li class="flex items-center gap-2 mb-4 font-medium text-base">
                                <span
                                    class="h-5 w-5 inline-flex items-center justify-center rounded-full bg-primary/20 text-primary text-sm font-bold">
                                    <i class="uil uil-check"></i>
                                </span>
                                <p class="text-gray-900">Advanced security</p>
                            </li>
                            <li class="flex items-center gap-2 mb-4 font-medium text-base">
                                <span
                                    class="h-5 w-5 inline-flex items-center justify-center rounded-full bg-red-500/20 text-red-500 text-sm font-bold">
                                    <i class="uil uil-times"></i>
                                </span>
                                <p class="text-gray-900">Free subdomain</p>
                            </li>
                        </ul>

                        <div class="shrink mt-3">
                            <a href="#"
                                class="w-full py-2 px-8 inline-flex justify-center items-center gap-2 rounded-md font-semibold border border-primary bg-primary text-white text-base focus:outline-none focus:ring-0 transition-all">
                                Continue
                            </a>
                        </div>
                    </div>
                </div><!-- End grid-col -->

                <div class="bg-slate-50 rounded relative overflow-hidden shadow-md">
                    <div class="flex flex-col h-full p-6">
                        <div class="shrink">
                            <div class="mb-6">
                                <h3 class="flex items-center gap-2 font-bold text-[38px] text-gray-800">
                                    <span>$28</span> <span class="text-lg font-medium">/month</span>
                                </h3>
                            </div>
                            <div class="hidden mb-6">
                                <h3 class="flex items-center gap-2 font-bold text-[38px] text-gray-800">
                                    <span>$68</span> <span class="text-lg font-medium">/yearly</span>
                                </h3>
                            </div>
                        </div>

                        <div class="">
                            <h5 class="text-xl font-bold mb-2 text-gray-800">Exclusive Plan</h5>
                            <p class="text-sm text-gray-700 font-medium">All the basics for starting
                                a new bissnesses.</p>
                        </div>

                        <hr class="border-gray-400 my-6">

                        <ul class="grow ">
                            <li class="flex items-center gap-2 mb-4 font-medium text-base">
                                <span
                                    class="h-5 w-5 inline-flex items-center justify-center rounded-full bg-primary/20 text-primary text-sm font-bold">
                                    <i class="uil uil-check"></i>
                                </span>
                                <p class="text-gray-900">10 users</p>
                            </li>
                            <li class="flex items-center gap-2 mb-4 font-medium text-base">
                                <span
                                    class="h-5 w-5 inline-flex items-center justify-center rounded-full bg-primary/20 text-primary text-sm font-bold">
                                    <i class="uil uil-check"></i>
                                </span>
                                <p class="text-gray-900">50 GB storage</p>
                            </li>
                            <li class="flex items-center gap-2 mb-4 font-medium text-base">
                                <span
                                    class="h-5 w-5 inline-flex items-center justify-center rounded-full bg-primary/20 text-primary text-sm font-bold">
                                    <i class="uil uil-check"></i>
                                </span>
                                <p class="text-gray-900">Front plan features</p>
                            </li>
                            <li class="flex items-center gap-2 mb-4 font-medium text-base">
                                <span
                                    class="h-5 w-5 inline-flex items-center justify-center rounded-full bg-primary/20 text-primary text-sm font-bold">
                                    <i class="uil uil-check"></i>
                                </span>
                                <p class="text-gray-900">100 apps</p>
                            </li>
                            <li class="flex items-center gap-2 mb-4 font-medium text-base">
                                <span
                                    class="h-5 w-5 inline-flex items-center justify-center rounded-full bg-primary/20 text-primary text-sm font-bold">
                                    <i class="uil uil-check"></i>
                                </span>
                                <p class="text-gray-900">Product support</p>
                            </li>
                            <li class="flex items-center gap-2 mb-4 font-medium text-base">
                                <span
                                    class="h-5 w-5 inline-flex items-center justify-center rounded-full bg-primary/20 text-primary text-sm font-bold">
                                    <i class="uil uil-check"></i>
                                </span>
                                <p class="text-gray-900">Advanced security</p>
                            </li>
                            <li class="flex items-center gap-2 mb-4 font-medium text-base">
                                <span
                                    class="h-5 w-5 inline-flex items-center justify-center rounded-full bg-primary/20 text-primary text-sm font-bold">
                                    <i class="uil uil-check"></i>
                                </span>
                                <p class="text-gray-900">Free subdomain</p>
                            </li>
                        </ul>

                        <div class="shrink mt-3">
                            <a href="#"
                                class="w-full py-2 px-8 inline-flex justify-center items-center gap-2 rounded-md font-semibold border border-primary text-primary text-base focus:outline-none focus:ring-0 transition-all hover:bg-primary hover:text-white">
                                Continue
                            </a>
                        </div>
                    </div>
                </div><!-- End grid-col -->

            </div><!-- Grid End -->
        </div><!-- Container End -->
    </section>
    <!-- pricing Section End -->

    <!-- Team Start -->
    <div id="team" class="py-24 bg-slate-50">
        <div class="container overflow-hidden">
            <div class="flex items-center justify-center mb-16">
                <div class="max-w-2xl text-center">
                    <h5 class="capitalize text-lg  text-gray-800 font-medium mb-2">Our <span
                            class="font-semibold text-primary">Team</span></h5>
                    <h2 class="text-3xl/snug font-bold text-gray-800 mb-1">Meet our team</h2>
                    <p class="text-base text-gray-600 mb-8">Nemo enim ipsam voluptatem that quia voluptas aut fugit
                    </p>
                </div>
            </div>

            <div class="gap-2">
                <div class="py-12 -my-12 overflow-x-hidden">
                    <div class="swiper feedback-swiper !overflow-visible max-w-full max-h-full">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide mb-12">
                                <div class="relative bg-white rounded-md h-full">
                                    <div
                                        class="absolute -top-[20%] start-0 translate-x-4 h-24 bg-white p-2 rounded-md overflow-hidden">
                                        <img src="{{ asset('client/dist/assets/images/avatars/img-7.png') }}" alt=""
                                            class="rounded-md max-w-full max-h-full">
                                    </div>

                                    <div class="px-6 pb-6 pt-16">
                                        <p class="font-medium text-gray-500">@maxine</p>
                                        <h3 class="text-xl font-bold text-gray-800 mb-0.5">Maxine Gilmer</h3>
                                        <p class="font-medium text-gray-500 mb-4">Web designer</p>
                                        <p class="text-gray-500"> These alternatives to the classic Lorem Ipsum texts
                                            are often amusing and tell short, funny or nonsensical stories. .</p>
                                    </div>
                                </div>
                            </div><!-- end swiper slider -->

                            <div class="swiper-slide mb-12">
                                <div class="relative bg-white rounded-md h-full">
                                    <div
                                        class="absolute -top-[20%] start-0 translate-x-4 h-24 bg-white p-2 rounded-md overflow-hidden">
                                        <img src="{{ asset('client/dist/assets/images/avatars/img-3.png') }}" alt=""
                                            class="rounded-md max-w-full max-h-full">
                                    </div>

                                    <div class="px-6 pb-6 pt-16">
                                        <p class="font-medium text-gray-500">@michael</p>
                                        <h3 class="text-xl font-bold text-gray-800 mb-0.5">Michael Ellis</h3>
                                        <p class="font-medium text-gray-500 mb-4">UI/UX designer</p>
                                        <p class="text-gray-500">We all intend to plan ahead, but too often let the
                                            day-to-day minutia get in the way of making a calendar.</p>
                                    </div>
                                </div>
                            </div><!-- end swiper slider -->

                            <div class="swiper-slide mb-12">
                                <div class="relative bg-white rounded-md h-full">
                                    <div
                                        class="absolute -top-[20%] start-0 translate-x-4 h-24 bg-white p-2 rounded-md overflow-hidden">
                                        <img src="{{ asset('client/dist/assets/images/avatars/img-8.png') }}" alt=""
                                            class="rounded-md max-w-full max-h-full">
                                    </div>

                                    <div class="px-6 pb-6 pt-16">
                                        <p class="font-medium text-gray-500">@ruben</p>
                                        <h3 class="text-xl font-bold text-gray-800 mb-0.5">Ruben Gouse</h3>
                                        <p class="font-medium text-gray-500 mb-4">Web devloper</p>

                                        <p class="text-gray-500">These qualities can be combined perfectly natural.
                                            However, things like people look miserable.</p>
                                    </div>
                                </div>
                            </div><!-- end swiper slider -->

                            <div class="swiper-slide mb-12">
                                <div class="relative bg-white rounded-md h-full">
                                    <div
                                        class="absolute -top-[20%] start-0 translate-x-4 h-24 bg-white p-2 rounded-md overflow-hidden">
                                        <img src="{{ asset('client/dist/assets/images/avatars/img-5.png') }}" alt=""
                                            class="rounded-md max-w-full max-h-full">
                                    </div>

                                    <div class="px-6 pb-6 pt-16">
                                        <p class="font-medium text-gray-500">@francis</p>
                                        <h3 class="text-xl font-bold text-gray-800 mb-0.5">Francis Ibikunle</h3>
                                        <p class="font-medium text-gray-500 mb-4">Manager</p>

                                        <p class="text-gray-500">These alternatives to the classic Lorem Ipsum are
                                            often amusing and tell short, funny or nonsensical stories.</p>
                                    </div>
                                </div>
                            </div><!-- end swiper slider -->
                        </div><!-- end swiper wrapper -->
                        <div class="swiper-pagination z-10 !-start-0"></div>
                    </div><!-- end swiper -->
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->

    <!-- FAQ Start -->
    <section id="faq" class="py-24">
        <div class="container">
            <div class="flex items-center justify-center mb-14">
                <div class="max-w-2xl text-center">
                    <h5 class="capitalize text-lg  text-gray-800 font-medium mb-2">Help <span
                            class="font-semibold text-primary">Center</span></h5>
                    <h2 class="text-3xl/snug font-bold text-gray-800 mb-1">Frequently asked questions</h2>
                    <p class="text-base text-gray-600">Nemo enim ipsam voluptatem that quia voluptas aut fugit </p>
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
                                Who are produces sit pleasure?
                            </h5>
                            <i data-lucide="chevron-up"
                                class="h-4 w-4 transition-all duration-500 hs-accordion-active:-rotate-180"></i>
                        </button>
                        <div id="faq-accordion-1"
                            class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300"
                            aria-labelledby="faq-1">
                            <div class="px-6 pb-4 pt-0">
                                <p class="text-gray-600 text-sm font-medium mb-2">
                                    Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et
                                    magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies
                                    nec, pellentesque eu, pretium quis, sem.
                                </p>
                                <p class="text-gray-600 text-sm font-medium">
                                    Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus.
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
                                What is quo voluptas nulla pariatur?
                            </h5>
                            <i data-lucide="chevron-up"
                                class="h-4 w-4 transition-all duration-500 hs-accordion-active:-rotate-180"></i>
                        </button>
                        <div id="faq-2"
                            class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                            aria-labelledby="faq-2">
                            <div class="px-6 pb-4 pt-0">
                                <p class="text-gray-600 text-sm font-medium mb-2">
                                    Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula,
                                    porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in,
                                    viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet.
                                </p>
                                <p class="text-gray-600 text-sm font-medium">
                                    Duis leo. Sed fringilla mauris sit amet nibh.
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
                                How to do transactions using iMbank?
                            </h5>
                            <i data-lucide="chevron-up"
                                class="h-4 w-4 transition-all duration-500 hs-accordion-active:-rotate-180"></i>
                        </button>
                        <div id="faq-3"
                            class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                            aria-labelledby="faq-3">
                            <div class="px-6 pb-4 pt-0">
                                <p class="text-gray-600 text-sm font-medium mb-2">
                                    Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et
                                    magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies
                                    nec, pellentesque eu, pretium quis, sem.
                                </p>
                                <p class="text-gray-600 text-sm font-medium">
                                    Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus.
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
                                hot to activate iMbank service?
                            </h5>
                            <i data-lucide="chevron-up"
                                class="h-4 w-4 transition-all duration-500 hs-accordion-active:-rotate-180"></i>
                        </button>
                        <div id="faq-4"
                            class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                            aria-labelledby="faq-4">
                            <div class="px-6 pb-4 pt-0">
                                <p class="text-gray-600 text-sm font-medium mb-2">
                                    Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et
                                    magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies
                                    nec, pellentesque eu, pretium quis, sem.
                                </p>
                                <p class="text-gray-600 text-sm font-medium">
                                    Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus.
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
                                Who is eligible to open iMbank account?
                            </h5>
                            <i data-lucide="chevron-up"
                                class="h-4 w-4 transition-all duration-500 hs-accordion-active:-rotate-180"></i>
                        </button>
                        <div id="faq-5"
                            class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                            aria-labelledby="faq-5">
                            <div class="px-6 pb-4 pt-0">
                                <p class="text-gray-600 text-sm font-medium mb-2">
                                    Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et
                                    magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies
                                    nec, pellentesque eu, pretium quis, sem.
                                </p>
                                <p class="text-gray-600 text-sm font-medium">
                                    Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="hs-accordion border border-gray-200 rounded-lg overflow-hidden" id="faq-6">
                        <button
                            class="hs-accordion-toggle capitalize px-6 py-4 inline-flex items-center justify-between gap-x-3 w-full text-left text-gray-950 transition-all"
                            aria-controls="faq-6">
                            <h5 class="text-base font-semibold">
                                <i class="uil uil-question-circle text-xl/none align-middle me-2"></i>
                                wil i be given a passbook?
                            </h5>
                            <i data-lucide="chevron-up"
                                class="h-4 w-4 transition-all duration-500 hs-accordion-active:-rotate-180"></i>
                        </button>
                        <div id="faq-6"
                            class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                            aria-labelledby="faq-6">
                            <div class="px-6 pb-4 pt-0">
                                <p class="text-gray-600 text-sm font-medium mb-2">
                                    Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et
                                    magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies
                                    nec, pellentesque eu, pretium quis, sem.
                                </p>
                                <p class="text-gray-600 text-sm font-medium">
                                    Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- Container End -->
    </section>
    <!-- FAQ End -->
@endsection
