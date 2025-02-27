<header id="navbar-sticky" class="navbar nav-dark">
    <div class="container">
        <nav>
            <!-- Navbar Brand Logo -->
            <a href="home-saas.html" class="logo">
                <img src="{{ asset('client/dist/assets/images/logo-dark.png') }}" class="h-10 logo-dark" alt="Opixo Logo">
                <img src="{{ asset('client/dist/assets/images/logo-light.png') }}" class="h-10 logo-light"
                    alt="Opixo Logo">
            </a>

            <!-- Moblie Menu Toggle Button (Offcanvas Button) -->
            <div class="lg:hidden flex items-center ms-auto px-2.5">
                <button
                    class="hs-collapse-toggle inline-flex items-center justify-center h-9 w-12 rounded-md border border-gray-300 bg-slate-300/30"
                    type="button" id="hs-unstyled-collapse" data-hs-collapse="#mobileMenu" data-hs-type="collapse">
                    <i class="uil uil-bars text-2xl"></i>
                </button>
            </div>

            <!-- Nevigation Menu -->
            <div id="mobileMenu"
                class="hs-collapse overflow-hidden transition-all duration-300 lg:basis-auto basis-full grow hidden lg:flex items-center justify-center mx-auto mt-2 lg:mt-0">
                <ul id="navbar-navlist" class="navbar-nav">
                    <!-- Home Page Link -->
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Home</a>
                    </li>

                    <!-- Service Page Link -->
                    <li class="nav-item">
                        <a class="nav-link" href="#service">Service</a>
                    </li>

                    <!-- Features Page Link -->
                    <li class="nav-item">
                        <a class="nav-link" href="#features">Features</a>
                    </li>

                    <!-- Price Page Link -->
                    <li class="nav-item">
                        <a class="nav-link" href="#price">Price</a>
                    </li>

                    <!-- Review Page Link -->
                    <li class="nav-item">
                        <a class="nav-link" href="#team">Team</a>
                    </li>

                    <!-- Faq Page Link -->
                    <li class="nav-item">
                        <a class="nav-link" href="#faq">Faq</a>
                    </li>
                </ul>
                <!-- Download Button -->
                <div
                    class="lg:hidden flex items-center pt-4 mt-4 lg:pt-0 lg:mt-0 border-t border-gray-200 lg:border-none">
                    <a href="#" class="nav-btn"><i data-lucide="arrow-big-down-dash" class="h-5 w-5 me-2"></i>
                        Download</a>
                </div>
            </div>
            <!-- Download Button -->
            <div class="hidden lg:flex items-center">
                <a href="#" class="nav-btn"><i data-lucide="arrow-big-down-dash" class="h-5 w-5 me-2"></i>
                    Download</a>
            </div>
        </nav><!-- end nav -->
    </div>
</header>
