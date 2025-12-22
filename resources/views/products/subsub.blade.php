@extends('layout.app')


@section('title', $subSubCategory->seo_title)

@section('description', $subSubCategory->seo_description)

@section('keywords', $subSubCategory->seo_keywords)


@section('content')
    <!-- Page Title -->
    <section class="page-title"
        style="background-image:url('{{ asset('uploads/products/' . $mainProduct->slug . '/' . $mainProduct->banner_image) }}');">

        <div class="auto-container">
            <div class="clearfix">

                <!-- Title -->
                <div class="title-column">
                    <h1>{{ $subSubCategory->name }}</h1>
                </div>

                <!-- Breadcrumb -->
                <div class="breadcrumb-column">
                    <ul class="bread-crumb clearfix">
                        <li>
                            <a href="{{ route('products.index') }}">All Products</a>
                        </li>
                        <li>
                            <a href="{{ route('products.main', $mainProduct->slug) }}">
                                {{ $mainProduct->name }}
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('products.sub', [$mainProduct->slug, $subCategory->slug]) }}">
                                {{ $subCategory->name }}
                            </a>
                        </li>
                        <li class="active">
                            {{ $subSubCategory->name }}
                        </li>
                    </ul>
                </div>

            </div>

        </div>
    </section>
    <!-- Shop Single -->
    <div class="shop-single shop-page">
        <div class="outer-container shop-container">

            <!-- Product Info Section -->
            <section class="prod-info-section">

                <div class="row clearfix">

                    <!-- Image Column -->
                    <div class="carousel-column col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="carousel-outer wow fadeInLeft">

                            @if ($subSubCategory->image_detail)
                                <img src="{{ asset(
                                    'uploads/products/' .
                                        $mainProduct->slug .
                                        '/' .
                                        $subCategory->slug .
                                        '/' .
                                        $subSubCategory->slug .
                                        '/' .
                                        $subSubCategory->image_detail,
                                ) }}"
                                    class="img-responsive"
                                    alt="{{ $subSubCategory->image_detail_alt ?? $subSubCategory->name }}">
                            @else
                                <img src="{{ asset('assets/no-image.png') }}" class="img-responsive" alt="No Image">
                            @endif

                        </div>
                    </div>

                    <!-- Content Column -->
                    <div class="content-column col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="outer wow fadeInRight">

                            <div class="title-box">
                                <h2>{{ $subSubCategory->name }}</h2>

                                @if ($subSubCategory->features)
                                    <ul class="styled-list-three">
                                        {!! $subSubCategory->features !!}
                                    </ul>
                                @endif
                            </div>

                        </div>
                    </div>

                </div>

            </section>
            <!--Product Info Tabs-->
            <div class="product-info-tabs">

                <!--Product Tabs-->
                <section class="prod-tabs" id="product-tabs">

                    <!--Tab Btns-->
                    <div class="tab-btns clearfix">

                        @if (!empty($subSubCategory->description_heading))
                            <a href="#prod-description" class="tab-btn active-btn">
                                {{ $subSubCategory->description_heading }}
                            </a>
                        @endif

                        @if (!empty($subSubCategory->technical_parameters_heading))
                            <a href="#prod-technical-1"
                                class="tab-btn {{ empty($subSubCategory->description_heading) ? 'active-btn' : '' }}">
                                {{ $subSubCategory->technical_parameters_heading }}
                            </a>
                        @endif

                        @if (!empty($subSubCategory->detail_images_heading))
                            <a href="#prod-images"
                                class="tab-btn {{ empty($subSubCategory->description_heading) && empty($subSubCategory->technical_parameters_heading) ? 'active-btn' : '' }}">
                                {{ $subSubCategory->detail_images_heading }}
                            </a>
                        @endif

                    </div>
                    <!--Tabs Container-->
                    <div class="tabs-container">

                        {{-- DESCRIPTION --}}
                        @if (!empty($subSubCategory->description_heading))
                            <div class="tab active-tab" id="prod-description">
                                <div class="content">
                                    {!! $subSubCategory->description !!}
                                </div>
                            </div>
                        @endif

                        {{-- TECHNICAL PARAMETERS --}}
                        @if (!empty($subSubCategory->technical_parameters_heading))
                            <div class="tab {{ empty($subSubCategory->description_heading) ? 'active-tab' : '' }}"
                                id="prod-technical-1">
                                <div class="content">
                                    @if (!empty($subSubCategory->technical_parameters))
                                        {!! $subSubCategory->technical_parameters !!}
                                    @endif
                                </div>
                            </div>
                        @endif

                        {{-- DETAIL IMAGES --}}
                        @if (!empty($subSubCategory->detail_images_heading) && !empty($detailImages['images']))
                            <div class="tab
            {{ empty($subSubCategory->description_heading) && empty($subSubCategory->technical_parameters_heading) ? 'active-tab' : '' }}"
                                id="prod-images">

                                <div class="content">
                                    <div class="row">
                                        @foreach ($detailImages['images'] as $img)
                                            <div class="col-lg-6 col-md-6 mb-4 col-sm-12 col-xs-12 mb-20">
                                                <img src="{{ asset(
                                                    'uploads/products/' . $mainProduct->slug . '/' . $subCategory->slug . '/' . $subSubCategory->slug . '/' . $img,
                                                ) }}"
                                                    class="img-responsive" alt="{{ $subSubCategory->name }}">
                                            </div>
                                        @endforeach
                                        
                                    </div>
                                </div>

                            </div>
                        @endif

                    </div>




                </section>

            </div>


        </div>

    </div>







    {{-- <div class="container my-4">

        <div class="card mb-4" style="max-width: 600px;">
            @if ($subSubCategory->image_detail)
                <img src="{{ asset('uploads/products/' . $mainProduct->slug . '/' . $subCategory->slug . '/' . $subSubCategory->slug . '/' . $subSubCategory->image_detail) }}"
                    class="card-img-top" alt="{{ $subSubCategory->image_detail_alt ?? $subSubCategory->name }}">
            @endif
            <div class="card-body">
                <h5 class="card-title">{{ $subSubCategory->name }}</h5>
                @if ($subSubCategory->description)
                    <p class="card-text">{{ $subSubCategory->description }}</p>
                @endif
               
            </div>
        </div>
        
        @if (!empty($subSubCategory->detail_images_heading) && !empty($detailImages['images']))
            <div class="container my-4">
                <h3 class="mb-3">{{ $subSubCategory->detail_images_heading }}</h3>

                <div class="row">
                    @foreach ($detailImages['images'] as $img)
                        <div class="col-md-4 mb-3">
                            <div class="card">
                                <img src="{{ asset('uploads/products/' . $mainProduct->slug . '/' . $subCategory->slug . '/' . $subSubCategory->slug . '/' . $img) }}"
                                    class="card-img-top" alt="{{ $subSubCategory->name }} image">

                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif
    </div> --}}
@endsection
