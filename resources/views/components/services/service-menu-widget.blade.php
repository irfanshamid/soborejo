@props(['sideMenuServices'])
<div class="service1-details__menu mb-30">
    <h2 class="service1-details__menu__title fs-15 mb-30">
        Our services
    </h2>

    <ul>
        @foreach ($sideMenuServices as $sideMenuService)
            <li>
                <a href="{{ route('services.details', $sideMenuService->slug) }}">{{ $sideMenuService->title }}</a>
                <span><a href="{{ route('services.details', $sideMenuService->slug) }}" class="text-white"><i class="fa-solid fa-arrow-right"></i></a></span>
            </li>
        @endforeach
    </ul>
</div>
