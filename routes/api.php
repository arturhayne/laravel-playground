<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppointmentsController;

Route::get('/appointments', [AppointmentsController::class, 'index'])->name('appointments.index');
Route::post('/appointments', [AppointmentsController::class, 'store'])->name('appointments.store');
