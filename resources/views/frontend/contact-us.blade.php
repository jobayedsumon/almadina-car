@extends('frontend.layout.master')

@section('content')

    <!--Wrapper Content Start-->
    <div class="tj-wrapper">

        <!--Header Start-->
    @include('frontend.layout.header')

    <!--Inner Banner Section Start-->
        <div class="tj-inner-banner" style="background: url('{{ asset("storage/images/inner-banner.jpg") }}') top center no-repeat">
            <div class="container">
                <h2>Contact Us</h2>
            </div>
        </div>
        <!--Inner Banner Section End-->

        <!--Breadcrumb Section Start-->
        <div class="tj-breadcrumb">
            <div class="container">
                <ul class="breadcrumb-list">
                    <li><a href="/">Home</a></li>
                    <li class="active">Contact Us</li>
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



    <!--Map Content Start-->
        <div id="tj-map"></div>
        <!--Map Content End-->
        <!--Contact Section Start-->
        <section class="tj-contact-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="tj-heading-style">
                            <h3>Contact Us</h3>
                            <p>Contact us directly for customize order of your desired car.</p>
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-8">
                        <div class="form-holder">
                            <form method="POST" class="tj-contact-form" id="contact-form">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <!--Inner Holder Start-->
                                        <div class="inner-holder">
                                            <label for="name">Name</label>
                                            <input placeholder="Enter Your Name" name="name" type="text" id="name">
                                        </div>
                                        <!--Inner Holder End-->
                                    </div>
                                    <div class="col-md-6 col-sm-6 no-pad">
                                        <!--Inner Holder Start-->
                                        <div class="inner-holder">
                                            <label for="email">Email</label>
                                            <input placeholder="Enter Your Email" name="email" type="email" id="email">
                                        </div>
                                        <!--Inner Holder End-->
                                    </div>
                                    <div class="col-md-12 col-sm-12">
                                        <!--Inner Holder Start-->
                                        <div class="inner-holder">
                                            <label for="subject">Subject</label>
                                            <input placeholder="Your Subject" name="subject" type="text" id="subject">
                                        </div>
                                        <!--Inner Holder End-->
                                    </div>
                                    <div class="col-md-12 col-sm-12">
                                        <!--Inner Holder Start-->
                                        <div class="inner-holder">
                                            <label for="message">Message</label>
                                            <textarea name="message" placeholder="Your Message" id="message"></textarea>
                                        </div>
                                        <!--Inner Holder End-->
                                    </div>
                                    <div class="col-md-12 col-sm-12">
                                        <div class="inner-holder">
                                            <button class="btn-submit" id="frm_submit_btn" type="submit">Send Message <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="address-box">
                            <div class="add-info">
                                <span class="icon-map icomoon"></span>
                                <p>Almadina Car, Dhaka,<br> Bangladesh</p>
                            </div>
                            <div class="add-info">
                                <span class="icon-phone icomoon"></span>
                                <p>
                                    <a href="tel:+880-1740-947123">+880-1740-947123</a>
                                    <a href="tel:+880-1925-063543">+880-1925-063543</a>
                                    <a href="tel:+880-1721-292892">+880-1721-292892</a>
                                </p>
                            </div>
                            <div class="add-info">
                                <span class="icon-mail-envelope-open icomoon"></span>
                                <p>
                                    <a href="mailto:taleb.almadina@gmail.com">
                                        taleb.almadina@gmail.com</a>

                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Contact Section End-->


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

