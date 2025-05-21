@extends('front.layouts.app')

@php
    $title = 'Case Study - Opus Technology Limited';
    $description =
        'Explore the case studies of how Opus Technology has helped businesses achieve remarkable results through our innovative technology solutions. Learn about our successful projects and their impact on various industries.';
    $keywords =
        'case study, technology solutions, business success, Opus Technology, case studies, technology impact, business transformation, project success';
@endphp


<style>
    .row {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        /* Ensures proper alignment */
    }

    .fixed-card {
        display: flex;
        flex-direction: column;
        height: 100%;
        border: 1px solid #ddd;
        /* Optional: Adds a border */
        border-radius: 8px;
        /* Optional: Rounds corners */
        overflow: hidden;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        /* Optional: Adds shadow */
    }

    .card-img-top {
        height: 150px;
        /* Ensures images are same size */
        object-fit: contain;
        /* Ensures the image fits */
        padding: 10px;
        /* Optional: Adds spacing */
    }

    .card-block {
        flex-grow: 1;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        /* Ensures content is balanced */
        padding: 15px;
    }

    .card-title {
        min-height: 50px;
        /* Ensures uniformity */
        font-size: 16px;
        font-weight: bold;
        text-align: center;
    }

    .card-text-excerpt {
        display: -webkit-box;
        -webkit-line-clamp: 3;
        /* Limits text to 3 lines */
        -webkit-box-orient: vertical;
        overflow: hidden;
        text-overflow: ellipsis;
        font-size: 14px;
        min-height: 4.5em;
        /* Adjust based on line-clamp */
    }

    .card .btn {
        width: 100%;
        /* Ensures consistency */
        background-color: #007bff;
        color: white;
        font-weight: bold;
        padding: 10px;
        border-radius: 5px;
        text-align: center;
        margin-top: auto;
        /* Pushes to bottom */
    }
</style>

@section('content')

    <div class="contact-bg lazy-bg" data-bg="{{ asset('front-assets/img/case.jpg') }}">
        <h1>Case Study</h1>
        <div class="line"></div>
    </div>


    <section id="blog-card" class="padding-top-bottom-90">





        <div class="container">
            <div class="section-title">
                <h2>Case Study</h2>
                <p>Opus Technology Ltd is a leading Software Development and IT consulting service provider company.
                    Combining unparalleled experience, domain expertise, best practices & comprehensive capabilities across
                    various industries & business functions, it collaborates with customers to help them effectively address
                    their operational challenges & grow their businesses stronger.</p>
            </div>
            <div class="row">
                @foreach ($caseStudy as $case)
                    <div class="col-md-3 mb-4">
                        <div class="card fixed-card clickable-card"
                            data-url="{{ route('front.showCaseStudy', ['slug' => $case->slug]) }}">
                            <img class="card-img-top img-responsive max-width-100"
                                src="{{ asset('uploads/casestudies/' . $case->image) }}" loading="lazy"
                                alt="{{ $case->title }}">
                            <div class="card-block p-3">
                                <p class="card-text"><small class="text-muted blog-category">{{ $case->category }}</small>
                                </p>
                                <h4 class="card-title">{{ $case->title }}</h4>
                                <p class="card-text"><small class="text-muted italic">{{ $case->date }}</small></p>
                                <p class="card-text-excerpt">{{ $case->excerpt }}</p>
                                <a href="{{ route('front.showCaseStudy', ['slug' => $case->slug]) }}"
                                    class="btn btn-primary mt-auto" aria-label="Read more about {{ $case->title }}">
                                    Read More <i class="ion-ios-arrow-thin-right"></i>
                                </a>

                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>



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
