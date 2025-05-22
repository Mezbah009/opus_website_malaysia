@extends('front.layouts.app')

@php
    $title = $category->name . ' Products - Opus Technology';
    $description = 'Explore products under the ' . $category->name . ' category by Opus Technology.';
    $keywords = $category->name . ' products, Opus Technology, fintech';
@endphp

@section('content')

    @php
        $bgImage = $category->image
            ? asset('uploads/categories/' . $category->image)
            : asset('front-assets/img/Fintech.jpg');
    @endphp

    <div class="contact-bg lazy-bg" data-bg="{{ $bgImage }}">
        <h1>Our {{ $category->name }}</h1>
        <div class="line"></div>
    </div>

    <!-- ======= Category Products Section ======= -->
    <section id="portfolio" class="portfolio section-bg">
        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="section-title">
                <h2>Our {{ $category->name }}</h2>
                <p>{{ $category->description }}</p>
            </div>


            @if ($subcategories->isNotEmpty())
                <div class="row">
                    <div class="col-lg-12">
                        <ul id="portfolio-flters">
                            <li data-filter="*" class="filter-active">All</li>
                            @foreach ($subcategories as $subcat)
                                <li data-filter=".filter-{{ \Str::slug($subcat->name) }}">{{ $subcat->name }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            @endif



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
                                        <img src="{{ asset('uploads/product/' . $product->logo) }}" class="img-fluid"
                                            alt="{{ $product->title }}">
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
    <!-- End Category Products Section -->

    <!-- JS for click redirection -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const wraps = document.querySelectorAll('.portfolio-wrap');
            wraps.forEach(function(wrap) {
                wrap.addEventListener('click', function() {
                    const url = wrap.getAttribute('data-url');
                    window.location.href = url;
                });
            });
        });
    </script>

    <!-- JS for lazy background loading -->
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
                    }
                );

                observer.observe(bg);
            });
        });
    </script>

@endsection
