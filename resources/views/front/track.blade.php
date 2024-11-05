@extends('layouts.front')

@section('page-title', 'Track Your Package')

@section('content')

    <!-- Start Tracking Number Area -->
    <div class="tracking-number-area fun-blue-bg ptb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-4">
                    <div class="tracking-logo">
                        <img src="{{  asset('front-assets/img/logo/logo.png')}}" alt="Image">
                    </div>
                </div>
                <div class="col-lg-6 col-md-8">
                    <div class="tracking-body">
                        <form class="tracking-wrap" action="https://www.rahjiexpress.com/track.php" method="POST">
                            <input type="text" class="input-tracking" placeholder="Type your tracking number"
                                name="tid">

                            <button class="default-btn active" type="submit" name="submit">Track Now</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Tracking Number Area -->

    <!-- Start Address Area -->
    <section class="address-area pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-address">
                        <i class='bx bx-phone-call'></i>
                        <h3>Contact</h3>
                        <span>+966 819 0XXXXX</a></span> </br>

                        <p>support@rahjiexpress.com</p>

                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-address">
                        <i class='bx bx-location-plus'></i>
                        <h3>Location</h3>
                        <span><strong>Find where we are</strong></span> </br>

                        <span>Riyadh Saudi Arabia</span> </br>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
                    <div class="single-address">
                        <i class='bx bx-time'></i>
                        <h3>Meet Us</h3>
                        <span>Available Hours to meet</span>
                        <p>9:00 AM – 8:00 PM</p>
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
