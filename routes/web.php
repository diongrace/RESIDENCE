<?php

use App\Http\Controllers\ReservationController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/gestions/reservation', function () {
    return view('/gestions.reservation');
});

Route::get('/gestions/reservationlist', function () {
    return view('/gestions.reservationlist');
});

Route::get('/gestions/edit', function () {
    return view('/gestions.edit');
});

Route::get('/gestions/show', function () {
    return view('/gestions.show');
});

Route::get('/gestions/edit', function () {
    return view('/gestions.edit');
});

Route::get('/gestions/reservationlist', [ReservationController::class, 'index'])->name('reservations.index');
Route::post('/store', [ReservationController::class, 'store'])->name('/gestions/reservation');
Route::get('/gestions/{id}show', [ReservationController::class, 'show'])->name('gestions.show');
Route::get('/gestions/{id}/edit', [ReservationController::class, 'edit'])->name('gestions.edit');
Route::put('/gestions/reservation/{id}', [ReservationController::class, 'update'])->name('gestions.update');
Route::delete('/gestions/reservation/{id}', [ReservationController::class, 'destroy'])->name('reservation.destroy');