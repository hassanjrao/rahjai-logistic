@extends('layouts.front')

@section('page-title', 'Track Your Package')

@php
    $setting = App\Models\Setting::first();
@endphp

@section('css')

    <style>
        .tracking-detail {
            padding: 3rem 0
        }

        #tracking {
            margin-bottom: 1rem
        }

        [class*=tracking-status-] p {
            margin: 0;
            font-size: 1.1rem;
            color: #fff;
            text-transform: uppercase;
            text-align: center
        }

        [class*=tracking-status-] {
            padding: 1.6rem 0
        }

        .tracking-status-intransit {
            background-color: #fa4612
        }

        .tracking-status-outfordelivery {
            background-color: #fa4612
        }

        .tracking-status-deliveryoffice {
            background-color: #f7dc6f
        }

        .tracking-status-delivered {
            background-color: #4cbb87
        }

        .tracking-status-attemptfail {
            background-color: #b789c7
        }

        .tracking-status-error,
        .tracking-status-exception {
            background-color: #d26759
        }

        .tracking-status-expired {
            background-color: #616e7d
        }

        .tracking-status-pending {
            background-color: #ccc
        }

        .tracking-status-inforeceived {
            background-color: #214977
        }

        .tracking-list {
            border: 1px solid #e5e5e5
        }

        .tracking-item {
            border-left: 1px solid #e5e5e5;
            position: relative;
            padding: 2rem 1.5rem .5rem 2.5rem;
            font-size: .9rem;
            margin-left: 3rem;
            min-height: 5rem
        }

        .tracking-item:last-child {
            padding-bottom: 4rem
        }

        .tracking-item .tracking-date {
            margin-bottom: .5rem
        }

        .tracking-item .tracking-date span {
            color: #888;
            font-size: 85%;
            padding-left: .4rem
        }

        .tracking-item .tracking-content {
            padding: .5rem .8rem;
            background-color: #f4f4f4;
            border-radius: .5rem
        }

        .tracking-item .tracking-content span {
            display: block;
            color: #888;
            font-size: 85%
        }

        .tracking-item .tracking-icon {
            line-height: 2.6rem;
            position: absolute;
            left: -1.3rem;
            width: 2.6rem;
            height: 2.6rem;
            text-align: center;
            border-radius: 50%;
            font-size: 1.1rem;
            background-color: #fff;
            color: #fff
        }

        .tracking-item .tracking-icon.status-sponsored {
            background-color: #f68
        }

        .tracking-item .tracking-icon.status-delivered {
            background-color: #4cbb87
        }

        .tracking-item .tracking-icon.status-outfordelivery {
            background-color: #fa4612
        }

        .tracking-item .tracking-icon.status-deliveryoffice {
            background-color: #f7dc6f
        }

        .tracking-item .tracking-icon.status-attemptfail {
            background-color: #b789c7
        }

        .tracking-item .tracking-icon.status-exception {
            background-color: #d26759
        }

        .tracking-item .tracking-icon.status-inforeceived {
            background-color: #214977
        }

        .tracking-item .tracking-icon.status-intransit {
            color: #e5e5e5;
            border: 1px solid #e5e5e5;
            font-size: .6rem
        }

        @media(min-width:992px) {
            .tracking-item {
                margin-left: 10rem
            }

            .tracking-item .tracking-date {
                position: absolute;
                left: -10rem;
                width: 7.5rem;
                text-align: right
            }

            .tracking-item .tracking-date span {
                display: block
            }

            .tracking-item .tracking-content {
                padding: 0;
                background-color: transparent
            }
        }
    </style>

@endsection

@section('content')

    <!-- Start Tracking Number Area -->
    <div class="tracking-number-area fun-blue-bg ptb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-4">
                    <div class="tracking-logo">
                        <img src="{{ asset('front-assets/img/logo/logo.png') }}" alt="Image">
                    </div>
                </div>
                <div class="col-lg-6 col-md-8">
                    <div class="tracking-body">
                        <form class="tracking-wrap" action="{{ route('track') }}" method="GET">
                            <input type="text" class="input-tracking" placeholder="Type your tracking number"
                                value="{{ request()->tid }}" name="tid">

                            <button class="default-btn active" type="submit">Track Now</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Tracking Number Area -->

    @if ($message)
        <section>
            <div class="container mt-5 trackingSec">
                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <div id="tracking-pre"></div>
                        <div id="tracking">
                            <div class="text-center tracking-status-intransit">
                                <p class="tracking-status text-tight">
                                    {{ $message }}
                                </p>
                            </div>
                        </div>

                    </div>

                </div>

            </div>

        </section>
    @endif

    @if ($order)
        <section>
            <div class="container mt-5 trackingSec">
                <div class="row">
                    <div class="col-lg-8">

                        <div id="tracking-pre"></div>
                        <div id="tracking">
                            <div class="text-center tracking-status-intransit">
                                <p class="tracking-status text-tight">
                                    {{ '#' . $order->tracking_number }} {{ $order->orderStatus->name }}
                                </p>
                            </div>
                            <div class="tracking-list">
                                @foreach ($orderLogs as $log)
                                    <div class="tracking-item">
                                        <div class="tracking-icon status-outfordelivery">
                                            <svg class="svg-inline--fa fa-shipping-fast fa-w-20" aria-hidden="true"
                                                data-prefix="fas" data-icon="shipping-fast" role="img"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" data-fa-i2svg="">
                                                <path fill="currentColor"
                                                    d="M624 352h-16V243.9c0-12.7-5.1-24.9-14.1-33.9L494 110.1c-9-9-21.2-14.1-33.9-14.1H416V48c0-26.5-21.5-48-48-48H112C85.5 0 64 21.5 64 48v48H8c-4.4 0-8 3.6-8 8v16c0 4.4 3.6 8 8 8h272c4.4 0 8 3.6 8 8v16c0 4.4-3.6 8-8 8H40c-4.4 0-8 3.6-8 8v16c0 4.4 3.6 8 8 8h208c4.4 0 8 3.6 8 8v16c0 4.4-3.6 8-8 8H8c-4.4 0-8 3.6-8 8v16c0 4.4 3.6 8 8 8h208c4.4 0 8 3.6 8 8v16c0 4.4-3.6 8-8 8H64v128c0 53 43 96 96 96s96-43 96-96h128c0 53 43 96 96 96s96-43 96-96h48c8.8 0 16-7.2 16-16v-32c0-8.8-7.2-16-16-16zM160 464c-26.5 0-48-21.5-48-48s21.5-48 48-48 48 21.5 48 48-21.5 48-48 48zm320 0c-26.5 0-48-21.5-48-48s21.5-48 48-48 48 21.5 48 48-21.5 48-48 48zm80-208H416V144h44.1l99.9 99.9V256z">
                                                </path>
                                            </svg>
                                            <!-- <i class="fas fa-circle"></i> -->
                                        </div>
                                        <div class="tracking-date"> {{ $log->created_at->format('d M, Y h:i A') }}</div>
                                        <div class="tracking-content"> {{ $log->orderStatus->name }}:
                                            {{ $log->description }}</div>
                                    </div>
                                @endforeach


                            </div>

                        </div>

                    </div>
                    {{-- image --}}
                    <div class="col-lg-4">
                        <img src="{{ $order->image_url }}" alt="" style="width: 100%">
                    </div>
                </div>
            </div>
        </section>
    @endif
    <!-- Start Address Area -->
    <section class="address-area pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-address">
                        <i class='bx bx-phone-call'></i>
                        <h3>Contact</h3>
                        <a href="tel:{{ $setting->phone }}">
                            {{ $setting->phone }}
                        </a>

                        <a class="mt-3" href="mailto:{{ $setting->email }}">
                            {{ $setting->email }}
                        </a>

                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-address">
                        <i class='bx bx-location-plus'></i>
                        <h3>Location</h3>
                        <span><strong>Find where we are</strong></span> </br>

                        <span>
                            {{ $setting->address }}
                        </span> </br>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
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
