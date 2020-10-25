<section class="tj-reviews">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="tj-heading-style">
                    <h3>Our Customers</h3>
                </div>
            </div>
            <div class="col-md-12 col-sm-12">
                <!--Testimonials Slider Content Start-->
                <div id="testimonial-slider" class="reviews-slider">

                    @forelse(\App\CorporateClient::all() as $client)
                    <a target="_blank" href="{{ $client->link }}">
                        <img src="{{ asset('storage/'.$client->image) }}" alt="" />
                    </a>
                    @empty
                    @endforelse

                </div>
                <!--Testimonials Slider Content End-->
            </div>
        </div>
    </div>
</section>
