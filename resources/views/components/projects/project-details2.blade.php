@props(['project'])

<section class="project3 project3-details mt-120 fix">
    <div class="container">
        <div class="project3-details__thumb mb-40 wow img-custom-anim-top" data-wow-duration="1s" data-wow-delay=".1s">
            <img src="{{ asset($project->image) }}" alt="{{ $project->title }} Thumbnail">
        </div>
        <div class="row">
            <div class="col-lg-8">
                <div class="project3-details__content">
                    <div class="project3-details__content__btn">
                        @foreach ($project->categories as $category)
                            <div class="project3-details__content__btn__item">{{ $category }}</div>
                        @endforeach
                    </div>
                    <h2 class="project3-details__content__title mt-30 mb-20">
                        {{ $project->title }}
                    </h2>
                    <p>{{ $project->description }}</p>

                    <div class="project3-details__card mt-40">
                        <div class="row g-4">
                            <div class="col-lg-6">
                                <div class="project3-details__card">
                                    <div class="project3-details__card__icon mb-25">
                                        <img src="{{ asset('assets/images/service/inner-pages-icon-5.png') }}" alt="png">
                                    </div>

                                    <a href="{{ route('services.details', 'faster-building') }}">
                                        <h3 class="project3-details__card__title mb-20">Faster building</h3>
                                    </a>
                                    <p class="project3-details__card__desc">It is a long established fact that a
                                        reader
                                        will be distracted
                                        by the readable content of a page when looking at its layout. Many
                                    </p>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="project3-details__card">
                                    <div class="project3-details__card__icon mb-25">
                                        <img src="{{ asset("assets/images/service/inner-pages-icon-4.png") }}" alt="png">
                                    </div>

                                    <a href="{{ route('services.details', 'faster-building') }}">
                                        <h3 class="project3-details__card__title mb-20">Faster building</h3>
                                    </a>
                                    <p class="project3-details__card__desc">It is a long established fact that a
                                        reader
                                        will be distracted
                                        by the readable content of a page when looking at its layout. Many
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="project3-details__rating p-40">
                    <div class="row gx-0">
                        <div class="col-md-6">
                            <div class="project3-details__rating__item">
                                <h5 class="fs-15 mb-10">Category :</h5>
                                <span class="body-color">
                                    @foreach ($project->categories as $category)
                                        {{ $category }},
                                    @endforeach
                                </span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="project3-details__rating__item">
                                <h5 class="fs-15 mb-10">Customer :</h5>
                                <span class="body-color">Hossen Mia</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="project3-details__rating__item">
                                <h5 class="fs-15 mb-10">Start date :</h5>
                                <span class="body-color">23 January 2021</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="project3-details__rating__item">
                                <h5 class="fs-15 mb-10">End date :</h5>
                                <span class="body-color">22 September 2023</span>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="project3-details__rating__stars d-flex align-items-center">
                                <h5 class="fs-15 mr-10">Rating :</h5>
                                <span><i class="fa-solid fa-star"></i></span>
                                <span><i class="fa-solid fa-star"></i></span>
                                <span><i class="fa-solid fa-star"></i></span>
                                <span><i class="fa-solid fa-star"></i></span>
                                <span><i class="fa-solid fa-star"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-40">
            <div class="col-lg-6 mb-30 mb-lg-0 wow img-custom-anim-top" data-wow-duration="1.5s" data-wow-delay=".2s">
                <img src="{{ asset('assets/images/project/project-thumb3_1.jp') }}g" alt="">
            </div>
            <div class="col-lg-6 mb-30 mb-lg-0 wow img-custom-anim-top" data-wow-duration="1.5s" data-wow-delay=".3s">
                <img src="{{ asset('assets/images/project/project-thumb3_2.jpg') }}" alt="">
            </div>
        </div>
    </div>
</section>
