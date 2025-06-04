<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CodeController;


Route::get('/',[CodeController::class, 'index']);
Route::post('/generate', [CodeController::class, 'generate'])->name('generate.code');
// Route::get('/', [CodeController::class, 'index']);
// Route::post('/generate', [CodeController::class, 'generate'])->name('generate.code');
