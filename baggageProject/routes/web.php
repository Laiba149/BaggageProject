<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BaggageController;



Route::get('/', [BaggageController::class, 'show'])->name('home');
