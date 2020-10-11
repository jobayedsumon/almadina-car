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
                <li class="active">{{ $car->name }}</li>
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
                                @forelse(json_decode($car->images) as $image)
                                    <div class="item">
                                        <img src="{{ asset($image) }}" alt="">
                                    </div>
                                @empty
                                @endforelse

                            </div>
                        </div>
                        <div class="right-outer">
                            <div class="gallery-thumb">
                                @forelse(json_decode($car->images) as $image)
                                    <div class="item">
                                        <img src="{{ asset($image) }}" alt="">
                                    </div>
                                @empty
                                @endforelse
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-4">
                    <div class="tj-sidebar-outer">
                        <div class="fleet-features widget">
                            <ul>
                                <li><i class="fas fa-car-alt"></i><span>Car Type :</span> {{ $car->category->name }}</li>
                                <li><i class="fas fa-user-circle"></i><span>Seating :</span> {{ $car->seating_capacity }} Passengers</li>
                                <li><i class="fas fa-air-freshener"></i><span>AC Type :</span> {{ $car->ac_type }}</li>
                                <li><i class="fas fa-briefcase"></i><span>Luggage :</span> Max {{ $car->luggage_number }} Case</li>
                                <li><i class="fas fa-retweet"></i><span>Transmission :</span> {{ $car->transmission }}</li>
                                <li><i class="fas fa-gas-pump"></i><span>Fuel Type :</span> {{ $car->fuel_type }}</li>
                                <li><i class="fas fa-search-location"></i><span>District :</span> {{ $car->district }}</li>
                                <li style="display: inline-flex" class="items-center">
                                    <i class="fas fa-palette "></i>
                                    <span>Color : &nbsp;</span>
                                    <span class="rounded-full w-8 h-8" style="background-color: {{ $car->color }}; margin: 0"></span>
                                </li>
                                <li><i class="fas fa-money-bill"></i><span>Hourly Price :</span> {{ $car->hourly_price }}</li>
                                <li><i class="fas fa-money-bill"></i><span>Daily Price :</span> {{ $car->daily_price }}</li>
                            </ul>
                            <div class="book_fleet">
                                <a href="{{ route('book', $car->slug) }}">Book Now <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-9 col-sm-8">
                    <div class="tj-post-holder">
                        <div class="text-box">
                            <h3>{{ $car->name }}</h3>
                            {!! $car->body !!}
                            <div class="service-list">
                                <h3>Our Services</h3>
                                <ul>
                                    <li><i class="fas fa-check"></i>Point to point service</li>
                                    <li><i class="fas fa-check"></i>Dedicated chauffeur service</li>
                                    <li><i class="fas fa-check"></i>Air port Transfer</li>
                                    <li><i class="fas fa-check"></i>Night life service</li>
                                    <li><i class="fas fa-check"></i>Point to point service</li>
                                </ul>
                            </div>
                            <div class="video-tour">
                                <h3>Video Tour</h3>
                                <figure>
                                    <img src="https://img.youtube.com/vi/{{ $car->youtube_video }}/mqdefault.jpg" alt=""/>
                                    <figcaption class="video-caption">
                                        <a href="https://www.youtube.com/embed/{{ $car->youtube_video }}"><i class="fas fa-play"></i></a>
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
                            @if($car->previous())
                            <a href="{{ route('car-details', $car->previous()->slug) }}"><i class="fas fa-angle-double-left"></i> Previous</a>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-2 col-xs-2">
                        <div class="post_sep">
                            <i class="fas fa-th-large"></i>
                        </div>
                    </div>
                    <div class="col-md-5 col-sm-5 col-xs-5">
                        <div class="next_link">
                            @if($car->next())
                            <a href="{{ route('car-details', $car->next()->slug) }}">Next <i class="fas fa-angle-double-right"></i></a>
                            @endif
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

