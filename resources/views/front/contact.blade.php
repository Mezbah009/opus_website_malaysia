@extends('front.layouts.app')

@php
    $title = 'Contact Us - Opus Technology Limited';
    $description =
        'Get in touch with Opus Technology to learn more about our solutions or ask any questions. Our team is here to help you with all your technology needs.';
    $keywords = 'contact us, Opus Technology, customer support, contact, inquiries, get in touch, technology solutions';
@endphp

@section('content')
    <div class="contact-bg lazy-bg" data-bg="{{ asset('front-assets/img/Contact.jpg') }}">
        <h1>contact us</h1>
        <div class="line"></div>
    </div>

    <div class="container" style="margin-top: 49px;
margin-bottom: 1rem;
text-align: justify;">
        <p>
            Opus Technology Ltd is a leading Software Development and IT consulting service provider company. Combining
            unparalleled experience, domain expertise, best practices & comprehensive capabilities across various industries
            & business functions, it collaborates with customers to help them effectively address their operational
            challenges & grow their businesses stronger. We would love to hear from you! Please reach out for inquiries,
            support, or to learn more about how we can help your business grow.
        </p>
    </div>



    <div class="contact-body">
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">

                <div class="row">
                    @foreach ($contacts as $contact)
                        <div class="col-lg-4 d-flex" data-aos="fade-up">
                            <div class="info-box">
                                <img src="{{ asset('uploads/first_section/' . $contact->flag) }}" loading="lazy" alt="{{ $contact->country_name }}"
                                    width="80px" style="padding: 8px">

                                <h3>{{ $contact->country_name }}</h3>
                                <h5>{{ $contact->company_name }}</h5>
                                <h6>{{ $contact->office_name }}</h6>
                                <p>{{ $contact->address }}</p>
                                <div class="social-links mt-3">
                                    <a href="{{ $contact->website }}" class="website" target="_blank"
                                        rel="noopener noreferrer">
                                        <i class="bx bxl-internet-explorer"></i>
                                    </a>
                                    <a href="{{ $contact->facebook }}" class="facebook" target="_blank"
                                        rel="noopener noreferrer">
                                        <i class="bx bxl-facebook"></i>
                                    </a>
                                    <a href="{{ $contact->youtube }}" class="youtube" target="_blank"
                                        rel="noopener noreferrer">
                                        <i class="bx bxl-youtube"></i>
                                    </a>
                                    <a href="{{ $contact->linkedIn }}" class="linkedin" target="_blank"
                                        rel="noopener noreferrer">
                                        <i class="bx bxl-linkedin"></i>
                                    </a>
                                </div>

                            </div>
                        </div>
                    @endforeach
                </div>


                <div class="row">
                    @foreach ($numbers as $number)
                        <div class="col-lg-6 d-flex" data-aos="fade-up" data-aos-delay="100">
                            <div class="info-box">
                                <i class="bx bx-envelope"></i>
                                <h3>Email Us</h3>
                                <p>{{ $number->email }}</p>
                            </div>
                        </div>
                        <div class="col-lg-6 d-flex" data-aos="fade-up" data-aos-delay="200">
                            <div class="info-box ">
                                <i class="bx bx-phone-call"></i>
                                <h3>Call Us</h3>
                                <p>{{ $number->phone }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>



                <div class="col-lg-12" data-aos="fade-up" data-aos-delay="300">
                    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                        <div class="row">
                            <div class="col-lg-6 form-group">
                                <input type="text" name="name" class="form-control" id="name"
                                    placeholder="Your Name" required>
                            </div>
                            <div class="col-lg-6 form-group">
                                <input type="email" class="form-control" name="email" id="email"
                                    placeholder="Your Email" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject"
                                required>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                        </div>
                        <div class="my-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                        </div>
                        <div class="text-center"><button type="submit">Send Message</button></div>
                    </form>
                </div>
            </div>
        </section><!-- End Contact Us Section -->

    </div>

    <div class="map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3648.334582485276!2d90.40498071455235!3d23.73730378458817!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8f360385db5%3A0xa115112c746430a9!2sOpus%20Technology%20Limited!5e0!3m2!1sen!2snp!4v1604921178092!5m2!1sen!2snp"
            width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
            tabindex="0"></iframe>
    </div>




    <script>
        document.addEventListener("DOMContentLoaded", function() {
            let lazyBackgrounds = document.querySelectorAll(".lazy-bg");

            lazyBackgrounds.forEach((bg) => {
                let observer = new IntersectionObserver(
                    (entries, observer) => {
                        entries.forEach((entry) => {
                            if (entry.isIntersecting) {
                                entry.target.style.backgroundImage =
                                    `url('${entry.target.dataset.bg}')`;
                                observer.unobserve(entry.target);
                            }
                        });
                    }, {
                        rootMargin: "0px 0px 200px 0px"
                    } // Load before entering the viewport
                );

                observer.observe(bg);
            });
        });
    </script>
@endsection
