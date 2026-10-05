@props([
    'title' => '',
    'breadcrumbs' => [],
    'bg' => null,
])

@php
    $banner = $bg?->banner_img
        ? asset('storage/'.$bg->banner_img)
        : asset('assets/images/hero/heroThumb2_1.png');

    $breadcrumbItems = [];
    $position = 1;
    foreach ($breadcrumbs as $label => $url) {
        $item = [
            '@type' => 'ListItem',
            'position' => $position,
            'name' => $label,
        ];
        if (! empty($url)) {
            $item['item'] = $url;
        }
        $breadcrumbItems[] = $item;
        $position++;
    }

    $breadcrumbSchema = [
        '@context' => 'https://schema.org',
        '@type' => 'BreadcrumbList',
        'itemListElement' => $breadcrumbItems,
    ];
@endphp

<!--===== Breadcrumb Section    S T A R T =====-->
<div class="breadcrumb" data-bg-src="{{ $banner }}">
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

<script type="application/ld+json">{!! json_encode($breadcrumbSchema, JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE) !!}</script>
