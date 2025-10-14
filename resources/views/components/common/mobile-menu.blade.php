<div class="mobile-offcanvas">
    <div class="mobile-offcanvas-wrapper">
        <div class="mobile-offcanvas-header mb-90">
            <a href="{{ route('home') }}" class="mobile-offcanvas-logo">
                <img
                    class="img-fluid"
                    src="{{ asset('storage/' . $settings->image) }}" 
                    alt="brand"
                >
            </a>
            <div class="mobile-offcanvas-close">
                <button><i class="fa-solid fa-xmark"></i></button>
            </div>
        </div>

        <div class="mobile-offcanvas-menu d-xl-none d-lg-none d-md-block d-block">
            <nav>

            </nav>
        </div>

        <div class="mobile-offcanvas-info mb-50">
            <h4 class="mobile-offcanvas-sm-title">Information</h4>
            <div>{{ $settings->phone }}</div>
            <div> {{ $settings->email }}</div>
            <div>{{ $settings->address }}</div>
        </div>
        <!-- <div class="mobile-offcanvas-social">
            <h4 class="mobile-offcanvas-sm-title">Follow Us</h4>
            <a href=""><i class="fa-brands fa-facebook"></i></a>
            <a href=""><i class="fa-brands fa-instagram"></i></a>
            <a href=""><i class="fa-brands fa-youtube"></i></a>
            <a href=""><i class="fa-brands fa-linkedin"></i></a>
        </div> -->
    </div>
</div>
