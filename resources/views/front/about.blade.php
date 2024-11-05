@extends('layouts.front')

@section('page-title', 'About Us')

@section('content')

    <!-- Start Page Title Area -->
    <div class="page-title-area item-bg-1 jarallax" data-jarallax='{"speed": 0.3}'>
        <div class="container">
            <div class="page-title-content">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-sm-6">
                        <h2>About Us</h2>
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <ul>
                            <li>
                                <a href="{{ route('home') }}">
                                    Home
                                </a>
                            </li>
                            <li>About Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Title Area -->

    <!-- Start About Area -->
    <section class="about-area ptb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-img">
                        <img src="{{  asset('front-assets/img/about-img.jpg')}}" alt="Image">
                        <div class="about-quatre">
                            <i class="bx bxs-quote-alt-left bx-tada"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-content ml-30">
                        <span>About Us</span>
                        <h2>Reliable and express logistics and transport solutions That does not waste your time!</h2>
                        <p class="mb-0" style="text-align: justify;">Rahji Express Logistics offers a host of logistic
                            management services and supply chain solutions.
                            We provide innovative solutions with the best people, processes, and technology. With over 60
                            years of
                            providing world class service to their customers on the asset side, a need to provide a one stop
                            shop
                            for a” true customer service logistic solution” was introduced. By adding this dimension to an
                            already
                            dynamic and customer centric asset based provider, we feel we bring a total solution.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End About Area -->




    <!-- Start Counter Area -->
    <section class="counter-area counter-area-two pt-100 pb-70 jarallax" data-jarallax='{"speed": 0.3}'>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-counter">
                        <i class="flaticon-box"></i>
                        <h2>
                            <span class="odometer" data-count="8845">00</span> <span class="traget">K</span>
                        </h2>
                        <p>Delivered Packages</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-counter">
                        <i class="flaticon-planet-earth"></i>
                        <h2>
                            <span class="odometer" data-count="1507">00</span> <span class="traget">M</span>
                        </h2>
                        <p>Countries Covered</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-counter">
                        <i class="flaticon-support"></i>
                        <h2>
                            <span class="odometer" data-count="1000">00</span> <span class="traget">K</span>
                        </h2>
                        <p>Satisfied Clients</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-counter">
                        <i class="flaticon-product-realise"></i>
                        <h2>
                            <span class="odometer" data-count="4586">00</span> <span class="traget">M</span>
                        </h2>
                        <p>Tons of Goods</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Counter Area -->

@endsection
