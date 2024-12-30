<?php

use Illuminate\Support\Facades\Route; 
use App\Http\Controllers\ReservasiController;

Route::post('/reservasi', [ReservasiController::class, 'store']);


