@extends('frontend.layout.master')

@section('content')

    <!--Wrapper Content Start-->
    <div class="tj-wrapper">

        <!--Header Start-->
    @include('frontend.layout.header')
    <!--Header END-->

        <!--Fleet Section Start-->
        <section class="car-fleet">
            <div class="container">
                <div class="row">
                    <!--Fleet Column Start-->
                    <div class="col-md-12 col-sm-12">
                        <div class="fleet-nav-outer">
                            <div class="row">
                                <!--Fleet Result Count Column Start-->
                                <div class="col-md-8 col-sm-8">
                                    <div class="result-count">
                                        <h1>Showing search results...</h1>
                                    </div>
                                </div>
                                <!--Fleet Result Count Column End-->
                                <!--Fleet Nav Column Start-->

                                <!--Fleet Nav Column End-->
                            </div>
                        </div>

                        <!--Tab Content Start-->
                        <div class="tab-content">
                            <!--Fleet Grid Tab Content Start-->

                            <!--Fleet Grid Tab Content End-->

                            <!--Fleet List Tab Content Start-->
                            <div class="tab-pane active" id="car-list">
                                <!--Fleet List Box Wrapper Start-->
                                <div class="fleet-list">
                                    <div class="row">

                                    @forelse($cars as $car)
                                        <!--Fleet List Box Start-->
                                            <div class="col-md-12 col-sm-12">
                                                <div class="fleet-list-box">
                                                    <!--Fleet List Thumb Start-->
                                                    <figure class="fleet-thumb">
                                                        <a href="{{ route('car-details', $car->slug) }}">
                                                            <img src="{{ asset(json_decode($car->images)[0]) }}" alt=""/>
                                                        </a>

                                                    </figure>
                                                    <!--Fleet List Thumb End-->
                                                    <!--Fleet List Text Start-->
                                                    <div class="fleet-text">
                                                        <div class="price-box">
                                                            <span class="rated">Top Rated</span>
                                                            <div class="flex flex-col items-end">
                                                                <strong>BDT {{ $car->hourly_price }} <span>/ hour</span></strong>
                                                                <strong>BDT {{ $car->daily_price }} <span>/ day</span></strong>
                                                            </div>

                                                        </div>


                                                        <div class="car_name">
                                                            <a href="{{ route('car-details', $car->slug) }}">{{ $car->name }}</a>
                                                        </div>
                                                        <ul class="fleet-meta">
                                                            <li><i class="fas fa-taxi"></i>Luxery</li>
                                                            <li><i class="fas fa-user-circle"></i>{{ $car->seating_capacity }} Passengers</li>
                                                            <li style="display: inline-flex" class="items-center">
                                                                <i class="fas fa-palette "></i>
                                                                <span class="rounded-full w-8 h-8" style="background-color: {{ $car->color }}; margin: 0"></span>
                                                            </li>
                                                            <li><i class="fas fa-briefcase"></i>Max {{ $car->luggage_number }} Luggage</li>
                                                        </ul>
                                                        <span class="fas fa-star"></span>
                                                        <span class="fas fa-star"></span>
                                                        <span class="fas fa-star"></span>
                                                        <span class="fas fa-star"></span>
                                                        <span class="fas fa-star"></span>
                                                        <p>{{ $car->excerpt }}</p>
                                                        <a href="booking-form.html" class="tj-btn">Book Now <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
                                                    </div>
                                                    <!--Fleet List Text Start-->
                                                </div>
                                            </div>
                                            <!--Fleet List Box End-->
                                        @empty
                                        @endforelse

                                    </div>
                                </div>
                                <!--Fleet List Box Wrapper End-->
                            </div>
                            <!--Fleet List Tab Content End-->
                        </div>
                        <!--Tab Content End-->
                        <!--Pagination Section Start-->
                        <div class="pagination-box">
                            <nav aria-label="navigation">
                                {!! $cars->links() !!}

                            </nav>
                        </div>
                        <!--Pagination Section End-->
                    </div>
                    <!--Fleet Column End-->
                </div>
            </div>
        </section>
        <!--Fleet Section End-->


        <!--Testimonials Section Start-->
    @include('frontend.our-customers')
    <!--Testimonials Section End-->

        <!--Customers Section Start-->
    @include('frontend.testimonials')
    <!--Customers Section End-->

        <section class="tj-cal-to-action2" style="background: url('{{ asset("frontend/images/cta-bg2.jpg") }}') no-repeat center center">
            <div class="container">
                <div class="row">
                    <div class="col-md-9 col-sm-9">
                        <div class="cta-tagline">
                            <h2>Incredible Destinations at Incredible Deals</h2>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-3">
                        <div class="cta-btn">
                            <a href="booking-form.html">Book Now <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        @include('frontend.layout.footer')


    </div>
    <!--Wrapper Content End-->

@endsection
