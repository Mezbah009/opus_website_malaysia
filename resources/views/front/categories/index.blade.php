@extends('front.layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Categories</h1>
    @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
    <div class="row">
        @foreach ($categories as $category)
            <div class="col-md-3 mb-4">
                <div class="card" >
                    {{-- Construct the full URL for the image --}}
                    <img src="{{ 'https://medicus-ecommerce.opusdemo.com/public/uploads/category/' . $category['image'] }} "
                         class="card-img-top"
                         alt="{{ $category['name'] }}">
                    <div class="card-body">
                        <h3 class="card-title">{{ $category['name'] }}</h3>
                        {{-- <p class="card-text">{{ $category['slug'] }}</p> --}}
                        @if ($category['showHome'] === 'Yes')
                            <span class="badge bg-success">Featured</span>
                        @endif
                        {{-- <p class="text-muted">Updated: {{ \Carbon\Carbon::parse($category['updated_at'])->format('M d, Y') }}</p> --}}
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
