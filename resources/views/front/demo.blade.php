@extends('front.layouts.app')

@php
    $title = "Opus Technology Limited - Software & IT Solutions in Bangladesh";
    $description = "Opus Technology Limited is a leading software company in Bangladesh providing enterprise solutions, fintech, AI, cybersecurity, and IT consultancy.";
    $keywords = "Software Company in Bangladesh, IT Solutions, Enterprise Software, Fintech, AI, Cybersecurity, Mobile Apps, Web Development";
@endphp


<style>
    .contact {
        background: #ffffff;
        padding: 50px 0;
    }
    .contact .container {
        background: #fff;
        padding: 30px;
        border-radius: 0px;
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
    }
    .contact .form-control {
        border-radius: 4px;
        padding: 10px 15px;
        margin-bottom: 20px;
        box-shadow: none;
        border: 1px solid #ddd;
        transition: border-color 0.3s;
    }
    .contact .form-control:focus {
        border-color: #007bff;
    }
    .contact .btn-primary {
        background: #007bff;
        border: none;
        padding: 10px 20px;
        border-radius: 4px;
        transition: background-color 0.3s;
    }
    .contact .btn-primary:hover {
        background: #0056b3;
    }
    .alert {
        margin-bottom: 20px;
    }
</style>

@section('content')

<section>
    <div class="container" style="text-align: center">
        <h1>Discover How Simple It Is,To Simplify Your Business</h1>
    </div>
</section>
<section id="contact" class="contact py-5">
    <div class="container" data-aos="fade-up">
        <div class="row justify-content-center">
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">

                <!-- Success message -->
                @if(Session::has('success'))
                    <div class="alert alert-success">
                        {{ Session::get('success') }}
                    </div>
                @endif

                <!-- Error message -->
                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif


                <div style="text-align: center; padding-bottom: 30px;">
                    <h3>Request for Software Demo</h3>
                </div>

                <form action="{{ route('demo.store') }}" method="post" id="demoForm" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6 form-group">
                            <input type="text" name="first_name" class="form-control" id="first_name" placeholder="First Name" required>
                        </div>
                        <div class="col-lg-6 form-group">
                            <input type="text" name="last_name" class="form-control" id="last_name" placeholder="Last Name" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 form-group">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                        </div>
                        <div class="col-lg-6 form-group">
                            <input type="tel" class="form-control" name="mobile" id="mobile" placeholder="Your Phone Number" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <select class="form-control" id="product_id" name="product_id" required>
                            <option value="" disabled selected>Select a product</option>
                            @foreach($products as $product)
                                <option value="{{ $product->id }}">{{ $product->title }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="org_name" id="org_name" placeholder="Organization Name" required>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary" id="submitBtn">Send Message</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection


