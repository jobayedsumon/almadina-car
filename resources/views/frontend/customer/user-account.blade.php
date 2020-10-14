@extends('frontend.layout.master')

@section('content')

    <!--Wrapper Content Start-->
    <div class="tj-wrapper">

        <!--Header Start-->
    @include('frontend.layout.header')

    <!--Inner Banner Section Start-->
    <div class="tj-inner-banner" style="background: url('{{ asset("storage/images/inner-banner.jpg") }}') top center no-repeat">
        <div class="container">
            <h2>User Account</h2>
        </div>
    </div>
    <!--Inner Banner Section End-->

    <!--Breadcrumb Section Start-->
    <div class="tj-breadcrumb">
        <div class="container">
            <ul class="breadcrumb-list">
                <li><a href="/">Home</a></li>
                <li class="active">User Account</li>
            </ul>
        </div>
    </div>
    <!--Breadcrumb Section End-->

        @if(session()->has('msg'))
            <p class="text-xl text-center" style="color: green">{{ session()->get('msg') }}</p>
        @endif

        <!--User Account Section Start-->
        <section class="tj-account-frm">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="tj-tabs">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="active"><a href="#user_account" data-toggle="tab"><i class="fas fa-user"></i> My Account</a></li>
                                <li><a href="#booking_history" data-toggle="tab">
                                        <i class="fas fa-chart-bar"></i> Booking History</a></li>
                                <li><a href="#cancel_booking" data-toggle="tab"><i class="fas fa-times"></i> Cancel Booking</a></li>
                            </ul>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane active" id="user_account">
                                <form class="account-frm" method="POST">
                                    <div class="col-md-6 col-sm-6">
                                        <div class="account-field">
                                            <label>Full Name</label>
                                            <span class="fas fa-user"></span>
                                            <input type="text" name="name" value="{{ $user->name }}" placeholder="Enter Full Name">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <div class="account-field">
                                            <label>Phone Number</label>
                                            <span class="icon-phone icomoon"></span>
                                            <input type="text" name="phone_number" placeholder="Enter Phone Number" value="{{ $user->phone_number }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <div class="account-field">
                                            <label>Email</label>
                                            <span class="fas fa-envelope"></span>
                                            <input type="email" name="email" placeholder="Enter Email id" value="{{ $user->email }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <div class="account-field">
                                            <label>Password ( Left blank to keep old Password )</label>
                                            <span class="fas fa-lock"></span>
                                            <input type="password" name="password" placeholder="Password">
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-sm-6">
                                        <button type="submit" class="save-btn">Save <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></button>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane" id="booking_history">
                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th scope="col">Reference</th>
                                        <th scope="col">Car</th>
                                        <th scope="col">Start Location</th>
                                        <th scope="col">End Location</th>
                                        <th scope="col">Pickup Date</th>
                                        <th scope="col">Pickup Time</th>
                                        <th scope="col">Dropoff Date</th>
                                        <th scope="col">Dropoff Time</th>
                                        <th scope="col">Service Type</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @forelse($user->bookings as $booking)
                                    <tr>
                                        <th scope="row">{{ $booking->reference }}</th>
                                        <td>{{ $booking->car->name }}</td>
                                        <td>{{ $booking->start_location }}</td>
                                        <td>{{ $booking->end_location }}</td>
                                        <td>{{ $booking->pickup_date }}</td>
                                        <td>{{ $booking->pickup_time }}</td>
                                        <td>{{ $booking->dropoff_date }}</td>
                                        <td>{{ $booking->dropoff_time }}</td>
                                        <td>{{ $booking->service_type }}</td>
                                    </tr>
                                    @empty
                                    @endforelse
                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane" id="cancel_booking">
                                <form class="account-frm" method="POST" action="{{ route('cancel-booking') }}">
                                    @csrf
                                    <div class="col-md-6 col-sm-6">
                                        <div class="account-field">
                                            <label>Booking List</label>
                                            <select class="p-5" name="reference" id="">
                                                @forelse($user->bookings as $booking)
                                                    <option value="{{ $booking->reference }}">
                                                       #{{ $booking->reference }} {{ $booking->car->name }} ( {{ $booking->start_location }} - {{ $booking->end_location }} )
                                                    </option>
                                                @empty
                                                @endforelse
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-sm-6">
                                        <button type="submit" class="save-btn">Cancel <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--User Account Section End-->

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

