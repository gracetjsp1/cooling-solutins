@extends('layout.app')


@section('title', $subCategory->seo_title)

@section('description', $subCategory->seo_description)

@section('keywords', $subCategory->seo_keywords)



@section('content')
    <!-- Page Title -->
    <section class="page-title"
        style="background-image:url('{{ asset('uploads/products/' . $mainProduct->slug . '/' . $mainProduct->banner_image) }}');">

        <div class="auto-container">
            <div class="clearfix">

                <!-- Title -->
                <div class="title-column">
                    <h1>{{ $subCategory->name }}</h1>
                </div>

                <!-- Breadcrumb -->
                <div class="breadcrumb-column">
                    <ul class="bread-crumb clearfix">
                        <li>
                            <a href="{{ route('products.index') }}">
                                All Products
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('products.main', $mainProduct->slug) }}">
                                {{ $mainProduct->name }}
                            </a>
                        </li>
                        <li class="active">
                            {{ $subCategory->name }}
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </section>
    <!-- Shop Page -->
    <div class="shop-page">
        <div class="outer-container shop-container">
            <div class="row clearfix" id="subSubCategoryContainer">

                @if ($subSubCategories->count())
                    @foreach ($subSubCategories as $subSub)
                        <div class="product-item sub-category-item col-lg-3 col-md-6 col-sm-6 col-xs-12">

                            <div class="inner-box">
                                <a
                                    href="{{ route('products.subsub', [$mainProduct->slug, $subCategory->slug, $subSub->slug]) }}">

                                    <figure class="image-box">
                                        @if ($subSub->image_sub_sub_category)
                                            <img src="{{ asset(
                                                'uploads/products/' .
                                                    $mainProduct->slug .
                                                    '/' .
                                                    $subCategory->slug .
                                                    '/' .
                                                    $subSub->slug .
                                                    '/' .
                                                    $subSub->image_sub_sub_category,
                                            ) }}"
                                                alt="{{ $subSub->alt ?? $subSub->name }}" class="img-responsive">
                                        @else
                                            <img src="{{ asset('assets/no-image.png') }}" alt="No Image">
                                        @endif
                                    </figure>

                                    <div class="lower-content">
                                        <h3>{{ \Illuminate\Support\Str::limit($subSub->name, 35, '...') }}</h3>
                                        <p>
                                            {{ \Illuminate\Support\Str::limit($subSub->small_description, 47, '...') }}
                                        </p>
                                    </div>

                                    <div class="lower-content">
                                        <h6>More <i class="fa-solid fa-arrow-right"></i></h6>
                                    </div>

                                </a>
                            </div>
                        </div>
                    @endforeach
                @else
                    <p>No Sub Sub Categories available.</p>
                @endif

            </div>
            {{-- Pagination --}}
            <div class="col-12 text-center mt-4">
                {{ $subSubCategories->links() }}
            </div>
        </div>
    </div>

    {{-- @if ($subCategory->subSubCategories->count())
        <div class="row">
            @foreach ($subCategory->subSubCategories as $subSub)
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        @if ($subSub->image_sub_sub_category)
                            <img src="{{ asset(
                                'uploads/products/' .
                                    $mainProduct->slug .
                                    '/' .
                                    $subCategory->slug .
                                    '/' .
                                    $subSub->slug .
                                    '/' .
                                    $subSub->image_sub_sub_category,
                            ) }}"
                                class="card-img-top" alt="{{ $subSub->name }}">
                        @endif
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">{{ $subSub->name }}</h5>
                            <a href="{{ route('products.subsub', [$mainSlug, $subCategory->slug, $subSub->slug]) }}"
                                class="btn btn-primary mt-auto">View</a>
                            FFFFFFFFFFF
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <p>No sub-sub categories found.</p>
    @endif --}}
@endsection
