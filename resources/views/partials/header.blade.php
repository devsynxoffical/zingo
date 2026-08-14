<header class="header-section header-white">
    <div class="header header-white-bg">
        <div class="header-bottom-area">
            <div class="container custom-container">
                <div class="header-menu-content">
                    <nav class="navbar navbar-expand-xl p-0">
                        <a class="site-logo site-title" href="{{ route('home') }}">
                            <img src="{{ asset('assets/images/zingo assist logo png.png') }}" alt="Zingo Assist Logo">
                        </a>

                        <button class="navbar-toggler custom-navbar-toggler" type="button" aria-label="Toggle navigation">
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>

                        <div class="custom-navbar-collapse">
                            <div class="navbar-nav main-menu d-flex align-items-center">
                                <div class="nav-item">
                                    <a class="nav-link" href="{{ route('home') }}">Home</a>
                                </div>
                                <div class="nav-item">
                                    <a class="nav-link" href="{{ route('about') }}">About</a>
                                </div>
                                <div class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="servicesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Services
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="servicesDropdown">
                                        <li><a class="dropdown-item" href="{{ route('service') }}">All Services</a></li>
                                        <li><hr class="dropdown-divider"></li>
                                        <li><a class="dropdown-item" href="{{ route('service.it_support') }}">IT Support</a></li>
                                        <li><a class="dropdown-item" href="{{ route('service.cold_calling') }}">Cold Calling</a></li>
                                        <li><a class="dropdown-item" href="{{ route('service.search_seo') }}">SEO Services</a></li>
                                        <li><a class="dropdown-item" href="{{ route('service.video_editing') }}">Video Editing</a></li>
                                        <li><a class="dropdown-item" href="{{ route('service.crm_management') }}">CRM Management</a></li>
                                        <li><a class="dropdown-item" href="{{ route('service.web_development') }}">Web Development</a></li>
                                        <li><a class="dropdown-item" href="{{ route('service.graphic_design') }}">Graphic Design</a></li>
                                        <li><a class="dropdown-item" href="{{ route('service.app_development') }}">App Development</a></li>
                                        <li><a class="dropdown-item" href="{{ route('service.lead_generation') }}">Lead Generation</a></li>
                                        <li><a class="dropdown-item" href="{{ route('service.digital_marketing') }}">Digital Marketing</a></li>
                                        <li><a class="dropdown-item" href="{{ route('service.personal_assistance') }}">Personal Assistance</a></li>
                                        <li><a class="dropdown-item" href="{{ route('service.bookkeeping_accountant') }}">Bookkeeping & Accountant</a></li>
                                        <li><a class="dropdown-item" href="{{ route('service.virtual_business_assistance') }}">Virtual Business Assistance</a></li>
                                        <li><a class="dropdown-item" href="{{ route('service.virtual_property_management') }}">Virtual Property Management</a></li>
                                        <li><a class="dropdown-item" href="{{ route('service.real_estate_transaction_coordinator') }}">Real Estate Transaction Coordinator</a></li>
                                    </ul>
                                </div>
                                <div class="nav-item">
                                    <a class="nav-link" href="{{ route('blog') }}">Blog</a>
                                </div>
                                <div class="nav-item">
                                    <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                                </div>
                            </div>
                            <div class="header-action-area">
                                <div class="header-action">
                                    <a class="btn--base" onclick="showPopup()">Book Free consultation</a>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div class="mobile-menu-overlay"></div>

    @include('partials.popup')

</header>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const toggler = document.querySelector('.custom-navbar-toggler');
        const collapse = document.querySelector('.custom-navbar-collapse');
        const overlay = document.querySelector('.mobile-menu-overlay');
        const navLinks = document.querySelectorAll('.custom-navbar-collapse .nav-link');
        const body = document.body;

        if (!toggler || !collapse) {
            return;
        }

        function openMenu() {
            body.classList.add('nav-open');
            collapse.classList.add('open');
        }

        function closeMenu() {
            body.classList.remove('nav-open');
            collapse.classList.remove('open');
        }

        toggler.addEventListener('click', function () {
            if (body.classList.contains('nav-open')) {
                closeMenu();
            } else {
                openMenu();
            }
        });

        overlay?.addEventListener('click', closeMenu);

        navLinks.forEach(function (link) {
            link.addEventListener('click', function (e) {
                // Don't close menu if it's a dropdown toggle
                if (link.classList.contains('dropdown-toggle')) {
                    return;
                }
                // Close menu for regular links
                if (body.classList.contains('nav-open')) {
                    closeMenu();
                }
            });
        });

        // Handle dropdown item clicks on mobile
        const dropdownItems = document.querySelectorAll('.dropdown-item');
        dropdownItems.forEach(function (item) {
            item.addEventListener('click', function () {
                if (body.classList.contains('nav-open')) {
                    closeMenu();
                }
            });
        });

        window.addEventListener('resize', function () {
            if (window.innerWidth > 991 && body.classList.contains('nav-open')) {
                closeMenu();
            }
        });
    });
</script>
