@extends('Frontend.layouts.app')

@section('content')
    <!-- Wrapper start -->
    <div id="wrapper" class="wrap">

        <!-- Hero start -->
        <div id="hero_header" class="hero-header section panel overflow-hidden">
            <div class="section-outer panel py-4 sm:py-6 lg:p-0">
                <div class="container lg:max-w-xl">
                    <div class="section-inner panel">
                        <div class="row child-cols-12 lg:child-cols items-center g-6 xl:g-9">
                            <div class="lg:order-2">
                                <div class="panel vstack gap-4 sm:gap-6 xl:gap-8">
                                    <div class="panel vstack items-center text-center gap-2 sm:gap-3 xl:gap-4" data-anime="targets: >*; translateY: [48, 0]; opacity: [0, 1]; easing: easeOutCubic; duration: 500; delay: anime.stagger(100, {start: 400});">
                                        <h1 class="title h3 sm:h1 xl:display-5 m-0">Your Partner in Business <span class="d-inline-flex bg-contain pb-1 sm:pb-2 lg:pb-3" style="background-position: 50% 100%" data-src="../assets/images/common/line.svg" data-uc-img>Transformation</span></h1>
                                        <p class="desc fs-5 lg:fs-3">Our business consulting services are rooted in a deep understanding of industry trends, best practices, and the latest technologies.</p>
                                        <a class="btn btn-md xl:btn-lg btn-primary fs-5 sm:fs-4 xl:fs-3 mt-2" href="#">
                                            <span> Get started</span>
                                        </a>
                                        <div class="hstack justify-center gap-1 mt-2">
                                            <img src="{{ asset('') }}assets/images/common/user-group.png" alt="user-group">
                                            <span class="fs-6 lg:fs-5 fw-medium">Based on 4,2k+ reviews</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="lg:col-6 order-1">
                                <div class="panel overflow-hidden lg:expand-container lg:me-0 rounded-3 lg:rounded-start-0" data-anime="opacity: [0, 1]; easing: easeOutCubic; duration: 700; delay: anime.stagger(100, {start: 200});">
                                    <div class="ratio ratio-16x9 lg:ratio-2x3 rounded h-550px xl:h-700px">
                                        <img class="media-cover image" src="{{ asset('') }}assets/images/hero/hero-02.jpg" alt="image">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Hero End -->

        <!-- Section start -->
        <div id="counter" class="counter section panel overflow-hidden border-bottom" data-anime="onview: -100; translateY: [-16, 0]; opacity: [0, 1]; easing: easeOutCubic; duration: 500; delay: 350;">
            <div class="section-outer panel py-5 xl:py-8">
                <div class="container max-w-2xl">
                    <div class="section-inner panel">
                        <div class="row child-cols-12 lg:child-cols items-center gy-4 lg:gy-0">
                            <div class="lg:col-5">
                                <div class="panel">
                                    <h3 class="h4 xl:h3 m-0 text-center lg:text-start">
                                        Trusted by more than 500,00+ <br class="d-none sm:d-block">
                                        people across the globe
                                    </h3>
                                </div>
                            </div>
                            <div>
                                <div class="panel text-center">
                                    <div class="row child-cols-6 sm:child-cols justify-center text-center g-4 sm:g-6 xl:g-8 sep-y" data-uc-grid>
                                        <div>
                                            <div class="panel vstack items-center gap-1">
                                                <h5 class="h3 xl:h1 ft-tertiary m-0 text-primary">40K +</h5>
                                                <p class="fs-6 xl:fs-3">Satisfied clients</p>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="panel vstack items-center gap-1">
                                                <h5 class="h3 xl:h1 ft-tertiary m-0 text-primary">250 +</h5>
                                                <p class="fs-6 xl:fs-3">Trusted patners</p>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="panel vstack items-center gap-1">
                                                <h5 class="h3 xl:h1 ft-tertiary m-0 text-primary">10K +</h5>
                                                <p class="fs-6 xl:fs-3">Projects</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Section End -->

        <!-- Section start -->
        <div id="uni_services" class="services section panel overflow-hidden">
            <div class="section-outer panel py-4 sm:py-6">
                <div class="container max-w-2xl">
                    <div class="section-inner panel vstack gap-4 sm:gap-6 xl:gap-9">
                        <div class="section-header panel vstack items-center sm:items-start text-center sm:text-start m-auto sm:m-0 gap-2 xl:gap-3" data-anime="onview: -100; targets: >*; translateY: [48, 0]; opacity: [0, 1]; easing: easeOutCubic; duration: 500; delay: anime.stagger(100, {start: 500});">
                            <h3 class="title h3 sm:h2 xl:display-6 m-0">
                                Our Services
                            </h3>
                        </div>
                        <div class="section-content panel">
                            <div class="vstack gap-0" data-anime="onview: -100; targets: >*; translateY: [48, 0]; opacity: [0, 1]; easing: easeOutCubic; duration: 500; delay: anime.stagger(100, {start: 700});">
                                @forelse($services as $service)
                                    <div>
                                        <article class="services-item panel py-4 sm:py-3 xl:py-4 border-top border-gray-50" data-uc-cursor="lg text-primary" data-uc-cursor-icon="icon-3 unicon-arrow-up-right">
                                            <div class="row child-cols justify-between items-center g-2 sm:g-4 lg:g-9">
                                                <div class="col-12 sm:col-auto">
                                                    <div class="cstack w-56px h-56px lg:w-64px lg:h-64px xl:w-80px xl:h-80px rounded mb-1 sm:m-0 bg-primary">
                                                        <i class="icon-3 xl:icon-4 text-white unicon-layers"></i>
                                                    </div>
                                                </div>
                                                <div>
                                                    <h3 class="h4 xl:h2 m-0">{{ $service->name }}</h3>
                                                </div>
                                                <div class="col-12 sm:col-5">
                                                    <p class="fs-5 lg:fs-4 xl:fs-2">{{ $service->description }}</p>
                                                </div>
                                                <div class="col-12 sm:col-auto">
                                                    <a class='btn btn-lg p-0 mt-1 sm:m-0 h-100' href='#'>
                                                        <i class="icon icon-2 xl:icon-3 unicon-arrow-up-right"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <a class='position-cover' href='#'></a>
                                        </article>
                                    </div>
                                @empty
                                    No Data
                                @endforelse
                            </div>
                        </div>
                        <div class="section-footer panel" data-anime="onview: -100; translateY: [48, 0]; opacity: [0, 1]; easing: easeOutCubic; duration: 500;">
                            <a class='btn btn-text fs-4 xl:fs-3 border-bottom gap-1 xl:gap-2 mt-1 text-primary' data-uc-cursor='md bg-white opacity-10' href='page-services.html'>
                                <span>View all services</span>
                                <i class="icon unicon-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Section Start -->
        <div id="uni_blog" class="blog section panel overflow-hidden">
            <div class="section-outer panel py-4 sm:py-6">
                <div class="container max-w-2xl">
                    <div class="section-inner panel vstack gap-4 sm:gap-6 xl:gap-9">
                        <div class="section-header panel vstack items-center sm:items-start text-center sm:text-start m-auto sm:m-0 gap-2 xl:gap-3" data-anime="onview: -100; targets: >*; translateY: [48, 0]; opacity: [0, 1]; easing: easeOutCubic; duration: 500; delay: anime.stagger(100, {start: 500});">
                            <div class="fs-6 xl:fs-4 px-3 xl:px-4 py-1 rounded bg-gray-25"><span>Articles</span></div>
                            <h3 class="title h3 sm:h2 xl:display-6 m-0">Uncover the Latest Industry <br class="d-none sm:d-block">Insights and Articles</h3>
                        </div>
                        <div class="section-content panel">
                            <div class="grid sm:g-child-rows-12 g-child-cols-12 sm:g-child-cols-6 gap-3 lg:gap-4 xl:gap-6" data-anime="onview: -100; targets: >*; translateY: [48, 0]; opacity: [0, 1]; easing: easeOutCubic; duration: 500; delay: anime.stagger(100, {start: 600});">
                                @forelse($news as $n)
                                    <div class="sm:g-row-span-6">
                                        <article class="blog-item panel p-2 lg:p-3 xl:p-4 h-100 rounded bg-gray-25">
                                            <div class="vstack justify-between items-start gap-3 h-100">
                                                <header class="vstack gap-1 sm:gap-2 xl:gap-3">
                                                    <div class="hstack justify-between gap-2 mb-narrow sm:mb-0">
                                                        <span class="fs-5 xl:fs-3">{{ date('d M Y', strtotime($n->created_at)) }}</span>
                                                    </div>
                                                    <h3 class="title h4 xl:h3 m-0">
                                                        <a class='text-none' data-uc-cursor='md bg-white opacity-10' href='{{ route('singleNews', ['slug' => $n->slug]) }}'>
                                                            {{ $n->title }}
                                                        </a>
                                                    </h3>
                                                    <p class="desc fs-6 sm:fs-5 lg:fs-4 xl:fs-2">
                                                        {{ $n->description }}
                                                    </p>
                                                </header>
                                                <a class='btn btn-text fs-4 sm:fs-5 lg:fs-4 xl:fs-3 border-bottom gap-1 mt-1 text-primary' data-uc-cursor='md bg-white opacity-10' href='{{ route('singleNews', ['slug' => $n->slug]) }}'>
                                                    <span>Read More</span>
                                                    <i class="icon unicon-arrow-up-right"></i>
                                                </a>
                                            </div>
                                        </article>
                                    </div>
                                @empty
                                    No Data !
                                @endforelse
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Wrapper end -->

    <!-- Cta Start -->
    <div id="cta" class="cta section panel">
        <div class="section-outer panel" data-anime="onview: -100; translateY: [24, 0]; opacity: [0, 1]; easing: easeOutCubic; duration: 450; delay: 200;">
            <div class="container max-w-2xl">
                <div class="section-inner panel overflow-hidden rounded px-2 sm:px-0 py-5 sm:py-6 lg:py-8 xl:py-9 bg-gradient-45n from-primary-400 to-primary rounded lg:rounded-3 text-white">
                    <div class="position-cover opacity-70 blend-multiply" data-src="../assets/images/common/footer-cta-bg.jpg" data-uc-img></div>
                    <div class="panel vstack items-center gap-2 lg:gap-3 max-w-500px lg:max-w-700px mx-auto text-center z-99" data-anime="onview:-100; targets: >*; translateY: [48, 0]; opacity: [0, 1]; easing: easeOutCubic; duration: 450; delay: anime.stagger(100, {start: 200});">
                        <h2 class="h3 sm:h1 lg:display-6 m-0 text-white">Start scaling your business with Innovar</h2>
                        <p class="fs-5 sm:fs-4 xl:fs-3 text-white text-opacity-80">14-day free trial. No credit card required.</p>
                        <a class='btn btn-md xl:btn-lg btn-secondary text-primary fs-6 xl:fs-4 mt-2' data-uc-cursor='md bg-white opacity-10' href='page-contact.html'>
                            <span>Get a quote</span>
                            <i class="icon icon-1 unicon-arrow-right d-none sm:d-block"></i>
                        </a>
                    </div>
                    <div class="d-none lg:d-block" data-anime="onview:-100; targets: >*; scale: [0, 1]; opacity: [0, 1]; easing: easeOutCubic; duration: 450; delay: anime.stagger(100, {start: 750});">
                        <div class="position-absolute" style="top: 25%; left: 10%">
                            <img class="w-32px xl:w-48px" src="{{ asset('') }}assets/images/common/gold-stare.svg" alt="star-icon">
                        </div>
                        <div class="position-absolute" style="bottom: 25%; right: 15%">
                            <img class="w-24px xl:w-32px" src="{{ asset('') }}assets/images/common/gold-stare.svg" alt="star-icon">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Cta End -->
@endsection
