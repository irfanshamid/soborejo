@props(['headline'])

<section class="hero1 fix bg-black">
    <div class="hero1-shape">
        <div class="hero1-shape-1">
            <img class="img-fluid" src="{{ asset("assets/images/hero/hero_shape_1_1.png") }}" alt="">
        </div>
        <div class="hero1-shape-2">
            <img class="img-fluid" src="{{ asset("assets/images/hero/hero_shape_1_2.png") }}" alt="">
        </div>
        <div class="hero1-shape-3">
            <img class="img-fluid" src="{{ asset("assets/images/hero/hero_shape_1_3.png") }}" alt="">
        </div>
        <div class="hero1-shape-4">
            <img class="img-fluid" src="{{ asset("assets/images/hero/hero_shape_1_3.png") }}" alt="">
        </div>
        <div class="hero1-shape-5">
            <img class="img-fluid" src="{{ asset("assets/images/hero/hero_shape_1_2.png") }}" alt="">
        </div>
    </div>
    <div class="container position-relative">
        <div class="row gy-5 align-items-center">
            <div class="col-lg-5">
                <div class="hero1-content">
                    <div class="hero1-content__subtitle ">
                        <span class="hero1-content__subtitle__item">{{ $headline->tagline }}</span>
                    </div>
                    <div class="hero1-content__title wow img-custom-anim-right" data-wow-duration="1.5s" data-wow-delay=".2s">
                        <h1>{{ $headline->title }}</h1>
                    </div>
                    <div class="hero1-content__desc wow img-custom-anim-left" data-wow-duration="1.5s" data-wow-delay=".2s">
                        <p>{{ $headline->description }}</p>
                    </div>
                    <div class="btn-wrapper pt-40 wow img-custom-anim-top" data-wow-duration="1.5s" data-wow-delay=".2s">
                        <a class="theme-btn style1" href="{{ route('projects.index') }}">View Our Works</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="hero1-thumb">

                    <div class="hero1-ellipse">
                        <div class="hero1-ellipse__img ripple">
                            <img src="{{ asset("assets/images/hero/hero1-img.png") }}" alt="">
                        </div>

                    </div>
                    <!-- <div class="hero1-thumb-shape__one ">
                        <img class="img-fluid" 
                            src="{{ asset('storage/' . $headline->banner_img) }}" 
                            alt="{{ $headline->title ?? 'Headline Image' }}">
                        <div class="hero1-client-review">
                            <div class="hero1-client-review__item__1">
                                <h2 class="d-inline-block">800k + </h2> <span class="d-inline-block">Client <br> review</span>
                            </div>
                            <div class="hero1-client-review__item__2">
                                <h2 class="d-inline-block">800k + </h2> <span class="d-inline-block">Client <br>
                                    review</span>
                            </div>
                        </div>
                    </div> -->

                    <div class="hero1-thumb-imges wow img-custom-anim-right" data-wow-duration="1.5s" data-wow-delay=".4s">
                            <img 
                            src="{{ asset('storage/' . $headline->banner_img) }}" 
                            alt="{{ $headline->title ?? 'Headline Image' }}">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
