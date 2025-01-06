<!-- Footer start -->
<footer id="uc-footer" class="uc-footer panel overflow-hidden">
    <div class="footer-outer py-4 lg:py-6 xl:pt-9">
        <div class="container max-w-2xl">
            <div class="footer-inner vstack gap-4 lg:gap-6 xl:gap-8">
                <div class="uc-footer-widgets panel">
                    <div class="row child-cols-6 lg:child-cols g-4 xl:g-8">
                        <div class="col-12 xl:col-4">
                            <div class="panel vstack items-start gap-3 sm:w-400px">
                                <div class="logo">
                                    <div class="uc-logo">
                                        <a href='{{ route("index") }}'>
                                            <img class="w-128px lg:w-150px" src="{{ url('/storage/' . siteInfo()->site_logo . '/') }}" alt="{{ siteInfo()->site_name }}">
                                        </a>
                                    </div>
                                </div>
                                <p class="fs-5 xl:fs-4">
                                    MG Consulting LLC is a registered consulting company in Azerbaijan since 2014.
                                </p>
                                <ul class="nav-x gap-1">
                                    <li>
                                        <a href="https://www.facebook.com/unistudioco" class="p-1 rounded-circle bg-gray-25 hover:bg-primary hover:text-white duration-250" data-uc-cursor="md bg-white opacity-10"><i class="icon icon-2 unicon-logo-facebook"></i></a>
                                    </li>
                                    <li>
                                        <a href="https://x.com/unistudioco?mx=2" class="p-1 rounded-circle bg-gray-25 hover:bg-primary hover:text-white duration-250" data-uc-cursor="md bg-white opacity-10"><i class="icon icon-2 unicon-logo-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="https://www.instagram.com/unistudioco" class="p-1 rounded-circle bg-gray-25 hover:bg-primary hover:text-white duration-250" data-uc-cursor="md bg-white opacity-10"><i class="icon icon-2 unicon-logo-instagram"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div>
                            <div class="panel">
                                <h5 class="uc-nav-header h5 sm:h4 mb-1 xl:mb-2">Main pages</h5>
                                <ul class="nav-y gap-1 fw-medium">
                                    <li><a data-uc-cursor='md bg-white opacity-10' href='{{ route('about') }}'>About</a></li>
                                    <li><a data-uc-cursor='md bg-white opacity-10' href='{{ route('faq') }}'>FAQ</a></li>
                                    <li><a data-uc-cursor='md bg-white opacity-10' href='{{ route('clients') }}'>Our Clients</a></li>
                                    <li><a data-uc-cursor='md bg-white opacity-10' href='{{ route('contact') }}'>Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-12 sm:col">
                            <div class="vstack gap-1">
                                <h5 class="uc-nav-header h5 sm:h4 mb-1 xl:mb-2">Office</h5>
                                <div class="vstack gap-2">
                                    <div class="hstack items-start gap-1">
                                        <i class="icon icon-1 unicon-location mt-narrow"></i>
                                        <span class="ms-narrow">{{ siteInfo()->site_address }}</span>
                                    </div>
                                    <div class="hstack items-start gap-1">
                                        <i class="icon icon-1 unicon-email mt-narrow"></i>
                                        <span class="ms-narrow"> {{ siteInfo()->site_email }}</span>
                                    </div>
                                    <div class="hstack items-start gap-1">
                                        <i class="icon icon-1 unicon-phone mt-narrow"></i>
                                        <span class="ms-narrow">{{ siteInfo()->site_phone }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="uc-footer-bottom panel vstack lg:hstack gap-3 justify-center lg:justify-between pt-4 lg:pt-6 border-top">
                    <div class="vstack sm:hstack justify-center lg:justify-start items-center lg:items-start gap-1 lg:gap-2">
                        <p>© {{ date("Y") }} <a href="#" class="text-primary text-none" data-uc-cursor="md bg-white opacity-10">MG Consulting</a></p>
                    </div>
                    <div class="hstack justify-center lg:justify-end gap-2 lg:gap-3">
                        <div class="hstack gap-2">
                            <div class="vr"></div>
                            <a href="#" class="hstack gap-1 text-none fw-medium" data-uc-cursor="md bg-white opacity-10">
                                <span>English</span>
                                <span class="icon-narrow" data-uc-drop-parent-icon=""></span>
                            </a>
                            <div class="p-2 bg-white shadow-xs rounded w-150px" data-uc-drop="mode: click; offset: 28; pos: top-right; boundary: !.uc-footer-bottom; animation: uc-animation-slide-top-small; duration: 150;">
                                <ul class="nav-y gap-1 fw-medium items-end">
                                    <li><a href="#en" data-uc-cursor="md bg-white opacity-10">English</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
