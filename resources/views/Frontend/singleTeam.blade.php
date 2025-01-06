@extends('Frontend.layouts.app')

@section('title', $singleTeam->name)

@section('content')
    <div id="wrapper" class="wrap">
        <article class="panel post type-post single-post py-6 lg:py-8 xl:py-10">
            <div class="position-absolute top-0 start-0 end-0 min-h-screen z-0 bg-gray-25"></div>
            <div class="container max-w-xl">
                <header class="post-header" data-anime="onview: -100; targets: >*; translateY: [48, 0]; opacity: [0, 1]; easing: easeOutCubic; duration: 500; delay: anime.stagger(100, {start: 500});">
                    <div class="panel vstack gap-4 md:gap-6 xl:gap-8 text-center" style="transform: translateY(0px); opacity: 1;">
                        <div class="panel vstack items-center max-w-400px sm:max-w-500px xl:max-w-md mx-auto gap-2 md:gap-3">
                            <h1 class="h4 sm:h2 lg:h1 xl:display-6">
                                {{ $singleTeam->name }}
                            </h1>
                        </div>
                    </div>
                </header>
            </div>
            <div class="panel mt-6 lg:mt-8 xl:mt-10">
                <div class="container max-w-lg">
                    <div class="post-content panel fs-6 md:fs-5" data-uc-lightbox="animation: scale">
                        <p>
                            {!! $singleTeam->body !!}
                        </p>
                    </div>
                </div>
            </div>
        </article>
    </div>
@endsection
