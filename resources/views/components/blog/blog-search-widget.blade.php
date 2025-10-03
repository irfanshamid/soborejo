@props(['keyword' => null])
<div class="blog2-search mb-30">
    <h3 class="blog2__heading ">Search here </h3>
    <form action="{{ route('blogs.search') }}" method="GET">
        <div class="blog2-search__box">
            <input type="text" name="keyword" id="keyword" placeholder="Search Keywords" value="{{ isset($keyword) ? $keyword : null }}" required>
            <button type="submit"><i class="fa-solid fa-arrow-right"></i></button>
        </div>
    </form>
</div>
