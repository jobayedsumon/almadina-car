@extends('frontend.layout.master')

@section('content')

    <!--Wrapper Content Start-->
    <div class="tj-wrapper">

        <!--Header Start-->
    @include('frontend.layout.header')
    <!--Header END-->

    <!--Inner Banner Section Start-->
    <div class="tj-inner-banner" style="background: url('{{ asset("storage/images/inner-banner.jpg") }}') top center no-repeat">
        <div class="container">
            <h2>Car Fleet List</h2>
        </div>
    </div>
    <!--Inner Banner Section End-->

    <!--Breadcrumb Section Start-->
    <div class="tj-breadcrumb">
        <div class="container">
            <ul class="breadcrumb-list">
                <li><a href="/">Home</a></li>
                <li class="active">Car Fleet List</li>
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
                            <!--Fleet Categories Column Start-->
{{--                            <div class="col-md-3 col-sm-3">--}}
{{--                                <div class="car-filter">--}}
{{--                                    <span>By Categories</span>--}}
{{--                                    <div class="select-list">--}}
{{--                                        <select name="car-category" class="selectpicker">--}}
{{--                                            <option>Select a Category</option>--}}
{{--                                            <option value="coupe">Coupe</option>--}}
{{--                                            <option value="crossover">Crossover</option>--}}
{{--                                            <option value="suv">SUV</option>--}}
{{--                                            <option value="mpv">MPV</option>--}}
{{--                                        </select>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                            <!--Fleet Categories Column End-->
                            <!--Fleet Brand Column Start-->
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
                                    <!--Fleet List Box Start-->
                                    <div class="col-md-12 col-sm-12">
                                        <div class="fleet-list-box">
                                            <!--Fleet List Thumb Start-->
                                            <figure class="fleet-thumb">
                                                <img src="{{ asset('storage/images/fleet-gallery1.jpg') }}" alt=""/>
                                            </figure>
                                            <!--Fleet List Thumb End-->
                                            <!--Fleet List Text Start-->
                                            <div class="fleet-text">
                                                <div class="price-box">
                                                    <span class="rated">Top Rated</span>
                                                    <strong>BDT 1900 <span>/ day</span></strong>
                                                </div>
                                                <h3>2017 Chevrolet Pepe</h3>
                                                <ul class="fleet-meta">
                                                    <li><i class="fas fa-taxi"></i>Luxery</li>
                                                    <li><i class="fas fa-user-circle"></i>2 Passengers</li>
                                                    <li><i class="fas fa-tachometer-alt"></i>5.6/100 MPG</li>
                                                    <li><i class="fas fa-briefcase"></i>Max 2 Luggage</li>
                                                </ul>
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                                <p>Lorem Ipsum passages, and more recently with desktop publishing soft like aldus pageMaker including versions.</p>
                                                <a href="booking-form.html" class="tj-btn">Book Now <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
                                            </div>
                                            <!--Fleet List Text Start-->
                                        </div>
                                    </div>
                                    <!--Fleet List Box End-->

                                    <!--Fleet List Box Start-->
                                    <div class="col-md-12 col-sm-12">
                                        <div class="fleet-list-box">
                                            <!--Fleet List Thumb Start-->
                                            <figure class="fleet-thumb">
                                                <img src="{{ asset('storage/images/fleet-gallery1.jpg') }}" alt=""/>
                                            </figure>
                                            <!--Fleet List Thumb End-->
                                            <!--Fleet List Text Start-->
                                            <div class="fleet-text">
                                                <div class="price-box">
                                                    <span class="rated">Top Rated</span>
                                                    <strong>BDT 2400 <span>/ day</span></strong>
                                                </div>
                                                <h3>Nissan Vela 201</h3>
                                                <ul class="fleet-meta">
                                                    <li><i class="fas fa-taxi"></i>Luxery</li>
                                                    <li><i class="fas fa-user-circle"></i>2 Passengers</li>
                                                    <li><i class="fas fa-tachometer-alt"></i>5.6/100 MPG</li>
                                                    <li><i class="fas fa-briefcase"></i>Max 2 Luggage</li>
                                                </ul>
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                                <p>Lorem Ipsum passages, and more recently with desktop publishing soft like aldus pageMaker including versions.</p>
                                                <a href="booking-form.html" class="tj-btn">Book Now <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
                                            </div>
                                            <!--Fleet List Text End-->
                                        </div>
                                    </div>
                                    <!--Fleet List Box End-->

                                    <!--Fleet List Box Start-->
                                    <div class="col-md-12 col-sm-12">
                                        <div class="fleet-list-box">
                                            <!--Fleet List Thumb Start-->
                                            <figure class="fleet-thumb">
                                                <img src="{{ asset('storage/images/fleet-gallery1.jpg') }}" alt=""/>
                                            </figure>
                                            <!--Fleet List Thumb End-->
                                            <!--Fleet List Text Start-->
                                            <div class="fleet-text">
                                                <div class="price-box">
                                                    <span class="rated">Top Rated</span>
                                                    <strong>BDT 2650 <span>/ day</span></strong>
                                                </div>
                                                <h3>Mitshubishi Lander</h3>
                                                <ul class="fleet-meta">
                                                    <li><i class="fas fa-taxi"></i>Luxery</li>
                                                    <li><i class="fas fa-user-circle"></i>5 Passengers</li>
                                                    <li><i class="fas fa-tachometer-alt"></i>5.6/100 MPG</li>
                                                    <li><i class="fas fa-briefcase"></i>Max 5 Luggage</li>
                                                </ul>
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                                <p>Lorem Ipsum passages, and more recently with desktop publishing soft like aldus pageMaker including versions.</p>
                                                <a href="booking-form.html" class="tj-btn">Book Now <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
                                            </div>
                                            <!--Fleet List Text End-->
                                        </div>
                                    </div>
                                    <!--Fleet List Box End-->

                                    <!--Fleet List Box Start-->
                                    <div class="col-md-12 col-sm-12">
                                        <div class="fleet-list-box">
                                            <!--Fleet List Thumb Start-->
                                            <figure class="fleet-thumb">
                                                <img src="{{ asset('storage/images/fleet-gallery1.jpg') }}" alt=""/>
                                            </figure>
                                            <!--Fleet List Thumb End-->
                                            <!--Fleet List Text Start-->
                                            <div class="fleet-text">
                                                <div class="price-box">
                                                    <span class="rated">Top Rated</span>
                                                    <strong>BDT 2100 <span>/ day</span></strong>
                                                </div>
                                                <h3>Mercedes SUV</h3>
                                                <ul class="fleet-meta">
                                                    <li><i class="fas fa-taxi"></i>Luxery</li>
                                                    <li><i class="fas fa-user-circle"></i>9 Passengers</li>
                                                    <li><i class="fas fa-tachometer-alt"></i>5.6/100 MPG</li>
                                                    <li><i class="fas fa-briefcase"></i>Max 8 Luggage</li>
                                                </ul>
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                                <p>Lorem Ipsum passages, and more recently with desktop publishing soft like aldus pageMaker including versions.</p>
                                                <a href="booking-form.html" class="tj-btn">Book Now <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
                                            </div>
                                            <!--Fleet List Text End-->
                                        </div>
                                    </div>
                                    <!--Fleet List Box End-->

                                    <!--Fleet List Box Start-->
                                    <div class="col-md-12 col-sm-12">
                                        <div class="fleet-list-box">
                                            <!--Fleet List Thumb Start-->
                                            <figure class="fleet-thumb">
                                                <img src="{{ asset('storage/images/fleet-gallery1.jpg') }}" alt=""/>
                                            </figure>
                                            <!--Fleet List Thumb End-->
                                            <!--Fleet List Text Start-->
                                            <div class="fleet-text">
                                                <div class="price-box">
                                                    <span class="rated">Top Rated</span>
                                                    <strong>BDT 1850 <span>/ day</span></strong>
                                                </div>
                                                <h3>Lexus Sedan L100</h3>
                                                <ul class="fleet-meta">
                                                    <li><i class="fas fa-taxi"></i>Luxery</li>
                                                    <li><i class="fas fa-user-circle"></i>5 Passengers</li>
                                                    <li><i class="fas fa-tachometer-alt"></i>5.6/100 MPG</li>
                                                    <li><i class="fas fa-briefcase"></i>Max 4 Luggage</li>
                                                </ul>
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                                <p>Lorem Ipsum passages, and more recently with desktop publishing soft like aldus pageMaker including versions.</p>
                                                <a href="booking-form.html" class="tj-btn">Book Now <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
                                            </div>
                                            <!--Fleet List Text End-->
                                        </div>
                                    </div>
                                    <!--Fleet List Box End-->
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
                            <ul class="pagination">
                                <li>
                                    <a href="#" aria-label="Previous">
                                        <i class="fas fa-angle-double-left"></i>
                                    </a>
                                </li>
                                <li><a href="#">1</a></li>
                                <li class="active"><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li>
                                    <a href="#" aria-label="Next">
                                        <i class="fas fa-angle-double-right"></i>
                                    </a>
                                </li>
                            </ul>
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

