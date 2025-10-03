<div class="blog2-tag mb-40">
    <h2 class="blog2__heading">Tags Cloud</h2>
    <div class="blog2-tag__cloud">
        @foreach ($blogTags as $tag)
            <a href="{{ route('blogs.by.tab', $tag) }}">{{ $tag }}</a>
        @endforeach
    </div>
</div>
