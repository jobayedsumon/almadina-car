@extends('frontend.layout.master')

@section('content')

    <!--Wrapper Content Start-->
    <div class="tj-wrapper">

        <!--Header Start-->
    @include('frontend.layout.header')

    <!--Inner Banner Section Start-->
        <div class="tj-inner-banner" style="background: url('{{ asset("storage/images/inner-banner.jpg") }}') top center no-repeat">
            <div class="container">
                <h2>Booking Confirmation</h2>
            </div>
        </div>
        <!--Inner Banner Section End-->

        <!--Breadcrumb Section Start-->
        <div class="tj-breadcrumb">
            <div class="container">
                <ul class="breadcrumb-list">
                    <li><a href="/">Home</a></li>
                    <li><a href="#">Booking Form</a></li>
                    <li>Confirm Booking</li>
                    <li class="active"><a href="">Booking Confirmation</a></li>
                </ul>
            </div>
        </div>
        <!--Breadcrumb Section End-->


        <!--Booking Form Section Start-->
        <section class="tj-payment" id="success-payment">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-8">
                        <div class="success-msg">
                            <span class="fas fa-check"></span>
                            <h3>Booking Successfull!</h3>
                            <p>Your car booking at Almadina Car has been  placed Successfully!. Your booking reference no. is #
                                <span style="border: none">{{ $booking->reference }}</span></p>
                            <a href="/"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i> Back to Home</a>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="booking-summary">
                            <h3>Booking Summary</h3>
                            <ul class="booking-info">
                                <li><span>Booking Reference: </span><div>{{ $booking->reference }}</div></li>
                                <li><span>Journey Type:</span>
                                    <div class="">{{ $booking->service_type }}</div></li>
                                <li><span>Selected Ride Car:</span>
                                    <div class="">{{ $booking->car->name }}</div></li>
                            </ul>
                            <div class="journey-info">
                                <h4	class="">{{ $booking->service_type }}</h4>
                            </div>
                            <ul class="service-info">
                                <li><span>From: </span><div class=" info-outer">{{ $booking->start_location }}</div></li>
                                <li><span>To: </span><div class=" info-outer">{{ $booking->end_location }}</div></li>
                                <li><span>Pickup Date: </span><div class=" info-outer">{{ $booking->pickup_date }}</div></li>
                                <li><span>Pickup Time: </span><div class=" info-outer">{{ $booking->pickup_time }}</div></li>
                                <li><span>Dropoff Date: </span><div class=" info-outer">{{ $booking->dropoff_date }}</div></li>
                                <li><span>Dropoff Time: </span><div class=" info-outer">{{ $booking->dropoff_time }}</div></li>
                            </ul>
                            <div class="fare-box">
                                <strong>Trip Estimation</strong>
                                <span class="">{{ $booking->trip_time }}</span>
                            </div>

                            <div class="fare-box">
                                <strong>Trip Cost</strong>
                                <span class="">{{ $booking->trip_cost }}</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!--Booking Form Section End-->

        <!--Call To Action Content Start-->
        <section class="tj-cal-to-action" style="background: url('{{ asset("frontend/images/cta-bg2.jpg") }}') no-repeat center center">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <div class="cta-box">
                            <img src="{{ asset('frontend/images/cta-icon-home.png') }}" alt=""/>
                            <div class="cta-text">
                                <strong>Home Pickup</strong>
                                <p>Get your car in front of your door.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="cta-box">
                            <img src="{{ asset('frontend/images/cta-icon2.png') }}" alt=""/>
                            <div class="cta-text">
                                <strong>24/7 Customer Care</strong>
                                <p>Our customer support team is here for you 24/7.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="cta-box">
                            <img src="{{ asset('frontend/images/cta-icon3.png') }}" alt=""/>
                            <div class="cta-text">
                                <strong>Easy Bookings</strong>
                                <p>Book car just with some clicks here and there.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        @include('frontend.layout.footer')


    </div>
    <!--Wrapper Content End-->



@endsection

<script>

</script>

