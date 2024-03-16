<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventsController;

Route::post('/events', [EventsController::class, 'store'])->name('events.store');
Route::get('/events', [EventsController::class, 'index'])->name('events.index');
Route::put('/events/{event}', [EventsController::class, 'update'])->name('events.update');
Route::delete('/events/{event}', [EventsController::class, 'destroy'])->name('events.delete');