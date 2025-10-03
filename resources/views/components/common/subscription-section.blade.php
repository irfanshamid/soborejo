<section class="subscribe1 section-padding pb-0 fix bg-black">
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <div class="subscribe1-wrapper-content">
                    <div class="subscribe1-wrapper-content__text">
                        <h2>Subscribe & <span>Join</span> <br> With Us Now !</h2>
                        <p>Get free suggestion for building the future</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 d-flex align-items-end justify-content-xl-end">
                <form class="submittable-form" action="{{ route('subscription.submit') }}" method="POST">
                    @csrf
                    <div class="row g-4">
                        <div class="col-12 col-sm-8">
                            <div class="form__group2">
                                <input type="email" name="email" placeholder="Your email address here..." required>
                                <span class="error text-danger error-email"></span>
                            </div>
                        </div>
                        <div class="col-12 col-sm-4 d-flex justify-content-sm-end">
                            <div class="btn-wrapper">
                                <button type="submit" class="subscribe1-btn"><span class="submit-button-text" data-loading_text="Loading..." data-default_text="Subscribe">Subscribe</span> <span><i class="fa-regular fa-arrow-right"></i></span></button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="subscribe1__shape">
                <img src="{{ asset('assets/images/shape/subscribe-shape1_1.png') }}" alt="png">
            </div>
        </div>
    </div>
</section>
