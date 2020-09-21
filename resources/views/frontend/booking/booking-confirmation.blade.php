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
                    <li><a href="booking-form.html">Booking Form</a></li>
                    <li>Confirm Booking</li>
                    <li class="active"><a href="payment.html">Booking Confirmation</a></li>
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
                            <h3>Payment Successfull!</h3>
                            <p>Your payment of $460.00 to PrimeCabs ID:PR12345670 has been  proceeded Successfully!.We’ll send you a confirmation Email shortly.</p>
                            <a href="home-1.html"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i> Back to Home</a>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-4">
                        <div class="booking-summary">
                            <h3>Booking Summary</h3>
                            <ul class="booking-info">
                                <li><span>Booking Reference: </span>PRIM00023</li>
                                <li><span>Journey Type: </span>One Way</li>
                                <li><span>Distance & Time: </span>2,522 km &         23 hours 7 mins</li>
                                <li><span>One Way Fare: </span>$450</li>
                            </ul>
                            <div class="journey-info">
                                <h4>One Way Journey</h4>
                                <i class="far fa-edit"></i>
                            </div>
                            <ul class="service-info">
                                <li><span>From: </span>San Francisco, USA</li>
                                <li><span>To: </span>New York, USA</li>
                                <li><span>Pickup Date: </span>20-05-2017</li>
                                <li><span>Pickup Time: </span>02.30PM</li>
                                <li><span>Fare Details: </span>Basic Amount: $450.00</li>
                            </ul>
                            <div class="fare-box">
                                <strong>Total Fare: <span>$450.00</span></strong>
                                <span>( inclusive of All Taxes )</span>
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

