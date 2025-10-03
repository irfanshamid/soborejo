<!DOCTYPE html>
<html lang="zxx" class="no-js">

{{-- Head Section: meta tags, title, CSS --}}
<x-common.head />

<body>
    <!--===== Preloader S T A R T =====-->
    <x-common.preloader />

    <!--===== Mouse Cursor S T A R T =====-->
    <x-common.mouse-cursor />

    <!--===== Back To Top S T A R T =====-->
    <x-common.back-to-top />

    <!--===== Search Box Popup =====-->
    <x-common.search-popup />

    <!--===== Header Section  S T A R T =====-->

    <!--===== Mobile Menu  S T A R T =====-->
    <x-common.mobile-menu />

    <!--=====  offcanvas S T A R T =====-->
    <x-common.offcanvas />

    <!-- Main content -->
    <main>
        @yield('content')

        <!--===== Marque Section  S T A R T =====-->
        @if (isset($hasFooterMarque) && $hasFooterMarque == true)
            <x-marques.marque-section-2 :footerMarqueTopMargin="$footerMarqueTopMargin ?? null" :footerMarqueLevelOneStyle="$footerMarqueLevelOneStyle ?? null" :footerMarqueLevelTwoStyle="$footerMarqueLevelTwoStyle ?? null" />
        @endif

        <!--===== Subscribe Section    S T A R T =====-->
        @if (isset($hasFooterSubscriptionForm) && $hasFooterSubscriptionForm == true)
            <x-common.subscription-section />
        @endif
    </main>

    <!--===== Footer S T A R T =====-->
    <x-footers.footer />

    {{-- JS here --}}
    <x-common.scripts />
</body>

</html>
