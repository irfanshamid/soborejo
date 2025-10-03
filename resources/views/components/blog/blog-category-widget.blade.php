@props(['blogCategories' => []])
<div class="blog2__menu mb-30">
    <h4 class="blog2__heading">Categories</h4>
    <ul>
        @foreach ($blogCategories as $category)
            <li>
                <a href="{{ route('blogs.by.category', $category->name) }}">{{ $category->name }}</a>
            </li>
        @endforeach
    </ul>
</div>
