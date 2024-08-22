<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

//Site Pages

Route::view('/', 'site.home');
Route::view('/best-cars-electric', 'site.best-cars-electric');
Route::view('/best-cars-trucks', 'site.best-cars-trucks');
Route::view('/car-reviews', 'site.car-reviews');
Route::view('/compare', 'site.compare');
Route::view('/deals', 'site.deals');
Route::view('/electric-incentive', 'site.electric-incentive');
Route::view('/electric', 'site.electric');
Route::view('/fuel-electric-deals', 'site.fuel-electric-deals');
Route::view('/new-car-listings', 'site.new-car-listings');
Route::view('/shop-new', 'site.shop-new');
Route::view('/used-car-listings', 'site.used-car-listings');
Route::view('/used-cars-for-sale', 'site.used-cars-for-sale');
Route::view('/car-affordability-calculator', 'site.car-affordability-calculator');
Route::view('/car-loan-calculator', 'site.car-loan-calculator');
Route::view('/lease-a-car', 'site.lease-a-car');
Route::view('/research', 'site.research');
Route::view('/sell-your-car', 'site.sell-your-car');
Route::view('/plus', 'site.plus');
Route::view('/faq', 'site.faq');
Route::view('/contact-us', 'site.contact-us');
Route::view('/partner', 'site.partner');
Route::view('/oem', 'site.oem');
Route::view('/about-us', 'site.about-us');
Route::view('/careers', 'site.careers');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
