@props(['services'])

<section class="service2 section-padding fix bg-black">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-12">
                <div class="section-top section-top--wrapper flex-wrap brBt-1 pb-30 mb-80">
                    <div class="title-area mb-30 mb-lg-0">
                        <h6 class="section-top__subtitle2">Our services</h6>
                        <h2 class="section-top__title2">Next generation Quality services</h2>
                    </div>
                    <div class="btn-wrapper">
                        <a class="theme-btn style2" href="{{ route('services.index') }}">
                            All Services <i class="fa-regular fa-angle-right"></i>
                        </a>
                    </div>
                </div>
            </div>

            @foreach ($services as $service)
                <div class="col-lg-4">
                    <div class="service2-card">
                        <div class="service2-card__thumb">
                            <a href="{{ route('services.details', $service->slug) }}">
                                <img src="{{ asset($service->thumbnail_image) }}" alt="service thumbnail">
                            </a>
                        </div>
                        <div class="service2-card-content">
                            <div class="service2-card-content__icon">
                                <img src="{{ asset($service->icon) }}" alt="service icon">
                            </div>
                            <h3 class="service2-card-content__title">{{ $service->title }}</h3>
                            <p class="service2-card-content__desc">{{ $service->description }}</p>
                            <div class="service2-card-content-button">
                                <a href="{{ route('services.details', $service->slug) }}" class="service2-card-content-button__link">
                                    <img src="{{ asset('assets/images/icon/arrowUp-white.svg') }}" alt="arrow icon">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
