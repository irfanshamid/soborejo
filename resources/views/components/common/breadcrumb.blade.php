<!--===== Breadcrumb Section    S T A R T =====-->
<div class="breadcrumb" data-bg-src="{{ asset('storage/' . $bg->banner_img) }}">
    <div class="container">
        <div class="breadcrumb-heading">
            <h1>{{ $title }}</h1>
            <ul class="breadcrumb-heading__items">
                @foreach ($breadcrumbs as $label => $url)
                    @if ($loop->last)
                        <li>
                            <i class="fas fa-chevron-right"></i>
                        </li>
                        <li>{{ $label }}</li>
                    @else
                        <li>
                            <a href="{{ $url }}">{{ $label }}</a>
                        </li>
                    @endif
                @endforeach
            </ul>
        </div>
    </div>
</div>
