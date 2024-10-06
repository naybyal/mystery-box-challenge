<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BoxController;

Route::get('/', [BoxController::class, 'showBoxes'])->name('home');
Route::get('/open-box/{boxId}', [BoxController::class, 'revealPrize'])->name('open-box');
