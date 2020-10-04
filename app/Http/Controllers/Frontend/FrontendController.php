<?php

namespace App\Http\Controllers\Frontend;

use App\Car;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use TCG\Voyager\Models\Category;
use TCG\Voyager\Models\Page;

class FrontendController extends Controller
{
    //
    public function index()
    {
        return view('frontend.index');
    }

    public function page($slug)
    {
        $page = Page::where('slug', $slug)->first();

        dd($page);

        return view();
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

    public function car_list($slug)
    {
        $category = Category::where('slug', $slug)->first();
        $cars = $category->cars()->paginate(5);
        return view('frontend.car.car-list', compact('category', 'cars'));
    }

    public function car_details($slug)
    {
        $car = Car::where('slug', $slug)->first();
        return view('frontend.car.car-details', compact('car'));
    }
}
