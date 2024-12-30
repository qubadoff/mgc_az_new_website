@extends('Frontend.layouts.app')

@section('title', 'FAQ')


@section('content')
    <div id="wrapper" class="wrap">

        <div class="section py-4 lg:py-6 xl:py-8">
            <div class="container max-w-lg">
                <div class="page-wrap panel vstack gap-4 lg:gap-6 xl:gap-8" data-anime="onview: -100; targets: >*; translateY: [48, 0]; opacity: [0, 1]; easing: easeOutCubic; duration: 500; delay: anime.stagger(100, {start: 500});">
                    <header class="page-header panel vstack justify-center gap-2 lg:gap-4 text-center" style="transform: translateY(0px); opacity: 1;">
                        <div class="panel">
                            <h1 class="h3 lg:h1 m-0">Frequently asked question</h1>
                        </div>
                    </header>

                    <div class="section-outer panel">
                        <div class="container max-w-xl">
                            <div class="section-inner panel">
                                <div class="panel">
                                    <div class="row xl:child-cols-12 g-4 col-match" data-anime="onview: -100; targets: >*; translateX: [48, 0]; opacity: [0, 1]; easing: easeOutCubic; duration: 500; delay: anime.stagger(100, {start: 500});">
                                        <div class="panel" style="transform: translateX(0px); opacity: 1;">
                                            <ul class="gap-4 uc-accordion" data-uc-accordion="targets: > li;">
                                                @forelse($faqs as $f)
                                                    <li class="panel p-3 lg:p-4 rounded bg-gray-25">
                                                        <h3 class="uc-accordion-title h5 sm:h4 m-0 fw-bold" data-uc-cursor="md bg-white opacity-10" id="uc-accordion-29" aria-controls="uc-accordion-30" aria-expanded="false" aria-disabled="false">
                                                            {{ $f->question }}
                                                        </h3>
                                                        <div class="uc-accordion-content" id="uc-accordion-30" role="region" aria-labelledby="uc-accordion-29" hidden="">
                                                            <p>
                                                                {!! $f->answer !!}
                                                            </p>
                                                        </div>
                                                    </li>
                                                @empty
                                                    No Data
                                                @endforelse
                                            </ul>
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
@endsection
