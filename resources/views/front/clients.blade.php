@extends('front.layouts.app')

@php
    $title = "Our Clients - Opus Technology Limited";
    $description = "Explore the diverse industries and businesses that trust Opus Technology to deliver innovative solutions and support their growth.";
    $keywords = "clients, partners, business success, Opus Technology, industry solutions, client portfolio, technology solutions";
@endphp

@section('content')

<div class="contact-bg lazy-bg" data-bg="{{ asset('front-assets/img/clients.jpg') }}">
    <h1>Our Valuable Clients</h1>
    <div class="line"></div>
</div>

<section id="portfolio" class="portfolio section-bg">
    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="section-title">
            <p>At OPUS System Solutions, we extend our heartfelt gratitude to the incredible organizations that have
                become our cherished partners on our journey to harmonize technology with Islamic ethics.</p>
        </div>

        @if ($categories->isNotEmpty())
            <div class="row">
                <div class="col-lg-12">
                    <ul id="portfolio-flters">
                        <li data-filter="*" class="filter-active">All</li>
                        @foreach ($categories as $cat)
                            <li data-filter=".filter-{{ \Str::slug($cat->name) }}">{{ $cat->name }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        @endif

        <div class="row portfolio-container">
            @foreach($clients as $client)
                <div class="col-lg-4 col-md-6 portfolio-item filter-{{ \Str::slug(optional($client->clientCategory)->name) }}">
                    <div class="portfolio-wrap" data-url="{{ $client->link }}" style="cursor: pointer;">
                        <img src="{{ asset('uploads/first_section/' . $client->logo) }}" class="img-fluid" loading="lazy" alt="{{ $client->title }}" style="margin: 0 auto; display: block;">
                        <div class="portfolio-info">
                            <h4>{{ $client->title }}</h4>
                            <p style="word-wrap: break-word; padding-right:10px; padding-left:10px;">
                                {{ $client->description }}
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        document.querySelectorAll('.portfolio-wrap').forEach(function (wrap) {
            wrap.addEventListener('click', function () {
                const url = wrap.getAttribute('data-url');
                window.open(url, '_blank');
            });
        });
    });
</script>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        let lazyBackgrounds = document.querySelectorAll(".lazy-bg");
        lazyBackgrounds.forEach((bg) => {
            let observer = new IntersectionObserver((entries, observer) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        entry.target.style.backgroundImage = `url('${entry.target.dataset.bg}')`;
                        observer.unobserve(entry.target);
                    }
                });
            }, {
                rootMargin: "0px 0px 200px 0px"
            });
            observer.observe(bg);
        });
    });
</script>

@endsection
