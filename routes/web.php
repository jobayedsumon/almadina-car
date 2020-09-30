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

Route::get('/login', 'Frontend\FrontendController@login');

Route::get('/user-account', 'Frontend\FrontendController@user_account');

Route::get('/booking-form', 'Frontend\FrontendController@booking_form');

Route::get('/confirm-booking', 'Frontend\FrontendController@confirm_booking');

Route::get('/booking-confirmation', 'Frontend\FrontendController@booking_confirmation');

Route::get('/car-list', 'Frontend\FrontendController@car_list');

Route::get('/car-details', 'Frontend\FrontendController@car_details');
