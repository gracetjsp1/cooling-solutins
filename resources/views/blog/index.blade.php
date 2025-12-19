@extends('layout.app')


@section('title', 'Masar Arabia – Cooling & Ventilation Solutions')

@section('description', 'Masar Arabia provides high-quality cooling solutions, ventilation products, and advanced HVAC systems for commercial and industrial needs.')

@section('keywords', 'cooling solutions, ventilation fans, HVAC, industrial fans, air handling units')

@section('content')
    {{-- Page Title --}}
    <section class="page-title" style="background-image:url('{{ asset('assets/images/background/blog-banner.png') }}');">

        <div class="auto-container">
            <div class="clearfix">

                {{-- Title --}}
                <div class="title-column">
                    <h1>All Blogs</h1>
                </div>

                {{-- Breadcrumb --}}
                <div class="breadcrumb-column">
                    <ul class="bread-crumb clearfix">
                        <li>
                            <a href="{{ route('home') }}">Home</a>
                        </li>
                        <li class="active">
                            All Blogs
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </section>
    <section class="featured-services-section">
        <div class="auto-container">
            <div class="row clearfix">

                @foreach ($blogs as $blog)
                    <!-- Blog Column -->
                    <div class="featured-service-column col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeIn" data-wow-delay="200ms" data-wow-duration="1500ms">

                            <figure class="image-box">
                                <a href="{{ route('blogs.show', $blog->slug) }}">
                                    @if ($blog->image)
                                        <img src="{{ asset('uploads/blogs/' . $blog->image) }}"
                                            alt="{{ $blog->image_alt ?? $blog->title }}" class="img-responsive">
                                    @else
                                        <img src="{{ asset('assets/no-image.png') }}" alt="No Image" class="img-responsive">
                                    @endif
                                </a>

                                <!-- DATE ICON (instead of product icon) -->
                                <div class="icon-box">
                                    <span class="blog-date-icon">
                                        {{ \Carbon\Carbon::parse($blog->publishedDate ?? $blog->created_at)->format('d M') }}
                                        <small>{{ \Carbon\Carbon::parse($blog->publishedDate ?? $blog->created_at)->format('Y') }}</small>
                                    </span>
                                </div>
                            </figure>

                            <div class="lower-content">
                                <h3>
                                    <a href="{{ route('blogs.show', $blog->slug) }}">
                                        {{ $blog->title }}
                                    </a>
                                </h3>

                                <div class="text">
                                    {{ \Illuminate\Support\Str::limit(strip_tags($blog->content), 100) }}
                                </div>

                                <a href="{{ route('blogs.show', $blog->slug) }}" class="theme-btn btn-style-two">
                                    Read More
                                </a>
                            </div>

                        </div>
                    </div>
                @endforeach

            </div>

            <!-- Pagination -->
            <div class="mt-4 text-center">
                {{ $blogs->links() }}
            </div>
        </div>
    </section>
@endsection
