<?php

use App\Http\Controllers\StatusController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/status', [StatusController::class, 'index']);
Route::post('/status', [StatusController::class, 'store']);
