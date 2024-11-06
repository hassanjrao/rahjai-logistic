<!doctype html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('front-assets/css/bootstrap.min.css') }}">
    <!-- Owl Theme Default CSS -->
    <link rel="stylesheet" href="{{ asset('front-assets/css/owl.theme.default.min.css') }}">
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="{{ asset('front-assets/css/owl.carousel.min.css') }}">
    <!-- Owl Magnific CSS -->
    <link rel="stylesheet" href="{{ asset('front-assets/css/magnific-popup.css') }}">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{ asset('front-assets/css/animate.css') }}">
    <!-- Boxicons CSS -->
    <link rel="stylesheet" href="{{ asset('front-assets/css/boxicons.min.css') }}">
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="{{ asset('front-assets/css/flaticon.css') }}">
    <!-- Meanmenu CSS -->
    <link rel="stylesheet" href="{{ asset('front-assets/css/meanmenu.css') }}">
    <!-- Nice Select CSS -->
    <link rel="stylesheet" href="{{ asset('front-assets/css/nice-select.css') }}">
    <!-- Odometer CSS-->
    <link rel="stylesheet" href="{{ asset('front-assets/css/odometer.css') }}">
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ asset('front-assets/css/style.css') }}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{ asset('front-assets/css/responsive.css') }}">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('front-assets/img/favicon.png') }}">

    <script src="{{ asset('front-assets/js/jquery-3.5.1.min.js') }}"></script>

    <!-- TITLE -->
    <title>@yield('page-title') - {{ config('app.name') }} </title>
</head>

@php
    $setting = \App\Models\Setting::first();
@endphp

<body>
    <!-- Start Preloader Area -->
    <div class="preloader">
        <div class="lds-ripple">
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- End Preloader Area -->
    </div>
    <!-- Start Header Area -->
    <header class="header-area">
        <!-- Start Top Header Area -->
        <div class="top-header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="header-left-content">
                            <a href="{{ route('home') }}">
                                <img src="{{ asset('front-assets/img/logo/logo.png') }}" alt="Logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="header-right-content">
                            <ul>
                                <li>
                                    <a href="tel:{{ $setting->phone }}">
                                        <i class='bx bxs-phone-call'></i>
                                        <span>Contact support</span>

                                        {{ $setting->phone }}
                                    </a>
                                </li>
                                <li>
                                    <a href="mailto:{{ $setting->email }}">
                                        <i class='bx bx-envelope'></i>
                                        <span>Contact support</span>
                                        {{ $setting->email }} </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Top Header Area -->

        <!-- Start Prevoz Navbar Area -->
        <div class="prevoz-nav-style">
            <div class="navbar-area">
                <!-- Menu For Mobile Device -->
                <div class="mobile-nav">
                    <a href="{{ route('home') }}" class="logo">
                        <img src="{{ asset('front-assets/img/logo/logo.png') }}" alt="Logo">
                    </a>
                </div>
                <!-- Menu For Desktop Device -->
                <div class="main-nav">
                    <nav class="navbar navbar-expand-md navbar-light">
                        <div class="container">
                            <a class="navbar-brand" href="{{ route('home') }}">
                                <img src="{{ asset('front-assets/img/logo/logo.png') }}" alt="Logo">
                            </a>
                            <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                                <ul class="navbar-nav mr-auto">
                                    <li class="nav-item">
                                        <a href="{{ route('home') }}"
                                            class="nav-link dropdown-toggle {{ request()->is('/') ? 'active' : '' }}">
                                            Home
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('about') }}"
                                            class="nav-link dropdown-toggle {{ request()->is('about') ? 'active' : '' }}">
                                            About Us
                                        </a>

                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('services') }}"
                                            class="nav-link dropdown-toggle {{ request()->is('services') ? 'active' : '' }}">
                                            Our Services
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('track') }}"
                                            class="nav-link dropdown-toggle {{ request()->is('track') ? 'active' : '' }}">
                                            Track Parcel

                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('contact') }}"
                                            class="nav-link dropdown-toggle {{ request()->is('contact') ? 'active' : '' }}">

                                            Contact Us</a>
                                    </li>
                                </ul>
                                <!-- Start Other Option -->
                                <div class="others-option">

                                    <button type="button" class="sidebar-menu" data-toggle="modal"
                                        data-target="#myModal2">
                                        <i class="flaticon-menu"></i>
                                    </button>
                                </div>
                                <!-- End Other Option -->
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <!-- End Prevoz Navbar Area -->
    </header>
    <!-- End Header Area -->


    @yield('content')


    <!-- Start Sidebar Modal -->
    <div class="sidebar-modal">
        <div class="modal right fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">
                                <i class="bx bx-x"></i>
                            </span>
                        </button>
                        <h2 class="modal-title" id="myModalLabel2">
                            <a href="{{ route('home') }}">
                                <img src="{{ asset('front-assets/img/logo/logo-one.png') }}" alt="Logo">
                            </a>
                        </h2>
                    </div>
                    <div class="modal-body">
                        <div class="sidebar-modal-widget">
                            <h3 class="title">About Us</h3>
                            <p> Rahji Express Logistics offers a host of logistic management services and supply chain
                                solutions. We provide innovative solutions with the best people, processes, </p>
                        </div>

                        <div class="sidebar-modal-widget">
                            <h3 class="title">Contact Info</h3>
                            <ul class="contact-info">
                                <li>
                                    <i class="bx bx-location-plus"></i>
                                    Address

                                    <span>
                                        {{ $setting->address }}
                                    </span>
                                </li>
                                <li>
                                    <i class="bx bx-envelope"></i>
                                    Email
                                    <span>
                                        {{ $setting->email }}
                                    </span>
                                </li>
                                <li>
                                    <i class="bx bxs-phone-call"></i>
                                    Phone
                                    <span><a>{{ $setting->phone }}</a></span> </br>
                                    <span><a> </a></span> </br>
                                    <span><a> </a></span>
                                </li>
                            </ul>
                        </div>
                        <div class="sidebar-modal-widget">
                            <h3 class="title">Connect With Us</h3>
                            <ul class="social-list">
                                @if ($setting->twitter)
                                    <li>
                                        <a href="{{ $setting->twitter }}" target="_blank">
                                            <i class='bx bxl-twitter'></i>
                                        </a>
                                    </li>
                                @endif

                                @if ($setting->facebook)
                                    <li>
                                        <a href="{{ $setting->facebook }}" target="_blank">
                                            <i class='bx bxl-facebook'></i>
                                        </a>
                                    </li>
                                @endif

                                @if ($setting->instagram)
                                    <li>
                                        <a href="{{ $setting->instagram }}" target="_blank">
                                            <i class='bx bxl-instagram'></i>
                                        </a>
                                    </li>
                                @endif

                                @if ($setting->linkedin)
                                    <li>
                                        <a href="{{ $setting->linkedin }}" target="_blank">
                                            <i class='bx bxl-linkedin'></i>
                                        </a>
                                    </li>
                                @endif

                                @if ($setting->youtube)
                                    <li>
                                        <a href="{{ $setting->youtube }}" target="_blank">
                                            <i class='bx bxl-youtube'></i>
                                        </a>
                                    </li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Sidebar Modal -->

    <!-- Start Footer Bottom Area -->
    <footer class="footer-bottom-area fun-blue-bg">
        <div class="container">
            <div class="row align-items-left">
                <div class="col-lg-5">
                    <div class="single-widget-bottom">
                        <p>Copyright <i class="bx bx-copyright"></i>
                            {{ date('Y') }}
                            <a href="{{ route('home') }}">
                                {{ config('app.name') }}
                            </a>
                        </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-widget-bottom">
                        <p></p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="single-widget-bottom">
                        <ul class="social-link">
                            @if ($setting->twitter)
                                <li>
                                    <a href="{{ $setting->twitter }}" target="_blank">
                                        <i class='bx bxl-twitter'></i>
                                    </a>
                                </li>
                            @endif

                            @if ($setting->facebook)
                                <li>
                                    <a href="{{ $setting->facebook }}" target="_blank">
                                        <i class='bx bxl-facebook'></i>
                                    </a>
                                </li>
                            @endif

                            @if ($setting->instagram)
                                <li>
                                    <a href="{{ $setting->instagram }}" target="_blank">
                                        <i class='bx bxl-instagram'></i>
                                    </a>
                                </li>
                            @endif

                            @if ($setting->linkedin)
                                <li>
                                    <a href="{{ $setting->linkedin }}" target="_blank">
                                        <i class='bx bxl-linkedin'></i>
                                    </a>
                                </li>
                            @endif

                            @if ($setting->youtube)
                                <li>
                                    <a href="{{ $setting->youtube }}" target="_blank">
                                        <i class='bx bxl-youtube'></i>
                                    </a>
                                </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer Bottom Area -->

    <!-- Start Go Top Area -->
    <div class="go-top">
        <i class='bx bx-chevrons-up bx-fade-up'></i>
        <i class='bx bx-chevrons-up bx-fade-up'></i>
    </div>
    <!-- End Go Top Area -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @include('sweetalert::alert')


    <!-- Jquery Slim JS -->
    <script src="{{ asset('front-assets/js/jquery.min.js') }}"></script>
    <!-- Popper JS -->
    <script src="{{ asset('front-assets/js/popper.min.js') }}"></script>
    <!-- Bootstrap JS -->
    <script src="{{ asset('front-assets/js/bootstrap.min.js') }}"></script>
    <!-- Meanmenu JS -->
    <script src="{{ asset('front-assets/js/jquery.meanmenu.js') }}"></script>
    <!-- Wow JS -->
    <script src="{{ asset('front-assets/js/wow.min.js') }}"></script>
    <!-- Owl Carousel JS -->
    <script src="{{ asset('front-assets/js/owl.carousel.js') }}"></script>
    <!-- Owl Magnific JS -->
    <script src="{{ asset('front-assets/js/jquery.magnific-popup.min.js') }}"></script>
    <!-- Nice Select JS -->
    <script src="{{ asset('front-assets/js/jquery.nice-select.min.js') }}"></script>
    <!-- Appear JS -->
    <script src="{{ asset('front-assets/js/jquery.appear.js') }}"></script>
    <!-- Odometer JS -->
    <script src="{{ asset('front-assets/js/odometer.min.js') }}"></script>
    <!-- Parallax JS -->
    <script src="{{ asset('front-assets/js/parallax.min.js') }}"></script>
    <!-- Form Ajaxchimp JS -->
    <script src="{{ asset('front-assets/js/jquery.ajaxchimp.min.js') }}"></script>
    <!-- Form Validator JS -->
    <script src="{{ asset('front-assets/js/form-validator.min.js') }}"></script>
    <!-- Contact JS -->
    <script src="{{ asset('front-assets/js/contact-form-script.js') }}"></script>
    <!-- Map JS FILE -->
    <script src="{{ asset('front-assets/js/map.js') }}"></script>
    <!-- Custom JS -->
    <script src="{{ asset('front-assets/js/custom.js') }}"></script>


</body>


</html>
