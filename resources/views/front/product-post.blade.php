@extends('front.layouts.app')

{{-- @php
    $title = "Opus Technology Limited - Software & IT Solutions in Bangladesh";
    $description = "Opus Technology Limited is a leading software company in Bangladesh providing enterprise solutions, fintech, AI, cybersecurity, and IT consultancy.";
    $keywords = "Software Company in Bangladesh, IT Solutions, Enterprise Software, Fintech, AI, Cybersecurity, Mobile Apps, Web Development";
@endphp --}}


@php
    $title = $meta_title ?? 'Opus Technology Limited';
    $description = $meta_description ?? '';
    $keywords = $meta_keywords ?? '';
@endphp



@section('content')
    <style>
        /* CSS Styling */
        .custom-section {
            padding: 100px;
            /* Adjust padding as needed */
            background-size: cover;
            background-position: center;
            position: relative;
        }

        .custom-section::before {
            content: "";
            background-color: rgba(13 30 45 / 4%);
            position: absolute;
            height: 100%;
            width: 100%;
            top: 0;
            right: 0;
            left: 0;
            bottom: 0;
            overflow: hidden;
        }

        .custom-section .container {
            position: relative;
            z-index: 1;
            text-align: left;
            padding-top: 150px;
            /* Center align content */
        }

        .custom-section img {
            max-height: 100px;
            /* Set max height for the logo */
            margin-bottom: 20px;
            /* Adjust margin as needed */
        }

        .custom-section h2 {
            color: rgb(0, 0, 0);
            /* Text color */
            font-size: 24px;
            /* Font size */
            margin-bottom: 20px;
            /* Adjust margin as needed */
        }

        .custom-section .btn-download {
            background-color: #fff;
            /* Button background color */
            color: #333;
            /* Button text color */
            padding: 10px 20px;
            /* Adjust padding as needed */
            border: none;
            border-radius: 5px;
            font-size: 16px;
            /* Font size */
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .custom-section .btn-download:hover {
            background-color: #eee;
            /* Button hover background color */
        }


        /* Request Demo Button */
        .btn-primary {
            background-color: #0E72B4;
            color: #ffffff;
            border-radius: 0px;
            /* Add rounded corners */
            transition: background-color 0.3s ease, color 0.3s ease;
            margin-top: 10px;
            padding: 10px;
            /* Smooth transition for hover effects */
        }

        .btn-primary:hover {
            background-color: #0D4472;
            /* Darker shade for hover */
            color: #ffffff;
        }

        /* Download Brochure Button */
        .btn-secondary {
            background-color: rgb(255, 255, 255);
            color: #0D4472;
            border-radius: 0px;
            /* Add rounded corners */
            transition: background-color 0.3s ease, color 0.3s ease;
            margin-top: 10px;
            padding: 10px;
        }

        .btn-secondary:hover {
            background-color: #0D4472;
            /* Darker shade for hover */
            color: #ffffff;
        }
    </style>

    {{-- first Section --}}

    <div class="" data-aos="">
        @foreach ($product_first_sections as $key => $product_first_section)
            <section id="hero{{ $key }}" class="custom-section"
                style="background-image: url('{{ asset('uploads/first_section/' . $product_first_section->image) }}');">
                <div class="container">
                    <div class="carousel-content">
                        <img src="{{ asset('uploads/first_section/' . $product_first_section->logo) }}" loading="lazy"
                            alt="Logo">
                        <h2>{{ $product_first_section->title }}</h2>
                        <button class="btn btn-primary btn-lg">Request Demo</button>
                        @if ($product_first_section->brochure)
                            <a href="{{ asset('uploads/first_section/' . $product_first_section->brochure) }}"
                                class="btn btn-secondary btn-lg" target="_blank">Download Brochure</a>
                        @endif

                    </div>
                </div>
            </section>
        @endforeach
    </div>




    {{-- second section --}}

<section id="about" class="about">
    <div class="container" data-aos="fade-up" style="box-shadow: none;">
        @foreach ($product_second_sections as $index => $product_second_section)
            <div class="section-title" style="padding-top: 60px; padding-bottom: 0 !important;">
                @if (!empty($product_second_section->logo))
                    <img src="{{ asset('uploads/first_section/' . $product_second_section->logo) }}"
                        class="img-fluid mb-3" loading="lazy" alt="">
                @endif
            </div>

            <div class="about showcase-item {{ $index % 2 == 0 ? 'left' : 'right' }}">
                <div class="row no-gutters">
                    @if ($index % 2 == 0)
                        <!-- Even index: image left, content right -->
                        <div class="col-lg-6 d-flex justify-content-center align-items-center">
                            <img src="{{ asset('uploads/first_section/' . $product_second_section->image) }}"
                                class="img-fluid" loading="lazy" alt="">
                        </div>
                        <div class="col-lg-6 d-flex flex-column justify-content-center about-content">
                            <div>
                                <p class="fs-5 mb-4 service-description">{!! $product_second_section->description !!}</p>
                            </div>
                        </div>
                    @else
                        <!-- Odd index: content left, image right -->
                        <div class="col-lg-6 d-flex flex-column justify-content-center about-content">
                            <div>
                                <p class="fs-5 mb-4 service-description">{!! $product_second_section->description !!}</p>
                            </div>
                        </div>
                        <div class="col-lg-6 d-flex justify-content-center align-items-center">
                            <img src="{{ asset('uploads/first_section/' . $product_second_section->image) }}"
                                class="img-fluid" loading="lazy" alt="">
                        </div>
                    @endif
                </div>
            </div>
        @endforeach
    </div>
</section>


    {{-- Third section --}}

    <div class="contact-body">
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">
                <div class="row">
                    @foreach ($product_third_sections as $product_third_section)
                        <div class="col-lg-3 d-flex" data-aos="fade-up">
                            <div class="info-box">
                                @if ($product_third_section->icon)
                                    <img src="{{ asset('uploads/first_section/' . $product_third_section->icon) }}"
                                        loading="lazy" alt="..." width="80px" style="padding: 8px">
                                @endif
                                <h4>{{ $product_third_section->title }}</h4>
                                <h5>{!! $product_third_section->description !!}</h5>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </div><!-- End  Section -->

    {{-- Fourth section --}}

<section id="about" class="about">
    <div class="container" data-aos="fade-up" style="box-shadow: none;">
        @foreach ($product_fourth_sections as $index => $product_fourth_section)
            <div class="section-title" style="padding-top: 60px; padding-bottom: 0 !important;">
                @if (!empty($product_fourth_section->logo))
                    <img src="{{ asset('uploads/first_section/' . $product_fourth_section->logo) }}"
                        class="img-fluid mb-3" loading="lazy" alt="">
                @endif
            </div>

            <div class="about showcase-item {{ $index % 2 == 0 ? 'left' : 'right' }}">
                <div class="row no-gutters">
                    @if ($index % 2 == 0)
                        <!-- Image on the left, content on the right -->
                        <div class="col-lg-6 d-flex justify-content-center align-items-center">
                            <img src="{{ asset('uploads/first_section/' . $product_fourth_section->image) }}"
                                class="img-fluid" loading="lazy" alt="">
                        </div>
                        <div class="col-lg-6 d-flex flex-column justify-content-center about-content">
                            <div>
                                <p class="fs-5 mb-4">{!! $product_fourth_section->description !!}</p>
                            </div>
                        </div>
                    @else
                        <!-- Content on the left, image on the right -->
                        <div class="col-lg-6 d-flex flex-column justify-content-center about-content">
                            <div>
                                <p class="fs-5 mb-4">{!! $product_fourth_section->description !!}</p>
                            </div>
                        </div>
                        <div class="col-lg-6 d-flex justify-content-center align-items-center">
                            <img src="{{ asset('uploads/first_section/' . $product_fourth_section->image) }}"
                                class="img-fluid" loading="lazy" alt="">
                        </div>
                    @endif
                </div>
            </div>
        @endforeach
    </div>
</section>

    <!-- End  Section -->

    {{-- Fifth section --}}

    <div class="contact-body">
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">
                <div class="row">
                    <div class="row">
                        @foreach ($product_fifth_sections as $product_fifth_section)
                            <div class="col-lg-3 d-flex" data-aos="fade-up">
                                <div class="info-boxs">
                                    <img src="{{ asset('uploads/first_section/' . $product_fifth_section->icon) }}"
                                        loading="lazy" alt="..." width="80px"
                                        style="padding: 8px; display: block; margin: 0 auto;">
                                    <h3 style="text-align:center; margin-bottom: 10px;">{{ $product_fifth_section->title }}
                                    </h3>
                                    <p>{!! $product_fifth_section->description !!}
                                    </p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- End  Section -->

    {{-- sixth section --}}

    <section id="about" class="about">
        <div class="container" data-aos="fade-up" style="box-shadow: none;">
            @foreach ($product_sixth_sections as $key => $product_sixth_section)
                <div class="row no-gutters">
                    <div class="col-lg-12 d-flex flex-column justify-content-center about-content">
                        <div class="section-title">
                            <h1>{{ $product_sixth_section->title }}</h1>
                            <p>{!! $product_sixth_section->description !!} </p>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </section>

    <!-- seventh section -->
    <section id="partners">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center">
                        {{-- <h3>They Trust Us</h3> --}}
                        {{-- <p>Duis aute irure dolor in reprehenderit in voluptate</p> --}}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="clients">
                    @foreach ($product_seventh_sections as $product_seventh_section)
                        <div class="col-md-12">
                            <a href="{{ $product_seventh_section->link }}" target="_blank">
                                <img src="{{ asset('uploads/first_section/' . $product_seventh_section->image) }}"
                                    loading="lazy" alt="Client Logo" width="150px">
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>

        </div>
    </section> <!-- End Clients Section -->


    <script>
        function downloadBrochure(url) {
            var xhr = new XMLHttpRequest();
            xhr.open('GET', url, true);
            xhr.responseType = 'blob';

            xhr.onload = function() {
                if (xhr.status === 200) {
                    var blob = xhr.response;
                    var link = document.createElement('a');
                    link.href = window.URL.createObjectURL(blob);
                    link.download = 'brochure.pdf';
                    link.click();
                }
            };
            xhr.send();
        }
    </script>

    <script>
        function redirectToDemo() {
            window.location.href = "{{ route('front.demo') }}";
        }
    </script>


    <script type="application/ld+json">
    {
        "@context": "https://schema.org/",
        "@type": "SoftwareApplication",
        "name": "{{ $sections->title }}",
        "url": "{{ url()->current() }}",
        "applicationCategory": "FinanceApplication",
        "operatingSystem": "Web-based",
        "creator": {
        "@type": "Organization",
        "name": "Opus Technology Limited"
        },
        "offers": {
        "@type": "Offer",
        "priceCurrency": "USD",
        "price": "{{ $sections->price ?? 'Contact for Pricing' }}",
        "availability": "https://schema.org/InStock"
        }
    }
    </script>
@endsection
