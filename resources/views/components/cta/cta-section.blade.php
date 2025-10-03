@props(['contact'])

<section class="cta1 section-padding pb-0 fix" id="contact">
    <div class="container">
        <div class="row g-4">
            <div class="col-md-6 col-xl-4">
                <h2 class="cta1__title wow img-custom-anim-left " data-wow-duration="1s" data-wow-delay=".1s">Want to Start a Project?</h2>
                <div class="btn-wrapper">
                    <a href="mailto:{{ $settings->email }}" 
                    class="theme-btn style6 wow img-custom-anim-top" 
                    data-wow-duration="1s" data-wow-delay=".1s">
                        Contact Us
                    </a>

                </div>
            </div>
            <div class="col-md-6 col-xl-8">
                <div class="cta1__shape">
                    <img src="{{ asset("assets/images/shape/cta-shape1_1.png") }}" alt="png">
                </div>
            </div>
        </div>
    </div>
</section>
