@extends('layout.app')


@section('title', 'Masar Arabia – Cooling & Ventilation Solutions')

@section('description', 'Masar Arabia provides high-quality cooling solutions, ventilation products, and advanced HVAC systems for commercial and industrial needs.')

@section('keywords', 'cooling solutions, ventilation fans, HVAC, industrial fans, air handling units')

@section('content')
<!-- Page Title -->
<section class="page-title" style="background-image: url('{{ asset('assets/images/background/about-us-banner.png') }}');">
    <div class="auto-container">
        <div class="clearfix">

            <!-- Title -->
            <div class="title-column">
                <h1>About Us</h1>
            </div>

            <!-- Breadcrumb -->
            <div class="breadcrumb-column">
                <ul class="bread-crumb clearfix">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li class="active">About Us</li>
                </ul>
            </div>

        </div>
    </div>
</section>
 <!--Default Content Section / Extended-->
    <section class="default-content-section extended">
    	<div class="auto-container">
            <div class="row clearfix">
            	<!--Text Column-->
                <div class="text-column col-md-12 col-sm-12 col-xs-12">
                	<figure class="logo-image"><a href="index.html"><img src="images/resource/logo-image-3.png" alt=""></a></figure>
                    <h2>Our Company</h2>
                	<div class="text">
                    	<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
                    </div>
                    {{-- <div class="content-info">
                    	<strong>Hasib Sharif</strong><div class="designation">Ceo, KBD</div>
                    </div> --}}
                </div>
                
                <!--Image Column-->
                <div class="image-column col-md-5 col-sm-12 col-xs-12">
                	<div class="inner clearfix">
                        <figure class="image-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms"><img src="images/resource/featured-image-24.jpg" alt=""></figure>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    
@endsection
