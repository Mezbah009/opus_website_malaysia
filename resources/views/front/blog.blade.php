@extends('front.layouts.app')

@php
    $title = 'Blogs - Opus Technology Limited';
    $description =
        'Read the latest blogs from Opus Technology, where we share insights on the latest trends, technological advancements, and industry news. Stay updated with expert opinions and thought leadership.';
    $keywords =
        'blogs, technology trends, industry news, Opus Technology, expert opinions, tech blogs, technology insights, thought leadership';
@endphp

@section('content')
    <style>
        .row {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            /* Ensures proper alignment */
        }

        .card {
            display: flex;
            flex-direction: column;
            height: 100%;
            border: 1px solid #ddd;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .card-img-top {
            height: 350px;
            /* Ensures uniform image size */
            object-fit: cover;
            width: 100%;
        }

        .card-block {
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            padding: 20px;
        }

        .card-title {
            min-height: 50px;
            font-size: 18px;
            font-weight: bold;
        }

        .card-text {
            flex-grow: 1;
        }

        .card-text-excerpt {
            display: -webkit-box;
            -webkit-line-clamp: 3;
            /* Limits to 3 lines */
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-overflow: ellipsis;
            font-size: 14px;
            min-height: 4.5em;
            /* Adjust based on line-clamp */
        }

        .card .btn {
            width: 37%;
            background-color: #007bff;
            color: white;
            font-weight: bold;
            padding: 10px;
            border-radius: 5px;
            text-align: center;
            margin-top: auto;
        }
    </style>


    <div class="contact-bg lazy-bg" data-bg="{{ asset('front-assets/img/blogs.jpg') }}">
        <h1>Blogs</h1>
        <div class="line"></div>
    </div>

    <section id="blog-card" class="padding-top-bottom-90">
        <div class="container">
            <div class="heading-wraper text-center margin-bottom-80">
                <h4>Latest Published</h4>
                <hr class="heading-devider gradient-orange">
            </div>
            <div class="row">
                @foreach ($blogPosts as $post)
                    <div class="col-md-6 mb-4">
                        <div class="card">
                            <img class="card-img-top img-responsive" src="{{ asset('uploads/blogs/' . $post->image) }}"
                                loading="lazy" alt="{{ $post->title }}">
                            <div class="card-block">
                                <p class="card-text"><small class="text-muted blog-category">{{ $post->category }}</small>
                                </p>
                                <h4 class="card-title">{{ $post->title }}</h4>
                                <p class="card-text"><small class="text-muted italic">{{ $post->date }}</small></p>
                                <p class="card-text-excerpt">{{ $post->excerpt }}</p>
                                <a href="{{ route('blog.show', ['slug' => $post->slug]) }}" class="btn"
                                    aria-label="Read more about {{ $post->title }}">
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
