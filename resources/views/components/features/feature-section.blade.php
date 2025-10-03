@props(['ourValue'])
@props(['features'])

<section class="feature1 section-padding fix" id="our-value">
    <div class="container">
        <div class="row g-0">
            <div class="col-lg-12">
                <div class="section-top pb-55 wow img-custom-anim-zoom-out" data-wow-duration="1s" data-wow-delay=".1s">
                    <h6 class="section-top__subtitle">We Offer</h6>
                    <h2 class="section-top__title">Our Value</h2>
                </div>
                <div class="feature1-card__desc mb-30">
                    {!! $ourValue->description !!}
                </div>
            </div>
            @foreach ($features as $item)
                <div class="col-lg-3">
                    <div class="feature1-card">
                        <div class="feature1-card__icon">
                            <img 
                            src="{{ asset('storage/' . $item->image) }}" 
                            alt="{{ $item->title ?? 'svg' }}">
                        </div>

                        <h3 class="feature1-card__title">
                            {{ $item->title }}
                        </h3>

                        <div class="feature1-card__desc">
                            {{ $item->description }}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div id="our-client pb-30"></div>
    </div>
</section>
