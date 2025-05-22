@extends('front.layouts.app')

@php
    $title = 'Opus Technology Limited - Software & IT Solutions';
    $description =
        'Opus Technology Limited is a leading software company in Bangladesh providing microfinance solutions, enterprise solutions, fintech, AI, cybersecurity, and IT consultancy.';
    $keywords =
        'Software Company in Bangladesh, IT Solutions, Enterprise Software, Microfinance solutions, Fintech, AI, Cybersecurity, Mobile Apps, Web Development';
@endphp

@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div class="hero-container">
            <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

                <ol class="carousel-indicators" id="hero-carousel-indicators">
                    @foreach ($slider as $key => $sliders)
                        <li data-bs-target="#heroCarousel" data-bs-slide-to="{{ $key }}"
                            class="{{ $key == 0 ? 'active' : '' }}"></li>
                    @endforeach
                </ol>

                <div class="carousel-inner" role="listbox">
                    @foreach ($slider as $key => $sliders)
                        <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                            <img src="{{ asset('uploads/slider/' . $sliders->image) }}" class="d-block w-100"
                                alt="{{ $sliders->title }}">
                            <div class="carousel-container">
                                <div class="carousel-content container">
                                    <h2 class="animate__animated animate__fadeInDown">{{ $sliders->title }}</h2>
                                    <p class="animate__animated animate__fadeInUp">{{ $sliders->description }}</p>
                                    <a href="{{ $sliders->link }}"
                                        class="btn-get-started animate__animated animate__fadeInUp scrollto">
                                        {{ $sliders->button_name }}
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
                </a>
                <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
                </a>

            </div>
        </div>
    </section>
    <!-- End Hero -->



    {{-- firts section --}}

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">
            @foreach ($home_first_section as $key => $home_first_sections)
                <div class="row no-gutters">
                    <div class="col-lg-6 video-box">
                        <img src="{{ asset('uploads/first_section/' . $home_first_sections->image) }}" class="img-fluid"
                            loading="lazy" width="600" height="400" alt="">

                        <a href="#" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"
                            target="_blank" rel="noopener noreferrer"></a>
                    </div>


                    <div class="col-lg-6 d-flex flex-column justify-content-center about-content">

                        <div class="section-title">
                            <h2>{{ $home_first_sections->title }}</h2>
                            <p>{!! $home_first_sections->description !!} </p>
                            <a href="{{ $home_first_sections->link }}"
                                class="btn-get-started animate__animated animate__fadeInUp scrollto">{{ $home_first_sections->button_name }}</a>
                        </div>

                        <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                            <div class="icon"><i class="bx bx-rocket"></i></div>
                            <h2 class="title"><a href="">Our Mission</a></h2>
                            <p class="description">{{ $home_first_sections->mission }}</p>
                        </div>

                        <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                            <div class="icon"><i class="bx bx-compass"></i></div>
                            <h2 class="title"><a href="">Our Vision</a></h2>
                            <p class="description">{{ $home_first_sections->vision }}</p>

                        </div>

                    </div>
                </div>
            @endforeach

        </div>
    </section><!-- End About Us Section -->


    <!-- ======= Second Section ======= -->
    {{-- <section id="about" class="about">
    <div class="container" data-aos="fade-up">
        @foreach ($home_second_section as $key => $home_second_sections)

        <div class="row no-gutters">


            <div class="col-lg-6 d-flex flex-column justify-content-center about-content">

                <div class="section-title">
                    <img src="{{ asset('uploads/first_section/' .$home_second_sections->logo) }}" class="img-fluid"
alt="">
<h2>{{ $home_second_sections->title }}</h2>
<p>{!! $home_second_sections->description!!} </p>
<a href="{{ $home_second_sections->link }}"
    class="btn-get-started animate__animated animate__fadeInUp scrollto">{{
                        $home_second_sections->button_name }}</a>
</div>
</div>
<div class="col-lg-6 video-box">
    <img src="{{ asset('uploads/first_section/' .$home_second_sections->image) }}" class="img-fluid" alt="">
</div>
</div>
@endforeach

</div>
</section> --}}

    <!-- End About Us Section -->





    <!-- ======= About Lists Section ======= -->
    <section class="about-lists">
        <div class="container">
            <div class="row no-gutters">

                <div class="col-lg-4 col-md-6 content-item" data-aos="fade-up">
                    <i class="fas fa-code"></i> <!-- Replace this icon with your choice -->
                    <h4>First Class Developers</h4>
                    <p>When you work with Opus you strengthen your project with top talents. All of our developers
                        have 5+ years of experiences.</p>
                </div>

                <div class="col-lg-4 col-md-6 content-item" data-aos="fade-up" data-aos-delay="100">
                    <i class="fas fa-industry"></i> <!-- Replace this icon with your choice -->
                    <h4>Software Industry Leader</h4>
                    <p>United Nation, DB Schenker, Bangladesh Government, BRAC, Bangladesh Police, bKash and
                        hundreds of world-wide use Opus software every day.</p>
                </div>

                <div class="col-lg-4 col-md-6 content-item" data-aos="fade-up" data-aos-delay="200">
                    <i class="fas fa-handshake"></i> <!-- Replace this icon with your choice -->
                    <h4>We Build Relationships</h4>
                    <p>Our clients trust us to deliver just what they need and we do just that. Always on time, with
                        zero hassle. So they will give us new projects most of the time.</p>
                </div>

                <div class="col-lg-4 col-md-6 content-item" data-aos="fade-up" data-aos-delay="300">
                    <i class="fas fa-dollar-sign"></i> <!-- Replace this icon with your choice -->
                    <h4>Cost Effective</h4>
                    <p>Our costs are determined by one single factor: Your budget. We adapt to you and stick to the
                        numbers we agree on. From the beginning to the very end.</p>
                </div>

                <div class="col-lg-4 col-md-6 content-item" data-aos="fade-up" data-aos-delay="400">
                    <i class="fas fa-lightbulb"></i> <!-- Replace this icon with your choice -->
                    <h4>Innovative Solutions</h4>
                    <p>We specialize in creating innovative solutions tailored to your specific needs. Our team
                        stays updated with the latest technologies to deliver cutting-edge products.</p>
                </div>

                <div class="col-lg-4 col-md-6 content-item" data-aos="fade-up" data-aos-delay="500">
                    <i class="fas fa-headset"></i> <!-- Replace this icon with your choice -->
                    <h4>Customer Support</h4>
                    <p>Our commitment doesn't end with project delivery. We provide exceptional customer support,
                        ensuring that your questions and concerns are addressed promptly and professionally.</p>
                </div>

            </div>
        </div>
    </section>
    <!-- End About Lists Section -->

    <!-- ======= Counts Section ======= -->
    <section class="counts section-bg">
        <div class="container">

            <div class="row">

                <div class="col-lg-3 col-md-6 text-center" data-aos="fade-up">
                    <div class="count-box">
                        <i class="bi bi-simple-smile" style="color: #20b38e;"></i>
                        <span data-purecounter-start="0" data-purecounter-end="60" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Successful Project </p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 text-center" data-aos="fade-up" data-aos-delay="200">
                    <div class="count-box">
                        <i class="bi bi-document-folder" style="color: #c042ff;"></i>
                        <span data-purecounter-start="0" data-purecounter-end="120" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Customers Worldwide</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 text-center" data-aos="fade-up" data-aos-delay="400">
                    <div class="count-box">
                        <i class="bi bi-live-support" style="color: #46d1ff;"></i>
                        <span data-purecounter-start="0" data-purecounter-end="65" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Resources</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 text-center" data-aos="fade-up" data-aos-delay="600">
                    <div class="count-box">
                        <i class="bi bi-users-alt-5" style="color: #ffb459;"></i>
                        <span data-purecounter-start="0" data-purecounter-end="45" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Technical Resources</p>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Counts Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Our Services</h2>
                <p>Our company specializes in creating bespoke software solutions across
                    various domains, ensuring top-quality, efficiency, and innovation in
                    each project. Our expertise spans custom software development,
                    mobile and web application development, business intelligence, AI,
                    blockchain, IoT, outsourcing, process consulting, re-engineering &
                    migration, and digital marketing.</p>
            </div>
            <div class="row">
                @foreach ($home_services_section as $key => $home_services_sections)
                    <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up">
                        <div class="icon"> <a href="{{ route('front.services') }}"><img
                                    src="{{ asset('uploads/first_section/' . $home_services_sections->icon) }}"
                                    class="img-fluid" alt="" width="50%"> </a></div>
                        <h2 class="title"><a
                                href="{{ route('front.services') }}">{{ $home_services_sections->title }}</a></h2>
                        {{-- <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias
                    excepturi sint occaecati cupiditate non provident</p> --}}
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- End Services Section -->

    <!-- ======= Our Portfolio Section ======= -->
    {{-- <section id="portfolio" class="portfolio section-bg">
        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="section-title">
                <h2>Our Portfolio</h2>
                <p>Our fintech portfolio features innovative solutions in payment processing, risk management, and financial
                    services, enhancing efficiency, security, and user experience for businesses and consumers.</p>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <ul id="portfolio-flters">

                        <li data-filter=".filter-fin">Fintech</li>
                        <li data-filter=".filter-sig">Signature</li>
                    </ul>
                </div>
            </div>

            <div class="row portfolio-container">
                @foreach ($sections as $section)
                    <div class="col-lg-4 col-md-6 portfolio-item {{ $section->button_name }}">
                        <div class="portfolio-wrap" data-url="{{ route('product.show', ['slug' => $section->link]) }}"
                            style="cursor: pointer;">
                            <img src="{{ asset('uploads/first_section/' . $section->logo) }}" class="img-fluid" alt="{{ $section->title }}">
                            <div class="portfolio-info">

                                <div class="portfolio-links">

                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section><!-- End Our Portfolio Section --> --}}

    <section id="portfolio" class="portfolio section-bg">
        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="section-title">
                <h2>Our Portfolio</h2>
                <p>Our fintech portfolio features innovative solutions in payment processing, risk management, and financial
                    services, enhancing efficiency, security, and user experience for businesses and consumers.</p>
            </div>

            <div class="row portfolio-container">
                @foreach ($products as $product)
                    <div
                        class="col-lg-4 col-md-6 portfolio-item filter-{{ \Str::slug(optional($product->subCategory)->name) }}">

                        <div class="portfolio-wrap" data-url="{{ route('product.show', ['slug' => $product->link]) }}"
                            style="cursor: pointer;">
                            <div class="flip-container">
                                <div class="flipper">
                                    <!-- Front Side -->
                                    <div class="front">
                                        <img src="{{ asset('uploads/product/' . $product->logo) }}"
                                            class="img-fluid" alt="{{ $product->title }}">
                                    </div>
                                    <!-- Back Side -->
                                    <div class="back">
                                        <div class="portfolio-info">
                                            {{-- <h4>{{ $product->title }}</h4>
                                            <p>{{ $product->description }}</p>
                                            <a href="{{ route('product.show', ['slug' => $product->link]) }}"
                                                title="More Details">
                                                <i class="bi bi-arrow-right"></i>
                                            </a> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section>
    <!-- End Our Portfolio Section -->


        <!-- ======= home third Section ======= -->

    @foreach ($home_third_section as $index => $home_third_section)
        <section class="about py-5" style="background-color: {{ $index % 2 == 0 ? '#f5f9fc' : '#ffffff' }};">
            <div class="container" data-aos="fade-up" style="box-shadow: none;">
                <div class="row no-gutters align-items-center">
                    @if ($index % 2 == 0)
                        <!-- Even index: image left, content right -->
                        <div class="col-lg-6 d-flex justify-content-center align-items-center mb-4 mb-lg-0">
                            <img src="{{ asset('uploads/home_third_sections/' . $home_third_section->image) }}"
                                class="img-fluid" loading="lazy" alt="">
                        </div>
                        <div class="col-lg-6 d-flex flex-column justify-content-center about-content section-title">
                            <div class="section-title text-left" style="padding-top: 60px; padding-bottom: 0 !important;">
                                @if (!empty($home_third_section->logo))
                                    <img src="{{ asset('uploads/home_third_sections/' . $home_third_section->logo) }}"
                                        class="img-fluid mb-3" loading="lazy" alt="" style="max-width: 150px;">
                                @endif
                            </div>
                            <h2 class="text-left">{{ $home_third_section->title }}</h2>
                            <div>
                                <p class="fs-5 mb-4 service-description text-left">{!! $home_third_section->description !!}</p>
                            </div>
                            <div class="text-left d-flex justify-content-start" style="padding-top: 20px;">
                                <a class="btn custom-primary-btn" href="{{ $home_third_section->link }}" role="button">
                                    Read More <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    @else
                        <!-- Odd index: content left, image right -->
                        <div class="col-lg-6 d-flex flex-column justify-content-center about-content section-title">
                            <div class="section-title text-left" style="padding-top: 60px; padding-bottom: 0 !important;">
                                @if (!empty($home_third_section->logo))
                                    <img src="{{ asset('uploads/home_third_sections/' . $home_third_section->logo) }}"
                                        class="img-fluid mb-3" loading="lazy" alt="" style="max-width: 120px;">
                                @endif
                            </div>
                            <h2 class="text-left">{{ $home_third_section->title }}</h2>
                            <div>
                                <p class="fs-5 mb-4 service-description text-left">{!! $home_third_section->description !!}</p>
                            </div>
                            <div class="text-left d-flex justify-content-start" style="padding-top: 20px;">
                                <a class="btn custom-primary-btn" href="{{ $home_third_section->link }}" role="button">
                                    Read More <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-6 d-flex justify-content-center align-items-center mt-4 mt-lg-0">
                            <img src="{{ asset('uploads/home_third_sections/' . $home_third_section->image) }}"
                                class="img-fluid" loading="lazy" alt="">
                        </div>
                    @endif
                </div>
            </div>
        </section>
    @endforeach

    <!-- End home third Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Industries
                    We Serve</h2>
                <p>At Opus Technology, we specialize in crafting custom software solutions
                    that address the unique needs of various industries. From finance and
                    healthcare to education, retail, wholesale, and beyond, our expertise
                    lies in developing innovative software that drives efficiency, streamlines
                    processes, and empowers businesses to achieve their goals.</p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up">
                    <div class="icon"> <a href=""><img src="{{ asset('front-assets/img/industrylogo/1.png') }}"
                                class="img-fluid" alt="" width="50%"> </a></div>
                    <h2 class="title"><a href="">Financial</a></h2>
                </div>
                <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up">
                    <div class="icon"> <a href=""><img src="{{ asset('front-assets/img/industrylogo/2.png') }}"
                                class="img-fluid" alt="" width="50%"> </a></div>
                    <h2 class="title"><a href="">Healthcare</a></h2>
                </div>
                <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up">
                    <div class="icon"> <a href=""><img src="{{ asset('front-assets/img/industrylogo/3.png') }}"
                                class="img-fluid" alt="" width="50%"> </a></div>
                    <h2 class="title"><a href="">Education</a></h2>
                </div>
                <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up">
                    <div class="icon"> <a href=""><img src="{{ asset('front-assets/img/industrylogo/4.png') }}"
                                class="img-fluid" alt="" width="50%"> </a></div>
                    <h2 class="title"><a href="">Transportation</a></h2>
                </div>
                <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up">
                    <div class="icon"> <a href=""><img src="{{ asset('front-assets/img/industrylogo/5.png') }}"
                                class="img-fluid" alt="" width="50%"> </a></div>
                    <h2 class="title"><a href="">Manufacturing</a></h2>
                </div>
                <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up">
                    <div class="icon"> <a href=""><img src="{{ asset('front-assets/img/industrylogo/6.png') }}"
                                class="img-fluid" alt="" width="50%"> </a></div>
                    <h2 class="title"><a href="">Wholesale</a></h2>
                </div>
                <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up">
                    <div class="icon"> <a href=""><img src="{{ asset('front-assets/img/industrylogo/7.png') }}"
                                class="img-fluid" alt="" width="50%"> </a></div>
                    <h2 class="title"><a href="">Retail</a></h2>
                </div>
                <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up">
                    <div class="icon"> <a href=""><img src="{{ asset('front-assets/img/industrylogo/8.png') }}"
                                class="img-fluid" alt="" width="50%"> </a></div>
                    <h2 class="title"><a href="">Construction</a></h2>
                </div>
                <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up">
                    <div class="icon"> <a href=""><img src="{{ asset('front-assets/img/industrylogo/9.png') }}"
                                class="img-fluid" alt="" width="50%"> </a></div>
                    <h2 class="title"><a href="">Entertainment</a></h2>
                </div>
                <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up">
                    <div class="icon"> <a href=""><img
                                src="{{ asset('front-assets/img/industrylogo/10.png') }}" class="img-fluid"
                                alt="" width="50%"> </a></div>
                    <h2 class="title"><a href="">Garments</a></h2>
                </div>
                <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up">
                    <div class="icon"> <a href=""><img
                                src="{{ asset('front-assets/img/industrylogo/11.png') }}" class="img-fluid"
                                alt="" width="50%"> </a></div>
                    <h2 class="title"><a href="">Tourism</a></h2>
                </div>
                <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up">
                    <div class="icon"> <a href=""><img
                                src="{{ asset('front-assets/img/industrylogo/12.png') }}" class="img-fluid"
                                alt="" width="50%"> </a></div>
                    <h2 class="title"><a href="">Engery</a></h2>
                </div>
            </div>
        </div>
    </section>
    <!-- End Services Section -->

    <!-- ======= Our Team Section ======= -->
    {{-- <section id="team" class="team">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Our Team</h2>
                <p>Our team consists of skilled professionals dedicated to innovation, excellence, and delivering top-notch
                    solutions.</p>
            </div>

            <div class="row">
                @foreach ($teamMembers as $member)
                    <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up">
                        <div class="member">
                            <div class="pic">
                                <img src="{{ asset('uploads/users/' . $member->image) }}" class="img-fluid"
alt="{{ $member->name }}" height="300px" width="350px">
</div>
<div class="member-info">
    <h4>{{ $member->name }}</h4>
    <span>{{ $member->designation }}</span>
    <div class="social">
        @if ($member->twitter)
        <a href="{{ $member->twitter }}"><i class="bi bi-twitter"></i></a>
        @endif
        @if ($member->facebook)
        <a href="{{ $member->facebook }}"><i class="bi bi-facebook"></i></a>
        @endif
        @if ($member->instagram)
        <a href="{{ $member->instagram }}"><i class="bi bi-instagram"></i></a>
        @endif
        @if ($member->linkedin)
        <a href="{{ $member->linkedin }}"><i class="bi bi-linkedin"></i></a>
        @endif
    </div>
</div>
</div>
</div>
@endforeach
</div>

</div>
</section> --}}




    <!-- Our Team Section -->

    {{-- <section id="team" class="team section light-background">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Core Management Team</h2>
            <p>Our team consists of skilled professionals dedicated to innovation, excellence, and delivering top-notch
                solutions.</p>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="row justify-content-center">
                @foreach ($teamMembers as $member)
                    <div class="col-lg-3 col-md-3 col-sm-6 d-flex flex-column align-items-center member"
                        data-aos="fade-up" data-aos-delay="100">
                        <div class="member-img">
                            <img src="{{ asset('uploads/users/' . $member->image) }}" class="img-fluid rounded-circle"
                                alt="{{ $member->name }}">
                            <div class="social">
                                @if ($member->twitter)
                                    <a href="{{ $member->twitter }}"><i class="bi bi-twitter"></i></a>
                                @endif
                                @if ($member->facebook)
                                    <a href="{{ $member->facebook }}"><i class="bi bi-facebook"></i></a>
                                @endif
                                @if ($member->instagram)
                                    <a href="{{ $member->instagram }}"><i class="bi bi-instagram"></i></a>
                                @endif
                                @if ($member->linkedin)
                                    <a href="{{ $member->linkedin }}"><i class="bi bi-linkedin"></i></a>
                                @endif
                            </div>
                        </div>
                        <div class="member-info text-center">
                            <h4>{{ $member->name }}</h4>
                            <span>{{ $member->designation }}</span>
                        </div>
                    </div><!-- End Team Member -->
                @endforeach
            </div>

        </div>

    </section> --}}
    <!-- End Our Team Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->

    <section id="faq" class="faq section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Frequently Asked Questions</h2>
            </div>

            <div class="row  d-flex align-items-stretch">

                <details class="col-lg-6 faq-item" data-aos="fade-up">
                    <summary><b>Why Microfinance Institute should adopt TURBO?</b></summary>
                    <div>
                        TURBO brings several benefits, including improved operational efficiency, enhanced client
                        management, accurate financial reporting, streamlined loan processing, better risk management,
                        compliance with regulatory requirements, and access to insightful analytics for informed
                        decision-making.
                    </div>
                </details>

                <details class="col-lg-6 faq-item" data-aos="fade-up" data-aos-delay="100">
                    <summary><b>Can a TURBO handle multiple types of loans?</b></summary>
                    <div>
                        Yes, TURBO can handle various types of loans, including individual loans, group loans, agricultural
                        loans, business loans, and more. It offers flexible features to customize loan products and
                        repayment schedules based on the specific needs of microfinance clients.
                    </div>
                </details>

                <details class="col-lg-6 faq-item" data-aos="fade-up" data-aos-delay="200">
                    <summary><b>Is data security ensured with TURBO?</b></summary>
                    <div>
                        Yes. TURBO incorporates robust security measures to protect sensitive client information,
                        transaction records, and financial data. This includes encryption protocols, user access controls,
                        regular data backups, and adherence to data protection regulations.
                    </div>
                </details>

                <details class="col-lg-6 faq-item" data-aos="fade-up" data-aos-delay="300">
                    <summary><b>Can TURBO integrate with other financial systems?</b></summary>
                    <div>
                        Yes, TURBO can integrate with other financial systems such as core banking systems, payment
                        processors, credit bureaus, and mobile money platforms. This integration enables seamless data
                        exchange, facilitates transaction processing, and enhances operational efficiency.
                    </div>
                </details>
            </div>

        </div>
    </section><!-- End Frequently Asked Questions Section -->

    <!-- Clients Aside -->
    <section id="partner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center">
                        <h3>They Trust Us</h3>
                        {{-- <p>Duis aute irure dolor in reprehenderit in voluptate</p> --}}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="clients">
                    @foreach ($clients as $client)
                        <div class="col-md-12">
                            <a href="{{ $client->link }}" target="_blank">
                                <img src="{{ asset('uploads/first_section/' . $client->logo) }}" alt="Client Logo"
                                    lazy="loading" width="150px">
                            </a>

                        </div>
                    @endforeach
                </div>
            </div>

        </div>
    </section> <!-- End Clients Section -->



    <!-- Start Testimonial Section -->
    <section class="faq section-bg">
        <div id="testimonial" class="testimonial-section">
            <div class="container">
                <!-- Start Testimonials Carousel -->
                <div id="testimonial-carousel" class="testimonials-carousel">
                    @foreach ($testimonials as $testimonial)
                        <!-- Testimonial {{ $loop->iteration }} -->
                        <div class="testimonials item">
                            <div class="testimonial-content">
                                <img src="{{ asset('uploads/testimonials/' . $testimonial->logo) }}"
                                    alt="Testimonial Logo" lazy="loading">
                                <div class="testimonial-author">
                                    <div class="author">{{ $testimonial->name }}</div>
                                    <div class="designation">{{ $testimonial->designation }}</div>
                                </div>
                                <p>{{ $testimonial->description }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>


                <!-- End Testimonials Carousel -->
            </div>
        </div>
    </section>
    <!-- End Testimonial Section -->


    <!-- ======= Contact Us Section ======= -->
    {{-- <section id="contact" class="contact">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Contact Us</h2>
        </div>

        <div class="row">

            <div class="col-lg-6 d-flex" data-aos="fade-up">
                <div class="info-box">
                    <i class="bx bx-map"></i>
                    <h3>Our Address</h3>
                    <p>Bangladesh Office
                        Khan Tower (2nd Floor & 4th Floor) <br>
                        80/3, VIP Road, Kakrail
                        Dhaka, Bangladesh.</p>
                </div>
            </div>

            @foreach ($numbers as $number)
            <div class="col-lg-3 d-flex" data-aos="fade-up" data-aos-delay="100">
                <div class="info-box">
                    <i class="bx bx-envelope"></i>
                    <h3>Email Us</h3>
                    <p>{{ $number->email }}</p>
                </div>
            </div>

            <div class="col-lg-3 d-flex" data-aos="fade-up" data-aos-delay="200">
                <div class="info-box ">
                    <i class="bx bx-phone-call"></i>
                    <h3>Call Us</h3>
                    <p>{{ $number->phone }}</p>
                </div>
            </div>
            @endforeach

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
                        <input type="text" class="form-control" name="subject" id="subject"
                            placeholder="Subject" required>
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

    </div>
</section> --}}
    <!-- End Contact Us Section -->


    <!-- JavaScript for click functionality -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const portfolioWraps = document.querySelectorAll('.portfolio-wrap');
            portfolioWraps.forEach(function(portfolioWrap) {
                portfolioWrap.addEventListener('click', function() {
                    const url = portfolioWrap.getAttribute('data-url');
                    window.location.href = url;
                });
            });
        });

        document.addEventListener("DOMContentLoaded", function() {
            let lazyBackgrounds = document.querySelectorAll(".carousel-item");

            lazyBackgrounds.forEach(function(item) {
                let bgImage = item.getAttribute("data-bg");
                if (bgImage) {
                    let img = new Image();
                    img.src = bgImage;
                    img.onload = function() {
                        item.style.backgroundImage = `url(${bgImage})`;
                    }

                }
            });
        });
    </script>
@endsection
