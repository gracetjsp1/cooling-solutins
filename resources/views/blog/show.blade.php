@extends('layout.app')
@section('title', $blog->seo_title)

@section('description', $blog->seo_description)

@section('keywords', $blog->seo_keywords)

@section('open_graph')
    @if($blog->open_graph)
        {!! $blog->open_graph !!}
    @endif
@endsection



   
@section('content')
    {{-- Page Title --}}
    <section class="page-title" style="background-image:url('{{ asset('assets/images/background/blog-banner.png') }}');">

        <div class="auto-container">
            <div class="clearfix">

                {{-- Title --}}
                <div class="title-column">
                    <h1>{{ $blog->title }}</h1>
                </div>

                {{-- Breadcrumb --}}
                <div class="breadcrumb-column">
                    <ul class="bread-crumb clearfix">
                        <li>
                            <a href="{{ route('home') }}">Home</a>
                        </li>
                        <li>
                            <a href="{{ route('blogs.index') }}">Blog</a>
                        </li>
                        <li class="active">
                            {{ $blog->title }}
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </section>
    <!-- News Details Section -->
<section class="news-detail-section">
    <div class="auto-container">

        <div class="content-container">

            {{-- Blog Title --}}
            <h2 class="post-title font-weight-bold text-center">
                {{ $blog->title }}
            </h2>

            {{-- Blog Info --}}
            <div class="info">
                {{-- Optional Category --}}
                {{-- <a href="#" class="cat-name">Blog</a> --}}
                {{-- <span class="date">
                    {{ \Carbon\Carbon::parse($blog->publishedDate ?? $blog->created_at)->format('d.m.Y') }}
                </span> --}}
            </div>
             {{-- Blog Featured Image --}}
            @if($blog->image)
                <div class="blog-featured-image mb-4">
                    <img
                        src="{{ asset('uploads/blogs/' . $blog->image) }}"
                        alt="{{ $blog->image_alt ?? $blog->title }}"
                        class="img-responsive w-100">
                </div>
            @endif

            {{-- Blog Content --}}
            <div class="content">
                {!! $blog->content !!}
            </div>

        </div>

    </div>
</section>
   
    
    {{-- <h1>{{ $blog->title }}</h1>
    <p>{{ $blog->publishedDate }}</p>
    {!! $blog->content !!} --}}
@endsection
