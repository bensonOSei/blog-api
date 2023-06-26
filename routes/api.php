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


Route::group(['namespace' => 'App\Http\Controllers'], function () {
    Route::apiResource('posts', 'PostController');
});

// Route for fallback if route not found
Route::fallback(fn () => response()->json(['message' => 'Not Found!'], 404));
