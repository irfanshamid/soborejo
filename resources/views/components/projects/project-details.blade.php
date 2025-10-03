@props(['project'])

<section class="project3 project3-details mt-120 fix">
    <div class="container">
        <div class="row mb-5 justify-content-center">
            <div class="col-lg-12 mb-5">
                <div class="project3-details__content">
                    <h2 class="project3-details__content__title mt-30 mb-20">
                        {{ $project->title }}
                    </h2>
                    <div class="project3-details__content__btn mb-5">
                        @foreach ($project->categories as $category)
                        <div class="project3-details__content__btn__item">{{ $category }}</div>
                        @endforeach
                    </div>
                    <div class="project3-details__thumb mb-40 wow img-custom-anim-top" data-wow-duration="1s" data-wow-delay=".1s">
                        <img 
                            style="height: 300px; width: 100%; object-fit: cover"
                            src="{{ asset('storage/' . $project->image) }}"
                            alt="{{ $project->title }} Thumbnail"
                        >
                    </div>
                    <p class="mb-5">{!! $project->description !!}</p>
                    <p class="mb-5">{!! $project->content !!}</p>
                </div>
            </div>
        </div>
    </div>
</section>
