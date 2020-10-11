<?php

namespace App\Http\Controllers\Frontend;

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

    public function confirm_booking()
    {
        return view('frontend.booking.confirm-booking');
    }
}
