<!--Main Footer-->
<footer class="main-footer">

    <!--Widgets Section-->
    <div class="widgets-section"
        style="background-image:url({{ asset('assets/images/background/footer-banner.webp') }});">
        <div class="outer-container">
            <div class="row clearfix">
                <!--Big Column-->
                {{-- <div class="big-column col-md-1 col-sm-12 col-xs-12"></div> --}}
                <div class="big-column col-md-8 col-sm-12 col-xs-12">
                    <div class="row clearfix">

                        <!--Footer Column-->
                        <div class="footer-column col-md-7 col-sm-6 col-xs-12">
                            <div class="footer-widget about-widget">
                                <figure class="footer-logo">
                                    <a href="{{ route('home') }}">
                                        <img src="{{ asset('assets/images/logo.webp') }}" alt="">
                                    </a>
                                </figure>

                                <div class="widget-content">
                                    <ul class="contact-info">
                                        <li><span class="icon flaticon-envelope"></span>
                                            <a href="mailto:info@masararabia.com">info@masararabia.com</a>
                                        </li>
                                        <li><span class="icon flaticon-telephone-1"></span>
                                            <a href="tel:+966126576896">966 12 657 6896</a>
                                        </li>
                                        <li><span class="icon flaticon-placeholder"></span>
                                            Masar Arabia First Trading Company Othman Bin Afan Street, PO Box No. 16301
                                            Jeddah 22234, Saudi Arabia
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
<div class="footer-column col-md-1 col-sm-1  col-xs-12"></div>
                        <!--Footer Column-->
                        <div class="footer-column col-md-4 col-sm-5 col-xs-12">
                            <div class="footer-widget links-widget">
                                <h2>Quick Links</h2>
                                <div class="widget-content">
                                    <ul class="list">
                                        <li><a href="{{ route('home') }}">Home</a></li>
                                        <li><a href="{{ route('about') }}">About Us</a></li>
                                        <li><a href="{{ route('products.index') }}">Products</a></li>
                                        <li><a href="{{ route('blogs.index') }}">Blogs</a></li>
                                        <li><a href="{{ route('contact') }}">Contact Us</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
<div class="big-column col-md-1 col-sm-12 col-xs-12"></div>
                <!--Big Column-->
                <div class="big-column col-md-3 col-sm-6 col-xs-12">
                    <div class="row clearfix">

                        <h2>Our Products</h2>

                        <div class="footer-column col-md-12 col-sm-12 col-xs-12">
                            <div class="footer-widget links-widget">
                                <div class="widget-content">
                                    <ul class="list">

                                        @foreach ($mainProducts as $product)
                                            <li>
                                                <a href="{{ route('products.main', $product->slug) }}">
                                                    {{ $product->name }}
                                                </a>
                                            </li>
                                        @endforeach

                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                
                <!--Big Column-->
                {{-- <div class="big-column col-md-6 col-sm-12 col-xs-12">
                    <div class="row clearfix">

                        <h2>Our Products</h2>

                        @php
                             
                            $chunks = $mainProducts->chunk(ceil($mainProducts->count() / 2));
                        @endphp

                        
                        @foreach ($chunks as $half)
                            <div class="footer-column col-md-6 col-sm-6 col-xs-12">
                                <div class="footer-widget links-widget">
                                    <div class="widget-content">
                                        <ul class="list">

                                            @foreach ($half as $product)
                                                <li>
                                                    <a href="{{ route('products.main', $product->slug) }}">
                                                        {{ $product->name }}
                                                    </a>
                                                </li>
                                            @endforeach

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div> --}}

                {{-- <div class="big-column col-md-6 col-sm-12 col-xs-12">
                    <div class="row clearfix">
                        <h2>Our Products</h2>
                      
                        <div class="footer-column col-md-6 col-sm-6 col-xs-12">
                            <div class="footer-widget links-widget">
                                <div class="widget-content">
                                    <ul class="list">
                                        <li><a href="#">Sound-insulated fans</a></li>
                                        <li><a href="#">Air Handling Units</a></li>
                                        <li><a href="#">Axial fans</a></li>
                                        <li><a href="#">Centrifugal fans</a></li>
                                        <li><a href="#">Domestic Fans</a></li>
                                        <li><a href="#">Mono-pipe exhaust centrifugal fans</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        
                        <div class="footer-column col-md-6 col-sm-6 col-xs-12">
                            <div class="footer-widget links-widget">
                                <div class="widget-content">
                                    <ul class="list">
                                        <li><a href="#">Rectangular duct fans</a></li>
                                        <li><a href="#">Roof fans</a></li>
                                        <li><a href="#">Round Duct Fans</a></li>
                                        <li><a href="#">Inline Reversible Fans</a></li>
                                        <li><a href="#">Special fans</a></li>
                                        <li><a href="#">Unit for air cooling and heating</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </div> --}}

            </div>
        </div>
    </div>

    <!--Footer Bottom-->
    <div class="footer-bottom">
        <div class="outer-container">
            <div class="row clearfix">
                <div class="col-md-6 col-sm-12">
                    <div class="copyright">
                        Masar Arabia Cooling Solutions &copy; <span class="year">{{ date('Y') }}</span>. All
                        rights are reserved.
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="developed-by">
                        Made with <span class="fa fa-heart"></span> by
                        <a target="_blank" href="#" class="author-name">Water Creative Studio Pvt Ltd</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</footer>
