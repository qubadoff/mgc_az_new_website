<!DOCTYPE html>
<html lang="en" dir="ltr">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MG Consulting</title>
    <link rel="icon" type="image/png" href="{{ asset('') }}n.ico"/>
    <meta name="description" content="Full-featured, professional-looking software, saas and startup website template.">
    <meta name="keywords" content="saas, saas template, site template, software, startup, digital product, html5, landing, marketing, bootstrap, uikit3, agency, ai, digital agency, it solutions, nodejs">
    <link rel="canonical" href="https://unistudio.co/html/Innovar">
    <meta name="theme-color" content="#3e57ff">

    <!-- Open Graph Tags -->
    <meta property="og:locale" content="en_US">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Innovar">
    <meta property="og:description" content="Multi-purpose Marketing Agency & Startup Site Template.">
    <meta property="og:url" content="../index.html">
    <meta property="og:site_name" content="Innovar">
    <meta property="og:image" content="../assets/images/common/seo-image.jpg">
    <meta property="og:image:width" content="1180">
    <meta property="og:image:height" content="600">
    <meta property="og:image:type" content="image/png">

    <!-- Twitter Card Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Innovar">
    <meta name="twitter:description" content="Multi-purpose Marketing Agency & Startup Site Template.">
    <meta name="twitter:image" content="../assets/images/common/seo-image.jpg">

    <link rel="canonical" href="../index.html">

    <!-- preload head styles -->
    <link rel="preload" href="{{ asset('') }}assets/css/unicons.min.css" as="style">
    <link rel="preload" href="{{ asset('') }}assets/css/swiper-bundle.min.css" as="style">
    <link rel="preload" href="{{ asset('') }}assets/css/magic-cursor.min.css" as="style">

    <!-- preload footer scripts -->
    <link rel="preload" href="{{ asset('') }}assets/js/libs/jquery.min.js" as="script">
    <link rel="preload" href="{{ asset('') }}assets/js/libs/scrollmagic.min.js" as="script">
    <link rel="preload" href="{{ asset('') }}assets/js/libs/swiper-bundle.min.js" as="script">
    <link rel="preload" href="{{ asset('') }}assets/js/libs/anime.min.js" as="script">
    <link rel="preload" href="{{ asset('') }}assets/js/libs/gsap.min.js" as="script">
    <link rel="preload" href="{{ asset('') }}assets/js/helpers/data-attr-helper.js" as="script">
    <link rel="preload" href="{{ asset('') }}assets/js/helpers/swiper-helper.js" as="script">
    <link rel="preload" href="{{ asset('') }}assets/js/helpers/anime-helper.js" as="script">
    <link rel="preload" href="{{ asset('') }}assets/js/helpers/anime-helper-defined-timelines.js" as="script">
    <link rel="preload" href="{{ asset('') }}assets/js/core/magic-cursor.js" as="script">
    <link rel="preload" href="{{ asset('') }}assets/js/uikit-components-bs.js" as="script">
    <link rel="preload" href="{{ asset('') }}assets/js/app.js" as="script">

    <!-- app head for bootstrap core -->
    <script src="{{ asset('') }}assets/js/app-head-bs.js"></script>

    <!-- include uni-core components -->
    <link rel="stylesheet" href="{{ asset('') }}assets/js/uni-core/css/uni-core.min.css">

    <!-- include styles -->
    <link rel="stylesheet" href="{{ asset('') }}assets/css/unicons.min.css">
    <link rel="stylesheet" href="{{ asset('') }}assets/css/prettify.min.css">
    <link rel="stylesheet" href="{{ asset('') }}assets/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="{{ asset('') }}assets/css/magic-cursor.min.css">

    <!-- include main style -->
    <link rel="stylesheet" href="{{ asset('') }}assets/css/theme/main.min.css">

    <!-- include scripts -->
    <script src="{{ asset('') }}assets/js/uni-core/js/uni-core-bundle.min.js"></script>
</head>
<body class="uni-body panel bg-white text-gray-900 dark:bg-gray-900 dark:text-gray-200 overflow-x-hidden">

<!--  Bottom Actions Sticky -->
<div class="backtotop-wrap position-fixed bottom-0 end-0 z-99 m-2 vstack">
    <a class="btn btn-sm bg-primary text-white w-40px h-40px rounded-circle" href="to_top.html" data-uc-backtotop>
        <i class="icon-2 unicon-chevron-up"></i>
    </a>
</div>

@include('Frontend.layouts.includes.header')

@yield('content')

@include('Frontend.layouts.includes.footer')


<!-- include jquery & bootstrap js -->
<script defer src="{{ asset('') }}assets/js/libs/jquery.min.js"></script>
<script defer src="{{ asset('') }}assets/js/libs/bootstrap.min.js"></script>

<!-- include scripts -->
<script defer src="{{ asset('') }}assets/js/libs/anime.min.js"></script>
<script defer src="{{ asset('') }}assets/js/libs/swiper-bundle.min.js"></script>
<script defer src="{{ asset('') }}assets/js/libs/scrollmagic.min.js"></script>
<script defer src="{{ asset('') }}assets/js/libs/gsap.min.js"></script>
<script defer src="{{ asset('') }}assets/js/helpers/data-attr-helper.js"></script>
<script defer src="{{ asset('') }}assets/js/helpers/swiper-helper.js"></script>
<script defer src="{{ asset('') }}assets/js/helpers/anime-helper.js"></script>
<script defer src="{{ asset('') }}assets/js/helpers/anime-helper-defined-timelines.js"></script>
<script defer src="{{ asset('') }}assets/js/core/magic-cursor.js"></script>
<script defer src="{{ asset('') }}assets/js/uikit-components-bs.js"></script>

<!-- include app script -->
<script defer src="{{ asset('') }}assets/js/app.js"></script>

</body>
</html>
