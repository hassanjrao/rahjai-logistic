@extends('layouts.front')

@section('page-title', 'Services')

@section('content')


    <!-- Start Page Title Area -->
    <div class="page-title-area item-bg-1 jarallax" data-jarallax='{"speed": 0.3}'>
        <div class="container">
            <div class="page-title-content">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-sm-6">
                        <h2>Services</h2>
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <ul>
                            <li>
                                <a href="{{ route('home') }}">
                                    Home
                                </a>
                            </li>
                            <li>Services</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Title Area -->

    <!-- Start What We Offer Area -->
    <section class="what-offer-area-two pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6 p-0">
                    <div class="single-offer">
                        <i class="icon flaticon-server"></i>
                        <h3>Warehousing</h3>
                        <p>We have top class warehousing facilities. Our warehouses are spacious, well guarded,..</p>
                        <a class="circle-read-more" href="#">
                            <i class="flaticon-right-1"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 p-0">
                    <div class="single-offer">
                        <i class="icon flaticon-air-freight"></i>
                        <h3>Air Freight</h3>
                        <p>Gold Freight Rush Express Company is an airfreight forwarding specialists offering a
                            comprehensive ...</p>
                        <a class="circle-read-more" href="#">
                            <i class="flaticon-right-1"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 p-0">
                    <div class="single-offer">
                        <i class="icon flaticon-plastic-bottle"></i>
                        <h3>Ocean Freight</h3>
                        <p>Rahji Express Logistics Company flexible and scalable sea freight solutions cover your ...</p>
                        <a class="circle-read-more" href="#">
                            <i class="flaticon-right-1"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 p-0">
                    <div class="single-offer">
                        <i class="icon flaticon-street"></i>
                        <h3>Road Freight</h3>
                        <p>Rahji Express Logistics Transport offers an efficient integrated transport system with multiple
                            types ..</p>
                        <a class="circle-read-more" href="#">
                            <i class="flaticon-right-1"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End What We Offer Area -->


    <!-- End Began Area -->
    <section class="began-area pb-70">
        <div class="container">
            <div class="section-title">
                <span>Began With Roles</span>
                <h2>Please obey the roles to keep safe</h2>
                <p>Rahji Express Logistics offers a host of logistic management services and supply chain solutions.</p>
            </div>
            <div class="began-top-wrap">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="began-wrap">
                            <h2>Keep safe your products with prevoz</h2>
                            <div class="row">
                                <div class="col-lg-4 col-sm-6 p-0">
                                    <div class="single-began">
                                        <i class="flaticon-fast-delivery"></i>
                                        <h3>Fast & Efficient Delivery</h3>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-6 p-0">
                                    <div class="single-began">
                                        <i class="flaticon-lock"></i>
                                        <h3>Security For Cargo Tools</h3>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-6 p-0">
                                    <div class="single-began">
                                        <i class="flaticon-stopwatch"></i>
                                        <h3>Real-Time Tracking</h3>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-6 p-0">
                                    <div class="single-began">
                                        <i class="flaticon-payment-method"></i>
                                        <h3>Easy Payment Methods</h3>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-6 p-0">
                                    <div class="single-began">
                                        <i class="flaticon-warehouse"></i>
                                        <h3>24/7 Hours Support</h3>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-6 p-0">
                                    <div class="single-began">
                                        <i class="flaticon-distribution"></i>
                                        <h3>Warehouse Storage</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Began Area -->


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
