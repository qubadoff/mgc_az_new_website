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
                            <div class="fs-6 xl:fs-4 px-3 xl:px-4 py-1 rounded bg-gray-25"><span>Services</span></div>
                            <h3 class="title h3 sm:h2 xl:display-6 m-0">
                                Dive Deep Into Our Expertise, <br class="d-none sm:d-block">
                                Explore All Our Services
                            </h3>
                        </div>
                        <div class="section-content panel">
                            <div class="vstack gap-0" data-anime="onview: -100; targets: >*; translateY: [48, 0]; opacity: [0, 1]; easing: easeOutCubic; duration: 500; delay: anime.stagger(100, {start: 700});">
                                <div>
                                    <article class="services-item panel py-4 sm:py-3 xl:py-4 border-top border-gray-50" data-uc-cursor="lg text-primary" data-uc-cursor-icon="icon-3 unicon-arrow-up-right">
                                        <div class="row child-cols justify-between items-center g-2 sm:g-4 lg:g-9">
                                            <div class="col-12 sm:col-auto">
                                                <div class="cstack w-56px h-56px lg:w-64px lg:h-64px xl:w-80px xl:h-80px rounded mb-1 sm:m-0 bg-primary">
                                                    <i class="icon-3 xl:icon-4 text-white unicon-scalpel-lasso"></i>
                                                </div>
                                            </div>
                                            <div>
                                                <h3 class="h4 xl:h2 m-0">Staffing Solution</h3>
                                            </div>
                                            <div class="col-12 sm:col-5">
                                                <p class="fs-5 lg:fs-4 xl:fs-2">Empowering your team dynamics with precision talent matching. Our staffing solutions ensure the right fit.</p>
                                            </div>
                                            <div class="col-12 sm:col-auto">
                                                <a class='btn btn-lg p-0 mt-1 sm:m-0 h-100' href='page-services.html'>
                                                    <i class="icon icon-2 xl:icon-3 unicon-arrow-up-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <a class='position-cover' href='single-service.html'></a>
                                    </article>
                                </div>
                                <div>
                                    <article class="services-item panel py-4 sm:py-3 xl:py-4 border-top border-gray-50" data-uc-cursor="lg text-primary" data-uc-cursor-icon="icon-3 unicon-arrow-up-right">
                                        <div class="row child-cols justify-between items-center g-2 sm:g-4 lg:g-9">
                                            <div class="col-12 sm:col-auto">
                                                <div class="cstack w-56px h-56px lg:w-64px lg:h-64px xl:w-80px xl:h-80px rounded mb-1 sm:m-0 bg-primary">
                                                    <i class="icon-3 xl:icon-4 text-white unicon-rocket"></i>
                                                </div>
                                            </div>
                                            <div>
                                                <h3 class="h4 xl:h2 m-0">Strategic Planing</h3>
                                            </div>
                                            <div class="col-12 sm:col-5">
                                                <p class="fs-5 lg:fs-4 xl:fs-2">Shaping the future with meticulous foresight. Our strategic planning paves the way for decisive action.</p>
                                            </div>
                                            <div class="col-12 sm:col-auto">
                                                <a class='btn btn-lg p-0 mt-1 sm:m-0 h-100' href='page-services.html'>
                                                    <i class="icon icon-2 xl:icon-3 unicon-arrow-up-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <a class='position-cover' href='single-service.html'></a>
                                    </article>
                                </div>
                                <div>
                                    <article class="services-item panel py-4 sm:py-3 xl:py-4 border-top border-gray-50" data-uc-cursor="lg text-primary" data-uc-cursor-icon="icon-3 unicon-arrow-up-right">
                                        <div class="row child-cols justify-between items-center g-2 sm:g-4 lg:g-9">
                                            <div class="col-12 sm:col-auto">
                                                <div class="cstack w-56px h-56px lg:w-64px lg:h-64px xl:w-80px xl:h-80px rounded mb-1 sm:m-0 bg-primary">
                                                    <i class="icon-3 xl:icon-4 text-white unicon-model-alt"></i>
                                                </div>
                                            </div>
                                            <div>
                                                <h3 class="h4 xl:h2 m-0">Hr Outsourcing</h3>
                                            </div>
                                            <div class="col-12 sm:col-5">
                                                <p class="fs-5 lg:fs-4 xl:fs-2">Optimizing HR processes while you focus on core business. Trust our HR outsource for streamlined operations.</p>
                                            </div>
                                            <div class="col-12 sm:col-auto">
                                                <a class='btn btn-lg p-0 mt-1 sm:m-0 h-100' href='page-services.html'>
                                                    <i class="icon icon-2 xl:icon-3 unicon-arrow-up-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <a class='position-cover' href='single-service.html'></a>
                                    </article>
                                </div>
                                <div>
                                    <article class="services-item panel py-4 sm:py-3 xl:py-4 border-top border-gray-50" data-uc-cursor="lg text-primary" data-uc-cursor-icon="icon-3 unicon-arrow-up-right">
                                        <div class="row child-cols justify-between items-center g-2 sm:g-4 lg:g-9">
                                            <div class="col-12 sm:col-auto">
                                                <div class="cstack w-56px h-56px lg:w-64px lg:h-64px xl:w-80px xl:h-80px rounded mb-1 sm:m-0 bg-primary">
                                                    <i class="icon-3 xl:icon-4 text-white unicon-model"></i>
                                                </div>
                                            </div>
                                            <div>
                                                <h3 class="h4 xl:h2 m-0">Talent Acquisition</h3>
                                            </div>
                                            <div class="col-12 sm:col-5">
                                                <p class="fs-5 lg:fs-4 xl:fs-2">Express delivery inno service effective logistics solution for delivery of small cargo delivery service.</p>
                                            </div>
                                            <div class="col-12 sm:col-auto">
                                                <a class='btn btn-lg p-0 mt-1 sm:m-0 h-100' href='page-services.html'>
                                                    <i class="icon icon-2 xl:icon-3 unicon-arrow-up-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <a class='position-cover' href='single-service.html'></a>
                                    </article>
                                </div>
                                <div>
                                    <article class="services-item panel py-4 sm:py-3 xl:py-4 border-top border-gray-50" data-uc-cursor="lg text-primary" data-uc-cursor-icon="icon-3 unicon-arrow-up-right">
                                        <div class="row child-cols justify-between items-center g-2 sm:g-4 lg:g-9">
                                            <div class="col-12 sm:col-auto">
                                                <div class="cstack w-56px h-56px lg:w-64px lg:h-64px xl:w-80px xl:h-80px rounded mb-1 sm:m-0 bg-primary">
                                                    <i class="icon-3 xl:icon-4 text-white unicon-download-study"></i>
                                                </div>
                                            </div>
                                            <div>
                                                <h3 class="h4 xl:h2 m-0">HR Consulting</h3>
                                            </div>
                                            <div class="col-12 sm:col-5">
                                                <p class="fs-5 lg:fs-4 xl:fs-2">Connecting you with the industry’s finest. Our talent acquisition strategies prioritize the perfect fit,</p>
                                            </div>
                                            <div class="col-12 sm:col-auto">
                                                <a class='btn btn-lg p-0 mt-1 sm:m-0 h-100' href='page-services.html'>
                                                    <i class="icon icon-2 xl:icon-3 unicon-arrow-up-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <a class='position-cover' href='single-service.html'></a>
                                    </article>
                                </div>
                                <div>
                                    <article class="services-item panel py-4 sm:py-3 xl:py-4 border-top border-gray-50 border-bottom" data-uc-cursor="lg text-primary" data-uc-cursor-icon="icon-3 unicon-arrow-up-right">
                                        <div class="row child-cols justify-between items-center g-2 sm:g-4 lg:g-9">
                                            <div class="col-12 sm:col-auto">
                                                <div class="cstack w-56px h-56px lg:w-64px lg:h-64px xl:w-80px xl:h-80px rounded mb-1 sm:m-0 bg-primary">
                                                    <i class="icon-3 xl:icon-4 text-white unicon-layers"></i>
                                                </div>
                                            </div>
                                            <div>
                                                <h3 class="h4 xl:h2 m-0">Improving Resource</h3>
                                            </div>
                                            <div class="col-12 sm:col-5">
                                                <p class="fs-5 lg:fs-4 xl:fs-2">Empowering your team dynamics with precision talent matching. Our staffing solutions ensure the right fit.</p>
                                            </div>
                                            <div class="col-12 sm:col-auto">
                                                <a class='btn btn-lg p-0 mt-1 sm:m-0 h-100' href='page-services.html'>
                                                    <i class="icon icon-2 xl:icon-3 unicon-arrow-up-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <a class='position-cover' href='single-service.html'></a>
                                    </article>
                                </div>
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

        <!-- Section End -->

        <!-- Section start -->
        <div id="uni_projects" class="project section panel overflow-hidden swiper-parent">
            <div class="section-outer panel py-4 sm:py-6 xl:py-9">
                <div class="container max-w-2xl">
                    <div class="section-inner panel">
                        <div class="row child-cols-12 g-4 sm:g-6 xl:g-9">
                            <div>
                                <div class="section-header panel hstack justify-between">
                                    <div class="vstack items-center sm:items-start text-center sm:text-start gap-2 xl:gap-3" data-anime="onview: -100; targets: >*; translateY: [48, 0]; opacity: [0, 1]; easing: easeOutCubic; duration: 500; delay: anime.stagger(100, {start: 500});">
                                        <div class="fs-6 xl:fs-4 px-3 xl:px-4 py-1 rounded bg-gray-25"><span>Projects</span></div>
                                        <h3 class="title h3 sm:h2 xl:display-6 m-0">We specialize in the<br class="d-none sm:d-block">following <span class="d-inline-flex bg-contain pb-1 sm:pb-2" style="background-position: 50% 100%" data-src="../assets/images/common/line.svg" data-uc-img>case studies</span></h3>
                                    </div>
                                    <div class="panel hstack items-end gap-1 xl:gap-2 d-none sm:d-flex" data-anime="onview: -100; targets: >*; translateY: [48, 0]; opacity: [0, 1]; easing: easeOutCubic; duration: 500; delay: 800;">
                                        <a href="#" class="swiper-nav swiper-nav-prev btn bg-primary text-white w-48px h-48px xl:w-56px xl:h-56px rounded ft-tertiary fw-medium" data-uc-cursor-text="Prev" data-uc-cursor="md text-white inverse-text">
                                            <span class="icon-2 unicon-arrow-left"></span>
                                        </a>
                                        <a href="#" class="swiper-nav swiper-nav-next btn bg-primary text-white w-48px h-48px xl:w-56px xl:h-56px rounded ft-tertiary fw-medium" data-uc-cursor-text="Next" data-uc-cursor="md text-white inverse-text">
                                            <span class="icon-2 unicon-arrow-right"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="section-content panel expand-container ms-0">
                                    <div class="swiper" data-uc-swiper="items: 1.2; gap: 16; loop: true; next: .swiper-nav-next; prev: .swiper-nav-prev;" data-uc-swiper-s="items: 3; gap: 24;" data-uc-swiper-m="items: 4; gap: 24;" data-uc-swiper-l="items: 4; gap: 24;">
                                        <div class="swiper-wrapper" data-anime="onview: -100; targets: >*; translateX: [48, 0]; opacity: [0, 1]; easing: easeOutCubic; duration: 500; delay: anime.stagger(100, {start: 600});">
                                            <div class="swiper-slide">
                                                <article class="project-item panel rounded overflow-hidden text-white" data-uc-cursor="xl fw-bold text-uppercase ls-0 text-secondary inverse-text" data-uc-cursor-text="View Project">
                                                    <div class="position-cover bg-gradient-to-t from-black to-transparent opacity-60 z-99"></div>
                                                    <div class="ratio ratio-1x1 rounded uc-transition-toggle overflow-hidden">
                                                        <img class="media-cover image uc-transition-scale-up uc-transition-opaque" src="{{ asset('') }}assets/images/project/01.jpg" alt="image">
                                                    </div>
                                                    <header class="position-absolute start-0 bottom-0 z-999 hstack justify-between gap-2 w-100 p-2 lg:p-3">
                                                        <div class="vstack gap-narrow">
                                                            <h3 class="title h5 lg:h4 text-inherit m-0">Dreamy vision</h3>
                                                            <p class="desc fs-6 lg:fs-5">Logo, user interface</p>
                                                        </div>
                                                        <a href="#" class="link btn bg-white text-primary w-40px h-40px p-0 rounded-circle">
                                                            <i class="icon unicon-arrow-up-right"></i>
                                                        </a>
                                                    </header>
                                                    <a class='position-cover z-999' href='single-case-study.html'></a>
                                                </article>
                                            </div>
                                            <div class="swiper-slide">
                                                <article class="project-item panel rounded overflow-hidden text-white" data-uc-cursor="xl fw-bold text-uppercase ls-0 text-secondary inverse-text" data-uc-cursor-text="View Project">
                                                    <div class="position-cover bg-gradient-to-t from-black to-transparent opacity-60 z-99"></div>
                                                    <div class="ratio ratio-1x1 rounded uc-transition-toggle overflow-hidden">
                                                        <img class="media-cover image uc-transition-scale-up uc-transition-opaque" src="{{ asset('') }}assets/images/project/02.jpg" alt="image">
                                                    </div>
                                                    <header class="position-absolute start-0 bottom-0 z-999 hstack justify-between gap-2 w-100 p-2 lg:p-3">
                                                        <div class="vstack gap-narrow">
                                                            <h3 class="title h5 lg:h4 text-inherit m-0">Energie brand</h3>
                                                            <p class="desc fs-6 lg:fs-5">Logo, branding</p>
                                                        </div>
                                                        <a href="#" class="link btn bg-white text-primary w-40px h-40px p-0 rounded-circle">
                                                            <i class="icon unicon-arrow-up-right"></i>
                                                        </a>
                                                    </header>
                                                    <a class='position-cover z-999' href='single-case-study.html'></a>
                                                </article>
                                            </div>
                                            <div class="swiper-slide">
                                                <article class="project-item panel rounded overflow-hidden text-white" data-uc-cursor="xl fw-bold text-uppercase ls-0 text-secondary inverse-text" data-uc-cursor-text="View Project">
                                                    <div class="position-cover bg-gradient-to-t from-black to-transparent opacity-60 z-99"></div>
                                                    <div class="ratio ratio-1x1 rounded uc-transition-toggle overflow-hidden">
                                                        <img class="media-cover image uc-transition-scale-up uc-transition-opaque" src="{{ asset('') }}assets/images/project/03.jpg" alt="image">
                                                    </div>
                                                    <header class="position-absolute start-0 bottom-0 z-999 hstack justify-between gap-2 w-100 p-2 lg:p-3">
                                                        <div class="vstack gap-narrow">
                                                            <h3 class="title h5 lg:h4 text-inherit m-0">Bottle company</h3>
                                                            <p class="desc fs-6 lg:fs-5">Marketing</p>
                                                        </div>
                                                        <a href="#" class="link btn bg-white text-primary w-40px h-40px p-0 rounded-circle">
                                                            <i class="icon unicon-arrow-up-right"></i>
                                                        </a>
                                                    </header>
                                                    <a class='position-cover z-999' href='single-case-study.html'></a>
                                                </article>
                                            </div>
                                            <div class="swiper-slide">
                                                <article class="project-item panel rounded overflow-hidden text-white" data-uc-cursor="xl fw-bold text-uppercase ls-0 text-secondary inverse-text" data-uc-cursor-text="View Project">
                                                    <div class="position-cover bg-gradient-to-t from-black to-transparent opacity-60 z-99"></div>
                                                    <div class="ratio ratio-1x1 rounded uc-transition-toggle overflow-hidden">
                                                        <img class="media-cover image uc-transition-scale-up uc-transition-opaque" src="{{ asset('') }}assets/images/project/04.jpg" alt="image">
                                                    </div>
                                                    <header class="position-absolute start-0 bottom-0 z-999 hstack justify-between gap-2 w-100 p-2 lg:p-3">
                                                        <div class="vstack gap-narrow">
                                                            <h3 class="title h5 lg:h4 text-inherit m-0">Strategy planing</h3>
                                                            <p class="desc fs-6 lg:fs-5">E-commerce</p>
                                                        </div>
                                                        <a href="#" class="link btn bg-white text-primary w-40px h-40px p-0 rounded-circle">
                                                            <i class="icon unicon-arrow-up-right"></i>
                                                        </a>
                                                    </header>
                                                    <a class='position-cover z-999' href='single-case-study.html'></a>
                                                </article>
                                            </div>
                                            <div class="swiper-slide">
                                                <article class="project-item panel rounded overflow-hidden text-white" data-uc-cursor="xl fw-bold text-uppercase ls-0 text-secondary inverse-text" data-uc-cursor-text="View Project">
                                                    <div class="position-cover bg-gradient-to-t from-black to-transparent opacity-60 z-99"></div>
                                                    <div class="ratio ratio-1x1 rounded uc-transition-toggle overflow-hidden">
                                                        <img class="media-cover image uc-transition-scale-up uc-transition-opaque" src="{{ asset('') }}assets/images/project/05.jpg" alt="image">
                                                    </div>
                                                    <header class="position-absolute start-0 bottom-0 z-999 hstack justify-between gap-2 w-100 p-2 lg:p-3">
                                                        <div class="vstack gap-narrow">
                                                            <h3 class="title h5 lg:h4 text-inherit m-0">Digital Transformation</h3>
                                                            <p class="desc fs-6 lg:fs-5">Finance, Analytics</p>
                                                        </div>
                                                        <a href="#" class="link btn bg-white text-primary w-40px h-40px p-0 rounded-circle">
                                                            <i class="icon unicon-arrow-up-right"></i>
                                                        </a>
                                                    </header>
                                                    <a class='position-cover z-999' href='single-case-study.html'></a>
                                                </article>
                                            </div>
                                            <div class="swiper-slide">
                                                <article class="project-item panel rounded overflow-hidden text-white" data-uc-cursor="xl fw-bold text-uppercase ls-0 text-secondary inverse-text" data-uc-cursor-text="View Project">
                                                    <div class="position-cover bg-gradient-to-t from-black to-transparent opacity-60 z-99"></div>
                                                    <div class="ratio ratio-1x1 rounded uc-transition-toggle overflow-hidden">
                                                        <img class="media-cover image uc-transition-scale-up uc-transition-opaque" src="{{ asset('') }}assets/images/project/06.jpg" alt="image">
                                                    </div>
                                                    <header class="position-absolute start-0 bottom-0 z-999 hstack justify-between gap-2 w-100 p-2 lg:p-3">
                                                        <div class="vstack gap-narrow">
                                                            <h3 class="title h5 lg:h4 text-inherit m-0">Business Process</h3>
                                                            <p class="desc fs-6 lg:fs-5">Security, branding</p>
                                                        </div>
                                                        <a href="#" class="link btn bg-white text-primary w-40px h-40px p-0 rounded-circle">
                                                            <i class="icon unicon-arrow-up-right"></i>
                                                        </a>
                                                    </header>
                                                    <a class='position-cover z-999' href='single-case-study.html'></a>
                                                </article>
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
                                <div class="sm:g-row-span-12">
                                    <article class="blog-item panel p-2 lg:p-3 xl:p-4 h-100 rounded bg-gray-25">
                                        <div class="vstack justify-between items-start gap-3 lg:gap-4 h-100">
                                            <div class="vstack gap-3 lg:gap-4">
                                                <div class="panel">
                                                    <div class="ratio ratio-4x3 rounded rounded uc-transition-toggle overflow-hidden">
                                                        <img class="media-cover image uc-transition-scale-up uc-transition-opaque" src="{{ asset('') }}assets/images/blog/blog-01.jpg" alt="image">
                                                    </div>
                                                    <a class='position-cover' data-uc-cursor='md bg-white opacity-10' href='blog-detail.html'></a>
                                                </div>
                                                <header class="panel vstack items-start gap-1 sm:gap-2 xl:gap-3">
                                                    <div class="hstack justify-between gap-2 mb-narrow sm:mb-0">
                                                        <div class="fs-6 xl:fs-4 ft-secondary px-3 xl:px-4 py-1 rounded text-white bg-primary"><span>Development</span></div>
                                                        <span class="fs-5 xl:fs-3">12 feb, 2023</span>
                                                    </div>
                                                    <h3 class="title h4 xl:h3 m-0">
                                                        <a class='text-none' data-uc-cursor='md bg-white opacity-10' href='blog-detail.html'>Agency launches experts media expert workshops</a>
                                                    </h3>
                                                    <p class="fs-5 sm:fs-4 lg:fs-3 xl:fs-2">We believe in the synergy of human expertise and innovative technology.</p>
                                                </header>
                                            </div>
                                            <a class='btn btn-text fs-4 sm:fs-5 lg:fs-4 xl:fs-3 border-bottom gap-1 mt-1 text-primary' data-uc-cursor='md bg-white opacity-10' href='blog-detail.html'>
                                                <span>Read More</span>
                                                <i class="icon unicon-arrow-up-right"></i>
                                            </a>
                                        </div>
                                    </article>
                                </div>
                                <div class="sm:g-row-span-6">
                                    <article class="blog-item panel p-2 lg:p-3 xl:p-4 h-100 rounded bg-gray-25">
                                        <div class="vstack justify-between items-start gap-3 h-100">
                                            <header class="vstack gap-1 sm:gap-2 xl:gap-3">
                                                <div class="hstack justify-between gap-2 mb-narrow sm:mb-0">
                                                    <div class="fs-6 xl:fs-4 ft-secondary px-3 xl:px-4 py-1 rounded text-white bg-primary"><span>Business</span></div>
                                                    <span class="fs-5 xl:fs-3">12 feb, 2023</span>
                                                </div>
                                                <h3 class="title h4 xl:h3 m-0">
                                                    <a class='text-none' data-uc-cursor='md bg-white opacity-10' href='blog-detail.html'>10 Proven strategies for marketing success</a>
                                                </h3>
                                                <p class="desc fs-6 sm:fs-5 lg:fs-4 xl:fs-2">We believe in the synergy of human expertise and innovative technology.</p>
                                            </header>
                                            <a class='btn btn-text fs-4 sm:fs-5 lg:fs-4 xl:fs-3 border-bottom gap-1 mt-1 text-primary' data-uc-cursor='md bg-white opacity-10' href='blog-detail.html'>
                                                <span>Read More</span>
                                                <i class="icon unicon-arrow-up-right"></i>
                                            </a>
                                        </div>
                                    </article>
                                </div>
                                <div class="sm:g-row-span-6">
                                    <article class="blog-item panel p-2 lg:p-3 xl:p-4 h-100 rounded bg-gray-25">
                                        <div class="vstack justify-between items-start gap-3 h-100">
                                            <header class="vstack gap-1 sm:gap-2 xl:gap-3">
                                                <div class="hstack justify-between gap-2 mb-narrow sm:mb-0">
                                                    <div class="fs-6 xl:fs-4 ft-secondary px-3 xl:px-4 py-1 rounded text-white bg-primary"><span>Interior</span></div>
                                                    <span class="fs-5 xl:fs-3">12 feb, 2023</span>
                                                </div>
                                                <h3 class="title h4 xl:h3 m-0">
                                                    <a class='text-none' data-uc-cursor='md bg-white opacity-10' href='blog-detail.html'>How to effectively conduct market research</a>
                                                </h3>
                                                <p class="desc fs-6 sm:fs-5 lg:fs-4 xl:fs-2">We believe in the synergy of human expertise and innovative technology.</p>
                                            </header>
                                            <a class='btn btn-text fs-4 sm:fs-5 lg:fs-4 xl:fs-3 border-bottom gap-1 mt-1 text-primary' data-uc-cursor='md bg-white opacity-10' href='blog-detail.html'>
                                                <span>Read More</span>
                                                <i class="icon unicon-arrow-up-right"></i>
                                            </a>
                                        </div>
                                    </article>
                                </div>
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
