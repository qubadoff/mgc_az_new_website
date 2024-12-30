<!--  Menu panel -->
<div id="uc-menu-panel" data-uc-offcanvas="overlay: true;">
    <div class="uc-offcanvas-bar bg-white text-dark">
        <header class="uc-offcanvas-header hstack justify-between items-center pb-4 bg-white">
            <div class="panel uc-logo" style="top: -14px">
                <a class='h5 text-none text-primary' href='{{ route("index") }}'>
                    <img class="w-100px" src="{{ url('/') }}/storage/{{ siteInfo()->site_logo }}" alt="{{ siteInfo()->site_name }}">
                </a>
            </div>
            <button class="uc-offcanvas-close p-0 icon-3 btn border-0 hover:text-primary hover:rotate-90 duration-150 transition-all" type="button">
                <i class="unicon-close"></i>
            </button>
        </header>

        <div class="panel">
            <ul class="nav-y gap-narrow fw-bold fs-6 ft-tertiary" data-uc-nav>
                <li><a data-uc-cursor='md bg-white opacity-10' href='{{ route("index") }}'>Home</a></li>
                <li><a data-uc-cursor='md bg-white opacity-10' href='{{ route("about") }}'>About Us</a></li>
                <li><a data-uc-cursor='md bg-white opacity-10' href='{{ route("faq") }}'>FAQ</a></li>
                <li><a data-uc-cursor='md bg-white opacity-10' href='{{ route("clients") }}'>Our Clients</a></li>
                <li><a data-uc-cursor='md bg-white opacity-10' href='{{ route("contact") }}'>Contact Us</a></li>
            </ul>
            <ul class="social-icons nav-x mt-4">
                <li>
                    <a href="https://www.facebook.com/unistudioco" data-uc-cursor="md bg-white opacity-10"><i class="unicon-logo-facebook icon-2"></i></a>
                    <a href="https://x.com/unistudioco?mx=2" data-uc-cursor="md bg-white opacity-10"><i class="unicon-logo-twitter icon-2"></i></a>
                    <a href="https://www.instagram.com/unistudioco" data-uc-cursor="md bg-white opacity-10"><i class="unicon-logo-instagram icon-2"></i></a>
                </li>
            </ul>
        </div>
    </div>
</div>


<header class="uc-header uc-navbar-sticky-wrap z-999 ft-tertiary" data-uc-sticky="start: 170; show-on-up: true; animation: uc-animation-slide-top; sel-target: .uc-navbar-container; cls-active: uc-navbar-sticky; cls-inactive: uc-navbar-transparent; end: ! *;">
    <nav class="uc-navbar-container ft-tertiary z-1" data-anime="translateY: [-40, 0]; opacity: [0, 1]; easing: easeOutExpo; duration: 750; delay: 0;">
        <div class="uc-center-navbar panel z-2">
            <div class="container max-w-2xl">
                <div class="uc-navbar min-h-72px lg:min-h-100px text-gray-900" data-uc-navbar=" animation: uc-animation-slide-top-small; duration: 150;">
                    <div class="uc-navbar-left">
                        <div class="uc-logo">
                            <a href='{{ route("index") }}'>
                                <img class="w-128px xl:w-150px" src="{{ url('/storage/' . siteInfo()->site_logo . '/') }}" alt="{{ siteInfo()->site_name }}">
                            </a>
                        </div>
                    </div>
                    <div class="uc-navbar-center">
                        <ul class="uc-navbar-nav gap-4 fs-5 xl:fs-4 fw-bold d-none lg:d-flex" style="--uc-nav-height: 100px">
                            <li><a data-uc-cursor='md bg-white opacity-10' href='{{ route("about") }}'>About us</a></li>
                            <li><a data-uc-cursor='md bg-white opacity-10' href='{{ route("faq") }}'>FAQ</a></li>
                            <li><a data-uc-cursor='md bg-white opacity-10' href='{{ route("clients") }}'>Our Clients</a></li>
                            <li><a data-uc-cursor='md bg-white opacity-10' href='{{ route("contact") }}'>Contact us</a></li>
                        </ul>
                    </div>
                    <div class="uc-navbar-right">
                        <div class="d-none sm:d-flex">
                            <a class='fs-5 xl:fs-4 btn btn-sm xl:btn-md btn-primary text-none' data-uc-cursor='md bg-white opacity-10' href='tel:{{ siteInfo()->site_phone }}'>{{ siteInfo()->site_phone  }}</a>
                        </div>
                        <div class="d-block lg:d-none">
                            <a class="uc-menu-trigger" href="#uc-menu-panel" data-uc-toggle></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>
