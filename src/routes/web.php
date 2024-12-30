<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReservasiController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [ReservasiController::class, 'index'])->name('reservations.index');
