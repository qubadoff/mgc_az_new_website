@extends('Frontend.layouts.app')

@section('title', 'Clients')


@section('content')
    <!-- Wrapper start -->
    <div id="wrapper" class="wrap">
        <div class="hero-inner overflow-hidden panel pt-10 xl:py-10">
            <div class="panel">
                <div class="container max-w-xl">
                    <div class="panel vstack justify-center text-center" data-anime="onview: -100; targets: >*; translateY: [48, 0]; opacity: [0, 1]; easing: easeOutCubic; duration: 500; delay: anime.stagger(100, {start: 500});">
                        <div class="panel vstack items-center gap-2 lg:gap-4 mb-4 sm:mb-6 lg:mb-8 max-w-750px mx-auto text-center" style="transform: translateY(0px); opacity: 1;">
                            <h1 class="h2 sm:h1 lg:display-6 xl:display-5 m-0">
                                Our Clients
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Section start-->
            <div class="uni-blog section panel overflow-hidden pt-8 xl:pt-10">
                <div class="section-outer panel">
                    <div class="container max-w-xl">
                        <div class="section-inner panel vstack gap-9" data-anime="onview: -100; targets: >*; translateY: [48, 0]; opacity: [0, 1]; easing: easeOutCubic; duration: 500; delay: anime.stagger(100, {start: 500});">
                            <div class="panel">
                                <div class="row child-cols-12 sm:child-cols-6 md:child-cols-4 g-3 xl:g-4" data-anime="onview: -100; targets: >*; translateX: [48, 0]; opacity: [0, 1]; easing: easeOutCubic; duration: 500; delay: anime.stagger(100, {start: 500});">
                                    @forelse($clients as $c)
                                        <div>
                                            <div class="post-item vstack gap-3">
                                                <div class="post-item-image panel">
                                                    <div class="ratio ratio-3x2 rounded rounded uc-transition-toggle overflow-hidden">
                                                        <img class="media-cover image uc-transition-scale-up uc-transition-opaque" src="{{ url('/storage/' .$c->image. '/') }}" alt="Agency launches experts media expert workshops">
                                                    </div>
                                                    <a class='position-cover' data-uc-cursor='md bg-white opacity-10' href='{{ $c->url }}' target="_blank"></a>
                                                </div>
                                                <div class="post-item-content vstack items-start gap-2">
                                                    <h3 class="h4 lg:h3 m-0"><a class='text-none' data-uc-cursor='md bg-white opacity-10' href='{{ $c->url }}' target="_blank">{{ $c->name }}</a></h3>
                                                </div>
                                            </div>
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

            <!-- Section end-->
        </div>
    </div>
@endsection
