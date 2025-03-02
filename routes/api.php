<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::resource('events', EventController::class);
// Route::resource('attendees', AttendeeController::class);
// Route::resource('categories', CategoryController::class);

// Route::get('/api/events', [EventController::class, 'index']);
// Route::get('/api/events/{id}', [EventController::class, 'show']);



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
