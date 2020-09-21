@extends('frontend.layout.master')

@section('content')

		<!--Wrapper Content Start-->
		<div class="tj-wrapper">

            <!--Header Start-->
            @include('frontend.layout.header')
            <!--Header END-->

			<!--Header Banner Content Start-->
			@include('frontend.banner')
			<!--Header Banner Content End-->

			<!--Offer Content Start-->
			<!--Offer Content End-->
            @include('frontend.offer-welcome')
			<!--Welcome Section Content Start-->
			<!--Welcome Section Content End-->

            @include('frontend.car-carousel')


			<!--Cab Services Section Start-->
			@include('frontend.our-services')
			<!--Cab Services Section End-->

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
