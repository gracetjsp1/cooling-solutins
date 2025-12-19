@extends('layout.app')


@section('title', 'Masar Arabia – Cooling & Ventilation Solutions')

@section('description',
    'Masar Arabia provides high-quality cooling solutions, ventilation products, and advanced HVAC
    systems for commercial and industrial needs.')

@section('keywords', 'cooling solutions, ventilation fans, HVAC, industrial fans, air handling units')

@section('content')
    <!-- Page Title -->
    <section class="page-title" style="background-image: url('{{ asset('assets/images/main-products/banner-1.png') }}');">
        <div class="auto-container">
            <div class="clearfix">

                <!-- Title -->
                <div class="title-column">
                    <h1>Search Results</h1>
                </div>

                <!-- Breadcrumb -->
                <div class="breadcrumb-column">
                    <ul class="bread-crumb clearfix">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li class="active">Search Result</li>
                    </ul>
                </div>

            </div>
        </div>
    </section>
    <!-- Shop Page -->
    <div class="shop-page">
        <div class="outer-container shop-container">
            <div class="row clearfix">

                <!-- Content Side -->
                <div class="content-side pull-right col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    {{-- Results --}}
                    @if ($results->count())

                        <section class="padd-left-20">
                            <div class="row clearfix" id="searchResultsContainer">

                                @foreach ($results as $item)
                                    <div class="product-item sub-category-item col-lg-3 col-md-6 col-sm-6 col-xs-12">

                                        <div class="inner-box">
                                            <a
                                                href="{{ route('products.subsub', [$item->subCategory->mainProduct->slug, $item->subCategory->slug, $item->slug]) }}">

                                                {{-- Image --}}
                                                <figure class="image-box">
                                                    @if ($item->image_sub_sub_category)
                                                        <img src="{{ asset(
                                                            'uploads/products/' .
                                                                $item->subCategory->mainProduct->slug .
                                                                '/' .
                                                                $item->subCategory->slug .
                                                                '/' .
                                                                $item->slug .
                                                                '/' .
                                                                $item->image_sub_sub_category,
                                                        ) }}"
                                                            alt="{{ $item->image_detail_alt ?? $item->name }}"
                                                            class="img-responsive">
                                                    @else
                                                        <img src="{{ asset('assets/no-image.png') }}" alt="No Image">
                                                    @endif
                                                </figure>

                                                {{-- Content --}}
                                                <div class="lower-content">
                                                    <h3>{{ $item->name }}</h3>
                                                    <p>
                                                        {{ \Illuminate\Support\Str::limit(strip_tags($item->description), 100) }}
                                                    </p>
                                                </div>

                                                {{-- More link --}}
                                                <div class="lower-content">
                                                    <h6>More <i class="fa-solid fa-arrow-right"></i></h6>
                                                </div>

                                            </a>
                                        </div>

                                    </div>
                                @endforeach

                            </div>
                        </section>

                        {{-- Pagination --}}
                        <div class="mt-4">
                            {{ $results->links() }}
                        </div>
                    @else
                        <p>No results found for <strong>{{ $q }}</strong>.</p>
                    @endif


                </div>
                {{-- <div class="col-12 mt-4">
                    {{ $results->links() }}
                </div> --}}

            </div>
        </div>
    </div>
    {{-- <div class="container py-4">

        <h1 class="mb-4">Search Results</h1>


      
        <form action="{{ route('search') }}" method="GET" class="d-flex mb-4">
            <input type="text" name="q" class="form-control me-2" placeholder="Search products..." required>
            <button type="submit" class="btn btn-primary">Search</button>
        </form>

       
        @if ($results->count())
            <div class="row">
                @foreach ($results as $item)
                    <div class="col-md-4 mb-4">
                        <div class="card h-100 shadow-sm">

                          
                            @if ($item->image_detail)
                                <img src="{{ asset('uploads/products/' . $item->subCategory->mainProduct->slug . '/' . $item->subCategory->slug . '/' . $item->slug . '/' . $item->image_sub_sub_category) }}"
                                    class="card-img-top" alt="{{ $item->image_detail_alt ?? $item->name }}">
                            @else
                                <img src="{{ asset('assets/no-image.png') }}" class="card-img-top" alt="No Image">
                            @endif

                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">{{ $item->name }}</h5>
                                <p class="card-text">
                                    {{ \Illuminate\Support\Str::limit($item->description, 120) }}
                                </p>

                                <a href="{{ route('products.subsub', [$item->subCategory->mainProduct->slug, $item->subCategory->slug, $item->slug]) }}"
                                    class="btn btn-primary mt-auto">
                                    View Details
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

           
            <div class="mt-4">
                {{ $results->links() }}
            </div>
        @else
            <p>No results found for <strong>{{ $q }}</strong>.</p>
        @endif
    </div> --}}
@endsection
