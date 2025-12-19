@extends('layout.app')


@section('title', 'Masar Arabia – Cooling & Ventilation Solutions')

@section('description', 'Masar Arabia provides high-quality cooling solutions, ventilation products, and advanced HVAC systems for commercial and industrial needs.')

@section('keywords', 'cooling solutions, ventilation fans, HVAC, industrial fans, air handling units')

@section('content')
<!-- Page Title -->
<section class="page-title" style="background-image: url('{{ asset('assets/images/main-products/banner-1.png') }}');">
    <div class="auto-container">
        <div class="clearfix">

            <!-- Title -->
            <div class="title-column">
                <h1>{{ $pageTitle ?? 'Our Products' }}</h1>
            </div>

            <!-- Breadcrumb -->
            <div class="breadcrumb-column">
                <ul class="bread-crumb clearfix">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li class="active">Our Products</li>
                </ul>
            </div>

        </div>
    </div>
</section>
<!--Services Style Four-->
<section class="services-style-four">
    <div class="auto-container">
        <div class="default-sec-title left-aligned">
            <h2>Products we provide</h2>
            <div class="desc-text">
                It is a long established fact that a reader will be distracted by the readable content of a page.
            </div>
        </div>

        <div class="row clearfix">

            @foreach ($mainProducts as $main)
                <!--Featured Service Column-->
                <div class="featured-service-column col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="inner-box wow fadeIn" data-wow-delay="200ms" data-wow-duration="1500ms">

                        <figure class="image-box">
                            <a href="{{ route('products.main', $main->slug) }}">
                                <img src="{{ asset('uploads/products/' . $main->slug . '/' . $main->main_image) }}"
                                     alt="{{ $main->main_alt ?? $main->name }}" class="img-responsive">
                            </a>

                            <!-- ICON IMAGE -->
                            <div class="icon-box">
                                <span>
                                    <img src="{{ asset('uploads/products/' . $main->slug . '/' . $main->icon_image) }}"
                                         alt="{{ $main->icon_alt ?? $main->name }}" class="img-responsive">
                                </span>
                            </div>
                        </figure>

                        <div class="lower-content">
                            <h3>{{ $main->name }}</h3>

                            <div class="text">
                                {{ Str::limit($main->description, 100) }}
                            </div>

                            <a href="{{ route('products.main', $main->slug) }}"
                               class="theme-btn btn-style-two">More</a>
                        </div>

                    </div>
                </div>
            @endforeach

        </div>
    </div>
</section>




    {{-- <div class="container py-5">
        <h1 class="mb-4 text-center">All Products</h1>
        <div class="row">
            @foreach ($mainProducts as $main)
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm">
                        <img src="{{ asset('uploads/products/' . $main->slug . '/' . $main->icon_image) }}"
                            class="card-img-top" alt="{{ $main->icon_alt ?? $main->name }}">
                        <img src="{{ asset('uploads/products/' . $main->slug . '/' . $main->main_image) }}"
                            class="card-img-top" alt="{{ $main->main_alt ?? $main->name }}">
                        <img src="{{ asset('uploads/products/' . $main->slug . '/' . $main->banner_image) }}"
                            class="card-img-top" alt="{{ $main->banner_alt ?? $main->name }}">

                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">{{ $main->name }}</h5>
                            <p class="card-text">{{ Str::limit($main->description, 100) }}</p>
                            <a href="{{ route('products.main', $main->slug) }}" class="btn btn-primary mt-auto">View
                                Products</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div> --}}
@endsection
