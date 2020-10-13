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

//FRONTEND ROUTS


Route::get('/', 'Frontend\FrontendController@index');

Route::get('/page/{slug}', 'Frontend\FrontendController@page')->name('page');

Route::get('/car-list/{slug}', 'Frontend\FrontendController@car_list')->name('car-list');

Route::get('/car-details/{slug}', 'Frontend\FrontendController@car_details')->name('car-details');

Route::get('/service/{slug}', 'Frontend\FrontendController@service')->name('service');


//BOOKING ROUTES

Route::prefix('/booking')->group(function () {

    Route::post('/car-booking', 'Frontend\BookingController@car_booking');

    Route::get('/car-booking', 'Frontend\BookingController@booking_form')->name('booking-form');

    Route::get('/booking-confirmation', 'Frontend\FrontendController@booking_confirmation')->name('booking-confirmation');

    Route::get('/confirm-booking/{slug}', 'Frontend\BookingController@confirm_booking');

    Route::get('/{slug}', 'Frontend\BookingController@booking_form')->name('booking-form');

});

//USER ROUTES

Route::get('/login', 'Frontend\UserController@login_page')->name('login');

//Route::post('/login', 'Frontend\UserController@login')->name('login');
//
//Route::post('/register', 'Frontend\UserController@register')->name('register');

Route::get('/user-account', 'Frontend\UserController@user_account')->name('user-account');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});


Auth::routes();

