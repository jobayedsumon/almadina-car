<?php

namespace App\Http\Controllers\Frontend;

use App\Car;
use App\Http\Controllers\Controller;
use App\Service;
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

    public function service($slug)
    {
        $service = Service::where('slug', $slug)->first();
        dd($service);
    }

    public function search(Request $request)
    {
        $max_hourly_price = (int) $request->max_hourly_price;
        $max_daily_price = (int) $request->max_daily_price;

        $cars = Car::where('status', 1);

        if ($request->car_name) {
            $cars = $cars->where('name', 'LIKE', '%'.$request->car_name.'%');
        }
        if ($request->car_district) {
            $cars = $cars->where('district', 'LIKE', '%'.$request->car_district.'%');
        }
        if ($max_hourly_price) {
            $cars = $cars->where('hourly_price', '<=', $max_hourly_price);
        }
        if ($max_daily_price) {
            $cars = $cars->where('daily_price', '<=', $max_daily_price);
        }

        $cars = $cars->paginate(5);

        return view('frontend.search', compact('cars'));
    }
}
