@props(['blog'])

<section class="project3 project3-details mt-120 fix">
    <div class="container">
        <div class="row mb-5 justify-content-center">
            <div class="col-lg-12 mb-5">
                <div class="project3-details__content">
                    <h2 class="project3-details__content__title mt-30 mb-20">
                        {{ $blog->title }}
                    </h2>
                    <div class="project3-details__thumb mb-40 wow img-custom-anim-top" data-wow-duration="1s" data-wow-delay=".1s">
                        <img 
                            style="height: 300px; width: 100%; object-fit: cover"
                            src="{{ asset('storage/' . $blog->image) }}"
                            alt="{{ $blog->title }} Thumbnail"
                        >
                        <div class="blog1-card-meta mt-3">
                            <div class="blog1-card-meta__user"><i class="fa-regular fa-user"></i> Admin</div>
                            <div class="blog1-card-meta__date"><i class="fa-regular fa-calendar-days"></i>{{ \Carbon\Carbon::parse($blog->date)->translatedFormat('d F Y') }}</div>
                        </div>
                    </div>
                    <p class="mb-5">{!! $blog->content !!}</p>
                </div>
            </div>
        </div>
    </div>
</section>
