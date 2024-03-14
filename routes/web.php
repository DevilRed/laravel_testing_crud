<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventsController;

Route::post('/events', [EventsController::class, 'store'])->name('events.store');
Route::get('/events', [EventsController::class, 'index'])->name('events.index');
