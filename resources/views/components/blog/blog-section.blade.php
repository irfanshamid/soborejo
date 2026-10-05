@props(['blogs' => []])

<section class="blog1 section-padding pb-0 fix">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-12">
                <div class="section-top section-top--wrapper flex-wrap align-items-center gap-2 brBt-1 pb-30 wow img-custom-anim-zoom-out " data-wow-duration="1s" data-wow-delay=".1s">
                    <div class="title-area mb-20  ">
                        <div class="square-icon"></div>
                        <h2 class="section-top__title1">Recent Blogs</h2>
                    </div>
                    <div class="btn-wrapper mb-20">
                        <a class="theme-btn style2 style2-black" href="{{ route('blogs.index') }}">All blogs <i class="fa-regular fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
            {{-- Loop through each blog item --}}
            @foreach ($blogs as $blog)
                <div class="col-md-6 col-lg-4">
                    <div class="blog1-card">
                        <div class="blog1-card__thumb wow img-custom-anim-top" data-wow-duration="1s" data-wow-delay=".1s">
                            <a href="{{ route('blogs.details', $blog->slug) }}">
                                <img src="{{ asset('storage/' . $blog->image) }}" alt="{{ $blog->title }}" loading="lazy">
                            </a>
                        </div>
                        <div class="blog1-card-meta">
                            <div class="blog1-card-meta__user"><i class="fa-regular fa-user"></i> Admin</div>
                            <div class="blog1-card-meta__date"><i class="fa-regular fa-calendar-days"></i>{{ \Carbon\Carbon::parse($blog->date)->translatedFormat('d F Y') }}</div>
                        </div>
                        <a href="{{ route('blogs.details', $blog->slug) }}">
                            <h3 class="blog1-card__title">{{ $blog->title }}</h3>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
