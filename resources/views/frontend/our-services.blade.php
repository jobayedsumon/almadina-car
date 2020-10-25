<section class="cab-services">
    <div class="container">
        <div class="row">
            <!--Cab Services Heading Start-->
            <div class="tj-heading-style">
                <h3>Our Services</h3>
                <p>We aim to provide our customers with the best service possible all over the country.</p>
            </div>
            <!--Cab Services Heading End-->

            <!--Cab Services Outer Start-->
            @forelse(\App\Service::all() as $service)
                <div class="col-md-4 col-sm-4">
                    <a href="{{ route('service', $service->slug) }}">
                    <div class="cab-service-box">
                        <!--Cab Services Thumb Start-->
                        <figure class="service-thumb">
                            <img src="{{ asset('storage/'.$service->image) }}" alt=""/>
                        </figure>
                        <!--Cab Services Thumb End-->
                        <!--Cab Services Info Start-->
                        <div class="service-desc">
                            <h4>{{ $service->name }}</h4>
                            <p>A more recently with desktop softy  like aldus page maker.</p>
                        </div>
                        <!--Cab Services Info End-->
                    </div>
                    </a>
                </div>
            @empty
            @endforelse


        </div>
    </div>
</section>
