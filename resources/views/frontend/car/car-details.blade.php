@extends('frontend.layout.master')

@section('content')

    <!--Wrapper Content Start-->
    <div class="tj-wrapper">

        <!--Header Start-->
    @include('frontend.layout.header')

    <!--Inner Banner Section Start-->
    <div class="tj-inner-banner" style="background: url('{{ asset(json_decode($car->images)[0]) }}') top center no-repeat; background-size: cover">
        <div class="container">
            <h2>{{ $car->name }}</h2>
        </div>
    </div>
    <!--Inner Banner Section End-->

    <!--Breadcrumb Section Start-->
    <div class="tj-breadcrumb">
        <div class="container">
            <ul class="breadcrumb-list">
                <li><a href="home-1.html">Home</a></li>
                <li class="active">Car Details</li>
            </ul>
        </div>
    </div>
    <!--Breadcrumb Section End-->

    <!--Fleet Detail Section Start-->
    <section class="fleet-detail">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="gallery-carousel">
                        <div class="left-outer">
                            <div class="gallery">
                                <div class="item">
                                    <img src="{{ asset('storage/images/fleet-gallery1.jpg') }}" alt="">
                                </div>
                                <div class="item">
                                    <img src="{{ asset('storage/images/fleet-gallery2.jpg') }}" alt="">
                                </div>
                                <div class="item">
                                    <img src="{{ asset('storage/images/fleet-gallery3.jpg') }}" alt="">
                                </div>
                                <div class="item">
                                    <img src="{{ asset('storage/images/fleet-gallery4.jpg') }}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="right-outer">
                            <div class="gallery-thumb">
                                <div class="item">
                                    <img src="{{ asset('storage/images/fleet-gallery1.jpg') }}" alt="">
                                </div>

                                <div class="item">
                                    <img src="{{ asset('storage/images/fleet-gallery2.jpg') }}" alt="">
                                </div>
                                <div class="item">
                                    <img src="{{ asset('storage/images/fleet-gallery3.jpg') }}" alt="">
                                </div>
                                <div class="item">
                                    <img src="{{ asset('storage/images/fleet-gallery4.jpg') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-4">
                    <div class="tj-sidebar-outer">
                        <div class="fleet-features widget">
                            <ul>
                                <li><i class="fas fa-car-alt"></i><span>Car Type :</span> Luxery</li>
                                <li><i class="fas fa-user-circle"></i><span>Seating :</span> 5 Passengers</li>
                                <li><i class="fas fa-tachometer-alt"></i><span>Speeding :</span> 5.6/100 MPG</li>
                                <li><i class="fas fa-briefcase"></i><span>Luggage :</span> Max 5 Case</li>
                                <li><i class="fas fa-retweet"></i><span>Trips :</span> One Way Trip</li>
                            </ul>
                            <div class="book_fleet">
                                <a href="booking-form.html">Book Now <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-9 col-sm-8">
                    <div class="tj-post-holder">
                        <div class="text-box">
                            <h3>Jaguar J10 Pepe</h3>
                            <p>Lorem Ipsum passages, and more recently with desktop publishing software like aldus pageMaker including versions of all the Lorem Ipsum generators on thet Internet tends to repeat predefined chunks as necessary, making this an web evolved over the years, sometimes by accident various versions have evolved over the years, sometimes by accident, sometimes on purpose all the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.</p>
                            <p>More recently with desktop publishing software like aldus pageMaker including versions of all the Lorem Ipsum generators on thet Internet tends to repeat predefined chunks as necessary, making this an web evolved over the years, sometimes by accident various versions have evolved over the years, sometimes by accident and more recently with desktop publishing software like aldus pageMaker including versions.</p>
                            <div class="service-list">
                                <h3>Our Services</h3>
                                <p>Various versions have evolved over the years, sometimes by accident, sometimes on purpose all the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary.</p>
                                <ul>
                                    <li><i class="fas fa-check"></i>Point to point service</li>
                                    <li><i class="fas fa-check"></i>Dedicated chauffeur service</li>
                                    <li><i class="fas fa-check"></i>Air port Transfer</li>
                                    <li><i class="fas fa-check"></i>Night life service</li>
                                    <li><i class="fas fa-check"></i>Point to point service</li>
                                </ul>
                            </div>
                            <div class="feature-list">
                                <h3>Features</h3>
                                <p>More recently with desktop publishing software like aldus pageMaker including versions of all the Lorem Ipsum and generators on thet Internet tends to repeat predefined  evolved over the years.</p>
                                <ul>
                                    <li><i class="fas fa-cog"></i>Automatic stop</li>
                                    <li><i class="fas fa-cog"></i>Cameras</li>
                                    <li><i class="fas fa-cog"></i>GPS</li>
                                    <li><i class="fas fa-cog"></i>Push button shifting</li>
                                    <li><i class="fas fa-cog"></i>Sensors</li>
                                </ul>
                            </div>
                            <div class="video-tour">
                                <h3>Video Tour</h3>
                                <figure>
                                    <img src="https://img.youtube.com/vi/bHWgc5MPnPA/mqdefault.jpg" alt=""/>
                                    <figcaption class="video-caption">
                                        <a href="https://www.youtube.com/embed/bHWgc5MPnPA"><i class="fas fa-play"></i></a>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="post-nav">
                <div class="row">
                    <div class="col-md-5 col-sm-5 col-xs-5">
                        <div class="prev_link">
                            <a href="#"><i class="fas fa-angle-double-left"></i> Previous</a>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-2 col-xs-2">
                        <div class="post_sep">
                            <i class="fas fa-th-large"></i>
                        </div>
                    </div>
                    <div class="col-md-5 col-sm-5 col-xs-5">
                        <div class="next_link">
                            <a href="#">Next <i class="fas fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Fleet Detail Section End-->

    <!--Call To Action Content Start-->
    <section class="tj-cal-to-action" style="background: url('{{ asset("frontend/images/cta-bg2.jpg") }}') no-repeat center center">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <div class="cta-box">
                        <img src="{{ asset('frontend/images/cta-icon-home.png') }}" alt=""/>
                        <div class="cta-text">
                            <strong>Home Pickup</strong>
                            <p>Get your car in front of your door.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="cta-box">
                        <img src="{{ asset('frontend/images/cta-icon2.png') }}" alt=""/>
                        <div class="cta-text">
                            <strong>24/7 Customer Care</strong>
                            <p>Book car just with some clicks here and there.
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

