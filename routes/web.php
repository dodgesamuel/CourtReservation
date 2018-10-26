<?php

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
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/services', function () {
	return view('services');
});

Route::get('/contact', function () {
	return view('contact');
});

Route::get('/reserve/now', function () {
	return view('reserve_now');
});

Route::get('/schedule', function() {
	return view('schedule');
});

Route::get('/admin/dashboard', 'RegistrationController@adminIndex');

Route::get('/payment/{id}', 'RegistrationController@payment');

Route::get('/admin/reservation', 'RegistrationController@reserve');

Route::post('/reserve/user', 'RegistrationController@store');

Route::get('/reject/reservation/{id}', 'RegistrationController@reject');