
<header>
    <div id="header-area" class="header-area transparent-header {{ isset($headerStyle) ? $headerStyle : 'py-14' }}">
        <div class="container ">
            <div class="{{ isset($headerWrapper) && $headerWrapper == true ? 'header-wrapper' : '' }}">
                <div class="row align-items-center gx-0">
                    <div class="col-xl-2  col-lg-2 col-6">
                        <a href="{{ route('home') }}" class="tp-logo">
                            <img
                                class="img-fluid"
                                src="{{ asset('storage/' . $settings->logo) }}" 
                                alt="brand"
                            >
                        </a>
                    </div>
                    <div class="col-xl-8 col-lg-8  d-none d-lg-block ">
                        <div class="d-flex  justify-content-center align-items-center">
                            <div class="main-menu {{ $headerMenuStyle ?? '' }} d-none d-lg-block">
                                <nav class="mobile-menu-active">
                                    <ul>
                                        <li><a href="{{ route('home') }}#company">About Us</a></li>
                                        <li><a href="{{ route('home') }}#our-value">Our Value</a></li>
                                        <li><a href="{{ route('home') }}#legal-document">Legal</a></li>
                                        <li><a href="{{ route('home') }}#scope-of-work">Scope</a></li>
                                        <li><a href="{{ route('home') }}#our-client">Our Client</a></li>
                                        <li><a href="{{ route('home') }}#project">Project</a></li>
                                        <li><a href="{{ route('home') }}#blog">Blog</a></li>
                                        <!-- <li><a href="{{ route('projects.index') }}">Projects</a>
                                            <div class="menu-icon">
                                                <i class="flaticon-diagonal"></i>
                                            </div>
                                            <ul class="sub-menu">
                                                <li><a href="{{ route('projects.index') }}">Projects</a></li>
                                                <li><a href="{{ route('projects.details', 'munber-fielder-building') }}">Project details</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#!">Pages</a>
                                            <div class="menu-icon">
                                                <i class="flaticon-diagonal"></i>
                                            </div>
                                            <ul class="sub-menu">
                                                <li><a href="{{ route('about.index') }}">About</a></li>
                                                <li><a href="{{ route('projects.index') }}">portfolio</a></li>
                                                <li><a href="{{ route('services.index') }}">service</a></li>
                                                <li><a href="{{ route('contact.index') }}">contact</a></li>
                                                <li><a href="404">404</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="{{ route('blogs.index') }}">blog</a>
                                            <div class="menu-icon">
                                                <i class="flaticon-diagonal"></i>
                                            </div>
                                            <ul class="sub-menu">
                                                <li><a href="{{ route('blogs.index') }}">Blog</a></li>
                                                <li><a href="{{ route('blogs.details', '15-tips-for-better-welding-in-big-buildings-outdoors') }}">Blog details</a></li>
                                            </ul>
                                        </li> -->
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-6 ">
                        <div class="header {{ $btnAreaStyle ?? 'header-home-3' }}  justify-content-end">
                            <div class="header-menu  d-block d-lg-none">
                                <button><i class="fa-solid fa-bars"></i></button>
                            </div>

                            <div class=" bg-transparent d-lg-inline-block d-none">
                                <div class="btn-wrapper ">
                                    <a class="theme-btn {{ $btnStyle ?? 'style5' }}" href="#contact">Contact us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
