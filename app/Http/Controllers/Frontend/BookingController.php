<?php

namespace App\Http\Controllers\Frontend;

use App\Booking;
use App\Car;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    //
    public function booking_form($slug)
    {
        $selectedCar = Car::where('slug', $slug)->first();
        return view('frontend.booking.booking-form', compact('selectedCar'));
    }

    public function confirm_booking($slug)
    {
        $selectedCar = Car::where('slug', $slug)->first();
        return view('frontend.booking.confirm-booking', compact('selectedCar'));
    }

    public function booking_confirmation($reference)
    {
        return view('frontend.booking.booking-confirmation');
    }

    public function car_booking(Request $request)
    {
        $formData = $request->input('formData');
        $car = Car::where('slug', $request->car_slug)->first();

        $trip_time = explode(', ', $request->trip_time);
        $days = $trip_time[0][0];
        $hours = $trip_time[1][0];

        $trip_cost = $days * $car->daily_price + $hours * $car->hourly_price;

        $booking = Booking::create([
            'reference' => $request->book_ref,
            'start_location' => $request->start_loc,
            'end_location' => $request->end_loc,
            'pickup_date' => $request->pickup_date,
            'pickup_time' => $request->pickup_time,
            'dropoff_date' => $request->dropoff_date,
            'dropoff_time' => $request->dropoff_time,
            'service_type' => $request->service_type,
            'trip_time' => $request->trip_time,
            'trip_cost' => $request->trip_cost,
            'car_id' => $car->id,
            'customer_id' => auth()->id()
        ]);

        foreach ($formData as $data) {
            $booking->update([
               $data['name'] => $data['value']
            ]);
        }

        return 1;

    }

    public function cancel_booking(Request $request)
    {
        $booking = Booking::where('reference', $request->reference)->first();

        $booking->delete();

        return redirect(route('user-account'))->with('msg', 'Booking cancelled successfully !');
    }
}
