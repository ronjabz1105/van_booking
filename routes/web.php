<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TripController;
use App\Http\Controllers\VanController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });



// Route::get('/trips', function () {
//     return view('booking.trips');
// });


/// Booking URL
Route::get('/trips', [BookingController::class, 'all_trips']);




// Route::get('/addbooking', [BookingController::class, 'addbooking']);

    

    




Route::middleware('auth')->group(function () {
    Route::get('/', function () {
        return view('booking.index');
    });
    
    
Route::get('/addbooking/{id}', [BookingController::class, 'addbooking']);

Route::post('/addbooking', [BookingController::class, 'store']);

Route::get('/mybookings', [BookingController::class, 'mybooking']);

Route::get('/editbooking/{id}', [BookingController::class, 'editbooking']);

Route::get('/cancelbooking/{id}', [BookingController::class, 'cancelbooking']);

Route::post('/update/{id}', [BookingController::class, 'update']);




});
// Route::resource('booking',BookingController::class);



Route::get('/dashboard', function () {
    return view('booking.index');
})->middleware(['auth', 'verified'])->name('dashboard');


// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

// });



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


   


});



Route::prefix('admin')->middleware('auth:admin')->group(function () {

   

    Route::resource('driver',DriverController::class);

    Route::resource('van',VanController::class);
    Route::resource('trip',TripController::class);
  
});



require __DIR__.'/auth.php';

require __DIR__.'/admin-auth.php';
