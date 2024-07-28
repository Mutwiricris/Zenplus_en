<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EventController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/en', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Route::get('/events', function () {
//     return view('allEvents');
// });

Route::get('/events/1', function () {
    return view('eventDetails');
});

Route::get('/events/1/book', function() {
    return view('bookingPage');
});

Route::get('/events/1/confirmBooking', function() {
    return view('checkOut');
});

// Admin routes
// Route::middleware(['auth'])->group(function () {
    // Route::get('/Dashboard', function () {
    // });

    Route::get('/Event', [EventController::class, 'index'])->name('events.index');
    Route::get('/Event/new', [EventController::class, 'create'])->name('events.create');
    Route::post('/Event/new', [EventController::class, 'store'])->name('events.create');
    Route::get('/Event/{id}', [EventController::class, 'show'])->name('events.view');
    Route::get('/Dashboard', [EventController::class, 'indexes'])->name('events.dash');
    Route::get('/events', [CustomerController::class, 'index'])->name('events.shows');
require __DIR__.'/auth.php';