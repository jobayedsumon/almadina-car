<?php

use Illuminate\Support\Facades\Artisan;
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

Route::get('/admin-work', function () {

    $exitCode = Artisan::call('storage:link', [] );
    echo $exitCode; // 0 exit code for no errors.

});

//FRONTEND ROUTS


Route::get('/', 'Frontend\FrontendController@index');

Route::get('/contact-us', 'Frontend\FrontendController@contact_us')->name('contact-us');

Route::get('/search', 'Frontend\FrontendController@search')->name('search');

Route::get('/page/{slug}', 'Frontend\FrontendController@page')->name('page');

Route::get('/car-list/{slug}', 'Frontend\FrontendController@car_list')->name('car-list');

Route::get('/car-details/{slug}', 'Frontend\FrontendController@car_details')->name('car-details');

Route::get('/service/{slug}', 'Frontend\FrontendController@service')->name('service');


//BOOKING ROUTES

Route::prefix('/booking')->group(function () {

    Route::post('/car-booking', 'Frontend\BookingController@car_booking');

    Route::get('/car-booking', 'Frontend\BookingController@booking_form')->name('booking-form');

    Route::get('/booking-confirmation/reference', 'Frontend\BookingController@booking_confirmation')->name('booking-confirmation');

    Route::get('/confirm-booking/{slug}', 'Frontend\BookingController@confirm_booking');

    Route::post('/cancel', 'Frontend\BookingController@cancel_booking')->name('cancel-booking');

    Route::get('/{slug}', 'Frontend\BookingController@booking_form')->name('booking-form');

});

//USER ROUTES

Auth::routes();

Route::get('/user-account', 'Frontend\UserController@user_account')->middleware('auth')->name('user-account');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});


