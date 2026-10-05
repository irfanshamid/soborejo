@props(['projects'])
<section class="project1 section-padding fix" id="project">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-12">
                <div class="section-top section-top--wrapper flex-wrap align-items-center brBt-1 pb-30 gap-2 wow img-custom-anim-zoom-out " data-wow-duration="1s" data-wow-delay=".1s">
                    <div class="title-area mb-20  ">
                        <div class="square-icon"></div>
                        <h2 class="section-top__title1">Projects</h2>
                    </div>
                </div>
            </div>

            @foreach ($projects as $project)
                <div class="col-lg-12">
                    <div class="project1-card" data-bg-src="{{ asset('storage/' . $project->image) }}">
                        <div class="project1-card-content">
                            <div class="project1-card-content-btn">
                                @foreach ($project->categories as $category)
                                    <div class="project1-card-content-btn__item">{{ $category }}</div>
                                @endforeach
                            </div>
                            <a href="{{ route('projects.details', $project->slug) }}">
                                <h3 class="project1-card-content__title">{{ $project->title }}</h3>
                            </a>
                            <p class="project1-card-content__desc">{!! $project->description !!}</p>
                        </div>
                        <div class="project1-card-link">
                            <div class="project1-card-link__desc">Tap to learn More</div>
                            <a href="{{ route('projects.details', $project->slug) }}" class="project1-card-link__btn">
                                <img class="svg" src="{{ asset('assets/images/icon/arrow-up-right.svg') }}" alt="svg">
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
