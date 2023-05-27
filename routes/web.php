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
    return view('welcome');
});

//group Home
Route::prefix('home')->group(function () {
   Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('home.index');
});

Route::prefix('restaurant')->group(function () {
    Route::get('/', [\App\Http\Controllers\RestaurantController::class, 'index'])->name('restaurant.index');

});

Route::prefix('dish')->group(function () {
    Route::get('/', [\App\Http\Controllers\DishController::class, 'index'])->name('dish.index');
});

Route::get('/booking', [\App\Http\Controllers\BookingController::class, 'index'])->name('booking.index');
