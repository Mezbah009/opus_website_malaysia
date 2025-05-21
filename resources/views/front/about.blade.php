@extends('front.layouts.app')


@php
    $title = 'About Us - Opus Technology Limited';
    $description = 'Learn more about Opus Technology, our mission, and our expert team.';
    $keywords =
        'about opus technology, company history, our team, technology solutions ,Top Management,Md.Jafar Iqbal, MANAGING DIRECTOR & CEO,Bipasha Afrin,DIRECTOR';
@endphp



<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: Arial, sans-serif;
    }



    .container {
        max-width: 1000px;
        margin: 0 auto;
        position: relative;
    }

    .header {
        margin-bottom: 50px;
    }

    h1 {
        font-size: 3.5rem;
        color: #cc2b2b;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
    }

    .subtitle {
        font-size: 2rem;
        color: #89a7e0;
        text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2);
    }

    .timeline {
        position: relative;
        padding-top: 20px;
    }

    .timeline::before {
        content: '';
        position: absolute;
        left: 50%;
        width: 100px;
        height: 100%;
        /* background: repeating-linear-gradient(0deg,
                rgba(0, 0, 0, 0.2) 0px,
                rgba(0, 0, 0, 0.2) 2px,
                transparent 2px,
                transparent 20px); */
        transform: translateX(-50%);
    }

    .timeline-item {
        display: flex;
        margin-bottom: 30px;
        position: relative;
        min-height: 150px;
    }

    .timeline-content {
        width: 45%;
        padding: 15px;
    }

    .timeline-image {
        position: absolute;
        left: 50%;
        transform: translateX(-50%);
        width: 300px;
        height: 170px;
        background: #000;
        border: 3px solid #7fc0eb;
        border-radius: 4px;
        overflow: hidden;
    }

    .timeline-image::before,
    .timeline-image::after {
        content: '';
        position: absolute;
        top: -8px;
        bottom: -8px;
        width: 24px;

    }

    .timeline-image::before {
        left: -24px;
    }

    .timeline-image::after {
        right: -24px;
    }

    .timeline-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .year {
        font-size: 1.8rem;
        font-weight: bold;
        margin-bottom: 10px;
        color: #000000;
    }

    .description {
        font-size: 1rem;
        line-height: 1.4;
        color: #000000;
    }

    /* Left side content */
    .timeline-item:nth-child(odd) .timeline-content {
        margin-right: auto;
        text-align: right;
        padding-right: 120px;
    }

    /* Right side content */
    .timeline-item:nth-child(even) .timeline-content {
        margin-left: auto;
        text-align: left;
        padding-left: 120px;
    }


    @media (max-width: 768px) {
        .timeline {
            padding-top: 10px;
        }

        .timeline-item {
            flex-direction: column;
            align-items: center;
            text-align: center;
            min-height: auto;
            margin-bottom: 40px;
        }

        .timeline-content {
            width: 90%;
            text-align: center !important;
            padding: 10px;
        }

        .timeline-item:nth-child(odd) .timeline-content,
        .timeline-item:nth-child(even) .timeline-content {
            padding: 0;
        }

        .timeline-image {
            position: static;
            width: 80%;
            /* Adjust width for mobile */
            height: auto;
            margin: 15px auto 0;
            /* Centers the image */
            display: contents;
            justify-content: center;
            align-items: center;
        }

        .timeline-image img {
            width: 100%;
            height: auto;
            object-fit: contain;
        }

        h4 {
            font-size: 30px;
        }

        .timeline-content p {
            font-size: 16px;
        }
    }



    /* Service Showcase */

    /* Service Showcase Section Styles */
    .service-showcase {
        position: relative;
        padding: 50px 0;
        background: #F5F9FC;
    }

    .service-showcase::before {
        content: '';
        position: absolute;
        top: 120px;
        left: 50%;
        width: 4px;
        height: 100%;
        background: rgb(162, 206, 232);
        /* Keep for desktop view */
        transform: translateX(-50%);
    }

    .service-showcase .showcase-item {
        position: relative;
        width: 50%;
        padding: 20px;
        box-sizing: border-box;
    }

    .service-showcase .showcase-item img {
        width: 350px;
        height: 200px;
        border-radius: 5px;
        margin-top: 10px;
    }

    .service-showcase .showcase-item h4 {
        color: gray;
        font-size: 30px;
        font-weight: bold;
    }

    .service-showcase .showcase-item p {
        color: gray;
        font-size: 18px;
    }

    .service-showcase .left {
        left: 0;
        text-align: right;
    }

    .service-showcase .right {
        left: 50%;
        text-align: left;
    }

    .service-showcase .dot {
        position: absolute;
        top: 20px;
        width: 20px;
        height: 20px;
        border-radius: 50%;
        left: calc(50% - 10px);
    }

    /* Responsive Styles */
    @media (max-width: 768px) {
        .service-showcase {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .service-showcase::before {
            background: none !important;
            /* Remove background only in mobile view */
        }

        .service-showcase .showcase-item {
            width: 90%;
            text-align: center !important;
            left: 0 !important;
            padding: 15px;
        }

        .service-showcase .showcase-item img {
            width: 100%;
            height: auto;
        }

        .service-showcase .dot {
            left: 50%;
            transform: translateX(-50%);
        }
    }
</style>

@section('content')
    <div class="contact-bg lazy-bg" data-bg="{{ asset('front-assets/img/about-us.jpg') }}">
        <h1>About Us</h1>
        <div class="line"></div>
    </div>



    <!-- ======= About Us Section ======= -->

    <section id="about" class="about">
        <div class="container" data-aos="fade-up">
            @foreach ($home_second_section as $key => $home_second_sections)
                <div class="row no-gutters">


                    <div class="col-lg-6 d-flex flex-column justify-content-center about-content">

                        <div class="section-title">
                            <img src="{{ asset('uploads/first_section/' . $home_second_sections->logo) }}" class="img-fluid"
                                loading="lazy" alt="">
                            {{-- <h2>{{ $home_second_sections->title }}</h2> --}}
                            <p>{!! $home_second_sections->description !!} </p>
                        </div>
                    </div>
                    <div class="col-lg-6 d-flex justify-content-center align-items-center">
                        <img src="{{ asset('uploads/first_section/' . $home_second_sections->image) }}" class="img-fluid"
                            loading="lazy" alt="SEO Image"
                            style="max-width: 100%; max-height: 400px; object-fit: cover; border-radius: 0px;">
                    </div>
                </div>
            @endforeach

        </div>
    </section>

    <!-- End About Us Section -->


    <!-- ======= Counts Section ======= -->
    <section class="counts section-bg">
        <div class="container">

            <div class="row">

                <div class="col-lg-3 col-md-6 text-center" data-aos="fade-up">
                    <div class="count-box">
                        <i class="bi bi-simple-smile" style="color: #20b38e;"></i>
                        <span data-purecounter-start="0" data-purecounter-end="60" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Successful Project Implementation</p>
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


    {{-- Our Journey --}}


    <section class="counts section-bg">
        <div class="section-title" style="padding-top: 0px">
            <h2>Our Journey Creating Memories</h2>
        </div>
        <div class="container">
            <div class="timeline">
                @foreach ($journeys as $key => $journey)
                    <div class="timeline-item">
                        <div class="timeline-content">
                            <h4 style="color: gray; font-size: 40px; font-weight: bold;">{{ $journey->year }}</h4>
                            <p style="color: #5f6061; font-size: 18px;">{{ $journey->title }}</p>
                        </div>
                        <div class="timeline-image">
                            <img src="{{ asset($journey->image) }}" class="img-fluid" loading="lazy"
                                alt="{{ $journey->title }}">
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>



    {{-- Global Presence section --}}

    <section>
        <div class="section-title" style="padding-top: 60px">
            <h2></h2>
            <h2>Global Presence</h2>
        </div>

        <div id="about" class="about">
            <div class="container" data-aos="fade-up" style="box-shadow: none;">
                @foreach ($accreditations as $key => $accreditation)
                    <div class="row no-gutters">
                        <div class="col-lg-6 d-flex flex-column justify-content-center about-content">
                            <div class="section-title">
                                {{-- <h1>{{ $accreditation->title }} </h1> --}}
                                <p>With a proven track record of delivering innovative software solutions,
                                    Opus has established a strong presence in various countries worldwide.
                                    Our team of skilled engineers has successfully implemented projects in
                                    diverse regions, including USA, Australia, Sweden, Denmark, UAE,
                                    Malaysia, Uganda, Kenya, Zambia and Tanzania. This global reach
                                    enables us to understand and cater to the unique requirements of
                                    different markets, ensuring our solutions are culturally relevant and
                                    effective. </p>
                            </div>
                        </div>
                        <div class="col-lg-6 d-flex justify-content-center align-items-center">
                            <img src="front-assets/img/Global-Presence.png" class="img-fluid" loading="lazy" alt=""
                                style="max-width: 100%; max-height: 350px; object-fit: cover; border-radius: 0px;">
                        </div>

                    </div>
                @endforeach

            </div>
        </div>
    </section>
    <!-- end  -->


    <!-- Service Showcase -->

    <section class="service-showcase">
        <div class="section-title">
            <h2>Service Showcase</h2>
        </div>
        <div class="container">
            @foreach ($showcases as $index => $showcase)
                <div class="showcase-item {{ $index % 2 == 0 ? 'left' : 'right' }}">
                    <div class="dot"></div>
                    <h4>{{ $showcase->year }}</h4>
                    <p>{!! nl2br(e($showcase->title)) !!}</p>
                    <img src="{{ asset($showcase->image) }}" loading="lazy" alt="{!! nl2br(e($showcase->title)) !!}">
                </div>
            @endforeach
        </div>
    </section>



    {{-- End Service ShowcaseSection  --}}

    <br><br><br><br>

    {{-- Accreditation section --}}

    <div class="section-title" style="padding-top: 60px">
        <h2></h2>
        <h2>Accreditation</h2>
    </div>

    <div id="about" class="about">
        <div class="container" data-aos="fade-up" style="box-shadow: none;">
            @foreach ($accreditations as $key => $accreditation)
                <div class="row no-gutters">
                    <div class="col-lg-6 d-flex justify-content-center align-items-center">
                        <img src="{{ asset('uploads/first_section/' . $accreditation->image) }}" class="img-fluid"
                            loading="lazy" alt="{{ $accreditation->title }}"
                            style="max-width: 100%; max-height: 200px; object-fit: cover; border-radius: 0px;">
                    </div>
                    <div class="col-lg-6 d-flex flex-column justify-content-center about-content">
                        <div class="section-title">
                            <h2>{{ $accreditation->title }} </h2>
                            <p>{!! $accreditation->description !!} </p>
                        </div>
                    </div>

                </div>
            @endforeach

        </div>
    </div>

    {{-- Awards section --}}

    <div class="section-title">
        <h2></h2>
        <h2>Awards</h2>
    </div>

    <div id="about" class="about">
        <div class="container" data-aos="fade-up" style="box-shadow: none;">
            @foreach ($awards as $key => $award)
                <div class="row no-gutters">
                    <div class="col-lg-12 video-box">
                        <img src="{{ asset('uploads/first_section/' . $award->image) }}" class="img-fluid"
                            loading="lazy" alt="">
                    </div>

                </div>
            @endforeach

        </div>
    </div>



    {{-- Quality Management --}}


    <section>
        <div class="section-title" style="padding-top: 30px">
            <h2></h2>
            <h2>Quality Management</h2>
        </div>

        <div id="about" class="about">
            <div class="container" data-aos="fade-up" style="box-shadow: none;">
                @foreach ($qualities as $key => $quality)
                    <div class="row no-gutters align-items-center">
                        <div class="col-lg-6 d-flex flex-column justify-content-center about-content">
                            <div class="section-title">
                                <h2>{{ $quality->title }}</h2>
                                <p>{!! $quality->description !!}</p>
                            </div>
                        </div>
                        <div class="col-lg-6 d-flex justify-content-center align-items-center">
                            <img src="{{ asset('uploads/first_section/' . $quality->image) }}" class="img-fluid"
                                loading="lazy" alt="{{ $quality->title }}"
                                style="max-width: 100%; max-height: 300px; object-fit: cover; border-radius: 10px;">
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Quality Management -->


    {{-- Top management --}}
    <div class="section-title" style="padding-top: 30px">
        <h2>Our Team</h2>
        <h3><strong>Top Management</strong></h3>
    </div>

    <section>
        <div class="container-manage">
            @foreach ($managements as $management)
                <div class="card_manage">
                    <img src="{{ asset('uploads/first_section/' . $management->image) }}" loading="lazy"
                        alt="{{ $management->name }}">
                    <h3>{{ $management->name }}</h3>
                    <h4>{{ $management->designation }}</h4>
                    <p>{{ $management->description }}</p>
                    <div class="read-more">
                        <a href="{{ route('leader.show', ['link' => $management->link ?? 'default']) }}">Read More</a>
                        <div class="social-icons">
                            @if ($management->facebook)
                                <a href="{{ $management->facebook }}"><i class="bi bi-facebook"></i></a>
                            @endif
                            @if ($management->linkedin)
                                <a href="{{ $management->linkedin }}"><i class="bi bi-linkedin"></i></a>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <!-- ======= Our Team Section ======= -->

    <section id="team" class="team section light-background">

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
                                loading="lazy" alt="{{ $member->name }}">
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
    </section>

    <!-- End Our Team Section -->


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
