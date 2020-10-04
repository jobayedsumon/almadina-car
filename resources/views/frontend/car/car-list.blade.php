@extends('frontend.layout.master')

@section('content')

    <!--Wrapper Content Start-->
    <div class="tj-wrapper">

        <!--Header Start-->
    @include('frontend.layout.header')
    <!--Header END-->

    <!--Inner Banner Section Start-->
    <div class="tj-inner-banner" style="background: url('{{ asset($category->image) }}') top center no-repeat; background-size: cover">
        <div class="container">
            <h2>{{ $category->name }}</h2>
        </div>
    </div>
    <!--Inner Banner Section End-->

    <!--Breadcrumb Section Start-->
    <div class="tj-breadcrumb">
        <div class="container">
            <ul class="breadcrumb-list">
                <li><a href="/">Home</a></li>
                <li class="active">{{ $category->name }}</li>
            </ul>
        </div>
    </div>
    <!--Breadcrumb Section End-->

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
                                    <span>Showing 1–12 of 28 results</span>
                                </div>
                            </div>
                            <!--Fleet Result Count Column End-->
                            <!--Fleet Nav Column Start-->

                            <!--Fleet Nav Column End-->
                        </div>
                    </div>
                    <div class="car-filter-holder">
                        <div class="row">

                            <div class="col-4 col-sm-3">
                                <div class="car-filter">
                                    <span>By Brand</span>
                                    <div class="select-list">
                                        <select name="car-brand" class="selectpicker">
                                            <option>Select by Brand</option>
                                            <option value="porsche">Porsche</option>
                                            <option value="ferrari">Ferrari</option>
                                            <option value="audi">Audi</option>
                                            <option value="ford">Ford</option>
                                            <option value="honda">Honda</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <!--Fleet Brand Column End-->
                            <!--Fleet Seats Column Start-->
                            <div class="col-4 col-sm-3">
                                <div class="car-filter">
                                    <span>By Seats</span>
                                    <div class="select-list">
                                        <select name="car-seater" class="selectpicker">
                                            <option>Select by Seats</option>
                                            <option value="2seat">2 Seater</option>
                                            <option value="4seat">4 Seater</option>
                                            <option value="7seat">7 Seater</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <!--Fleet Seats Column End-->
                            <!--Fleet Price Filter Column Start-->
                            <div class="col-4 col-sm-3">
                                <div class="car-price-filter">
                                    <form method="POST" class="price-filter">
                                        <div class="text-left">
                                            <span>Filter Price</span>
                                        </div>
                                        <div class="text-right">
                                            <input type="text" id="amount">
                                        </div>
                                        <div id="price-range"></div>
                                    </form>
                                </div>
                            </div>
                            <!--Fleet Fleet Price Filter Column End-->
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

        <!--Call To Action Content Start-->
        <section class="tj-cal-to-action" style="background: url('{{ asset("frontend/images/cta-bg2.jpg") }}') no-repeat center center">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <div class="cta-box">
                            <img src="{{ asset('frontend/images/cta-icon-home.png') }}" alt=""/>
                            <div class="cta-text">
                                <strong>Home Pickup</strong>
                                <p>A more recently with desktop softy  like aldus page maker.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="cta-box">
                            <img src="{{ asset('frontend/images/cta-icon2.png') }}" alt=""/>
                            <div class="cta-text">
                                <strong>24/7 Customer Care</strong>
                                <p>A more recently with desktop softy  like aldus page maker.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="cta-box">
                            <img src="{{ asset('frontend/images/cta-icon3.png') }}" alt=""/>
                            <div class="cta-text">
                                <strong>Easy Bookings</strong>
                                <p>A more recently with desktop softy  like aldus page maker.</p>
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

