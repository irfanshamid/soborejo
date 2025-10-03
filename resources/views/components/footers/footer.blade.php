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
                                    src="{{ asset('storage/' . $settings->image) }}" 
                                    alt="brand"
                                >
                            </a>
                        </div>
                        <p class="footer2-wrapper-logoInfo__desc">
                            Many desktop ublishing packages web page editors no Lorem Ipsum a default model text
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
                <div class="col-md-6 col-lg-3">
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
                                <a href="#!" target="_blank" rel="noopener noreferrer">
                                    <i class="fa-brands fa-facebook-f"></i>
                                </a>
                            </div>
                            <div class="footer2-wrapper-logoInfo-social__item">
                                <a href="#!" target="_blank" rel="noopener noreferrer">
                                    <i class="fa-brands fa-linkedin-in"></i>
                                </a>
                            </div>
                            <div class="footer2-wrapper-logoInfo-social__item">
                                <a href="#!" target="_blank" rel="noopener noreferrer">
                                    <i class="fa-brands fa-instagram"></i>
                                </a>
                            </div>
                            <div class="footer2-wrapper-logoInfo-social__item">
                                <a href="#!" target="_blank" rel="noopener noreferrer">
                                    <img class="svg" src="{{ asset('assets/images/icon/twitter.svg') }}" alt="Twitter icon">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12 pt-80">
                    <div class="footer2-bottom">
                        <a href="#!">
                            <p>
                                © {{ $settings->title }} {{ date('Y') }} | All Rights Reserved
                            </p>
                        </a>
                        <!-- <div class="footer1-bottom__links">
                            <a href="{{ route('contact.index') }}">Privacy<span class="ps-4">|</span></a>
                            <a href="{{ route('contact.index') }}">Terms<span class="ps-4">|</span></a>
                            <a href="{{ route('contact.index') }}">Sitemap<span class="ps-4">|</span></a>
                            <a href="{{ route('contact.index') }}">Help</a>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
