<form class="submittable-form" action="{{ route('contact.submit') }}" method="POST">
    @csrf
    <div class="blog2-contact__wrapper">
        <div class="row gy-4">
            <div class="col-12">
                <h4 class="blog2-contact__title">Get in Touch</h4>
            </div>
            <div class="col-md-6">
                <label for="contact-name">Your Name</label>
                <input type="text" name="name" id="contact-name" placeholder="Name" required />
                <span class="error text-danger error-name"></span>
            </div>

            <div class="col-md-6">
                <label for="contact-email">Your Email</label>
                <input type="email" name="email" id="contact-email" placeholder="Email" required />
                <span class="error text-danger error-email"></span>
            </div>

            <div class="col-md-12">
                <label for="contact-subject">Subject</label>
                <input type="text" name="subject" id="contact-subject" placeholder="Subject" required />
                <span class="error text-danger error-subject"></span>
            </div>

            <div class="col-md-12">
                <label for="contact-message">Message</label>
                <textarea name="message" id="contact-message" cols="30" rows="5" required></textarea>
                <span class="error text-danger error-message"></span>
            </div>
        </div>
    </div>

    <button type="submit" class="blog2-contact__btn">
        <span class="submit-button-text" data-loading_text="Loading..." data-default_text="Send Message"> Send Message</span>
    </button>
</form>
