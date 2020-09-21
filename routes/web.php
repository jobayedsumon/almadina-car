<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('frontend.index');
});

Route::get('/login', function () {
    return view('frontend.customer.login');
});

Route::get('/user-account', function () {
    return view('frontend.customer.user-account');
});

Route::get('/booking-form', function () {
    return view('frontend.booking.booking-form');
});

Route::get('/confirm-booking', function () {
    return view('frontend.booking.confirm-booking');
});

Route::get('/booking-confirmation', function () {
    return view('frontend.booking.booking-confirmation');
});

Route::get('/car-list', function () {
    return view('frontend.car.car-list');
});

Route::get('/car-details', function () {
    return view('frontend.car.car-details');
});
