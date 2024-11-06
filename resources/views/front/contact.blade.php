@extends('layouts.front')

@section('page-title', 'Contact Us')

@section('content')

    @php
        $setting = App\Models\Setting::first();
    @endphp

    <!-- Start Page Title Area -->
    <div class="page-title-area item-bg-1 jarallax" data-jarallax='{"speed": 0.3}'>
        <div class="container">
            <div class="page-title-content">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-sm-6">
                        <h2>Contact</h2>
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <ul>
                            <li>
                                <a href="{{ route('home') }}">
                                    Home
                                </a>
                            </li>
                            <li>Contact</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Title Area -->




    <!-- Start Address Area -->
    <section class="address-area pt-100 pb-70">
        <div class="container">

            <div class="row align-items-center">
                <div class="col-lg-8">
                    <section class="contact-form">

                        <div class="row">
                            {{-- contact form --}}
                            <div class="col-lg-12">
                                <div class="">
                                    <h2>Get In Touch</h2>
                                    <form id="contactForm" method="POST" action="{{ route('contact.submit') }}">
                                        @csrf
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="form-group">
                                                    <input type="text" name="name" id="name" class="form-control"
                                                        required data-error="Please enter your name" placeholder="Name">
                                                    <div class="help-block"></div>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-6">
                                                <div class="form-group">
                                                    <input type="tel" name="phone" id="phone" class="form-control"
                                                        required data-error="Please enter your phone" placeholder="Phone">
                                                    <div class="help-block"></div>
                                                </div>
                                            </div>

                                            <div class="col-lg-12 col-md-12">
                                                <div class="form-group">
                                                    <input type="email" name="email" id="email" class="form-control"
                                                        required data-error="Please enter your email" placeholder="Email">
                                                    <div class="help-block"></div>
                                                </div>
                                            </div>



                                            <div class="col-lg-12 col-md-12">
                                                <div class="form-group">
                                                    <textarea name="message" class="form-control" id="message" cols="30" rows="6" required
                                                        data-error="Write your message" placeholder="Your Message"></textarea>
                                                    <div class="help-block"></div>
                                                </div>
                                            </div>

                                            <div class="col-lg-12 col-md-12">
                                                <button type="submit" class="default-btn">
                                                    Send Message
                                                </button>
                                                <div id="msgSubmit" class="h3 text-center hidden"></div>
                                                <div class="clearfix"></div>
                                            </div>

                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>

                <div class="col-lg-4">

                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="single-address">
                                <i class='bx bx-phone-call'></i>
                                <h3>Contact</h3>
                                <span>
                                    <a href="tel:{{ $setting->phone }}">
                                        {{ $setting->phone }}
                                    </a>
                                </span>
                                <p class="mt-3">
                                    <a href="mailto:{{ $setting->email }}">
                                        {{ $setting->email }}
                                    </a>

                                </p>

                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <div class="single-address">
                                <i class='bx bx-location-plus'></i>
                                <h3>Location</h3>
                                <span><strong>Find where we are</strong></span> </br>

                                <span>
                                    {{ $setting->address }}
                                </span> </br>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <div class="single-address">
                                <i class='bx bx-time'></i>
                                <h3>Meet Us</h3>
                                <span>Available Hours to meet</span>
                                <p>
                                    {{ $setting->timing }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </section>
    <!-- End Address Area -->




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
