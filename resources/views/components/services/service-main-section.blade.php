@props(['services'])

<section class="service1 service1-inner__pages about-logo pt-120 fix mb-30">
    <div class="container mb-30">
        <div class="row g-4 mb-30">
            @foreach ($services as $service)
                <div class="col-lg-6">
                    <div class="service1-card wow img-custom-anim-totop h-100 flex flex-col justify-between"
                         data-wow-duration="1s" data-wow-delay=".1s">
                        <div class="px-2">
                            <h3 class="service1-card__title text-lg font-semibold text-danger mb-3">
                                {{ $service->title }}
                            </h3>

                            <a class="theme-btn style1"
                                href="{{ asset('storage/' . $service->document) }}"
                                target="_blank"
                                rel="noopener noreferrer">
                                View Document <i class="fa-regular fa-angle-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
