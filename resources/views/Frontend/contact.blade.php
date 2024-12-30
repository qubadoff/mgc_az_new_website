@extends('Frontend.layouts.app')

@section('content')
    <!-- Wrapper start -->
    <div id="wrapper" class="wrap">

        <!-- Section start -->
        <div id="helpful-links" class="section panel overflow-hidden">
            <div class="section-outer panel">
                <div class="container max-w-xl">
                    <div class="section-inner panel">
                        <div class="panel vstack gap-4 sm:gap-6 xl:gap-8">
                            <h2 class="h4 sm:h3 lg:h2 m-0 text-center" data-anime="onview: -100; translateY: [48, 0]; opacity: [0, 1]; easing: spring(1, 80, 10, 0); duration: 450; delay: 100;">Other ways to reach us</h2>
                            <div class="row child-cols-12 sm:child-cols-6 lg:child-cols-3 g-2 xl:g-3 justify-between col-match" data-anime="onview: -100; targets: > *; translateY: [48, 0]; opacity: [0, 1]; easing: spring(1, 80, 10, 0); duration: 450; delay: anime.stagger(100, {start: 200});">
                                <div>
                                    <div class="panel vstack gap-2 items-center text-center px-3 py-4 lg:py-6 xl:py-8 rounded bg-gray-25 lg:hover:-translate-y-2 duration-150 transition-all">
                                        <div class="cstack mb-2 w-64px h-64px bg-secondary p-1 rounded">
                                            <span><i class="icon-3 unicon-location text-primary"></i></span>
                                        </div>
                                        <h5 class="h4 m-0">Our Location</h5>
                                        <p class="fs-5 opacity-70">{{ siteInfo()->site_address }}</p>
                                        <a class="btn btn-text fs-5 xl:fs-4 text-primary border-bottom gap-1 xl:gap-2 mt-1" data-uc-cursor="md bg-white opacity-10" href="#">
                                            <span>View on maps</span>
                                            <i class="position-relative icon icon-1 unicon-arrow-right translate-y-px"></i>
                                        </a>
                                    </div>
                                </div>
                                <div>
                                    <div class="panel vstack gap-2 items-center text-center px-3 py-4 lg:py-6 xl:py-8 rounded bg-gray-25 lg:hover:-translate-y-2 duration-150 transition-all">
                                        <div class="cstack mb-2 w-64px h-64px bg-secondary p-1 rounded">
                                            <span><i class="icon-3 unicon-phone text-primary"></i></span>
                                        </div>
                                        <h5 class="h4 m-0">Our Number</h5>
                                        <p class="fs-5 opacity-70">Get instant answers.</p>
                                        <a class="btn btn-text fs-5 xl:fs-4 text-primary border-bottom gap-1 xl:gap-2 mt-1" data-uc-cursor="md bg-white opacity-10" href="tel:{{ siteInfo()->site_phone }}">
                                            <span>Call us</span>
                                            <i class="position-relative icon icon-1 unicon-arrow-right translate-y-px"></i>
                                        </a>
                                    </div>
                                </div>
                                <div>
                                    <div class="panel vstack gap-2 items-center text-center px-3 py-4 lg:py-6 xl:py-8 rounded bg-gray-25 lg:hover:-translate-y-2 duration-150 transition-all">
                                        <div class="cstack mb-2 w-64px h-64px bg-secondary p-1 rounded">
                                            <span><i class="icon-3 unicon-email text-primary"></i></span>
                                        </div>
                                        <h5 class="h4 m-0">Our Email</h5>
                                        <p class="fs-4 opacity-70">Get priority support.</p>
                                        <a class="btn btn-text fs-5 xl:fs-4 text-primary border-bottom gap-1 xl:gap-2 mt-1" data-uc-cursor="md bg-white opacity-10" href="{{ siteInfo()->site_email }}">
                                            <span>Send email</span>
                                            <i class="position-relative icon icon-1 unicon-arrow-right translate-y-px"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
