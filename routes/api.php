<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// routes/api.php
use App\Http\Controllers\EventController;

Route::get('/Events', [EventController::class, 'index']);
