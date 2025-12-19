@extends('layout.app')


@section('title', 'Masar Arabia – Cooling & Ventilation Solutions')

@section('description', 'Masar Arabia provides high-quality cooling solutions, ventilation products, and advanced HVAC systems for commercial and industrial needs.')

@section('keywords', 'cooling solutions, ventilation fans, HVAC, industrial fans, air handling units')

@section('content')
@include('home.main-slider')
@include('home.tabs-section')
@include('home.services-section')
@include('home.products')
@include('home.fact-counter')
@include('home.sponsors')
@include('home.why-us')
    {{-- <div class="container py-4">
        <h1 class="mb-4">Home page</h1>

        @if ($mainProducts->count())
            <div class="row">
                @foreach ($mainProducts as $main)
                    <div class="col-md-4 mb-4">
                        <div class="card shadow-sm h-100">
                      
                           @if ($main->home_image)
                            <img src="{{ asset('uploads/products/' . $main->slug . '/' . $main->home_image) }}"
                                class="card-img-top" alt="{{ $main->home_alt ?? $main->name }}">
                       
                            @else
                                <img src="{{ asset('assets/no-image.png') }}" class="card-img-top" alt="No Image">
                            @endif

                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">{{ $main->name }}</h5>

                                <p class="card-text">
                                    {{ \Illuminate\Support\Str::limit($main->description, 120) }}
                                </p>

                                <a href="{{ route('products.main', $main->slug) }}" class="btn btn-primary mt-auto">
                                    View Products
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <p>No products available.</p>
        @endif
       
        <form action="{{ route('search') }}" method="GET" class="d-flex mb-4">
            <input type="text" name="q" class="form-control me-2" placeholder="Search products..." required>
            <button type="submit" class="btn btn-primary">Search</button>
        </form>

    </div> --}}
@endsection
