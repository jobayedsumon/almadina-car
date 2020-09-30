<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    //
    public function index()
    {
        return view('frontend.index');
    }

    public function login()
    {
        return view('frontend.customer.login');
    }

    public function user_account()
    {
        return view('frontend.customer.user-account');
    }

    public function booking_form()
    {
        return view('frontend.booking.booking-form');
    }

    public function confirm_booking()
    {
        return view('frontend.booking.confirm-booking');
    }

    public function booking_confirmation()
    {
        return view('frontend.booking.booking-confirmation');
    }

    public function car_list()
    {
        return view('frontend.car.car-list');
    }

    public function car_details()
    {
        return view('frontend.car.car-details');
    }
}
