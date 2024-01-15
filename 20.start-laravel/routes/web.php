<?php

use App\Http\Controllers\EventController;
use Illuminate\Support\Facades\Route;

Route::get('/', [EventController::class, 'index']);
Route::get('/event-create', [EventController::class, 'create']);
Route::post('/event', [EventController::class, 'store']);
Route::get('/events', [EventController::class, 'events']);
Route::get('/event/{id}', [EventController::class, 'event']);
