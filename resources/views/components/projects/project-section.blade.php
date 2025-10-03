@props(['projects'])
<section class="project1 section-padding fix" id="project">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-12">
                <div class="section-top section-top--wrapper flex-wrap align-items-center brBt-1 pb-30 gap-2 wow img-custom-anim-zoom-out " data-wow-duration="1s" data-wow-delay=".1s">
                    <div class="title-area mb-20  ">
                        <div class="square-icon"></div>
                        <h2 class="section-top__title1">Recent projects </h2>
                    </div>
                    <div class="btn-wrapper mb-20">
                        <a class="theme-btn style2 style2-black" href="{{ route('projects.index') }}">All projects <i class="fa-regular fa-angle-right"></i></a>
                    </div>
                </div>
            </div>

            @foreach ($projects as $project)
                <div class="col-lg-4">
                    <a href="{{ route('projects.details', $project->id) }}">
                        <div class="project2-card" data-bg-src="{{ asset('storage/' . $project->image) }}">
                            <div class="project1-card-content flex-column">
                                <h3 class="project1-card-content__title">{{ $project->title }}</h3>
                                <div class="project1-card-content-btn">
                                    @foreach ($project->categories as $category)
                                    <div class="project1-card-content-btn__item">{{ $category }}</div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</section>
