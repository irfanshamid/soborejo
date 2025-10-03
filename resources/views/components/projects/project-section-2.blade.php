@props(['projects' => []])

<section class="project2 section-padding fix">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-12">
                <div class="section-top section-top--wrapper flex-wrap brBt-1 pb-30 mb-30">
                    <div class="title-area mb-30 mb-lg-0">
                        <h6 class="section-top__subtitle">Recent works</h6>
                        <h2 class="section-top__title">Recent works we did</h2>
                    </div>
                    <div class="btn-wrapper">
                        <a class="theme-btn style2 style2-black" href="{{ route('projects.index') }}">All Projects <i class="fa-regular fa-angle-right"></i></a>
                    </div>
                </div>
            </div>

            @foreach ($projects as $index => $project)
                <div class="{{ $index == 0 ? 'col-lg-12' : 'col-lg-4' }}">
                    <div class="project2-card {{ $index == 0 ? 'project2-card--top' : '' }}" data-bg-src="{{ asset($project->bg_image) }}">
                        <div class="project2-card-content {{ $index == 0 ? 'project2-card--top-content' : '' }}">
                            <div class="project2-card-content-btn {{ $index == 0 ? 'project2-card--top-content-btn' : '' }}">
                                @foreach ($project->categories as $category)
                                    <a href="{{ route('projects.index') }}" class="project2-card-content-btn__item {{ $index == 0 ? 'project2-card--top-content-btn__item' : '' }}">
                                        {{ $category }}
                                    </a>
                                @endforeach
                            </div>
                            <a href="{{ route('projects.details', $project->slug) }}">
                                <h3 class="project2-card-content__title {{ $index == 0 ? 'project2-card--top-content__title' : '' }}">
                                    {{ $project->title }}
                                </h3>
                            </a>
                            <p class="project2-card-content__desc {{ $index == 0 ? 'project2-card--top-content__desc' : '' }}">
                                {{ $project->description }}
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
