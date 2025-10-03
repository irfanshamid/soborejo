@props(['recentPosts' => []])
<div class="blog2__recent mb-30">
    <div class="blog2-recent">
        <h2 class=" blog2__heading"> Recent post </h2>
        <!-- blog start -->
        <div class="row">
            @foreach ($recentPosts as $post)
                <div class=" col-md-12">
                    <div class="blog2-recent__item   mb-30">
                        <div class="blog2-recent__img mr-15 ">
                            <a href="{{ route('blogs.details', $post->slug) }}"><img src="{{ asset($post?->small_image) }}" alt="{{ $post->title }}"></a>
                        </div>
                        <div class="blog2-recent__text">
                            <span>
                                <i class="fa-solid fa-calendar-days"></i>
                                {{ $post->published_date }}
                            </span>
                            <h3 class="fs-15 mt-10 blog2-recent__text-title">
                                <a href="{{ route('blogs.details', $post->slug) }}">{{ $post->title }}</a>
                            </h3>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
