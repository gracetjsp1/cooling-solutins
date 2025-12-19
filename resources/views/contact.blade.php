@extends('layout.app')


@section('title', 'Masar Arabia – Cooling & Ventilation Solutions')

@section('description',
    'Masar Arabia provides high-quality cooling solutions, ventilation products, and advanced HVAC
    systems for commercial and industrial needs.')

@section('keywords', 'cooling solutions, ventilation fans, HVAC, industrial fans, air handling units')

@section('content')
    <!-- Page Title -->
    <section class="page-title" style="background-image: url('{{ asset('assets/images/background/contact-us-banner.png') }}');">
        <div class="auto-container">
            <div class="clearfix">

                <!-- Title -->
                <div class="title-column">
                    <h1>Contact Us</h1>
                </div>

                <!-- Breadcrumb -->
                <div class="breadcrumb-column">
                    <ul class="bread-crumb clearfix">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li class="active">Contact Us</li>
                    </ul>
                </div>

            </div>
        </div>
    </section>


    <!-- Contact Info Section -->
    <section class="info-section">
        <div class="auto-container">
            <div class="contact-info">
                <div class="row clearfix">

                    <!-- Find Us -->
                    <div class="info-column col-md-4 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <div class="icon wow zoomInStable">
                                <span class="flaticon-location"></span>
                            </div>
                            <h4>Find Us</h4>
                            <ul>
                                <li><a href="" class="contact-link">
                                        <b>Masar Arabia First Trading Company</b>
                                        Othman Bin Afan Street, PO Box No. 16301
                                        Jeddah 22234, Saudi Arabia</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Mail Us -->
                    <div class="info-column col-md-4 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <div class="icon wow zoomInStable" data-wow-delay="300ms">
                                <span class="flaticon-symbol"></span>
                            </div>
                            <h4>Mail Us</h4>
                            <ul>
                                <li><a href="" class="contact-link">info@masararabia.com</a></li>
                                {{-- <li>solution@factorian.com</li> --}}
                            </ul>
                        </div>
                    </div>

                    <!-- Call Us -->
                    <div class="info-column col-md-4 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <div class="icon wow zoomInStable" data-wow-delay="600ms">
                                <span class="flaticon-technology-1"></span>
                            </div>
                            <h4>Call Us</h4>
                            <ul>
                                <li><a href="" class="contact-link">966 12 657 6896</a></li>
                                {{-- <li>+190 8613 919 110</li> --}}
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section class="map-section">
        <div class="map-outer">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7423.542405306105!2d39.185876!3d21.51668!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x15c3cf18862f7561%3A0xdfe8c35fe304ed1e!2sMasar%20Arabia!5e0!3m2!1sen!2sin!4v1765949784250!5m2!1sen!2sin" width="100%" height="600"
                style="border:0;" allowfullscreen loading="lazy">
            </iframe>
        </div>
    </section>

    <!-- Contact Form Section -->
    <section class="contact-section">
        <div class="auto-container">
            <div class="content-box wow fadeIn">

                <div class="form-container">
                    <div class="form">
                        <div class="title">
                            <h2>Leave us a message</h2>
                        </div>

                        <form method="POST" action="{{ route('contact.send') }}">
                            @csrf

                            <div class="row clearfix">

                                <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="name" placeholder="Your Name" required>
                                </div>

                                <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <input type="email" name="email" placeholder="Your Email" required>
                                </div>

                                <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <input type="text" name="subject" placeholder="Subject">
                                </div>

                                <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <textarea name="message" placeholder="Your Message.." required></textarea>
                                </div>

                                <div class="form-group text-center col-lg-12">
                                    <button type="submit" class="theme-btn">
                                        Contact Now
                                    </button>
                                </div>

                            </div>
                        </form>

                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection
