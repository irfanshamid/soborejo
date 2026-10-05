<footer class="footer2 section-padding fix pb-30 bg-black">
    <div class="footer2-wrapper">
        <div class="container">
            <div class="row gy-5">
                <div class="col-md-6 col-lg-4">
                    <div class="footer2-wrapper-logoInfo">
                        <div class="footer2-wrapper-logoInfo__logo">
                           <a href="{{ route('home') }}" class="tp-logo">
                                <img
                                    class="img-fluid"
                                    src="{{ asset('storage/' . ($settings->logo ?? $settings->favicon)) }}"
                                    alt="{{ $settings->title ?? 'PT Soborejo' }}"
                                    loading="lazy"
                                >
                            </a>
                        </div>
                        <p class="footer2-wrapper-logoInfo__desc">
                            Karawaci Office Park - Ruko Pinangsia, Jalan Pintu Besar Blok D No. 36, Lippo Karawaci, Panunggangan Barat, Tangerang, RT.001/RW.009, Panunggangan Bar., Kec. Cibodas, Kota Tangerang, Banten 15811
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="footer2-wrapper-service">
                        <h5 class="footer2-wrapper-service__title">Links</h5>
                        <ul class="footer2-wrapper-service-list">
                            <li class="footer2-wrapper-service-list__item"><a href="{{ route('home') }}#company">About Us</a></li>
                            <li class="footer2-wrapper-service-list__item"><a href="{{ route('home') }}#company">Our Value</a></li>
                            <li class="footer2-wrapper-service-list__item"><a href="{{ route('home') }}#scope-of-work">Scope of Work</a></li>
                            <li class="footer2-wrapper-service-list__item"><a href="{{ route('services.index')}}">Legal Document</a></li>
                            <li class="footer2-wrapper-service-list__item"><a href="{{ route('projects.index')}}">Project</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="footer2-wrapper-contact">
                        <h5 class="footer2-wrapper-contact__title">Contact</h5>
                        <ul class="footer2-wrapper-contact-list">
                            <li class="footer2-wrapper-contact-list__item">
                                <a href="tel:{{ $settings->phone }}"><span><i class="fa-solid fa-phone"></i></span>{{ $settings->phone }}</a>
                            </li>
                            <li class="footer2-wrapper-contact-list__item">
                                <a href="mailto:{{ $settings->email }}"><span><i class="fa-solid fa-envelope"></i></span> {{ $settings->email }}</a>
                            </li>
                            <li class="footer2-wrapper-contact-list__item">{{ $settings->address }}</li>
                        </ul>

                        
<div class="footer2-wrapper-logoInfo-social">
    <div class="footer2-wrapper-logoInfo-social__item">
        <a href="https://tiktok.com/@srconstruction.official" target="_blank" rel="noopener noreferrer">
            <img
                src="https://cdn.simpleicons.org/tiktok/white"
                alt="TikTok"
                width="22"
                height="22"
            >
        </a>
    </div>

    <div class="footer2-wrapper-logoInfo-social__item">
        <a href="https://instagram.com/srconstruction.official" target="_blank" rel="noopener noreferrer">
            <img
                src="https://cdn.simpleicons.org/instagram/white"
                alt="Instagram"
                width="22"
                height="22"
            >
        </a>
    </div>
</div>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12 pt-80">
                    <div class="footer2-bottom">
                        <a href="{{ route('sitemap') }}">
                            <p>
                                © {{ $settings->title }} {{ date('Y') }} | All Rights Reserved
                            </p>
                        </a>
                        <div class="footer1-bottom__links">
                            <a href="{{ route('sitemap') }}">Sitemap</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
