@php
    $files = scandir(public_path().'/storage/banner/main', SCANDIR_SORT_DESCENDING);
    $newest_file = $files[0];
    $newest_file = $files[0];
@endphp
<section class="tj-banner-form" style="background: url('{{ asset("storage/banner/main/".$newest_file) }}') no-repeat;">
    <div class="container">
        <div class="row">
            <!--Header Banner Caption Content Start-->
            <div class="col-md-8 col-sm-7">
                <div class="banner-caption">
                    <div class="banner-inner bounceInLeft animated delay-2s" >
                        <strong>Choose your comfort car from our collection</strong>
                        <h2>Upto 25% off on first booking through our website</h2>

                    </div>
                </div>
            </div>
            <!--Header Banner Caption Content End-->
            <!--Header Banner Form Content Start-->
            <div class="col-md-4 col-sm-5">
                <div class="trip-outer">
                    <!--Banner Tab Content Start-->
                    <div class="tab-content">
                        <div class="tab-pane active" id="one-way">
                            <!--Banner Form Content Start-->
                            <form method="GET" class="trip-type-frm" action="{{ route('search') }}">
                                @csrf
                                <div class="field-outer">
                                    <span class="fas fa-search"></span>
                                    <input type="text" name="car_name" placeholder="Car Name">
                                </div>

                                <div class="field-outer">
                                    <span class="fas fa-search"></span>
                                    <input type="text" name="car_district" placeholder="Car District">
                                </div>
                                <div class="field-outer">
                                    <span class="fas fa-calendar-alt"></span>
                                    <input type="text" name="max_hourly_price" placeholder="Max Hourly Price">
                                </div>
                                <div class="field-outer">
                                    <span class="far fa-clock"></span>
                                    <input type="text" name="max_daily_price" placeholder="Max Daily Price">
                                </div>
{{--                                <div class="field-outer">--}}
{{--                                    <input type="checkbox" name="promo_code" id="promo_code">--}}
{{--                                    <label for="promo_code">I Have Promotional Code</label>--}}
{{--                                </div>--}}
                                <button type="submit" class="search-btn">Search Cabs <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></button>
                            </form>
                            <!--Banner Form Content End-->
                        </div>
                    </div>
                    <!--Banner Tab Content End-->
                </div>
            </div>
            <!--Header Banner Form Content End-->
        </div>
    </div>
</section>
