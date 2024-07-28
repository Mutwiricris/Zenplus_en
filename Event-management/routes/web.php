<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/events', function () {
    return view('allEvents');
    });


    // Route::get('/events/{id}', function ($id) {
    //     return view('event', ['id' => $id]);
    //     });

    Route::get('/events/1', function () {
        return view('eventDetails');
        });
    
 Route::get('/events/1/book', function(){
    return view('bookingPage');
 });

 Route::get('/events/1/confirmBooking', function(){
    return view('checkOut');
    });




Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
