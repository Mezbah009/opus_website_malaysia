@extends('front.layouts.app')

@php
    $title = "Mobile App Solutions - Opus Technology Limited";
    $description = "Discover custom mobile app development solutions at Opus Technology. We create innovative and user-friendly apps for both Android and iOS platforms.";
    $keywords = "mobile app development, custom mobile apps, Android apps, iOS apps, mobile solutions, app development company, Opus Technology, mobile application services";
@endphp

@section('content')


<div class="contact-bg lazy-bg" data-bg="{{ asset('front-assets/img/mobile.jpg') }}">
    <h1>Our Mobile App Solutions</h1>
    <div class="line"></div>
</div>

<!-- ======= Our Portfolio Section ======= -->
<section id="portfolio" class="portfolio section-bg">
    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="section-title">
            <h2>Our Mobile App Solutions</h2>
            <p>Opus Technology Ltd is a leading Software Development and IT consulting service provider company.
                Combining unparalleled experience, domain expertise, best practices & comprehensive capabilities across
                various industries & business functions, it collaborates with customers to help them effectively address
                their operational challenges & grow their businesses stronger. Opus Technology specializes in building cutting-edge mobile applications that deliver seamless user experiences. Our team excels in designing and developing apps tailored to your business needs.</p>
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

        <div class="row portfolio-container">
            @foreach($sections as $section)
            <div class="col-lg-4 col-md-6 portfolio-item {{$section->button_name}}">
                <div class="portfolio-wrap" data-url="{{ route('product.show', ['slug' => $section->link]) }}"
                    style="cursor: pointer;">
                    <img src="{{ asset('uploads/first_section/' . $section->logo) }}" class="img-fluid" loading="lazy"  alt="{{$section->title}}">
                    <div class="portfolio-info">
                        {{-- <h4>{{$section->title}}</h4>
                        <p style="word-wrap: break-word; padding-right:10px; padding-left:10px;">
                            {{$section->description}}</p> --}}
                        <div class="portfolio-links">
                            {{-- <a href="/uploads/first_section/{{ $section->logo }}" data-gallery="portfolioGallery"
                                class="portfolio-lightbox" title="App 1"><i class="bi bi-plus"></i></a>
                            <a href="{{ route('product.show', ['slug' => $section->link]) }}" title="More Details"><i
                                    class="bi bi-link"></i></a> --}}
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>





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

    </div>
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
