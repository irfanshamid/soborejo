@props(['blogs' => []])
<div class="row g-4">
    @if (count((array) $blogs) > 0)
        @foreach ($blogs as $post)
            <div class="col-md-12">
                <div class="blog2-card @if ($loop->last ?? false) pb-0 @endif">
                    <div class="blog2-card__thumb wow img-custom-anim-top" data-wow-duration="1.0s" data-wow-delay=".1s">
                        <img src="{{ asset($post->preview_image) }}" alt="{{ $post->title }}">
                    </div>
                    <div class="blog2-card-meta">
                        <div class="blog2-card-meta__user "><i class="fa-regular fa-user"></i>{{ $post->author }}</div>
                        <div class="blog2-card-meta__date"><i class="fa-solid fa-folder-open"></i>{{ $post->category }}</div>
                        <div class="blog2-card-meta__date"><i class="fa-solid fa-comments"></i>Comments ({{ $post->comments_count }})</div>
                        <div class="blog2-card-meta__date"><i class="fa-solid fa-calendar-alt"></i>{{ $post->published_date }}</div>
                    </div>
                    <a href="{{ route('blogs.details', $post->slug) }}">
                        <h3 class="blog1-card__title mb-15">{{ $post->title }}</h3>
                    </a>
                    <p>{{ $post->description }}</p>
                    <a class="theme-btn style4 mt-30" href="{{ route('blogs.details', $post->slug) }}">
                        Learn More <i class="fa-regular fa-angle-right"></i>
                    </a>
                </div>
            </div>
        @endforeach
    @else
        <div class="col-md-12">
            <div class="blog2-card"> {{-- Add pb-0 if it's the last item --}}
                <h3 class="blog1-card__title mb-15">Blog Not Found</h3>
                <a class="theme-btn style3 mt-30 text-dark" href="{{ route('blogs.index') }}">
                    Blog List
                </a>
            </div>
        </div>
    @endif
</div>
