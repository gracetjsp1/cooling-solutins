<!-- Header Style Two-->
<header class="header-style-two site-header">

    <!--Header Lower-->
    <div class="header-lower">
        <!-- Main Box -->
        <div class="main-box">
            <div class="outer-container clearfix">
                <!--Logo Box-->
                <div class="logo-box">
                    <div class="logo">
                        <a href="{{ route('home') }}">
                            <img src="{{ asset('assets/images/logo.webp') }}" alt="">
                        </a>
                    </div>
                </div>

                <!--Nav Outer-->
                <div class="nav-outer clearfix">
                    <!-- Main Menu -->
                    <nav class="main-menu">
                        <div class="navbar-header">
                            <!-- Toggle Button -->
                            <button type="button" class="navbar-toggle" data-toggle="collapse"
                                data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>

                        <div class="navbar-collapse collapse clearfix">
                            <ul class="navigation clearfix">
                                <li class="{{ request()->routeIs('home') ? 'current' : '' }}"><a href="{{ route('home') }}">Home</a></li>
                                <li class="{{ request()->routeIs('about') ? 'current' : '' }}"><a href="{{ route('about') }}">About Us</a></li>
                                <li class="{{ request()->routeIs('products.index') ? 'current' : '' }}"><a href="{{ route('products.index') }}">Products</a></li>
                                <li><a href="{{ route('blogs.index') }}">Blogs</a></li>
                                <li class="{{ request()->routeIs('contact') ? 'current' : '' }}"><a href="{{ route('contact') }}">Contact Us</a></li>
                            </ul>
                        </div>
                    </nav><!-- Main Menu End-->
                </div><!--Nav Outer End-->

                <!-- Hidden Nav Toggler -->
                <div class="nav-toggler">
                    <button class="hidden-bar-opener"><span class="icon fa fa-bars"></span></button>
                </div><!-- / Hidden Nav Toggler -->

                <!--Search Btn-->
                <div class="search-box-btn"><span class="icon fa fa-search"></span></div>
            </div>
        </div><!-- End Main Box -->
    </div><!--End Header Lower-->

</header>
<!--End Header Style Two -->

<!-- Hidden Navigation Bar -->
<section class="hidden-bar right-align">

    <div class="hidden-bar-closer">
        <button class="btn"><i class="fa fa-close"></i></button>
    </div>

    <!-- Hidden Bar Wrapper -->
    <div class="hidden-bar-wrapper">

        <!-- .logo -->
        <div class="logo text-center">
            <a href="{{ route('home') }}"><img src="{{ asset('assets/images/logo.webp') }}" alt=""></a>
        </div><!-- /.logo -->

        <!-- .Side-menu -->
        <div class="side-menu">
            <!-- .navigation -->
            <ul class="navigation clearfix">
                <li class="{{ request()->routeIs('home') ? 'current' : '' }}"><a href="{{ route('home') }}">Home</a></li>
                <li class="{{ request()->routeIs('about') ? 'current' : '' }}"><a href="{{ route('about') }}">About Us</a></li>
                <li class="{{ request()->routeIs('products.index') ? 'current' : '' }}"><a href="{{ route('products.index') }}">Products</a></li>
                <li><a href="{{ route('blogs.index') }}">Blogs</a></li>
                <li class="{{ request()->routeIs('contact') ? 'current' : '' }}"><a href="{{ route('contact') }}">Contact</a></li>
            </ul>
        </div><!-- /.Side-menu -->

        <div class="social-icons">
            <ul>
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-envelope"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                <li><a href="#"><i class="fa fa-map-marker"></i></a></li>
            </ul>
        </div>

    </div><!-- / Hidden Bar Wrapper -->
</section><!-- / Hidden Bar -->