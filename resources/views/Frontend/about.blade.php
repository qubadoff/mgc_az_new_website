@extends('Frontend.layouts.app')

@section('title', 'About Us')

@section('content')
    <!-- Wrapper start -->
    <div id="wrapper" class="wrap">

        <!-- Hero start -->
        <div id="hero_header" class="hero-header section panel overflow-hidden" data-anime="onview: -100; targets: >*; translateY: [48, 0]; opacity: [0, 1]; easing: easeOutCubic; duration: 500; delay: anime.stagger(100, {start: 500});">

            <div class="section-outer panel py-6 sm:py-8 xl:py-9" style="transform: translateY(0px); opacity: 1;">
                <div class="container max-w-2xl">
                    <div class="section-inner panel vstack gap-4 sm:gap-6 lg:gap-8 xl:gap-9">
                        <div class="panel vstack items-center gap-2 lg:gap-4 mb-4 sm:mb-6 lg:mb-8 max-w-750px mx-auto text-center">
                            <h1 class="h2 sm:h1 lg:display-6 xl:display-5 m-0">
                                About us
                            </h1>
                            <p class="m-0 fs-5 sm:fs-4 xl:fs-3">
                                <b>MG Consulting LLC</b> is a registered consulting company in Azerbaijan since 2014. Our company provides various services (legal, accounting, project management, etc) to its clients, which are mostly diplomatic missions and international organizations located in Azerbaijan (UNDP, UNICEF, Swiss Embassy, Embassy of Japan, ICNL, USAID, GIZ, ICMDP, etc.).

                                <br/>

                                The company has a multi-language team with extensive experience in managing complex projects, litigation, legislation reforms and other tasks. Our core team consists of two lawyers and three accounting/administration personnel.

                                <br/>

                                Examples of our multi-year projects include:

                                <br/>

                                • Socio-Economic Development Activity (SEDA) project with East-West Management Institute (EWMI);

                                <br/>

                                • Building Local Capacity for Development (BLCD) with Chemonics International;

                                <br/>

                                • Legally Enabling Environment, Project (LEEP) and SES project with International Center for Non-for-profit Law (ICNL).

                                <br/>

                                • USAID’s ECSOFT project (including public oversight platform ‘enezaret’);

                                <br/>

                                • CSO Meter project with ECNL/EU.
                            </p>
                        </div>
{{--                        <div class="panel">--}}
{{--                            <div class="grid g-child-rows-12 gap-1 sm:gap-2 lg:gap-3 xl:gap-4">--}}
{{--                                <div class="g-row-span-5 g-col-span-2 g-row-start-4 g-col-start-1 d-none sm:d-block">--}}
{{--                                    <div class="panel h-100">--}}
{{--                                        <div class="ratio ratio-1x1 rounded rounded-1 lg:rounded overflow-hidden h-100">--}}
{{--                                            <img class="media-cover image" src="../assets/images/inner-pages/inner-about/img-02.jpg" alt="image">--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="g-row-span-6 sm:g-row-span-5 g-col-span-3 sm:g-col-span-2 g-row-start-0 sm:g-row-start-2 g-col-start-0 sm:g-col-start-3">--}}
{{--                                    <div class="panel h-100">--}}
{{--                                        <div class="ratio ratio-1x1 rounded rounded-1 lg:rounded overflow-hidden h-100">--}}
{{--                                            <img class="media-cover image" src="../assets/images/inner-pages/inner-about/img-03.jpg" alt="image">--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="g-row-span-6 sm:g-row-span-5 g-col-span-3 sm:g-col-span-2 g-row-start-7 sm:g-row-start-7 g-col-start-0 sm:g-col-start-3">--}}
{{--                                    <div class="panel h-100">--}}
{{--                                        <div class="ratio ratio-1x1 rounded rounded-1 lg:rounded overflow-hidden h-100">--}}
{{--                                            <img class="media-cover image" src="../assets/images/inner-pages/inner-about/img-04.jpg" alt="image">--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="g-row-span-12 g-col-span-6 sm:g-col-span-4 g-col-start-4 sm:g-col-start-5">--}}
{{--                                    <div class="panel">--}}
{{--                                        <div class="ratio ratio-3x4 rounded rounded-1 lg:rounded overflow-hidden">--}}
{{--                                            <img class="media-cover image" src="../assets/images/inner-pages/inner-about/img-01.jpg" alt="image">--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="g-row-span-6 sm:g-row-span-5 g-col-span-3 sm:g-col-span-2 g-row-start-0 sm:g-row-start-2 g-col-start-10 sm:g-col-start-9">--}}
{{--                                    <div class="panel h-100">--}}
{{--                                        <div class="ratio ratio-1x1 rounded rounded-1 lg:rounded overflow-hidden h-100">--}}
{{--                                            <img class="media-cover image" src="../assets/images/inner-pages/inner-about/img-05.jpg" alt="image">--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="g-row-span-6 sm:g-row-span-5 g-col-span-3 sm:g-col-span-2 g-row-start-7 sm:g-row-start-7 g-col-start-10 sm:g-col-start-9">--}}
{{--                                    <div class="panel h-100">--}}
{{--                                        <div class="ratio ratio-1x1 rounded rounded-1 lg:rounded overflow-hidden h-100">--}}
{{--                                            <img class="media-cover image" src="../assets/images/inner-pages/inner-about/img-06.jpg" alt="image">--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="g-row-span-5 g-col-span-2 g-row-start-4 g-col-start-11 d-none sm:d-block">--}}
{{--                                    <div class="panel h-100">--}}
{{--                                        <div class="ratio ratio-1x1 rounded rounded-1 lg:rounded overflow-hidden h-100">--}}
{{--                                            <img class="media-cover image" src="../assets/images/inner-pages/inner-about/img-07.jpg" alt="image">--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                    </div>
                </div>
            </div>

            <br/><br/>

            <!-- Section end-->

            <!-- Section start -->
            <div id="about-team" class="about-team section panel overflow-hidden">
                <div class="section-outer panel">
                    <div class="container max-w-xl">
                        <div class="section-inner panel">
                            <div class="panel vstack justify-center items-center gap-4 sm:gap-6 xl:gap-8">
                                <header>
                                    <div class="panel text-center vstack gap-2 items-center" data-anime="onview: -100; targets: >*; translateY: [48, 0]; opacity: [0, 1]; easing: easeOutCubic; duration: 500; delay: anime.stagger(100, {start: 500});">
                                        <h1 class="title h3 sm:h2 xl:display-6 m-0">
                                            Our Team
                                        </h1>
                                    </div>
                                </header>
                                <div class="row sm:child-cols-6 lg:child-cols-4 g-4 col-match" data-anime="onview: -100; targets: >*; translateY: [48, 0]; opacity: [0, 1]; easing: easeOutCubic; duration: 500; delay: anime.stagger(100, {start: 500});">
                                    @forelse($teams as $team)
                                        <div>
                                            <div class="panel p-3 xl:p-4 bg-gray-25 rounded">
                                                <div class="panel vstack gap-3 items-center text-center">
                                                    <img class="w-100 rounded" src="{{ url('/') }}/storage/{{ $team->image }}" alt="{{ $team->name }}">
                                                    <div class="panel vsatck gap-2">
                                                        <h4 class="h3 m-0"><a href="{{ route("singleTeam", ['slug' => $team->slug ]) }}" class="text-none" data-uc-cursor="md bg-white opacity-10">{{ $team->name }}</a></h4>
                                                        <span class="fs-4">{{ $team->position }}</span>
                                                    </div>
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
        </div>
    </div>

@endsection
