@props(['post' => [], 'prevSlug' => null, 'nextSlug' => null])
<div class="blog2-card">
    <div class="blog2-card__thumb wow img-custom-anim-top" data-wow-duration="1s" data-wow-delay=".1s">
        <img src="{{ asset($post->preview_image) }}" alt="jpg" />
    </div>
    <div class="blog2-card-meta">
        <div class="blog2-card-meta__user">
            <i class="fa-regular fa-user"></i>{{ $post->author }}
        </div>
        <div class="blog2-card-meta__date">
            <i class="fa-solid fa-folder-open"></i>{{ $post->category }}
        </div>
        <div class="blog2-card-meta__date">
            <i class="fa-solid fa-comments"></i>Comments ({{ $post->comments_count }})
        </div>
    </div>
    <h3 class="blog1-card__title mb-15">
        {{ $post->title }}
    </h3>
    <p>
        {{ $post->description }}
    </p>
</div>

<div class="blog2-details mb-40">
    <div class="blog2-details-qoute mb-30">
        <p>
            Aliquam eros justo, posuere loborti viverra laoreet matti
            ullamcorper posuere vive rra .Aliquam eros justo, posuere
            lobortis, viverra laoreet augue mattis fermentu m ul amcorper
            viverra laoreet.
        </p>

        <div class="d-flex align-items-center justify-content-between mt-35">
            <h4 class="fs-15 blog2-details-qoute__name">Mark wood</h4>
            <div class="blog2-details-qoute__icon">
                <i class="fa-solid fa-quote-right"></i>
            </div>
        </div>
    </div>

    <p>
        Web designing in a powerful way of just not an only professions,
        however, in a passion for our Company. We have to a tendency to
        believe the idea that smart looking of any website is the first
        impression on visitors.Web designing in a powerful way
    </p>

    <div class="row mt-30">
        <div class="col-md-6 mb-30 mb-lg-0 wow img-custom-anim-top" data-wow-duration="1s" data-wow-delay=".1s">
            <img src="{{ asset('assets/images/blog/blog-details-thumb-01.jpg') }}" alt="" />
        </div>
        <div class="col-md-6 mb-lg-0 wow img-custom-anim-top" data-wow-duration="1s" data-wow-delay=".1s">
            <img src="{{ asset('assets/images/blog/blog-details-thumb-02.jpg') }}" alt="" />
        </div>
    </div>
</div>

<div class="blog2__tags mb-40">
    <div class="row align-items-center justify-content-between">
        <div class="col-lg-7">
            <div class="blog2__tags__item mb-30 mb-lg-0">
                <span class="fs-15">Keyword:</span>
                <a href="">Interiour</a>
                <a href="">Cement mixing</a>
                <a href="">Fast Building</a>
            </div>
        </div>
        <div class="col-lg-5">
            <div class="blog2__tags__social text-start text-md-end">
                <a href="">
                    <i class="fa-brands fa-facebook"></i>
                </a>
                <a href="">
                    <i class="fa-brands fa-twitter"></i>
                </a>
                <a href="">
                    <i class="fa-brands fa-instagram"></i>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="blog2-navigation mb-40">
    <div class="row align-items-center justify-content-between">
        <div class="col-6 col-md-6">
            <div class="blog2-navigation__left">
                <div class="blog2-navigation__left__icon">
                    <a href="{{ route('blogs.details', $prevSlug) }}"><i class="fa-solid fa-arrow-left"></i></a>
                </div>
                <div class="blog2-navigation__left__text d-none d-md-block">
                    <a href="{{ route('blogs.details', $prevSlug) }}">Previous post</a> <br />
                    <span class="fs-15">your peace of mind</span>
                </div>
            </div>
        </div>
        <div class="col-6 col-md-6">
            <div class="blog2-navigation__right text-end">
                <div class="blog2-navigation__left__text d-none d-md-block">
                    <a href="{{ route('blogs.details', $nextSlug) }}">Next post</a> <br />
                    <span class="fs-15">your peace of mind</span>
                </div>
                <div class="blog2-navigation__left__icon">
                    <a href="{{ route('blogs.details', $nextSlug) }}"><i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>

<!--===== Blog Comments  =====-->
<x-blog.blog-comments />

<!--===== Blog Comment From Area  =====-->
<div class="blog2-contact">
    <!-- contact form start -->
    <x-contact.contact-form />
    <!-- contact form end -->
</div>
