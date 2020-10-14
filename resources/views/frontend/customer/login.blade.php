@extends('frontend.layout.master')

@section('content')

    <!--Wrapper Content Start-->
    <div class="tj-wrapper">

        <!--Header Start-->
    @include('frontend.layout.header')

    <!--Inner Banner Section Start-->
    <div class="tj-inner-banner" style="background: url('{{ asset("storage/images/inner-banner.jpg") }}') top center no-repeat">
        <div class="container">
            <h2>Login</h2>
        </div>
    </div>
    <!--Inner Banner Section End-->

    <!--Breadcrumb Section Start-->
    <div class="tj-breadcrumb">
        <div class="container">
            <ul class="breadcrumb-list">
                <li><a href="/">Home</a></li>
                <li class="active">Login</li>
            </ul>
        </div>
    </div>
    <!--Breadcrumb Section End-->

        <ul class="text-center">
            @forelse($errors->all() as $error)
                <li class="text-danger">{{ $error }}</li>
            @empty
            @endforelse
        </ul>

        @if(session()->has('msg'))
            <p class="text-xl text-center" style="color: green">{{ session()->get('msg') }}</p>
        @endif



    <!--Login Section Start-->
    <section class="tj-login">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <!--Tabs Nav Start-->
                    <div class="tj-tabs">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="active"><a href="#login" data-toggle="tab">Login</a></li>
                            <li><a href="#register" data-toggle="tab">Register</a></li>
                        </ul>
                    </div>
                    <!--Tabs Nav End-->
                    <!--Tabs Content Start-->
                    <div class="tab-content">
                        <!--Login Tabs Content Start-->
                        <div class="tab-pane active" id="login">
                            <div class="col-md-6 col-sm-6">
                                <div class="login-cta">
                                    <ul class="cta-list">
                                        <li>
                                            <div class="cta-info">
                                                <strong>Home Pickup</strong>
                                                <p>Get your car in front of your door.
                                                   </p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="cta-info">
                                                <strong>24/7 Customer Support</strong>
                                                <p> Our customer support team is here for you 24/7.</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="cta-info">
                                                <strong>Easy Bookings</strong>
                                                <p>Book car just with some clicks here and there.</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <form class="login-frm" method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="field-holder">
                                        <span class="fas fa-envelope"></span>
                                        <input type="email" name="email" placeholder="Enter your Email Address">
                                    </div>
                                    <div class="field-holder">
                                        <span class="fas fa-lock"></span>
                                        <input type="password" name="password" placeholder="Password">
                                    </div>
                                    <a href="#" class="forget-pass">Forget Password?</a>
                                    <button type="submit" class="reg-btn">Login <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></button>
{{--                                    <button type="submit" class="facebook-btn">Login with Facebook <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></button>--}}
{{--                                    <button type="submit" class="google-btn">Login with Google <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></button>--}}
                                </form>
                            </div>
                        </div>
                        <!--Login Tabs Content End-->
                        <!--Register Tabs Content Start-->
                        <div class="tab-pane" id="register">
                            <div class="col-md-6 col-sm-6">
                                <div class="reg-cta">
                                    <ul class="cta-list">
                                        <li>
                                            <div class="cta-info">
                                                <strong>Home Pickup</strong>
                                                <p>Get your car in front of your door.
                                                </p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="cta-info">
                                                <strong>24/7 Customer Support</strong>
                                                <p> Our customer support team is here for you 24/7.</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="cta-info">
                                                <strong>Easy Bookings</strong>
                                                <p>Book car just with some clicks here and there.</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <!--Register Tabs Form Start-->
                                <form class="reg-frm" method="POST" action="{{ route('register') }}">
                                    @csrf
                                    <div class="field-holder">
                                        <span class="fas fa-user"></span>
                                        <input type="text" name="name" placeholder="Enter your Full Name" required>
                                    </div>
                                    <div class="field-holder">
                                        <span class="fas fa-envelope"></span>
                                        <input type="email" name="email" placeholder="Enter your Email Address" required>
                                    </div>
                                    <div class="field-holder">
                                        <span class="fas fa-phone"></span>
                                        <input type="text" name="phone_number" placeholder="Enter your Phone Number" required>
                                    </div>
                                    <div class="field-holder">
                                        <span class="fas fa-lock"></span>
                                        <input type="password" name="password" placeholder="Password" required>
                                    </div>
                                    <div class="field-holder">
                                        <span class="fas fa-lock"></span>
                                        <input type="password" name="password_confirmation" placeholder="Confirm Password" required>
                                    </div>
                                    <label for="terms">
                                        <input type="checkbox" name="terms" id="terms" required>
                                        I accept terms & conditions
                                    </label>
                                    <button type="submit" class="reg-btn">Signup <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></button>
{{--                                    <button type="submit" class="facebook-btn">Login with Facebook <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></button>--}}
{{--                                    <button type="submit" class="google-btn">Login with Google <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></button>--}}
                                </form>
                                <!--Register Tabs Form End-->
                            </div>
                        </div>
                        <!--Register Tabs Content End-->
                    </div>
                    <!--Tabs Content End-->
                </div>
            </div>
        </div>
    </section>
    <!--Login Section End-->

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

