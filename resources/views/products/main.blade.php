@extends('layout.app')


@section('title', $mainProduct->seo_title)

@section('description', $mainProduct->seo_description)

@section('keywords', $mainProduct->seo_keywords)


@section('content')
    <!-- Page Title -->
    <section class="page-title"
        style="background-image:url('{{ asset('uploads/products/' . $mainProduct->slug . '/' . $mainProduct->banner_image) }}');">
        <div class="auto-container">
            <div class="clearfix">

                <!-- Title -->
                <div class="title-column">
                    <h1>{{ $mainProduct->name }}</h1>
                </div>

                <!-- Bread Crumb -->
                <div class="breadcrumb-column">
                    <ul class="bread-crumb clearfix">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li><a href="{{ route('products.index') }}">Products</a></li>
                        <li class="active">{{ $mainProduct->name }}</li>
                    </ul>
                </div>

            </div>
        </div>
    </section>

    <div class="container py-4">

        {{-- <h1 class="mb-4">{{ $mainProduct->name }}</h1>
     <img src="{{ asset('uploads/products/' . $mainProduct->slug . '/' . $mainProduct->banner_image) }}"
                            class="card-img-top" alt="{{ $mainProduct->banner_alt ?? $mainProduct->name }}"> --}}



        {{-- Get unique categories for filter buttons --}}
        {{-- <div class="row category-row justify-content-center align-items-center"> --}}
        @php
            $categories = $mainProduct->subCategories->pluck('category')->filter()->unique();
        @endphp

        @if ($categories->count())
            <div class="row justify-content-center">
                <div class="col-12 text-center">

                    <button class="btn filter-btn active mb-3" data-category="all">All</button>

                    @foreach ($categories as $cat)
                        <button class="btn filter-btn mb-3" data-category="{{ $cat }}">
                            {{ $cat }}
                        </button>
                    @endforeach

                </div>
            </div>
        @endif
        {{-- </div> --}}
    </div>
    <!--Shop Page-->
    <div class="shop-page">
        <div class="outer-container shop-container">
            <div class="row clearfix">

                <!--Content Side-->
                <div class="content-side pull-right col-lg-12 col-md-12 col-sm-12 col-xs-12">

                    <!--Products Section-->
                    <section class="products-section padd-left-20">
                        <div class="row clearfix" id="subCategoryContainer">

                            @if ($mainProduct->subCategories->count())
                                @foreach ($mainProduct->subCategories as $sub)
                                    {{-- ✅ ADDED sub-category-item --}}
                                    <div class="product-item sub-category-item col-lg-3 col-md-6 col-sm-6 col-xs-12"
                                        data-category="{{ $sub->category ?? 'uncategorized' }}">

                                        <div class="inner-box">
                                            <a href="{{ route('products.sub', [$mainProduct->slug, $sub->slug]) }}">

                                                <figure class="image-box">
                                                    @if ($sub->image)
                                                        <img src="{{ asset('uploads/products/' . $mainProduct->slug . '/' . $sub->slug . '/' . $sub->image) }}" class="img-responsive"
                                                            alt="{{ $sub->alt ?? $sub->name }}">
                                                    @else
                                                        <img src="{{ asset('assets/no-image.png') }}" alt="No Image">
                                                    @endif
                                                </figure>

                                                <div class="lower-content">
                                                    <h3>{{ $sub->name }}</h3>
                                                </div>

                                                <div class="lower-content">
                                                    <h6>More <i class="fa-solid fa-arrow-right"></i></h6>
                                                </div>

                                            </a>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <p>No Sub Categories available.</p>
                            @endif

                        </div>
                    </section>

                </div>
                <!--Content Side-->

            </div>
        </div>
    </div>
    {{-- <div class="container py-4">
        @if ($mainProduct->subCategories->count())


            <div class="row" id="subCategoryContainer">
                @foreach ($mainProduct->subCategories as $sub)
                    <div class="col-md-4 mb-4 sub-category-item" data-category="{{ $sub->category ?? 'uncategorized' }}">
                        <div class="card shadow-sm h-100">


                            @if ($sub->image)
                                <img src="{{ asset('uploads/products/' . $mainProduct->slug . '/' . $sub->slug . '/' . $sub->image) }}"
                                    class="card-img-top" alt="{{ $sub->alt }}">
                            @else
                                <img src="{{ asset('assets/no-image.png') }}" class="card-img-top" alt="No Image">
                            @endif

                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">{{ $sub->name }}</h5>

                                <p class="card-text">
                                    {{ \Illuminate\Support\Str::limit($sub->description, 120) }}
                                </p>

                                <a href="{{ route('products.sub', [$mainProduct->slug, $sub->slug]) }}"
                                    class="btn btn-primary mt-auto">
                                    View More
                                </a>
                            </div>

                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <p>No Sub Categories available.</p>
        @endif

    </div> --}}

    {{-- Filter JS --}}
    @push('scripts')
        <script>
            document.addEventListener('DOMContentLoaded', function() {

                const buttons = document.querySelectorAll('.filter-btn');
                const items = document.querySelectorAll('.sub-category-item');

                buttons.forEach(btn => {
                    btn.addEventListener('click', function() {

                        buttons.forEach(b => b.classList.remove('active'));
                        this.classList.add('active');

                        const category = this.dataset.category;

                        items.forEach(item => {
                            if (category === 'all' || item.dataset.category === category) {
                                item.style.display = '';
                            } else {
                                item.style.display = 'none';
                            }
                        });
                    });
                });

            });
        </script>
    @endpush


@endsection
