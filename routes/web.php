<?php

use App\Http\Controllers\ReservationController;
use App\Http\Controllers\LogementController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\FormsController;
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

Route::get('/gestions/update', function () {
    return view('/gestions.update');
});

Route::get('/payment/process', function () {
    return view('/payment/process');
});

Route::get('/utilisateur/forms', function () {
    return view('/utilisateur/forms');
});

Route::get('/accueil', function () {
    return view('/accueil');
});

Route::get('/logement', function () {
    return view('/logement');
});

Route::get('/payment/index', function () {
    return view('/payment/index');
});

Route::get('/payment/show', function () {
    return view('/payment/show');
});

Route::get('/payment/edit', function () {
    return view('/payment/edit');
});

// Route pour afficher reservation
Route::get('/gestions/reservationlist', [ReservationController::class, 'index'])->name('reservations.index');
Route::post('/store', [ReservationController::class, 'store'])->name('/gestions/reservation');
Route::get('/gestions/{id}show', [ReservationController::class, 'show'])->name('gestions.show');
Route::get('/gestions/{id}/edit', [ReservationController::class, 'edit'])->name('gestions.edit');
Route::put('/gestions/update/{id}', [ReservationController::class, 'update'])->name('gestions.update');
Route::delete('/gestions/reservation/{id}', [ReservationController::class, 'destroy'])->name('reservation.destroy');

// Route pour afficher user
Route::get('/utilisateur/forms', [FormsController::class, 'create'])->name('utilisateur.forms');
Route::post('/utilisateur/forms', [FormsController::class, 'store1'])->name('utilisateur.store');

// Route pour afficher logement

Route::get('/logement', [LogementController::class, 'create1'])->name('logement');
Route::post('/logements', [LogementController::class, 'store2'])->name('logements.store');

// Route pour afficher paiement
Route::get('/payment', [PaymentController::class, 'showPaymentForm'])->name('payment.form');
Route::post('/payment/process', [PaymentController::class, 'store3'])->name('payment.store3');
Route::get('/payment', [PaymentController::class, 'index'])->name('payment.index');
Route::get('/payment/{id}', [PaymentController::class, 'show'])->name('payment.show');
Route::get('/payment/{id}/edit', [PaymentController::class, 'edit'])->name('payment.edit');
Route::put('/payment/{id}', [PaymentController::class, 'update'])->name('payment.update');
Route::delete('/payment/{id}', [PaymentController::class, 'destroy'])->name('payment.destroy');

