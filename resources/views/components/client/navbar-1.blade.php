<header id="navbar-sticky" class="navbar nav-dark">
    <div class="container">
        <nav>
            <!-- Navbar Brand Logo -->
            <a href="home-saas.html" class="logo">
                <img src="{{ asset('img/client/logo_1.png') }}" class="h-11 logo-dark" alt="Kuli It Logo">
                <img src="{{ asset('img/client/logo_1.png') }}" class="h-11 logo-light"
                    alt="Kuli It Logo">
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
                        <a class="nav-link" href="#benefit">Benefit</a>
                    </li>

                    <!-- Home Page Link -->
                    <li class="nav-item">
                        <a class="nav-link" href="#kinerja">Kinerja</a>
                    </li>

                  

                    <!-- Features Page Link -->
                    <li class="nav-item">
                        <a class="nav-link" href="#testimoni">Testimoni</a>
                    </li>

                    <!-- Price Page Link -->
                    <li class="nav-item">
                        <a class="nav-link" href="#client">Client</a>
                    </li>

                    <!-- Faq Page Link -->
                    <li class="nav-item">
                        <a class="nav-link" href="#faq">Faq</a>
                    </li>
                </ul>
                <!-- Download Button -->
                <div
                    class="lg:hidden flex items-center pt-4 mt-4 lg:pt-0 lg:mt-0 border-t border-gray-200 lg:border-none">
                    <a href="https://wa.me/6281329995238?text=Halo, saya ingin konsultasi gratis." class="nav-btn"><i class="fa-brands fa-whatsapp me-2"></i>
                        Kontak Kami</a>
                </div>
            </div>
            <!-- Download Button -->
            <div class="hidden lg:flex items-center">
                <a href="https://wa.me/6281329995238?text=Halo, saya ingin konsultasi gratis." class="nav-btn"><i class="fa-brands fa-whatsapp me-2"></i>
                    Kontak Kami</a>
            </div>
        </nav><!-- end nav -->
    </div>
</header>
