<form class="submittable-form" action="{{ route('contact.submit') }}" method="POST">
    @csrf
    <div class="contact-wrapper mb-40">
        <div class="row ">
            <div class="col-12 mb-20 wow img-custom-anim-zoom-out" data-wow-duration="1s" data-wow-delay=".1s">
                <span class="contact-subtitle pb-10 d-inline-block">Contact</span>
                <h4 class="section-top__title">Get Touch Here</h4>
            </div>
            <div class="col-md-6 mb-20">
                <input type="text" name="name" id="contact-name" placeholder="Name" required />
                <span class="text-danger error-name"></span>
            </div>
            <div class="col-md-6 mb-20">
                <input type="email" name="email" id="contact-email" placeholder="Email" required />
                <span class="text-danger error-email"></span>
            </div>
            <div class="col-md-12 mb-20">
                <input type="text" name="subject" id="contact-subject" placeholder="Subject" required />
                <span class="text-danger error-subject"></span>
            </div>

            <div class="col-md-12 mb-20">
                <textarea name="message" id="contact-message" cols="30" rows="5" required></textarea>
                <span class="text-danger error-message"></span>
            </div>

            <div class="col-md-12 mt-10">
                <div class="btn-wrapper">
                    <button type="submit" class="theme-btn style5"><span class="submit-button-text" data-loading_text="Loading..." data-default_text="Send Message"> Send Message</span> <span><i class="fa-regular fa-arrow-right"></i></span></button>
                </div>
            </div>
        </div>
    </div>
</form>
