@props(['tags' => []])
<div class="blog2__tags mb-40">
    <div class="row align-items-center justify-content-between">
        <div class="col-lg-7">
            <div class="blog2__tags__item mb-30 mb-lg-0">
                <span class="fs-15">Keyword:</span>
                @foreach ($tags as $tag)
                    <a href="{{ route('blogs.index') }}">{{ $tag }}</a>
                @endforeach
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
