@props(['marque'])

<div class="marque-section fix" id="our-client">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-12">
                <div class="section-top section-top--wrapper flex-wrap align-items-center brBt-1 pb-30 gap-2 wow img-custom-anim-zoom-out " data-wow-duration="1s" data-wow-delay=".1s">
                    <div class="title-area mb-20  ">
                        <div class="square-icon"></div>
                        <h2 class="section-top__title1">Our Client </h2>
                    </div>
                    <h5 class="marque__title">Trusted by the world’s best</h5>
                </div>
            </div>
            <div class="col-12">
                <div class="marquee-wrapper">
                    <div class="marquee-inner to-left">
                        <ul class="marqee-list d-flex">
                            <li class="marquee-item style-1">
                                @foreach ($marque as $logo)
                                <a href="{{ $logo->url }}" target="_blank">
                                    <span class="text-slider">
                                        <img
                                        width="100"
                                        height="100"
                                        style="object-fit: contain" 
                                        src="{{ asset('storage/' . $logo->image) }}" 
                                        alt="{{ $logo->title ?? 'logo' }}">
                                    </span>
                                </a>
                                @endforeach
                                {{-- Duplicate for seamless loop --}}
                                @foreach ($marque as $logo)
                                    <a href="{{ $logo->url }}" target="_blank">
                                        <span class="text-slider">
                                            <img
                                            width="100"
                                            height="100"
                                            style="object-fit: contain" 
                                            src="{{ asset('storage/' . $logo->image) }}" 
                                            alt="{{ $logo->title ?? 'logo' }}">
                                        </span>
                                    </a>
                                @endforeach
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="marquee-wrapper">
                    <div class="marquee-inner to-right">
                        <ul class="marqee-list d-flex">
                            <li class="marquee-item style-1">
                                @foreach ($marque as $logo)
                                <a href="{{ $logo->url }}" target="_blank">
                                    <span class="text-slider">
                                        <img
                                        width="100"
                                        height="100"
                                        style="object-fit: contain" 
                                        src="{{ asset('storage/' . $logo->image) }}" 
                                        alt="{{ $logo->title ?? 'logo' }}">
                                    </span>
                                </a>
                                @endforeach
                                {{-- Duplicate for seamless loop --}}
                                @foreach ($marque as $logo)
                                    <a href="{{ $logo->url }}" target="_blank">
                                        <span class="text-slider">
                                            <img
                                            width="100"
                                            height="100"
                                            style="object-fit: contain" 
                                            src="{{ asset('storage/' . $logo->image) }}" 
                                            alt="{{ $logo->title ?? 'logo' }}">
                                        </span>
                                    </a>
                                @endforeach
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
