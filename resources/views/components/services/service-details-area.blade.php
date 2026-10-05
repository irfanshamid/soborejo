@props(['service'])
<div class="service1-details__content">

    <h2 class="mb-30 wow img-custom-anim-zoom-out" data-wow-duration="1s" data-wow-delay=".1s">
        {{ $service->title }}
    </h2>

    <p class="mb-5">
        {{ $service->description }}
    </p>

    <a class="theme-btn style1" href="{{ route('services.details', $service->slug) }}">
        View Document <i class="fa-regular fa-angle-right"></i>
    </a>
</div>
