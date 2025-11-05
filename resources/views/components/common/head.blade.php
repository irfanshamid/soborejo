<head>
    <!--=========== Meta Tags ==========-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="PreoIt">
    <meta name="description" content="@yield('meta_description', 'Building & Construction Services Laravel 12 Template')">
    <meta name="tags" content="@yield('meta_tags', 'architecture, building, construction, constructor, contractor, engineering,  industry, painter, renovation')">
    <!--============= Page title ============ -->
    <title>@yield('title', $settings->title) | {{$settings->description}}</title>

    <!--===== Favicon =====-->
    <link rel="shortcut icon" href="{{ asset('storage/' . $settings->favicon) }}">
    <!--===== Bootstrap min.css =====-->
    <link rel="stylesheet" href="{{ asset("assets/css/bootstrap.min.css") }}">
    <!--===== All Min Css =====-->
    <link rel="stylesheet" href="{{ asset("assets/css/all.min.css") }}">
    <!--===== Animate.css =====-->
    <link rel="stylesheet" href="{{ asset("assets/css/animate.css") }}">
    <!--===== MeanMenu.css =====-->
    <link rel="stylesheet" href="{{ asset("assets/css/meanmenu.css") }}">
    <!--===== Swiper Bundle.css =====-->
    <link rel="stylesheet" href="{{ asset("assets/css/swiper-bundle.min.css") }}">
    <!--===== Magnific Popup.css =====-->
    <link rel="stylesheet" href="{{ asset("assets/css/magnific-popup.css") }}">
    <!--===== Text Splitting.css =====-->
    <link rel="stylesheet" href="{{ asset("assets/css/splitting.css") }}">
    <!--===== Toastr css =====-->
    <link rel="stylesheet" href="{{ asset('assets/css/toastr.min.css') }}">
    <!--===== Main.css =====-->
    <link rel="stylesheet" href="{{ asset("assets/css/main.css") }}">
</head>
