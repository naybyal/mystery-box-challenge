<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BoxController;
use App\Http\Controllers\GreetingController;

Route::get('/', [BoxController::class, 'showBoxes'])->name('home');
Route::get('/open-box/{boxId}', [BoxController::class, 'revealPrize'])->name('open-box');
// Route::get('/greet', [GreetingController::class, 'displayGreeting'])->name('greet');