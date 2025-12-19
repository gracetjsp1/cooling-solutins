<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">

    {{-- Dynamic Title --}}
    <title>@yield('title', 'Masar Arabia Cooling Solutions')</title>

    {{-- Dynamic Meta Description --}}
    <meta name="description" content="@yield('description', 'Your website short description goes here. Around 150–160 characters recommended.')">

    {{-- Meta Keywords (optional dynamic) --}}
    <meta name="keywords" content="@yield('keywords', 'keyword1, keyword2, keyword3')">

    <!-- Stylesheets -->
    <link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/revolution-slider.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('assets/images/favicon.png') }}" type="image/x-icon">

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- HTML5 shim for older IE -->
    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="{{ asset('assets/js/respond.js') }}"></script><![endif]-->

</head>

<body class="construction-theme">

    <div class="page-wrapper">

        {{-- Header --}}
        @include('includes.header')

        {{-- Main Content --}}
        <main>
            @yield('content')
        </main>

        {{-- Footer --}}
        @include('includes.footer')
    </div>
    <!--Scroll to top-->
    <div class="scroll-to-top scroll-to-target" data-target=".site-header"><span class="fa fa-long-arrow-up"></span>
    </div>
    <!--Search Popup-->
    <div id="search-popup" class="search-popup">
        <div class="close-search theme-btn">
            <span class="flaticon-cross-1"></span>
        </div>

        <div class="popup-inner">

            <div class="search-form">
                <form method="GET" action="{{ route('search') }}">
                    <div class="form-group">
                        <fieldset>
                            <input type="search" class="form-control" name="q" placeholder="Search products..."
                                required>
                            <input type="submit" value="Search" class="theme-btn">
                        </fieldset>
                    </div>
                </form>
            </div>

        </div>
    </div>

    <ul class="social-fixed d-none d-md-flex">
        <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
        <li><a href="#"><i class="fa-regular fa-envelope"></i></a></li>
        <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
        <li><a href="#"><i class="fa-solid fa-location-dot"></i></a></li>
    </ul>

    {{-- JS --}}
    <script src="{{ asset('assets/js/jquery.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ asset('assets/js/revolution.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.fancybox.pack.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.fancybox-media.js') }}"></script>
    <script src="{{ asset('assets/js/mixitup.js') }}"></script>
    <script src="{{ asset('assets/js/owl.js') }}"></script>
    <script src="{{ asset('assets/js/wow.js') }}"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>

    @stack('scripts')

</body>

</html>


{{-- <!DOCTYPE html>
<html>
<head>
    <title>@yield('title') - My Website</title>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
</head>
<body>

<nav>
    <a href="{{ route('home') }}">Home</a> |
    <a href="{{ route('about') }}">About</a> |
    <a href="{{ route('products.index') }}">Products</a> |
    <a href="{{ route('blogs.index') }}">Blog</a> |
    <a href="{{ route('contact') }}">Contact</a>
</nav>

<div class="container mt-4">
    @yield('content')
</div>
  @stack('scripts')
</body>
</html> --}}
