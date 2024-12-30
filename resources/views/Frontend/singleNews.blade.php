@extends('Frontend.layouts.app')

@section('content')
    <div id="wrapper" class="wrap">
        <article class="panel post type-post single-post py-6 lg:py-8 xl:py-10">
            <div class="position-absolute top-0 start-0 end-0 min-h-screen z-0 bg-gray-25"></div>
            <div class="container max-w-xl">
                <header class="post-header" data-anime="onview: -100; targets: >*; translateY: [48, 0]; opacity: [0, 1]; easing: easeOutCubic; duration: 500; delay: anime.stagger(100, {start: 500});">
                    <div class="panel vstack gap-4 md:gap-6 xl:gap-8 text-center" style="transform: translateY(0px); opacity: 1;">
                        <div class="panel vstack items-center max-w-400px sm:max-w-500px xl:max-w-md mx-auto gap-2 md:gap-3">
                            <ul class="post-meta nav-x ft-tertiary text-black dark:text-white gap-2 fs-6 text-gray-400 d-none md:d-inline-flex">
                                <li>
                                    <div class="hstack gap-narrow ft-primary">
                                        <span>{{ date('d M Y', strtotime($singleBlog->created_at)) }}</span>
                                    </div>
                                </li>
                            </ul>
                            <h1 class="h4 sm:h2 lg:h1 xl:display-6">
                                {{ $singleBlog->title }}
                            </h1>
                            <ul class="post-share-icons nav-x gap-1">
                                <li>
                                    <a class="btn btn-md border-gray-300 dark:border-gray-900 dark:border-opacity-15 w-48px h-48px text-black dark:text-white dark:border-white hover:bg-primary hover:border-primary hover:text-white rounded-circle" href="#"><i class="unicon-logo-facebook icon-1"></i></a>
                                </li>
                                <li>
                                    <a class="btn btn-md border-gray-300 dark:border-gray-900 dark:border-opacity-15 w-48px h-48px text-black dark:text-white dark:border-white hover:bg-primary hover:border-primary hover:text-white rounded-circle" href="#"><i class="unicon-logo-twitter icon-1"></i></a>
                                </li>
                                <li>
                                    <a class="btn btn-md border-gray-300 dark:border-gray-900 dark:border-opacity-15 w-48px h-48px text-black dark:text-white dark:border-white hover:bg-primary hover:border-primary hover:text-white rounded-circle" href="#"><i class="unicon-logo-linkedin icon-1"></i></a>
                                </li>
                                <li>
                                    <a class="btn btn-md border-gray-300 dark:border-gray-900 dark:border-opacity-15 w-48px h-48px text-black dark:text-white dark:border-white hover:bg-primary hover:border-primary hover:text-white rounded-circle" href="#"><i class="unicon-logo-pinterest icon-1"></i></a>
                                </li>
                                <li>
                                    <a class="btn btn-md border-gray-300 dark:border-gray-900 dark:border-opacity-15 w-48px h-48px text-black dark:text-white dark:border-white hover:bg-primary hover:border-primary hover:text-white rounded-circle" href="#"><i class="unicon-email icon-1"></i></a>
                                </li>
                                <li>
                                    <a class="btn btn-md border-gray-300 dark:border-gray-900 dark:border-opacity-15 w-48px h-48px text-black dark:text-white dark:border-white hover:bg-primary hover:border-primary hover:text-white rounded-circle" href="#"><i class="unicon-link icon-1"></i></a>
                                </li>
                            </ul>
                        </div>
                        <figure class="featured-image m-0">
                            <div class="ratio ratio-2x1 rounded rounded lg:rounded-2 uc-transition-toggle overflow-hidden">
                                <img class="media-cover image uc-transition-scale-up uc-transition-opaque" src="{{ url('/') }}/storage/{{ $singleBlog->cover_image }}" alt="Agency launches experts media expert workshops">
                            </div>
                        </figure>
                    </div>
                </header>
            </div>
            <div class="panel mt-6 lg:mt-8 xl:mt-10">
                <div class="container max-w-lg">
                    <div class="post-content panel fs-6 md:fs-5" data-uc-lightbox="animation: scale">
                        <p>
                            {!! $singleBlog->body !!}
                        </p>
                    </div>
                </div>
            </div>
        </article>
    </div>
@endsection
