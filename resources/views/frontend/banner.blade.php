<section class="tj-banner-form" style="background: url('{{ asset('storage/images/NEW 2-4.jpg') }}') no-repeat;">
    <div class="container">
        <div class="row">
            <!--Header Banner Caption Content Start-->
            <div class="col-md-8 col-sm-7">
                <div class="banner-caption">
                    <div class="banner-inner bounceInLeft animated delay-2s" >
                        <strong>Choose your comfort car from our collection</strong>
                        <h2>Upto 25% off on first booking through our website</h2>
                        <div class="banner-btns">
                            <a href="faq.html" class="btn-style-1"> BOOK NOW </a>
                        </div>
                    </div>
                </div>
            </div>
            <!--Header Banner Caption Content End-->
            <!--Header Banner Form Content Start-->
            <div class="col-md-4 col-sm-5">
                <div class="trip-outer">
                    <div class="trip-type-tabs">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#one-way" data-toggle="tab">One Way</a></li>
                            <li><a href="#two-way" data-toggle="tab">Two Way</a></li>
                        </ul>
                    </div>
                    <!--Banner Tab Content Start-->
                    <div class="tab-content">
                        <div class="tab-pane active" id="one-way">
                            <!--Banner Form Content Start-->
                            <form method="POST" class="trip-type-frm">
                                <div class="field-outer">
                                    <span class="fas fa-search"></span>
                                    <input type="text" name="pick_loc" placeholder="Pickup Locations">
                                </div>
                                <div class="field-outer">
                                    <span class="fas fa-search"></span>
                                    <input type="text" name="drop_loc" placeholder="Drop Locations">
                                </div>
                                <div class="field-outer">
                                    <span class="fas fa-calendar-alt"></span>
                                    <input type="text" name="pick_date" placeholder="Select your Date">
                                </div>
                                <div class="field-outer">
                                    <span class="far fa-clock"></span>
                                    <input type="text" name="drop_date" placeholder="Select Timings">
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
