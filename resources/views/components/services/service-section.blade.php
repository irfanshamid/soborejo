@props(['scope'])
@props(['services'])

<section class="service1 section-padding fix bg-black" id="legal-document">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-12">
                <div class="brBt-1">
                    <div class="section-top section-top--wrapper pb-30 gap-2 flex-wrap wow img-custom-anim-zoom-out  " data-wow-duration="1.5s" data-wow-delay=".2s">
                        <div class="title-area mb-30">
                            <div class="square-icon"></div>
                            <h2 class="section-top__title2">Legal Documents</h2>
                        </div>
                        <div class="btn-wrapper mb-30">
                            <a class="theme-btn style2" href="{{ route('services.index') }}">All Documents <i class="fa-regular fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            @foreach ($services as $service)
                <div class="col-lg-6">
                    <div class="service1-card wow img-custom-anim-totop" data-wow-duration="1s" data-wow-delay=".1s">
                        <h3 class="service1-card__title">{{ $service->title }}</h3>
                        {{-- Link for "Learn More" using slug --}}
                        <a class="theme-btn style1"
                            href="{{ asset('storage/' . $service->document) }}"
                            target="_blank"
                            rel="noopener noreferrer">
                            View Document <i class="fa-regular fa-angle-right"></i>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
