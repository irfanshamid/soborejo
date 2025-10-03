@props(['faqs'])

<section class="faq1 section-padding fix">
    <div class="container">
        <div class="row d-flex justify-content-center g-4">
            <div class="col-lg-12">
                <div class="section-top section-top--wrapper">
                    <div class="title-area">
                        <div class="square-icon"></div>
                        <h2 class="section-top__title1">Common faq</h2>
                    </div>
                </div>
            </div>
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
            <div class="col-12">
                <a href="#!">
                    <h4 class="faq1__live-link">Talk to our support team live <img src="{{ asset('assets/images/icon/live-link.svg') }}" alt="svg"></h4>
                </a>
            </div>
        </div>
    </div>
</section>
