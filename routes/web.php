<?php

use Illuminate\Support\Facades\Route;


Route::get('/', [\App\Http\Controllers\MainController::class, 'index']);

Route::get('/php', [\App\Http\Controllers\MainController::class, 'php']);

Route::get('/test', [\App\Http\Controllers\MainController::class, 'test']);

