<?php

use App\Http\Controllers\EventSearchController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use Inertia\Inertia;


Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');


});

Route::get('/events', [EventController::class, 'index'])->name('events');

// In routes/web.php or routes/api.php
Route::get('/Events/search', [EventSearchController::class, 'search']);

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard/Events/create', [EventController::class, 'create'])->name('dashboard.Events.create');
    Route::post('/dashboard/Events', [EventController::class, 'store'])->name('dashboard.Events.store');
});

