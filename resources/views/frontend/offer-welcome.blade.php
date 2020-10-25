<section class="tj-offers">
    <div class="row">
        <!--Offer Box Content Start-->

        <!--Offer Box Content End-->
        <!--Offer Box Content Start-->
        <div class="col-md-4 col-sm-6">
            <div class="offer-box">
                <img src="{{ asset('frontend/images/offer-icon2.png') }}" alt=""/>
                <div class="offer-info">
                    <h4>24/7 Customer Care</h4>
                    <p>Our customer support team is here for you 24/7.</p>
                </div>
            </div>
        </div>
        <!--Offer Box Content End-->
        <!--Offer Box Content Start-->
        <div class="col-md-4 col-sm-6">
            <div class="offer-box">
                <img src="{{ asset('frontend/images/offer-icon3.png') }}" alt=""/>
                <div class="offer-info">
                    <h4>Home Pickups</h4>
                    <p>Get your car in front of your door.</p>
                </div>
            </div>
        </div>
        <!--Offer Box Content End-->
        <!--Offer Box Content Start-->
        <div class="col-md-4 col-sm-6">
            <div class="offer-box">
                <img src="{{ asset('frontend/images/offer-icon4.png') }}" alt=""/>
                <div class="offer-info">
                    <h4>Easy Bookings</h4>
                    <p>Book car just with some clicks here and there.</p>
                </div>
            </div>
        </div>
        <!--Offer Box Content End-->
    </div>
</section>

<section class="tj-welcome">
    <div class="container">
        <div class="row">
            <!--Welcome Section Start-->
            <div class="col-md-6 col-sm-7">
                <div class="about-info">
                    <div class="tj-heading-style">
                        <h3>Who We Are</h3>
                    </div>
                    <p>Lorem Ipsum passages, and more recently with desktop publishing software like aldus pageMaker including versions of all the Lorem Ipsum generators on thet Internet tends to repeat predefined chunks as necessary, making this an web evolved over the years, sometimes by accident.</p>

                    <ul class="facts-list">
                        <li>
                            <strong class="fact-count">{{ \App\User::count() }}</strong>
                            <i class="fa fa-plus"></i>
                            <span>Happy Customer</span>
                        </li>
                        <li>
                            <strong class="fact-count">{{ \App\Car::count() }}</strong>
                            <i class="fas fa-plus"></i>
                            <span>Luxury Cars</span>
                        </li>
                        <li>
                            <strong class="fact-count">{{ \App\Booking::count() }}</strong>
                            <i class="fas fa-arrow-up"></i>
                            <span>Bookings</span>
                        </li>
                    </ul>
                </div>
            </div>
            <!--Welcome Section End-->
            <!--Welcome Section Image Box Start-->
            <div class="col-md-6 col-sm-5">
                <div class="welcome-banner">
                    <img src="{{ asset('frontend/images/logo.png') }}" alt=""/>
                </div>
            </div>
            <!--Welcome Section Image Box End-->
        </div>
    </div>
</section>
