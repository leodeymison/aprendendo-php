<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', [EventController::class, 'index']);
Route::get('/event-create', [EventController::class, 'create'])->middleware('auth');
Route::post('/event', [EventController::class, 'store']);
Route::get('/events', [EventController::class, 'events']);
Route::get('/event/{id}', [EventController::class, 'event']);
Route::post('/event-join/{id}', [EventController::class, 'eventJoin'])->middleware('auth');
Route::delete('/event-leave/{id}', [EventController::class, 'leaveEvent'])->middleware('auth');

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');
Route::delete('/event/{id}', [DashboardController::class, 'destroy'])->middleware('auth');
Route::get('/event-edit/{id}', [DashboardController::class, 'edit'])->middleware('auth');
Route::put('/event/update/{id}', [DashboardController::class, 'update'])->middleware('auth');
