@props(['blog'])

<style>
    .blog-detail-content {
        color: var(--800, #7c7b7b);
        font-family: Rajdhani, sans-serif;
        font-size: 18px;
        font-weight: 500;
        line-height: 1.7;
    }
    .blog-detail-content > *:first-child { margin-top: 0; }
    .blog-detail-content > *:last-child { margin-bottom: 0; }
    .blog-detail-content p,
    .blog-detail-content ul,
    .blog-detail-content ol,
    .blog-detail-content blockquote {
        margin-top: 0;
        margin-bottom: 1rem;
    }
    .blog-detail-content h2,
    .blog-detail-content h3 {
        color: #111;
        margin-top: 1.5rem;
        margin-bottom: 0.75rem;
        line-height: 1.35;
    }
    .blog-detail-content img {
        display: block;
        max-width: 100%;
        height: auto;
        margin: 1.25rem auto;
        border-radius: 8px;
    }
    .blog-detail-content ul,
    .blog-detail-content ol {
        padding-left: 1.25rem;
    }
    @media (max-width: 767px) {
        .blog-detail-content {
            font-size: 16px;
            line-height: 1.6;
        }
        .blog-detail-content p,
        .blog-detail-content ul,
        .blog-detail-content ol,
        .blog-detail-content blockquote {
            margin-bottom: 0.75rem;
        }
        .blog-detail-content h2,
        .blog-detail-content h3 {
            margin-top: 1.1rem;
            margin-bottom: 0.5rem;
        }
        .blog-detail-content img {
            margin: 0.9rem auto;
        }
        .project3-details__content__title {
            margin-top: 1rem !important;
            margin-bottom: 0.75rem !important;
            font-size: 1.5rem;
        }
        .project3.project3-details {
            margin-top: 2.5rem !important;
        }
    }
</style>

<section class="project3 project3-details mt-120 fix">
    <div class="container">
        <div class="row mb-5 justify-content-center">
            <div class="col-lg-12 mb-4 mb-lg-5">
                <div class="project3-details__content">
                    <h2 class="project3-details__content__title mt-30 mb-20">
                        {{ $blog->title }}
                    </h2>
                    <div class="project3-details__thumb mb-30 wow img-custom-anim-top" data-wow-duration="1s" data-wow-delay=".1s">
                        @if ($blog->image)
                            <img
                                style="height: 300px; width: 100%; object-fit: cover"
                                src="{{ asset('storage/' . $blog->image) }}"
                                alt="{{ $blog->title }}"
                            >
                        @endif
                        <div class="blog1-card-meta mt-3">
                            <div class="blog1-card-meta__user"><i class="fa-regular fa-user"></i> Admin</div>
                            <div class="blog1-card-meta__date"><i class="fa-regular fa-calendar-days"></i>{{ \Carbon\Carbon::parse($blog->date)->translatedFormat('d F Y') }}</div>
                        </div>
                    </div>
                    <div class="blog-detail-content">
                        {!! $blog->content !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
