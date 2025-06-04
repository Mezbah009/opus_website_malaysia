@extends('front.layouts.app')

@php
    $title = 'Blog - Opus Technology Limited';
    $description =
        'Read the latest blogs from Opus Technology, where we share insights on the latest trends, technological advancements, and industry news. Stay updated with expert opinions and thought leadership.';
    $keywords =
        'blogs, technology trends, industry news, Opus Technology, expert opinions, tech blogs, technology insights, thought leadership';
@endphp


@section('content')

    <!-- Recent Posts Section -->
    <div class="contact-bg lazy-bg" data-bg="{{ asset('front-assets/img/blogs.jpg') }}">
        <h1>Blog</h1>
        <div class="line"></div>
    </div>

    <br> <br>

    <div class="container">
        <div class="row">

            <div class="col-lg-8">

                <!-- Blog Posts Section -->
                <section id="blog-posts" class="blog-posts section" style="padding: 60px 0px 0;">

                    @if (isset($query))
                        <h3 class="mb-4">Search results for: "{{ $query }}"</h3>

                        @if ($blogs->isEmpty())
                            <p>No blogs found matching your search.</p>
                        @endif
                    @endif


                    <div class="container">

                        <div class="row gy-4">

                            @foreach ($blogs as $blog)
                                <div class="col-12">
                                    <article>
                                        <div class="post-img">
                                            <img src="{{ asset('uploads/blogs/' . $blog->feature_image) }}"
                                                alt="{{ $blog->title }}" class="img-fluid">
                                        </div>
                                        <h2 class="title">
                                            <a href="{{ route('front.blog.details', $blog->slug) }}">{{ $blog->title }}</a>
                                        </h2>
                                        <div class="meta-top">
                                            <ul>
                                                <li><i class="bi bi-person"></i> {{ $blog->author->name ?? 'Admin' }}</li>
                                                <li>
                                                    <i class="bi bi-clock"></i>
                                                    {{ $blog->published_at ? $blog->published_at->format('F d, Y') : 'Not Published' }}
                                                </li>
                                                <li>
                                                    <i class="bi bi-chat-dots"></i>
                                                    <a href="javascript:void(0);">{{ $blog->comments->count() }}
                                                        Comments</a> {{-- Replace with dynamic comment count if available --}}
                                                </li>
                                            </ul>
                                        </div>


                                        <div class="content">
                                            <p>{{ Str::limit(strip_tags($blog->content), 150) }}</p>
                                            <div class="read-more">
                                                <a href="{{ route('front.blog.details', $blog->slug) }}">Read
                                                    More</a>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            @endforeach
                            <!-- End post list item -->

                        </div><!-- End blog posts list -->

                    </div>

                </section><!-- /Blog Posts Section -->

                <!-- Blog Pagination Section -->
                <section id="blog-pagination" class="blog-pagination section">
                    <div class="container">
                        <div class="d-flex justify-content-center">
                            <ul>
                                {{-- Previous Page Link --}}
                                @if ($blogs->onFirstPage())
                                    <li><span><i class="bi bi-chevron-left"></i></span></li>
                                @else
                                    <li><a href="{{ $blogs->previousPageUrl() }}"><i class="bi bi-chevron-left"></i></a>
                                    </li>
                                @endif

                                {{-- Pagination Elements --}}
                                @foreach ($blogs->getUrlRange(1, $blogs->lastPage()) as $page => $url)
                                    @if ($page == $blogs->currentPage())
                                        <li><a href="#" class="active">{{ $page }}</a></li>
                                    @elseif ($page == 1 || $page == $blogs->lastPage() || abs($page - $blogs->currentPage()) <= 1)
                                        <li><a href="{{ $url }}">{{ $page }}</a></li>
                                    @elseif ($page == $blogs->currentPage() - 2 || $page == $blogs->currentPage() + 2)
                                        <li>...</li>
                                    @endif
                                @endforeach

                                {{-- Next Page Link --}}
                                @if ($blogs->hasMorePages())
                                    <li><a href="{{ $blogs->nextPageUrl() }}"><i class="bi bi-chevron-right"></i></a></li>
                                @else
                                    <li><span><i class="bi bi-chevron-right"></i></span></li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </section>
                <!-- /Blog Pagination Section -->

                <br>
                <br>
                <br>
                <br><br>



            </div>

            <div class="col-lg-4 sidebar">

                <div class="widgets-container">

                    <!-- Search Widget -->
                    <div class="search-widget widget-item">

                        <h3 class="widget-title">Search</h3>
                        <form action="{{ route('front.blog.search') }}" method="GET">
                            <input type="text" name="q" placeholder="Search blog" value="{{ request('q') }}">
                            <button type="submit" title="Search"><i class="bi bi-search"></i></button>
                        </form>

                    </div><!--/Search Widget -->

                    <!-- Categories Widget -->
                    <div class="categories-widget widget-item">
                        <h3 class="widget-title">Categories</h3>
                        <ul class="mt-3">
                            @foreach ($categories as $cat)
                                <li>
                                    <a href="{{ route('front.blog.category', $cat->id) }}">
                                        {{ $cat->name }} <span>({{ $cat->blogs_count }})</span>
                                    </a>
                                </li>
                            @endforeach


                        </ul>
                    </div>
                    <!--/Categories Widget -->

                    <!-- Recent Posts Widget -->
                    <div class="recent-posts-widget widget-item">
                        <h3 class="widget-title">Recent Posts</h3>

                        @foreach ($recentPosts as $recent)
                            <div class="post-item d-flex align-items-center">
                                <img src="{{ asset('uploads/blogs/' . $recent->feature_image) }}"
                                    alt="{{ $recent->title }}" class="flex-shrink-0" width="80">
                                <div class="ms-3">
                                    <h4><a
                                            href="{{ route('front.blog.details', $recent->slug) }}">{{ Str::limit($recent->title, 50) }}</a>
                                    </h4>
                                    @if ($recent->published_at)
                                        <time datetime="{{ $recent->published_at }}">
                                            {{ $recent->published_at->format('M d, Y') }}
                                        </time>
                                    @else
                                        <time datetime="">
                                            Not Published
                                        </time>
                                    @endif

                                </div>
                            </div>
                        @endforeach
                    </div>
                    <!--/Recent Posts Widget -->

                    <!-- Tags Widget -->
                    <div class="tags-widget widget-item">
                        <h3 class="widget-title">Tags</h3>
                        <ul>
                            @foreach ($tags as $tag)
                                <li>
                                    <a href="{{ route('front.blog.tag', $tag->id) }}">{{ $tag->name }}</a>
                                </li>
                            @endforeach

                        </ul>
                    </div>
                    <!--/Tags Widget -->

                </div>

            </div>

        </div>
    </div><!-- /Recent Posts Section -->


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
