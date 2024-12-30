<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReservasiController;


Route::get('/', function () {
    return view('home');  
})->name('home'); 

Route::get('/reservasi', [ReservasiController::class, 'create'])->name('reservasi.create');
Route::post('/reservasi', [ReservasiController::class, 'store'])->name('reservasi.store');
