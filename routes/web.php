<?php

use App\Http\Controllers\ChirpController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ChirpController::class, 'index']);
Route::post('/chirps', [ChirpController::class, 'store']);
Route::resource('chirps', ChirpController::class)
    ->only(['store', 'edit', 'update', 'destroy']);