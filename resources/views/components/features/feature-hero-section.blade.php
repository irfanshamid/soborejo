@props(['services'])


<section class="feature1 feature1-hero ">
    <div class="container">
        <div class="row ">
            @foreach ($services as $service)
                <div class="col-lg-3">
                    <div class="feature1-card br-20 align-items-center text-center wow img-custom-anim-totop" data-wow-duration="1s" data-wow-delay=".1s">
                        <div class="feature1-card__icon">
                            <img 
                                width="30"
                                height="30"
                                style="object-fit: contain"
                                src="{{ asset('storage/' . $service->icon) }}"
                                alt="svg"
                            >
                        </div>
                        <div class="feature1-card__content">
                            <h3 class="feature1-card__title">
                                {{ $service->title }}
                            </h3>

                            <div class="feature1-card__desc">
                                {!! $service->description !!}
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
