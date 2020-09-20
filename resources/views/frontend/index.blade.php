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

        @include('frontend.layout.footer')


		</div>
		<!--Wrapper Content End-->

@endsection
