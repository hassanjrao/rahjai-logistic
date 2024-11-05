@extends('layouts.front')

@section('page-title', 'Home')

@section('content')

    <!-- Start Prevoz Slider Area -->
    <section class="prevoz-slider-area prevoz-slider-area-two">
        <div class="prevoz-slider owl-carousel owl-theme">
            <div class="prevoz-slider-item slider-item-bg-4">
                <div class="d-table">
                    <div class="d-table-cell">
                        <div class="container">
                            <div class="prevoz-slider-text overflow-hidden one">
                                <span>Welcome</span>
                                <h1>Rahji Express Logistics</h1>




                                <div class="tracking-body">



                                    <form class="tracking-wrap" action="https://www.rahjiexpress.com/index.php"
                                        method="POST">
                                        <input type="text" class="input-tracking" placeholder="Type your tracking number"
                                            name="tid">
                                        <button class="default-btn active" type="submit" value="submit"
                                            name="submit">Track
                                            Now</button>
                                    </form>


                                </div>



                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="prevoz-slider-item slider-item-bg-5">
                <div class="d-table">
                    <div class="d-table-cell">
                        <div class="container">
                            <div class="prevoz-slider-text overflow-hidden two">
                                <span>Logistic Services</span>
                                <h1>We Are Reliable and Efficient</h1>

                                <div class="tracking-body">


                                    <form class="tracking-wrap" action="https://www.rahjiexpress.com/index.php"
                                        method="POST">
                                        <input type="text" class="input-tracking" placeholder="Type your tracking number"
                                            name="tid">
                                        <button class="default-btn active" type="submit" value="submit"
                                            name="submit">Track
                                            Now</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="prevoz-slider-item slider-item-bg-6">
                <div class="d-table">
                    <div class="d-table-cell">
                        <div class="container">
                            <div class="prevoz-slider-text overflow-hidden three">
                                <span>Logistic Services</span>
                                <h1>Faster is fatal slower is can be safe.</h1>
                                <div class="tracking-body">



                                    <form class="tracking-wrap" action="https://www.rahjiexpress.com/index.php"
                                        method="POST">
                                        <input type="text" class="input-tracking" placeholder="Type your tracking number"
                                            name="tid">
                                        <button class="default-btn active" type="submit" value="submit"
                                            name="submit">Track
                                            Now</button>
                                    </form>



                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Prevoz Slider Area -->

    <!-- Start What We Offer Area -->
    <section class="what-offer-area-two mt-minus-70 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6 p-0">
                    <div class="single-offer">
                        <i class="icon flaticon-server"></i>
                        <h3>Warehousing</h3>
                        <p>We have top class warehousing facilities. Our warehouses are spacious, well guarded,.. </p>
                        <a class="circle-read-more" href="#">
                            <i class="flaticon-right-1"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 p-0">
                    <div class="single-offer">
                        <i class="icon flaticon-air-freight"></i>
                        <h3>Air Freight</h3>
                        <p>Rahji Express Logistics is an airfreight forwarding specialists offering a comprehensive ...
                        </p>
                        <a class="circle-read-more" href="#">
                            <i class="flaticon-right-1"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 p-0">
                    <div class="single-offer">
                        <i class="icon flaticon-plastic-bottle"></i>
                        <h3>Ocean Freight</h3>
                        <p>Rahji Express Logistics flexible and scalable sea freight solutions cover your ...</p>
                        <a class="circle-read-more" href="#">
                            <i class="flaticon-right-1"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 p-0">
                    <div class="single-offer">
                        <i class="icon flaticon-street"></i>
                        <h3>Road Freight</h3>
                        <p>Rahji Express Logistics offers an efficient integrated transport system with multiple types
                            ..</p>
                        <a class="circle-read-more" href="#">
                            <i class="flaticon-right-1"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End What We Offer Area -->

    <!-- Start About Area -->
    <section class="about-area about-area-two pb-100">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-content">
                        <span>Know About Us </span>
                        <h2>Reliable and express logistics and transport solutions That does not waste your time!</h2>
                        <p>Rahji Express Logistics offers a host of logistic management services and supply chain
                            solutions.
                            We provide innovative solutions with the best people, processes, and technology. With over
                            60 years of providing world class service to their customers on the asset side, a need to
                            provide a one stop shop for a” true customer service logistic solution” was introduced. By
                            adding this dimension to an already dynamic and customer centric asset based provider, we
                            feel we bring a total solution.
                        </p>
                        <a class="default-btn" href="{{ route('about') }}">
                            About Us
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 pr-0">
                    <div class="about-img">
                        <div class="about-list">
                            <h3>Our Prime priorities:</h3>
                            <ul>
                                <li>
                                    <i class="flaticon-checked"></i>
                                    Customer and employee solutions are time-consuming.
                                </li>
                                <li>
                                    <i class="flaticon-checked"></i>
                                    We accomplish our goals more efficiently.
                                </li>
                                <li>
                                    <i class="flaticon-checked"></i>
                                    Transparent Communication Collaboration properly do.
                                </li>
                                <li>
                                    <i class="flaticon-checked"></i>
                                    It provides a road map to increased productivity.
                                </li>
                                <li>
                                    <i class="flaticon-checked"></i>
                                    Providing independent advice for you.
                                </li>
                                <li>
                                    <i class="flaticon-checked"></i>
                                    24/7 support system available
                                </li>
                            </ul>
                        </div>
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
