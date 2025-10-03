@props(['testimonials'])

<section class="testimonial1 section-padding fix">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-10">
                <div class="swiper overflow-visible global-slider" data-slider-options='{"loop": true,"breakpoints":{"0":{"slidesPerView":1}}}'>
                    <div class="swiper-wrapper">
                        @foreach ($testimonials as $testimonial)
                            <div class="swiper-slide">
                                <div class="testimonial1-card">
                                    <div class="testimonial1-card-thumb">
                                        <div class="testimonial1-card-thumb__one">
                                            <img src="{{ asset($testimonial->image) }}" alt="client image">
                                        </div>
                                        <div class="testimonial1-card-thumb__icon">
                                            <img src="{{ asset($testimonial->icon) }}" alt="quote icon">
                                        </div>
                                    </div>
                                    <div class="testimonial1-card-content">
                                        <h4 class="testimonial1-card-content__desc">
                                            {{-- Conditionally render link if link_route exists --}}
                                            "{{ $testimonial->quote }}"
                                        </h4>
                                        <div class="testimonial1-card-content__star">
                                            <ul>
                                                @for ($i = 0; $i < $testimonial->rating; $i++)
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                @endfor
                                            </ul>
                                        </div>
                                        <h3 class="testimonial1-card-content__name">{{ $testimonial->name }}</h3>
                                        <div class="testimonial1-card-content__role">{{ $testimonial->role }}</div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
