@props(['faqs'])

<section class="faq1 mt-120 ">
    <div class="container">
        <div class="row d-flex justify-content-center g-4">
            <div class="col-lg-5">
                <div class="section-top pb-30 wow img-custom-anim-zoom-out" data-wow-duration="1s" data-wow-delay=".1s">
                    <h6 class="section-top__subtitle text-center">FAQ</h6>
                    <h2 class="section-top__title text-center">Frequently asked questions</h2>
                </div>
            </div>
        </div>
        <div class="row d-flex justify-content-center g-4">
            <div class="col-12">
                <div class="faq-content mt-0">
                    <div class="faq-accordion">
                        <div class="accordion" id="accordion">
                            @foreach ($faqs as $faq)
                                <div class="accordion-item">
                                    <h3 class="accordion-header">
                                        <button class="accordion-button accordion-button--bg collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#{{ $faq->id }}" aria-expanded="false" aria-controls="{{ $faq->id }}">
                                            {{ $faq->question }}
                                        </button>
                                    </h3>
                                    <div id="{{ $faq->id }}" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                        <div class="accordion-body accordion-body--bg">
                                            {{ $faq->answer }}
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 d-flex justify-content-center">
                <a href="#!">
                    <h4 class="faq1__live-link">
                        Talk to our support team live
                        <img src="{{ asset('assets/images/icon/live-link.svg') }}" alt="svg" />
                    </h4>
                </a>
            </div>
        </div>
    </div>
</section>
