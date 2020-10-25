@extends('frontend.layout.master')

@section('content')

    <!--Wrapper Content Start-->
    <div class="tj-wrapper">

        <!--Header Start-->
    @include('frontend.layout.header')
    <!--Header END-->


        <!--Inner Banner Section Start-->
        <div class="tj-inner-banner" style="background: url('{{ asset($page->image) }}') top center no-repeat; background-size: cover">
            <div class="container">
                <h2>{{ $page->title }}</h2>
            </div>
        </div>
        <!--Inner Banner Section End-->

        <!--Breadcrumb Section Start-->
        <div class="tj-breadcrumb mb-10">
            <div class="container">
                <ul class="breadcrumb-list">
                    <li><a href="/">Home</a></li>
                    <li class="active">{{ $page->title }}</li>
                </ul>
            </div>
        </div>
        <!--Breadcrumb Section End-->

        <div class="container mb-10">

            {!! $page->body !!}

        </div>


        <!--Testimonials Section Start-->
    @include('frontend.our-customers')
    <!--Testimonials Section End-->

        <!--Customers Section Start-->
    @include('frontend.testimonials')
    <!--Customers Section End-->

        <section class="tj-cal-to-action2" style="background: url('{{ asset("frontend/images/cta-bg2.jpg") }}') no-repeat center center">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="cta-tagline text-center">
                            <h2>Incredible Destinations at Incredible Deals</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        @include('frontend.layout.footer')


    </div>
    <!--Wrapper Content End-->

@endsection
