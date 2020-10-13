@extends('frontend.layout.master')

@section('content')

    <!--Wrapper Content Start-->
    <div class="tj-wrapper">

        <!--Header Start-->
    @include('frontend.layout.header')

    <!--Inner Banner Section Start-->
        <div class="tj-inner-banner" style="background: url('{{ asset("storage/images/inner-banner.jpg") }}') top center no-repeat">
            <div class="container">
                <h2>Booking Form</h2>
            </div>
        </div>
        <!--Inner Banner Section End-->

        <!--Breadcrumb Section Start-->
        <div class="tj-breadcrumb">
            <div class="container">
                <ul class="breadcrumb-list">
                    <li><a href="/">Home</a></li>
                    <li class="active">Booking Form</li>
                </ul>
            </div>
        </div>
        <!--Breadcrumb Section End-->

        <!--Booking Form Section Start-->
        <section class="tj-booking-frm">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-12">
                        <div class="tj-tabs">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="active"><a href="#point" data-toggle="tab">Point to Point</a></li>
                            </ul>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane active" id="point">
                                <form class="booking-frm" id="ride-bform">
                                    <div class="col-md-12 col-sm-12">
                                        <div class="field-holder">
                                            <label for="one_way">
                                                <input type="radio" name="service_type" id="one_way" checked value="One Way Journey">One Way
                                            </label>
                                            <label for="two_way">
                                                <input type="radio" name="service_type" id="two_way" value="Two Way Journey">Two Way
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12">
                                        <strong>Picking Up</strong>
                                        <div class="field-holder">
                                            <span class="fas fa-map-marker-alt"></span>
                                            <input id="point_start_loc" type="text" name="pickup_loc" placeholder="Pickup Location">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <div class="field-holder">
                                            <span class="fas fa-calendar-alt"></span>
                                            <input type="text" name="pickup_date" placeholder="Select your Date" id="pickup_date">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <div class="field-holder">
                                            <span class="far fa-clock"></span>
                                            <input type="text" name="pickup_time" placeholder="Select Timings" id="pickup_time">
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12">
                                        <strong>Dropoff</strong>
                                        <div class="field-holder">
                                            <span class="fas fa-map-marker-alt"></span>
                                            <input type="text" id="point_end_loc" name="dropoff_loc" placeholder="Pickup Location">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <div class="field-holder">
                                            <span class="fas fa-calendar-alt"></span>
                                            <input type="text" name="dropoff_date" id="dropoff_date" placeholder="Select your Date">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <div class="field-holder">
                                            <span class="far fa-clock"></span>
                                            <input type="text" name="dropoff_time" placeholder="Select Timings" id="dropoff_time" >
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12">
                                        <div class="field-holder">
                                            <div class="car-list">
                                                <select name="car_name" id="car_list" class="selectpicker">
                                                    <option value="">Select Car</option>
                                                    @forelse(\App\Car::all() as $car)
                                                    <option {!! $selectedCar ? ( $selectedCar->slug == $car->slug ? 'selected' : '' ) : '' !!} data-slug="{{ $car->slug }}" value="{{ $car->name }}"
                                                            data-hrrate="{{ $car->hourly_price }}" data-dayrate="{{ $car->daily_price }}">
                                                        {{ $car->name }}</option>
                                                    @empty
                                                    @endforelse
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12">
                                        <p class="ride-terms">I understand and agree with the <a href="policy.html">Terms</a> of Service and Cancellation </p>
                                        <label for="book_terms">
                                            <input name="book_terms" id="book_terms" type="checkbox" checked>
                                        </label>
                                    </div>
                                    <div class="col-md-12 col-sm-12">
                                        <button type="submit" class="book-btn">Next Step <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-12">
                        <div class="booking-summary">
                            <h3>Booking Summary</h3>
                            <ul class="booking-info">
                                <li><span>Booking Reference: </span><div class="book-ref"></div></li>
                                <li><span>Service Type: </span>
                                    <div class="service_type"></div></li>
                                <li><span>Selected Ride Car:</span>
                                    <div class="ride_car">Select Ride Car</div></li>
                            </ul>
                            <div class="journey-info">
                                <h4	class="service_type">Select Service Type</h4>
                            </div>
                            <ul class="service-info">
                                <li><span>From: </span><div class="startup_loc info-outer">Enter Startup Location</div></li>
                                <li><span>To: </span><div class="end_loc info-outer">Enter Destination</div></li>
                                <li><span>Pickup Date: </span><div class="pick_date info-outer">Enter Pickup Date</div></li>
                                <li><span>Pickup Time: </span><div class="pick_time info-outer">Enter Pickup Time</div></li>
                                <li><span>Dropoff Date: </span><div class="drop_date info-outer">Enter Dropoff Date</div></li>
                                <li><span>Dropoff Time: </span><div class="drop_time info-outer">Enter Dropoff Time</div></li>
                            </ul>
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

