<section class="tj-reviews">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="tj-heading-style">
                    <h3>Testimonials</h3>
                </div>
            </div>

                <!--Testimonials Slider Content Start-->
                <div id="testimonial-slider2" class="reviews-slider">

                    @forelse(\App\Testimonial::all() as $testimonial)
                    <!--Review Item Start-->
                    <div class="review-item">
                        <div class="review-info">
                            <strong>{{ $testimonial->name }}</strong>
                            <div class="review-quote">
                                <p>{{ $testimonial->message }}</p>
                            </div>
                        </div>
                    </div>
                    <!--Review Item End-->

                        @empty

                        @endforelse

                </div>
                <!--Testimonials Slider Content End-->

        </div>
    </div>
</section>
