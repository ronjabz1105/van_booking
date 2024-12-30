<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TripController;
use App\Http\Controllers\VanController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('booking',BookingController::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


   


});



Route::prefix('admin')->middleware('auth:admin')->group(function () {

   
    // Route::get('/driver', function () {
    //     return view('admin.driver.index');
    // })->name('admin.driver');

    Route::resource('driver',DriverController::class);

    Route::resource('van',VanController::class);
    Route::resource('trip',TripController::class);
  
});



require __DIR__.'/auth.php';

require __DIR__.'/admin-auth.php';
