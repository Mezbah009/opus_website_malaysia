@extends('front.layouts.app')

@php
    $title = "System Solutions - Opus Technology Limited";
    $description = "Opus Technology provides comprehensive system solutions that cater to businesses of all sizes. We offer system integration, automation, and optimization to streamline your operations and improve efficiency.";
    $keywords = "system solutions, system integration, business automation, IT optimization, Opus Technology, technology solutions, business systems, enterprise systems";
@endphp

@section('content')

<div class="contact-bg" style="background-image: url('{{ asset("front-assets/img/system.jpg") }}');">
    <h1>Our System Solutions</h1>
    <div class="line">
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>

<!-- ======= Our Portfolio Section ======= -->
<section id="portfolio" class="portfolio section-bg">
    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="section-title">
            <h2>Our System Solutions</h2>
            <p>Our server monitoring tools ServerCop and Database monitoring tools
                DBPilot, ensure optimal performance and security. Track key metrics,
                identify issues proactively, and optimize your IT infrastructure.</p>
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
                    <img src="{{ asset('uploads/first_section/' . $section->logo) }}" class="img-fluid" loading="lazy" alt="{{$section->title}}">
                    <div class="portfolio-info">
                        {{-- <h4>{{$section->title}}</h4>
                        <p style="word-wrap: break-word; padding-right:10px; padding-left:10px;">
                            {{$section->description}}
                        </p> --}}
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

@endsection
