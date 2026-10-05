@php
    $siteName = $settings->title ?? 'PT Soborejo';
    $siteDescription = $settings->description
        ?? 'PT Soborejo — perusahaan general contractor Indonesia untuk jasa konstruksi gedung, bangunan, dan proyek industri.';
    $defaultKeywords = 'PT Soborejo, Soborejo, general contractor Indonesia, jasa kontraktor Indonesia, perusahaan konstruksi Indonesia, kontraktor gedung, jasa konstruksi industri';
    $pageTitle = trim($__env->yieldContent('title', $siteName));
    $fullTitle = $pageTitle === $siteName ? $siteName : $pageTitle.' | '.$siteName;
    $metaDescription = trim($__env->yieldContent('meta_description', $siteDescription));
    $metaKeywords = trim($__env->yieldContent('meta_keywords', $defaultKeywords));
    $metaRobots = trim($__env->yieldContent('meta_robots', 'index, follow'));
    $canonical = trim($__env->yieldContent('canonical', url()->current()));
    $ogType = trim($__env->yieldContent('og_type', 'website'));
    $ogImage = trim($__env->yieldContent('og_image', ''));
    if ($ogImage === '' && ! empty($settings?->logo)) {
        $ogImage = asset('storage/'.$settings->logo);
    }
    if ($ogImage === '') {
        $ogImage = asset('assets/images/favicon.png');
    }
    $favicon = ! empty($settings?->favicon)
        ? asset('storage/'.$settings->favicon)
        : asset('assets/images/favicon.png');
@endphp
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="{{ $siteName }}">
    <meta name="description" content="{{ $metaDescription }}">
    <meta name="keywords" content="{{ $metaKeywords }}">
    <meta name="robots" content="{{ $metaRobots }}">
    <link rel="canonical" href="{{ $canonical }}">

    <title>{{ $fullTitle }}</title>

    {{-- Open Graph --}}
    <meta property="og:locale" content="id_ID">
    <meta property="og:type" content="{{ $ogType }}">
    <meta property="og:site_name" content="{{ $siteName }}">
    <meta property="og:title" content="{{ $fullTitle }}">
    <meta property="og:description" content="{{ $metaDescription }}">
    <meta property="og:url" content="{{ $canonical }}">
    <meta property="og:image" content="{{ $ogImage }}">

    {{-- Twitter Card --}}
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $fullTitle }}">
    <meta name="twitter:description" content="{{ $metaDescription }}">
    <meta name="twitter:image" content="{{ $ogImage }}">

    <link rel="shortcut icon" href="{{ $favicon }}">
    <link rel="icon" type="image/png" href="{{ $favicon }}">
    <link rel="apple-touch-icon" href="{{ $favicon }}">

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/meanmenu.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/splitting.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/toastr.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">

    @stack('head')
</head>
