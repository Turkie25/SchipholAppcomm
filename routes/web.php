<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
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

    Route::get('/events', function () {
        return Inertia::render('events/events'); // Assuming you have a view at resources/js/Pages/Events/Index.vue
    })->name('events');
});




use App\Http\Controllers\EventController;

// In routes/web.php or routes/api.php
Route::get('/events/search', [EventSearchController::class, 'search']);

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard/events/create', [EventController::class, 'create'])->name('dashboard.events.create');
    Route::post('/dashboard/events', [EventController::class, 'store'])->name('dashboard.events.store');
});

