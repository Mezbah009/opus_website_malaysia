@extends('front.layouts.app')

@php
    $title = "AI Solutions - Opus Technology";
    $description = "Opus Technology delivers cutting-edge AI solutions to help businesses optimize processes, enhance customer experiences, and drive innovation.";
    $keywords = "AI solutions, artificial intelligence, machine learning, deep learning, business automation, data analytics, Opus Technology";
@endphp

@section('content')

<div class="contact-bg lazy-bg" data-bg="{{ asset("front-assets/img/ai.jpg") }}">
    <h1>Our AI Solutions </h1>
    <div class="line"></div>
</div>

<!-- ======= Our Portfolio Section ======= -->
<section id="portfolio" class="portfolio section-bg">
    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="section-title">
            <h2>Our AI Solutions </h2>
            <p>We specialize in AI-driven solutions that enable businesses to automate processes, gain insights from data, and create intelligent systems for the future. Our AI solutions are designed to help businesses optimize operations, enhance customer experiences, and drive innovation.</p>
            </p>
        </div>






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
                            <img src="{{ asset($first_section->image) }}" class="img-fluid" loading="lazy" alt="">
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
                                            <img src="{{ asset($second_section->icon) }}" loading="lazy"  alt="{{ $second_section->title }}" width="80px"
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


        <!-- End  Section -->
</section><!-- End Our Portfolio Section -->





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
