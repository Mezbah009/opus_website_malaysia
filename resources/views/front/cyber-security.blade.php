@extends('front.layouts.app')

@php
    $title = 'Cyber Security Solutions - Opus Technology Limited';
    $description =
        'Opus Technology offers robust cyber security solutions to protect your business from digital threats. Our services ensure your data, networks, and systems remain secure against evolving cyber risks.';
    $keywords =
        'cyber security, digital security solutions, network security, data protection, cyber threats, security services, Opus Technology';
@endphp

@section('content')
    <div class="contact-bg lazy-bg" data-bg="{{ asset('front-assets/img/cyber.jpg') }}">
        <h1>Our Cyber Security Solutions</h1>
        <div class="line"></div>
    </div>

    <!-- ======= Our Portfolio Section ======= -->
    <section id="portfolio" class="portfolio section-bg">
        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="section-title">
                <h2>Our Cyber Security Solutions</h2>
                <p>Cyber Security Solutions: Your Trusted Partner for Comprehensive Security Solutions. Opus is a leading
                    provider of specialized security services, including vulnerability assessment and penetration testing
                    (VAPT), system security, and application security. Our team of experienced professionals is dedicated to
                    safeguarding your digital assets and protecting your organization from cyber threats, With a focus on
                    proactive security measures, Opus offers a comprehensive suite of services to help you identify and
                    mitigate potential vulnerabilities. Our VAPT experts employ advanced techniques and tools to assess your
                    systems' security posture and provide actionable recommendations for improvement.</p>
            </div>

            {{-- <div class="row">
            <div class="col-lg-12">
                <ul id="portfolio-flters">
                    <li data-filter="*" class="filter-active">All</li>
                    <li data-filter=".filter-fin">Fintech</li>
                    <li data-filter=".filter-sig">Signature</li>
                </ul>
            </div>
        </div> --}}





            {{-- <div class="row portfolio-container">
                @foreach ($sections as $section)
                    <div class="col-lg-4 col-md-6 portfolio-item {{ $section->button_name }}">
        <div class="portfolio-wrap" data-url="{{ route('product.show', ['slug' => $section->link]) }}"
            style="cursor: pointer;">
            <div class="flip-container">
                <div class="flipper">
                    <!-- Front Side -->
                    <div class="front">
                        <img src="{{ asset('uploads/first_section/' . $section->logo) }}" class="img-fluid"
                            alt="{{ $section->title }}">
                    </div>
                    <!-- Back Side -->
                    <div class="back">
                        <div class="portfolio-info">
                            <h4>{{ $section->title }}</h4>
                            <p>{{ $section->description }}</p>
                            <a href="{{ route('product.show', ['slug' => $section->link]) }}"
                                title="More Details">
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    </div> --}}



            {{-- First section --}}



            <section id="about" class="about">
                <div class="container" data-aos="fade-up" style="box-shadow: none;">
                    @foreach ($first_sections as $index => $first_section)
                        <div class="row no-gutters">
                            <div class="col-lg-6 d-flex flex-column justify-content-center about-content">
                                <div class="section-title">
                                    <p>{{ $first_section->description }}
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-6 video-box">
                                <img src="{{ asset($first_section->image) }}" class="img-fluid" loading="lazy"
                                    alt="">
                            </div>
                        </div>
                    @endforeach
                </div>
            </section>


            {{-- second  section --}}
            <section>
                <div class="contact-body">
                    <section id="contact" class="contact">
                        <div class="container" data-aos="fade-up">
                            <div class="row">
                                @foreach ($second_sections as $index => $second_section)
                                    <div class="col-lg-3 d-flex" data-aos="fade-up">
                                        <div class="info-boxs">
                                            <img src="{{ asset($second_section->icon) }}" loading="lazy"
                                                alt="{{ $second_section->title }}" width="80px"
                                                style="padding: 8px; display: block; margin: 0 auto;">
                                            <h3 style="text-align:center; margin-bottom: 10px;">{{ $second_section->title }}
                                            </h3>
                                            <p>{{ $second_section->description }}
                                            </p>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </section>
                </div>
            </section>

            <br>
            <!-- End Section -->



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
            </script>

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
