<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

//Site Pages

Route::view('/', 'site.home'); //done
Route::view('/best-cars-electric', 'site.best-cars-electric'); //done
Route::view('/best-cars-trucks', 'site.best-cars-trucks'); //done
Route::view('/car-reviews', 'site.car-reviews'); //done
Route::view('/compare', 'site.compare');//done
Route::view('/deals', 'site.deals');//done
Route::view('/electric-incentive', 'site.electric-incentive'); //done
Route::view('/electric', 'site.electric');//done
Route::view('/fuel-electric-deals', 'site.fuel-electric-deals');//done
Route::view('/new-car-listings', 'site.new-car-listings'); //done
Route::view('/shop-new', 'site.shop-new'); //done
Route::view('/used-car-listings', 'site.used-car-listings'); //done
Route::view('/used-cars-for-sale', 'site.used-cars-for-sale'); //done
Route::view('/car-affordability-calculator', 'site.car-affordability-calculator'); //done
Route::view('/car-loan-calculator', 'site.car-loan-calculator');//done
Route::view('/lease-a-car', 'site.lease-a-car'); //done
Route::view('/research', 'site.research'); //done
Route::view('/sell-your-car', 'site.sell-your-car'); //done
Route::view('/plus', 'site.plus');
Route::view('/faq', 'site.faq'); //done
Route::view('/contact-us', 'site.contact-us'); //done
Route::view('/partner', 'site.partner'); //done
Route::view('/oem', 'site.oem'); //done
Route::view('/about-us', 'site.about-us'); //done
Route::view('/careers', 'site.careers'); //done

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
