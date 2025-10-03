<!--===== Marque level 1 =====-->
<div class="marque {{ isset($footerMarqueTopMargin) ? $footerMarqueTopMargin : '' }}">
    <div class="marque-section {{ isset($footerMarqueLevelOneStyle) ? $footerMarqueLevelOneStyle : 'marque-section-2' }}">
        <div class="row ">
            <div class="col-12">
                <div class="marquee-wrapper">
                    <div class="marquee-inner to-left">
                        <ul class="marqee-list d-flex">
                            <li class="marquee-item style-1">
                                <span>Construction SERVICE</span>
                                <span><img src="{{ asset('assets/images/logo/slider-logo-black.png') }}" alt=""></span>
                                <span>UNLEASE THE Construction </span>
                                <span><img src="{{ asset('assets/images/logo/slider-logo-black.png') }}" alt=""></span>
                                <span>Construction helper </span>
                                <span><img src="{{ asset('assets/images/logo/slider-logo-black.png') }}" alt=""></span>
                                <span>Construction SERVICE</span>
                                <span><img src="{{ asset('assets/images/logo/slider-logo-black.png') }}" alt=""></span>
                                <span>UNLEASE THE Construction </span>
                                <span><img src="{{ asset('assets/images/logo/slider-logo-black.png') }}" alt=""></span>
                                <span>Construction helper </span>
                                <span><img src="{{ asset('assets/images/logo/slider-logo-black.png') }}" alt=""></span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--===== Marque level 2 =====-->
<div class="marque">
    <div class="{{ isset($footerMarqueLevelTwoStyle) ? $footerMarqueLevelTwoStyle : 'marque-section-3' }} fix">
        <div class="row gx-4">
            <div class="col-12">
                <div class="marquee-wrapper ">
                    <div class="marquee-inner to-right">
                        <ul class="marqee-list d-flex">
                            <li class="marquee-item style-1">
                                <span>Construction SERVICE</span>
                                <span><img src="{{ asset('assets/images/logo/slider-logo.png') }}" alt=""></span>
                                <span>UNLEASE THE Construction </span>
                                <span><img src="{{ asset('assets/images/logo/slider-logo.png') }}" alt=""></span>
                                <span>Construction helper </span>
                                <span><img src="{{ asset('assets/images/logo/slider-logo.png') }}" alt=""></span>
                                <span>Construction SERVICE</span>
                                <span><img src="{{ asset('assets/images/logo/slider-logo.png') }}" alt=""></span>
                                <span>UNLEASE THE Construction </span>
                                <span><img src="{{ asset('assets/images/logo/slider-logo.png') }}" alt=""></span>
                                <span>Construction helper </span>
                                <span><img src="{{ asset('assets/images/logo/slider-logo.png') }}" alt=""></span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- @props(['data', 'marginTop', 'levelOneStyle', 'levelTwoStyle'])

<div class="marque {{ isset($marginTop) ? $marginTop : '' }}">
    <div class="marque-section {{ $levelOneStyle ?? 'marque-section-2' }}">
        <div class="row">
            <div class="col-12">
                <div class="marquee-wrapper">
                    <div class="marquee-inner {{ $data->level1->animation_direction ?? 'to-left' }}">
                        <ul class="marqee-list d-flex">
                            <li class="marquee-item style-1">
                                @foreach ($data->level1->items as $item)
                                    @if ($item->type == 'text')
                                        <span>{{ $item->content }}</span>
                                    @elseif ($item->type == 'image')
                                        <span><img src="{{ asset($item->path) }}" alt=""></span>
                                    @endif
                                @endforeach
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="marque">
    <div class="{{ $levelTwoStyle ?? 'marque-section-3' }} fix">
        <div class="row gx-4">
            <div class="col-12">
                <div class="marquee-wrapper">
                    <div class="marquee-inner {{ $data->level2->animation_direction ?? 'to-right' }}">
                        <ul class="marqee-list d-flex">
                            <li class="marquee-item style-1">
                                @foreach ($data->level2->items as $item)
                                    @if ($item->type == 'text')
                                        <span>{{ $item->content }}</span>
                                    @elseif ($item->type == 'image')
                                        <span><img src="{{ asset($item->path) }}" alt=""></span>
                                    @endif
                                @endforeach
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
