@props(['thumbImage' => null, 'author' => null, 'category' => null, 'commentsCount' => 0, 'title', 'shortDescription'])
<div class="blog2-card">
    <div class="blog2-card__thumb wow img-custom-anim-top" data-wow-duration="1s" data-wow-delay=".1s">
        <img src="{{ asset($thumbImage) }}" alt="jpg" />
    </div>
    <div class="blog2-card-meta">
        <div class="blog2-card-meta__user">
            <i class="fa-regular fa-user"></i>{{ $author }}
        </div>
        <div class="blog2-card-meta__date">
            <i class="fa-solid fa-folder-open"></i>{{ $category }}
        </div>
        <div class="blog2-card-meta__date">
            <i class="fa-solid fa-comments"></i>Comments ({{ $commentsCount }})
        </div>
    </div>
    <a href="blog-details.html ">
        <h3 class="blog1-card__title mb-15">
            {{ $title }}
        </h3>
    </a>
    <p>
        {{ $shortDescription }}
    </p>
    {{-- <a class="theme-btn style4 mt-30" href="blog-details.html">Learn More <i class="fa-regular fa-angle-right"></i></a> --}}
</div>
