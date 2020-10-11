@php
    $files = scandir('storage/banner/slider', SCANDIR_SORT_DESCENDING);
    $newest_file = $files[0];
    $newest_file = $files[0];
@endphp
<section class="fleet-carousel" style="background: url('{{ asset("storage/banner/slider/".$newest_file) }}')  no-repeat; background-size: cover;">
    <div class="col-md-12 col-sm-12">
        <div class="tj-heading-style">
            <h3>Our Car Fleet</h3>
        </div>
    </div>
    <div class="carousel-outer">
        <div class="cab-carousel" id="cab-carousel">

            @forelse(\App\Slider::all() as $slider)
            <div class="fleet-item">
                <a href="{{ route('car-details', $slider->car->slug) }}"><img src="{{ asset(json_decode($slider->car->images)[0]) }}" alt=""/></a>
                <div class="fleet-inner">
                    <h4>{{ $slider->car->name }}</h4>
                    <ul>
                        <li><i class="fas fa-taxi"></i>{{ $slider->car->category->name }}</li>
                        <li><i class="fas fa-user-circle"></i>{{ $slider->car->seating_capacity }} Passengers</li>
{{--                        <li><i class="fas fa-briefcase"></i>Max {{ $slider->car->luggage_number }} Case</li>--}}
                        <li><i class="fas fa-air-freshener"></i><span></span> {{ ucfirst($slider->car->ac_type) }} AC</li>
                    </ul>
                    <strong class="price">BDT {{ $slider->car->hourly_price }}<span> / hour</span></strong>
                    <strong class="price">BDT {{ $slider->car->daily_price }}<span> / day</span></strong>
                    <a href="booking-form.html">Book Now <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
                </div>
            </div>
            @empty
            @endforelse




        </div>
    </div>
</section>
