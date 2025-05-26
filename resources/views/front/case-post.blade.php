@extends('front.layouts.app')

@php
    $title = "Opus System Solutions Sdn Bhd - Software & IT Solutions in Malaysia";
    $description = "Opus Technology Limited is a leading software company in Malaysia providing enterprise solutions, fintech, AI, cybersecurity, and IT consultancy.";
    $keywords = "Software Company in Malaysia, IT Solutions, Enterprise Software, Fintech, AI, Cybersecurity, Mobile Apps, Web Development";
@endphp


@section('content')
    <br><br>
    <div class="container ">
        <div class="row">
            <div class="">
                <!-- Post content-->
                <article>
                    <!-- Post header-->
                    <header class="mb-12">
                        <!-- Post title-->
                        <h1 class="fw-bolder mb-1">{{ $caseStudyPost->title }}</h1>
                    </header>
                    <!-- Post content-->
                    <p class="fs-6 mb-12">{!! $caseStudyPost->description !!}</p>
                </article>

            </div>

        </div>
    </div>
    <br><br><br><br>
@endsection
