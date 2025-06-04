@extends('front.layouts.app')

@php
    $title = "Opus Technology Limited - Software & IT Solutions in Bangladesh";
    $description = "Opus Technology Limited is a leading software company in Bangladesh providing enterprise solutions, fintech, AI, cybersecurity, and IT consultancy.";
    $keywords = "Software Company in Bangladesh, IT Solutions, Enterprise Software, Fintech, AI, Cybersecurity, Mobile Apps, Web Development";
@endphp

@section('content')
    <br>
    <br>
    <br>



    <div class="container">
        <div class="row">

            <div class="col-lg-8">

                <!-- Blog Details Section -->
                <section id="blog-details" class="blog-details section" style="padding: 60px 0px 10px;">
                    <div class="container">

                        <article class="article">

                            <div class="post-img">
                                <img src="{{ asset('uploads/blogs/' . $blog->feature_image) }}" alt="{{ $blog->title }}"
                                    class="img-fluid">
                            </div>

                            <h2 class="title">{{ $blog->title }}
                            </h2>

                            <div class="meta-top">
                                <ul>
                                    <li class="d-flex align-items-center">
                                        <i class="bi bi-person"></i>
                                        <a href="javascript:void(0);">{{ $blog->author->name ?? 'Unknown Author' }}</a>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <i class="bi bi-clock"></i>
                                        <a href="javascript:void(0);">
                                            <time
                                                datetime="{{ $blog->published_at }}">{{ \Carbon\Carbon::parse($blog->published_at)->format('M d, Y') }}</time>
                                        </a>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <i class="bi bi-chat-dots"></i>
                                        <a href="javascript:void(0);">{{ $blog->comments->count() }} Comments</a> {{-- Replace with dynamic comment count if available --}}
                                    </li>
                                </ul>
                            </div>
                            <!-- End meta top -->

                            <div class="content">
                                <div>{!! $blog->content !!}</div>

                            </div><!-- End post content -->

                            <div class="meta-bottom">
                                <i class="bi bi-folder"></i>
                                <ul class="cats">
                                    @foreach ($blog->categories as $category)
                                        <li>
                                            <a
                                                href="{{ route('front.blog.category', $category->id) }}">{{ $category->name }}</a>
                                        </li>
                                    @endforeach
                                </ul>

                                <i class="bi bi-tags"></i>
                                <ul class="tags">
                                    @foreach ($blog->tags as $tag)
                                        <li>
                                            <a href="{{ route('front.blog.tag', $tag->id) }}">{{ $tag->name }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                            <!-- End meta bottom -->

                        </article>

                    </div>
                </section><!-- /Blog Details Section -->

                <!-- Blog Author Section -->
                <section id="blog-author" class="blog-author section">
                    <div class="container">
                        <div class="author-container d-flex align-items-center">
                            <img src="{{ asset('uploads/authors/' . $blog->author->profile_image) }}"
                                class="rounded-circle flex-shrink-0" alt="{{ $blog->author->name }}">

                            <div>
                                <h4>{{ $blog->author->name }}</h4>

                                <div class="social-links">
                                    {{-- Optional: Add dynamic social links if available --}}
                                    @if (!empty($blog->author->twitter))
                                        <a href="{{ $blog->author->twitter }}"><i class="bi bi-twitter-x"></i></a>
                                    @endif
                                    @if (!empty($blog->author->facebook))
                                        <a href="{{ $blog->author->facebook }}"><i class="bi bi-facebook"></i></a>
                                    @endif
                                    @if (!empty($blog->author->instagram))
                                        <a href="{{ $blog->author->instagram }}"><i class="bi bi-instagram"></i></a>
                                    @endif
                                </div>

                                <p>{!! $blog->author->bio !!}</p>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- /Blog Author Section -->

                <!-- Blog Comments Section -->
                <section id="blog-comments" class="blog-comments section">
                    <div class="container">
                        <h4 class="comments-count">{{ $blog->comments->count() }} Comments</h4>

                        @foreach ($comments as $comment)
                            @include('partials.comment', ['comment' => $comment])
                        @endforeach


                    </div>


                </section>
                <!-- /Blog Comments Section -->

                <!-- Comment Form Section -->
                <section id="comment-form" class="comment-form section" style="padding: 60px 0px 10px;" >
                    <div class="container">

                        <!-- Flash Messages -->
                        @if (session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul class="mb-0">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif


                        <form action="{{ route('blog.comment.store') }}" method="POST">
                            @csrf
                            <input type="hidden" name="blog_id" value="{{ $blog->id }}">
                            <input type="hidden" name="parent_id" id="parent_id" value="">

                            <h4>Post Comment</h4>
                            <p>Your email address will not be published. Required fields are marked *</p>

                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input name="name" type="text" class="form-control" placeholder="Your Name*"
                                        required>
                                </div>
                                <div class="col-md-6 form-group">
                                    <input name="email" type="email" class="form-control" placeholder="Your Email*">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col form-group">
                                    <input name="website" type="text" class="form-control" placeholder="Your Website">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col form-group">
                                    <textarea name="comment" class="form-control" placeholder="Your Comment*" required></textarea>
                                </div>
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Post Comment</button>
                            </div>
                        </form>


                    </div>
                </section><!-- /Comment Form Section -->

                <br>
                  <br>
                    <br>
                      <br>

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
                    </div><!--/Recent Posts Widget -->

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
                    </div><!--/Tags Widget -->

                </div>

            </div>

        </div>
    </div>
@endsection

@section('scripts')
    <script>
        function setReply(commentId) {
            document.getElementById('parent_id').value = commentId;
            document.getElementById('replying-to').style.display = 'block';
            window.scrollTo({
                top: document.getElementById('comment-form').offsetTop,
                behavior: 'smooth'
            });
        }

        function cancelReply() {
            document.getElementById('parent_id').value = '';
            document.getElementById('replying-to').style.display = 'none';
        }
    </script>
@endsection
